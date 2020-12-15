<?php

namespace App\Entity;

use App\Repository\AdPresentationProjetRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=AdPresentationProjetRepository::class)
 * @ORM\Table(name="ad_presentation_projet", indexes={@ORM\Index(columns={"ville"}, flags={"fulltext"})})
 */
class AdPresentationProjet
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $presentationOperation;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $pays;

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $codePostal;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $ville;

    /**
     * @ORM\Column(type="text")
     */
    private $adresse;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $presentationCommodites;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $presentationAmbitionsProjet;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPresentationOperation(): ?string
    {
        return $this->presentationOperation;
    }

    public function setPresentationOperation(string $presentationOperation): self
    {
        $this->presentationOperation = $presentationOperation;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getPresentationCommodites(): ?string
    {
        return $this->presentationCommodites;
    }

    public function setPresentationCommodites(string $presentationCommodites): self
    {
        $this->presentationCommodites = $presentationCommodites;

        return $this;
    }

    public function getPresentationAmbitionsProjet(): ?string
    {
        return $this->presentationAmbitionsProjet;
    }

    public function setPresentationAmbitionsProjet(string $presentationAmbitionsProjet): self
    {
        $this->presentationAmbitionsProjet = $presentationAmbitionsProjet;

        return $this;
    }
}
