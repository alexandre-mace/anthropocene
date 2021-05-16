<?php


namespace App\Controller\Admin;

use App\Repository\ReportRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Security("is_granted('ROLE_ADMIN')")
 */
class ExportReportsController extends AbstractController
{
    /**
     * @Route("/admin/export-reports", name="admin_export_reports")
     */
    public function index(ReportRepository $reportRepository)
    {
        $reports = $reportRepository->findBy([], ['id' => 'DESC']);


        $fp = fopen('php://temp', 'w');

        fputcsv($fp, ['id', 'author', 'title', 'fullReportlink', 'lightReportlink']);
        foreach ($reports as $report) {
            fputcsv($fp, [
                $report->getId(),
                $report->getAuthor(),
                $report->getTitle(),
                $report->getFullReportLink(),
                $report->getLightReportLink(),
            ]);
        }

        rewind($fp);
        $response = new Response(stream_get_contents($fp));
        fclose($fp);

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set(
            'Content-Disposition',
            "attachment; filename=reports" . (new \DateTime())->format('Ymd') .".csv"
        );

        return $response;
    }
}