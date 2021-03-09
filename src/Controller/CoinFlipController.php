<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CoinFlipController extends AbstractController
{
    #[Route('/coin_flip', name: 'coin_flip')]
    public function index(): Response
    {
        return $this->render('coin_flip/index.html.twig', []);
    }
}
