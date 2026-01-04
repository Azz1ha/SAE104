<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

final class AboutherController extends AbstractController
{
    #[Route('/abouther', name: 'app_abouther')]
    public function index(): Response
    {
        return $this->render('abouther/index.html.twig', [
            'controller_name' => 'AboutherController',
        ]);
    }
}
