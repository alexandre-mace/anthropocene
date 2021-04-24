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
                'title'  => 'Changements climatiques 2014 2013-14',
                'links'   => [
                    [
                        'link' => 'https://www.ipcc.ch/site/assets/uploads/2018/02/SYR_AR5_FINAL_full_fr.pdf',
                        'title' => 'Synthèse'
                    ]
                ],
            ],
            [
                'author' => 'GIEC',
                'title'  => 'Rapport spécial sur les océans et la cryosphère dans un monde dont le climat change (SROCC), 2019',
                'links'   => [
                    [
                        'link' => 'https://www.ipcc.ch/site/assets/uploads/sites/3/2020/07/SROCC_SPM_fr.pdf',
                        'title' => 'Rapport'
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
                        'title' => "Rapport"
                    ],
                ],
            ],
            [
                'author' => 'Negawatt',
                'title'  => "L’essentiel du scénario négaWatt 2017-2050",
                'links'   => [
                    [
                        'link' => 'https://negawatt.org/IMG/pdf/scenario-negawatt_2017-2050_essentiel-4pages.pdf',
                        'title' => "Rapport"
                    ],
                ],
            ],
            [
                'author' => 'The Shift Project',
                'title'  => "SYNTHÈSE DE LA « VISION GLOBALE » DE SON PLAN DE TRANSFORMATION (PTEF)",
                'links'   => [
                    [
                        'link' => 'https://negawatt.org/IMG/pdf/scenario-negawatt_2017-2050_essentiel-4pages.pdf',
                        'title' => "Rapport"
                    ],
                ],
            ],
            [
                'author' => 'The Shift Project',
                'title'  => "DÉPLOYER LA SOBRIÉTÉ NUMÉRIQUE : LE RAPPORT DU SHIFT SUR L’IMPACT ENVIRONNEMENTAL DU NUMÉRIQUE",
                'links'   => [
                    [
                        'link' => 'https://theshiftproject.org/wp-content/uploads/2020/10/Deployer-la-sobriete-numerique_Rapport-complet_ShiftProject.pdf',
                        'title' => "Rapport"
                    ],
                ],
            ],
            [
                'author' => "Groupement d'ONG (voir liste dans le rapport)",
                'title'  => "Rapport sur la finance et les investissements fossiles",
                'links'   => [
                    [
                        'link' => 'https://www.ran.org/wp-content/uploads/2021/03/Banking-on-Climate-Chaos-2021.pdf',
                        'title' => "Rapport"
                    ],
                ],
            ],
            [
                'author' => "IPBES",
                'title'  => "Le rapport de l’évaluation mondiale de la BIODIVERSITÉ ET DES SERVICES ÉCOSYSTÉMIQUES",
                'links'   => [
                    [
                        'link' => 'https://s3.us-west-2.amazonaws.com/secure.notion-static.com/20d45af2-b0fe-4dfd-b03a-93cc1455047d/nse-5174133788729833268-MxbYZm1-8KnJgQp45wNagGMu1fnrOPoGTAYi9q4rxJU.pdf?X-Amz-Algorithm=AWS4-HMAC-SHA256&X-Amz-Credential=AKIAT73L2G45O3KS52Y5%2F20210424%2Fus-west-2%2Fs3%2Faws4_request&X-Amz-Date=20210424T030856Z&X-Amz-Expires=86400&X-Amz-Signature=efadb30ce191690b35ce3c42530c19e3fa736aaff31616f2deaea90e86cee246&X-Amz-SignedHeaders=host&response-content-disposition=filename%20%3D%22nse-5174133788729833268-MxbYZm1-8KnJgQp45wNagGMu1fnrOPoGTAYi9q4rxJU%253D.pdf%22',
                        'title' => "Synthèse"
                    ],
                ],
            ],
            [
                'author' => 'The Shift Project',
                'title'  => "Pouvoir voler en 2050 ? Quelle aviation dans un monde contraint",
                'links'   => [
                    [
                        'link' => 'https://theshiftproject.org/wp-content/uploads/2021/03/Pouvoir-voler-en-2050_ShiftProject_Rapport-2021.pdf',
                        'title' => "Rapport"
                    ],
                    [
                        'link' => 'https://theshiftproject.org/wp-content/uploads/2021/03/Pouvoir-voler-en-2050_Shift-Project_Synthese.pdf',
                        'title' => "Synthèse"
                    ],
                ],
            ],

        ];


        return $this->render('report/index.html.twig', [
            'reports' => $reports,
        ]);
    }
}
