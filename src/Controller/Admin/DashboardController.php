<?php

namespace App\Controller\Admin;

use App\Entity\Message;
use App\Entity\Report;
use App\Entity\Ressource;
use App\Repository\MessageRepository;
use EasyCorp\Bundle\EasyAdminBundle\Config\Dashboard;
use EasyCorp\Bundle\EasyAdminBundle\Config\MenuItem;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractDashboardController;
use EasyCorp\Bundle\EasyAdminBundle\Router\AdminUrlGenerator;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractDashboardController
{
    private $messageRepository;

    public function __construct(MessageRepository $messageRepository)
    {
        $this->messageRepository = $messageRepository;
    }

    /**
     * @Route("/admin", name="admin")
     */
    public function index(): Response
    {
        $routeBuilder = $this->get(AdminUrlGenerator::class);

        return $this->redirect($routeBuilder->setController(RessourceCrudController::class)->generateUrl());
    }

    public function configureDashboard(): Dashboard
    {
        return Dashboard::new()
            ->setTitle('Decroissance');
    }

    public function configureMenuItems(): iterable
    {
        $unseenMessages = $this->messageRepository->findBy(['seen' => false]);

        yield MenuItem::linktoDashboard('Dashboard', 'fa fa-home');
        yield MenuItem::linkToCrud('Ressources', 'fa fa-file-text', Ressource::class);
        yield MenuItem::linkToCrud('Rapports', 'fa fa-file-text', Report::class);
        yield MenuItem::linktoRoute('Export ressources', 'fa fa-download', 'admin_export_ressources');
        yield MenuItem::linktoRoute('Export rapports', 'fa fa-download', 'admin_export_reports');
        yield MenuItem::linkToCrud('Messages' . (count($unseenMessages) !== 0 ? ' (' .count($unseenMessages) . ')': ''), 'fa fa-inbox', Message::class);
    }
}
