<?php

namespace App\Controller\Api;

use App\Entity\City;
use App\Entity\Location;
use App\Repository\LocationRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/api')]
class EventApi extends AbstractController
{
    #[Route('/location/{id}', name: 'api_city_list', methods: 'GET')]
    public function findAll(LocationRepository $locationRepository, City $city): JsonResponse
    {
        $locs = $locationRepository->findBy([
            'city' => $city,
        ]);
        $data = [$city->getZipCode(), $locs];

        return $this->json($data, Response::HTTP_OK, ['Content-Type' => 'application/json'], ['groups' => 'location']);
    }

    #[Route('/detail/{id}', name: 'api_location_detail', methods: 'GET')]
    public function findOne(Location $location): JsonResponse
    {
        return $this->json($location, Response::HTTP_OK, ['Content-Type' => 'application/json'], ['groups' => 'location']);
    }
}
