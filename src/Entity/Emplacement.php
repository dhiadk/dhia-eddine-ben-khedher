<?php

namespace App\Entity;

use App\Repository\EmplacementRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EmplacementRepository::class)
 */
class Emplacement
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $nom;

    /**
     * @ORM\OneToOne(targetEntity=voiture::class, inversedBy="emplacement", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $idvoiture;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getIdvoiture(): ?voiture
    {
        return $this->idvoiture;
    }

    public function setIdvoiture(voiture $idvoiture): self
    {
        $this->idvoiture = $idvoiture;

        return $this;
    }
}
