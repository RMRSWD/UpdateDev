<?php

namespace App\Entity;

use App\Repository\SemestreRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;
use phpDocumentor\Reflection\Types\Collection;

#[ORM\Entity(repositoryClass: SemestreRepository::class)]
class Semestre
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Formation = null;

    #[ORM\Column(type: Types::TEXT, nullable: true)]
    private ?string $Semestre = null;
    #[ORM\ManyToOne(targetEntity: Cours::class,mappedBy:"semestre")]
    private Collection $Cours;

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getCours():string
    {
        return $this->Cours;
    }

    /**
     * @param mixed $Cours
     */
    public function setCours($Cours): void
    {
        $this->Cours = $Cours;
    }

    public function getFormation(): ?string
    {
        return $this->Formation;
    }

    public function setFormation(?string $Formation): static
    {
        $this->Formation = $Formation;

        return $this;
    }

    public function getSemestre(): ?string
    {
        return $this->Semestre;
    }

    public function setSemestre(?string $Semestre): static
    {
        $this->Semestre = $Semestre;

        return $this;
    }
}
