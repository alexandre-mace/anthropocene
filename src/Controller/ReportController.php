<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReportController extends AbstractController
{
    #[Route('/report', name: 'report')]
    public function index(): Response
    {
        $reports = [
            [
                'author' => 'GIEC',
                'title'  => 'Cinquième rapport d’évaluation du GIEC (AR5), 2013-14',
                'links'   => [
                    [
                        'link' => 'https://www.ipcc.ch/site/assets/uploads/2018/02/SYR_AR5_FINAL_full_fr.pdf',
                        'title' => 'Changements climatiques 2014 : rapport de synthèse'
                    ]
                ],
            ],
            [
                'author' => 'GIEC',
                'title'  => 'Rapport spécial sur les océans et la cryosphère dans un monde dont le climat change (SROCC), 2019',
                'links'   => [
                    [
                        'link' => 'https://www.ipcc.ch/site/assets/uploads/sites/3/2020/07/SROCC_SPM_fr.pdf',
                        'title' => 'Lien du rapport'
                    ],
                ],
            ],
            [
                'author' => 'GIEC',
                'title'  => 'Rapport spécial sur le changement climatique et les terres émergées (SRCCL), 2019',
                'links'   => [
                    [
                        'link' => 'https://www.ipcc.ch/site/assets/uploads/sites/4/2020/06/SRCCL_SPM_fr.pdf',
                        'title' => 'Lien du rapport'
                    ],
                ],
            ],
            [
                'author' => 'GIEC',
                'title'  => "Rapport spécial sur les conséquences d'un réchauffement planétaire de 1,5 °C (SR15), 2018",
                'links'   => [
                    [
                        'link' => 'https://www.ipcc.ch/site/assets/uploads/sites/2/2019/09/IPCC-Special-Report-1.5-SPM_fr.pdf',
                        'title' => "Lien du rapport"
                    ],
                ],
            ],
            [
                'author' => 'Negawatt',
                'title'  => "L’essentiel du scénario négaWatt 2017-2050",
                'links'   => [
                    [
                        'link' => 'https://negawatt.org/IMG/pdf/scenario-negawatt_2017-2050_essentiel-4pages.pdf',
                        'title' => "Lien du rapport"
                    ],
                ],
            ],
            [
                'author' => 'The Shift Project',
                'title'  => "SYNTHÈSE DE LA « VISION GLOBALE » DE SON PLAN DE TRANSFORMATION (PTEF)",
                'links'   => [
                    [
                        'link' => 'https://negawatt.org/IMG/pdf/scenario-negawatt_2017-2050_essentiel-4pages.pdf',
                        'title' => "Lien du rapport"
                    ],
                ],
            ],
            [
                'author' => 'The Shift Project',
                'title'  => "DÉPLOYER LA SOBRIÉTÉ NUMÉRIQUE : LE NOUVEAU RAPPORT DU SHIFT SUR L’IMPACT ENVIRONNEMENTAL DU NUMÉRIQUE",
                'links'   => [
                    [
                        'link' => 'https://theshiftproject.org/wp-content/uploads/2020/10/Deployer-la-sobriete-numerique_Rapport-complet_ShiftProject.pdf',
                        'title' => "Lien du rapport"
                    ],
                ],
            ],
        ];


        return $this->render('report/index.html.twig', [
            'reports' => $reports,
        ]);
    }
}
