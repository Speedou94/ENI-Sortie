<?php

namespace App\Command;

use App\Entity\User;
use App\Repository\CampusRepository;
use App\Repository\UserRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Style\SymfonyStyle;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Serializer\Encoder\CsvEncoder;
use Symfony\Component\Serializer\Normalizer\ObjectNormalizer;
use Symfony\Component\Serializer\Serializer;

class ImportUsersCSV extends Command
{
    private EntityManagerInterface $entityManager;

    private string $dataDirectory;
    private SymfonyStyle $io;

    private UserRepository $userRepository;
    private CampusRepository $campusRepository;

    private UserPasswordHasherInterface $userPasswordHasherInterface;

    public function __construct(EntityManagerInterface $entityManager, string $dataDirectory,
                                UserRepository $userRepository, CampusRepository $campusRepository,
                                UserPasswordHasherInterface $userPasswordHasherInterface)
    {
        parent::__construct();
        $this->dataDirectory = $dataDirectory;
        $this->entityManager = $entityManager;
        $this->userRepository = $userRepository;
        $this->campusRepository = $campusRepository;
        $this->userPasswordHasherInterface = $userPasswordHasherInterface;
    }

    protected static $defaultName = 'app:create-user';
    protected static $defaultDescription = 'Création d\'utilisateurs à partir d\'un fichier CSV.';

    protected function configure(): void
    {
        $this
            ->setDescription('Importer des données en provenance d\'un fichier csv');
    }

    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        $this->io = new SymfonyStyle($input, $output);
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $this->createUsers();

        return Command::SUCCESS;
    }

    private function getDataFromFile(): array
    {
        $file = $this->dataDirectory.'/user.csv';
        $fileExtension = pathinfo($file, PATHINFO_EXTENSION);

        $normalizers = [new ObjectNormalizer()];

        $encoders = [
            new CsvEncoder(),
        ];
        $serializer = new Serializer($normalizers, $encoders);
        $context = [CsvEncoder::DELIMITER_KEY => ','];

        $fileString = file_get_contents($file);

        return $serializer->decode($fileString, $fileExtension, $context);
    }

    private function createUsers(): void
    {
        $this->io->section('Création des utilisateurs depuis un fichier CSV');
        $userCreated = 0;

        foreach ($this->getDataFromFile() as $row) {
            if (array_key_exists('email', $row) && !empty($row['email'])) {
                $user = $this->userRepository->findOneBy([
                    'email' => $row['email'],
                ]);
                if (!$user) {
                    $user = new user();
                    $user->setCampus($this->campusRepository->findOneBy(['id' => $row['campus_id']]))
                        ->setEmail($row['email'])
                        ->setPassword($this->userPasswordHasherInterface->hashPassword($user, 'password'))
                        ->setLastName($row['last_name'])
                        ->setFirstName($row['first_name'])
                        ->setPseudo($row['pseudo'])
                        ->setPhoneNumber($row['phone_number'])
                        ->setIsActive(true)
                        ->setIsAdmin(true);

                    $this->entityManager->persist($user);
                    ++$userCreated;
                }
            }
        }

        $this->entityManager->flush();

        if ($userCreated > 1) {
            $string = "{$userCreated} utilisateurs créés en base de données.";
        } elseif (1 === $userCreated) {
            $string = 'Un utilisateur a été créé en base de données';
        } else {
            $string = 'aucun utilisateur créé';
        }

        $this->io->success($string);
    }
}
