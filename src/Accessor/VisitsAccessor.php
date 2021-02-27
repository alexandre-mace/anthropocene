<?php


namespace App\Accessor;


use App\Repository\VisitsRepository;

class VisitsAccessor
{
    private VisitsRepository $visitsRepository;

    public function __construct(VisitsRepository $visitsRepository)
    {
        $this->visitsRepository = $visitsRepository;
    }

    public function access(): \App\Entity\Visits
    {
        return $this->visitsRepository->findAll()[0];
    }
}