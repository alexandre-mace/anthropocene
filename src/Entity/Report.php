<?php

namespace App\Entity;

use App\Repository\ReportRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ReportRepository::class)
 */
class Report
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $author;

    /**
     * @ORM\Column(type="text")
     */
    private $title;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $fullReportLink;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $lightReportLink;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getAuthor(): ?string
    {
        return $this->author;
    }

    public function setAuthor(string $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    public function getFullReportLink(): ?string
    {
        return $this->fullReportLink;
    }

    public function setFullReportLink(?string $fullReportLink): self
    {
        $this->fullReportLink = $fullReportLink;

        return $this;
    }

    public function getLightReportLink(): ?string
    {
        return $this->lightReportLink;
    }

    public function setLightReportLink(?string $lightReportLink): self
    {
        $this->lightReportLink = $lightReportLink;

        return $this;
    }
}
