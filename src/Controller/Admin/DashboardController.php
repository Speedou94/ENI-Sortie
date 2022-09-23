<?php

namespace App\Controller\Admin;

use App\Entity\Campus;
use App\Entity\City;
use App\Entity\Event;
use App\Entity\User;
use App\Repository\CampusRepository;
use App\Repository\CityRepository;
use App\Repository\EventRepository;
use App\Repository\LocationRepository;
use App\Repository\UserRepository;
use App\Service\ChartService;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    public function __construct(
        private ChartService $chartService,
        private UserRepository $userRepository,
        private CampusRepository $campusRepository,
        private EventRepository $eventRepository,
        private CityRepository $cityRepository,
        private LocationRepository $locationRepository,
    ) {
    }

    #[Route('/admin', name: 'admin')]
    public function index(): Response
    {
        /* $url = $this->adminUrlGenerator
             ->setController(UserCrudController::class)
             ->generateUrl();*/
        $totalUser = $this->userRepository->countAllUser();
        $totalCampus = $this->campusRepository->countAllCampus();
        $totalEvents = $this->eventRepository->countAllEvent();
        $totalCity = $this->cityRepository->countAllCity();
        $totalLocation = $this->locationRepository->countAllLocation();
        $data = [$totalUser[0]['value'], $totalCampus[0]['value'], $totalCity[0]['value'], $totalEvents[0]['value'], $totalLocation[0]['value']];
        $labels = ['Utilisateurs', 'Campus', 'Villes', 'Sorties', 'Lieux'];
        $chart = $this->chartService->polarAreaChart($data, $labels);

        return $this->render('admin/dashboard.html.twig', [
                'chart' => $chart,
            ]
        );
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('DashBoard ENI-Sortie')
            ->setTitle('<h2 class="mt-3 fw-bold text-white text-center">ENI-Sortie</h2 >')
            ->renderContentMaximized();
    }

    public function configureMenuItems(): iterable
    {
        yield MenuItem::linkToCrud(
            'Utilisateurs',
            'fa fa - users',
            User::class
        );
        yield MenuItem::linkToCrud(
            'Campus',
            'fa fa - school',
            Campus::class
        );
        yield MenuItem::linkToCrud(
            'Villes',
            'fa fa - city',
            City::class
        );
        yield MenuItem::linkToCrud(
            'Sorties',
            'fa fa - calendar - days',
            Event::class
        );
        yield MenuItem::linkToUrl(
            'Retour au site',
            'fa fa - home',
            '/event'
        );
    }
}
