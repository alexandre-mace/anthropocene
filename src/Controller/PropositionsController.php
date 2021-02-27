<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class PropositionsController extends AbstractController
{
    #[Route('/propositions', name: 'propositions')]
    public function index(): Response
    {
        return $this->render('propositions/index.html.twig', [
            'controller_name' => 'PropositionsController',
        ]);
    }
}
