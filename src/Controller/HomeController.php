<?php

namespace App\Controller;

use App\Entity\Visits;
use App\Repository\VisitsRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(
        VisitsRepository $visitsRepository,
        EntityManagerInterface $entityManager,
        SessionInterface $session
    ): Response
    {
        if (!$session->get('visit')) {
            $visit = $visitsRepository->findAll()[0] ?? new Visits();
            $visit->setTotal($visit->getTotal() + 1);
            $entityManager->persist($visit);
            $entityManager->flush();

            $session->set('visit', true);
        }

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
        ]);
    }
}
