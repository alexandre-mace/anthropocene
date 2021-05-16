<?php

namespace App\Controller;

use App\Repository\ReportRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class ReportController extends AbstractController
{
    #[Route('/report', name: 'report')]
    public function index(ReportRepository $reportRepository): Response
    {
        $reports = $reportRepository->findBy([], ['id' => 'DESC']);

        return $this->render('report/index.html.twig', [
            'reports' => $reports,
        ]);
    }
}
