<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class OrganismsController extends AbstractController
{
    #[Route('/organisms', name: 'organisms')]
    public function index(): Response
    {
        $organisms = [
            [
                'name' => 'GIEC',
                'link'   => 'https://www.ipcc.ch/languages-2/francais/',
                'description' => '"Le Groupe d’experts intergouvernemental sur l’évolution du climat (GIEC) a été créé en 1988 en vue de fournir des évaluations détaillées de l’état des connaissances scientifiques, techniques et socio-économiques sur les changements climatiques, leurs causes, leurs répercussions potentielles et les stratégies de parade."'
            ],
            [
                'name' => 'Negawatt',
                'link'   => 'https://negawatt.org/',
                'description' => "Fondée en France en 2001, l'association négaWatt promeut et développe le concept et la pratique négawatt dans la société française. L'association souhaite ainsi contribuer à une moindre dépendance aux énergies fossiles et nucléaires, pour diminuer les impacts négatifs de l'économie humaine sur la biosphère et le climat, et permettre puis préserver un partage équitable des ressources naturelles, à la solidarité et la paix par le développement harmonieux des territoires, sans perte de qualité de vie et tout en répondant à tous les besoins humains et sociaux."
            ],
            [
                'name' => 'The Shift Project',
                'link'   => 'https://theshiftproject.org/',
                'description' => '"Le Shift est géré au quotidien par une équipe salariée d’une dizaine de personnes dont Matthieu Auzanneau est le directeur. Le président Jean-Marc Jancovici et le Bureau supervisent les activités tandis que des chefs de projet pilotent les groupes de travail. Le think tank bénéficie du soutien de bénévoles qui ont constitué une association autonome : Les Shifters."'
            ],
        ];

        return $this->render('organisms/index.html.twig', [
            'organisms' => $organisms,
        ]);
    }
}
