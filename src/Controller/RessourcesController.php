<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class RessourcesController extends AbstractController
{
    #[Route('/ressources', name: 'ressources')]
    public function index(): Response
    {
        $ressources = [
            [
                'author' => 'Thinkerview / Gael Giraud',
                'title'  => 'Interview',
                'link'   => 'https://www.youtube.com/watch?v=2oFARgqG0NA',
            ],            [
                'author' => 'Jean-Marc Jancovici',
                'title'  => 'Cours énergie',
                'link'   => 'https://www.youtube.com/watch?v=xgy0rW0oaFI',
            ],
            [
                'author' => 'Bon pote',
                'title'  => 'Décroissance et préjugés',
                'link'   => "https://bonpote.com/decroissance-et-prejuges/#:~:text=La%20d%C3%A9croissance%20est%20un%20projet,la%20consommation%20d'%C3%A9nergie%20diminue.",
            ],
        ];

        return $this->render('ressources/index.html.twig', [
            'ressources' => $ressources,
        ]);
    }
}
