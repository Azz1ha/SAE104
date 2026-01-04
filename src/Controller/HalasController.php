<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class HalasController extends AbstractController
{
    #[Route('/halas', name: 'app_halas')]
    public function index(): Response
    {
        return $this->render('halas/index.html.twig', [
            'controller_name' => 'HalasController',
        ]);
    }
}
