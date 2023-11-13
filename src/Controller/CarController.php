<?php

namespace App\Controller;

use App\Repository\CarRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CarController extends AbstractController
{
    #[Route('/cars', name: 'app_cars', methods: ['GET'])]
    public function list(CarRepository $repo): Response
    {
        return $this->render('car/index.html.twig', [
            'controller_name' => 'CarController',
            'cars' => $repo->findAll()
        ]);
    }
}
