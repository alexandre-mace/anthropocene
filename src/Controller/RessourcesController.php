<?php

namespace App\Controller;

use App\Repository\RessourceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RessourcesController extends AbstractController
{
    #[Route('/ressources', name: 'ressources')]
    public function index(RessourceRepository $ressourceRepository): Response
    {
        $ressources = $ressourceRepository->findAll();

        return $this->render('ressources/index.html.twig', [
            'ressources' => $ressources,
        ]);
    }
}
