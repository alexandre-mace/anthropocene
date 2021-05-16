<?php


namespace App\Controller\Admin;

use App\Repository\RessourceRepository;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Security("is_granted('ROLE_ADMIN')")
 */
class ExportRessourcesController extends AbstractController
{
    /**
     * @Route("/admin/export-ressources", name="admin_export_ressources")
     */
    public function index(RessourceRepository $ressourceRepository)
    {
        $ressources = $ressourceRepository->findBy([], ['id' => 'DESC']);


        $fp = fopen('php://temp', 'w');

        fputcsv($fp, ['id', 'author', 'title', 'link', 'type', 'imageLink', 'themes']);
        foreach ($ressources as $ressource) {
            fputcsv($fp, [
                $ressource->getId(),
                $ressource->getAuthor(),
                $ressource->getTitle(),
                $ressource->getLink(),
                $ressource->getType(),
                $ressource->getImageLink(),
                is_array($ressource->getThemes()) ? implode(' ', $ressource->getThemes()) : '',
            ]);
        }

        rewind($fp);
        $response = new Response(stream_get_contents($fp));
        fclose($fp);

        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set(
            'Content-Disposition',
            "attachment; filename=ressources" . (new \DateTime())->format('Ymd') .".csv"
        );
        return $response;
    }
}