<?php

namespace App\Entity;

use App\Repository\ResponseMessageCandidatureRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ResponseMessageCandidatureRepository::class)
 */
class ResponseMessageCandidature
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotNull(message="ce champ ne peux pas etre null")
     */
    private $Contents;

    /**
     * @ORM\Column(type="boolean")
     */
    private $LogementActuel = false;

    /**
     * @ORM\Column(type="boolean")
     */
    private $LogementDesire = false;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Acquereur = false;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Credits = false;

    /**
     * @ORM\Column(type="boolean")
     */
    private $Motivation;

    /**
     * @ORM\OneToOne(targetEntity=Candidature::class, inversedBy="responseMessageCandidature", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $Candidature;

    /**
     * @ORM\OneToOne(targetEntity=CandidatureLight::class, inversedBy="responseMessageCandidature", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     */
    private $CandidatureLight;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $Author;

    public function __construct($PorteurProjet) {
    	$this->setAuthor($PorteurProjet);
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getContents(): ?string
    {
        return $this->Contents;
    }

    public function setContents(string $Contents): self
    {
        $this->Contents = $Contents;

        return $this;
    }

    public function getLogementActuel(): ?bool
    {
        return $this->LogementActuel;
    }

    public function setLogementActuel(bool $LogementActuel): self
    {
        $this->LogementActuel = $LogementActuel;

        return $this;
    }

    public function getLogementDesire(): ?bool
    {
        return $this->LogementDesire;
    }

    public function setLogementDesire(bool $LogementDesire): self
    {
        $this->LogementDesire = $LogementDesire;

        return $this;
    }

    public function getAcquereur(): ?bool
    {
        return $this->Acquereur;
    }

    public function setAcquereur(bool $Acquereur): self
    {
        $this->Acquereur = $Acquereur;

        return $this;
    }

    public function getCredits(): ?bool
    {
        return $this->Credits;
    }

    public function setCredits(bool $Credits): self
    {
        $this->Credits = $Credits;

        return $this;
    }

    public function getMotivation(): ?bool
    {
        return $this->Motivation;
    }

    public function setMotivation(bool $Motivation): self
    {
        $this->Motivation = $Motivation;

        return $this;
    }

    public function getCandidature(): ?Candidature
    {
        return $this->Candidature;
    }

    public function setCandidature(?Candidature $Candidature): self
    {
        $this->Candidature = $Candidature;

        return $this;
    }

    public function getCandidatureLight(): ?CandidatureLight
    {
        return $this->CandidatureLight;
    }

    public function setCandidatureLight(?CandidatureLight $CandidatureLight): self
    {
        $this->CandidatureLight = $CandidatureLight;

        return $this;
    }

    public function getAuthor(): ?User
    {
        return $this->Author;
    }

    public function setAuthor(?User $Author): self
    {
        $this->Author = $Author;

        return $this;
    }
}
