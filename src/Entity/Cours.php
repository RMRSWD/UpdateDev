<?php

namespace App\Entity;

use App\Repository\CoursRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CoursRepository::class)]
class Cours
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(targetEntity: Semestre::class, inversedBy: "cours")]
    private $Semestre ;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Nom = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Description = null;

    #[ORM\Column(nullable: true)]
    private ?int $Etcs = null;

    #[ORM\Column(nullable: true)]
    private ?int $NombreHeureTD = null;

    #[ORM\Column(nullable: true)]
    private ?int $NombreHeureTP = null;

    #[ORM\Column(nullable: true)]
    private ?int $CM = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSemestre()
    {
        return $this->Semestre;
    }

    public function setSemestre(?string $Semestre): static
    {
        $this->Semestre = $Semestre;

        return $this;
    }

    public function getNom(): ?string
    {
        return $this->Nom;
    }

    public function setNom(?string $Nom): static
    {
        $this->Nom = $Nom;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(?string $Description): static
    {
        $this->Description = $Description;

        return $this;
    }

    public function getEtcs(): ?int
    {
        return $this->Etcs;
    }

    public function setEtcs(?int $Etcs): static
    {
        $this->Etcs = $Etcs;

        return $this;
    }

    public function getNombreHeureTD(): ?int
    {
        return $this->NombreHeureTD;
    }

    public function setNombreHeureTD(?int $NombreHeureTD): static
    {
        $this->NombreHeureTD = $NombreHeureTD;

        return $this;
    }

    public function getNombreHeureTP(): ?int
    {
        return $this->NombreHeureTP;
    }

    public function setNombreHeureTP(?int $NombreHeureTP): static
    {
        $this->NombreHeureTP = $NombreHeureTP;

        return $this;
    }

    public function getCM(): ?int
    {
        return $this->CM;
    }

    public function setCM(?int $CM): static
    {
        $this->CM = $CM;

        return $this;
    }
}
