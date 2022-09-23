<?php

namespace App\Controller\Admin;

use App\Entity\User;
use EasyCorp\Bundle\EasyAdminBundle\Config\Action;
use EasyCorp\Bundle\EasyAdminBundle\Config\Actions;
use EasyCorp\Bundle\EasyAdminBundle\Config\Crud;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\AssociationField;
use EasyCorp\Bundle\EasyAdminBundle\Field\BooleanField;
use EasyCorp\Bundle\EasyAdminBundle\Field\EmailField;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;

class UserCrudController extends AbstractCrudController
{
    public const ACTION_UPLOAD_CSV = 'Upload CSV';

    public static function getEntityFqcn(): string
    {
        return User::class;
    }

    public function configureActions(Actions $actions): Actions
    {
        $uploadCsv = Action::new(self::ACTION_UPLOAD_CSV)
        ->linkToRoute('app_user_upload_csv');

        return $actions
            ->add(Crud::PAGE_NEW, $uploadCsv);
    }

    public function configureCrud(Crud $crud): Crud
    {
        return $crud
            ->setEntityLabelInPlural('Utilisateurs')->setEntityLabelInSingular('Utilisateur')->setPageTitle('index', 'Gestion des utilisateurs');
    }

    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')
                ->hideOnForm(),
            TextField::new('lastName', 'Nom'),
            TextField::new('firstName', 'Prénom'),
            TextField::new('pseudo', 'Pseudo'),
            TextField::new('plainPassword', 'password')
                ->setFormType(PasswordType::class)
                ->setRequired(Crud::PAGE_NEW === $pageName)
                ->onlyOnForms(),
            TextField::new('phoneNumber', 'Numéro de téléphone'),
            EmailField::new('email', 'email'),
            AssociationField::new('campus')
                ->setCrudController(CampusCrudController::class),
            BooleanField::new('isActive', 'Actif'),
            BooleanField::new('IsAdmin', 'admin')
                ->hideOnDetail(),
        ];
    }
}
