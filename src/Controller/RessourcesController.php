<?php

namespace App\Controller;

use App\Domain\Categories\Categories;
use App\Domain\Formats\Formats;
use App\Repository\RessourceRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RessourcesController extends AbstractController
{
    #[Route('/ressources', name: 'ressources')]
    public function index(RessourceRepository $ressourceRepository): Response
    {
        $ressources = $ressourceRepository->findBy([], ['id' => 'DESC']);

        return $this->render('ressources/index.html.twig', [
            'ressources' => $ressources,
            'formats'    => Formats::getAll(),
            'themes'     => Categories::getAll(),
        ]);
    }
}
