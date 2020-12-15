<?php

namespace App\Entity;

use App\Repository\MotivationParticipationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=MotivationParticipationRepository::class)
 */
class MotivationParticipation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

	/**
	 * @Assert\NotBlank(message="Veuillez remplir ce champ")
	 * @Assert\Valid
	 * @Assert\NotNull
	 * @ORM\Column(type="text", nullable=true)
	 */
	private $motivation;

	/**
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
	 * @Assert\NotNull
	 * @ORM\Column(type="text", nullable=true)
     */
    private $vie_quartier;

    /**
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     * @Assert\NotNull
     * @ORM\Column(type="text", nullable=true)
     */
    private $echange_mutualisation;

    /**
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     * @Assert\NotNull
     * @ORM\Column(type="text", nullable=true)
     */
    private $connaissance_annonce;

    public function __construct(Array $properties=array())
    {
        foreach($properties as $key => $value){
            $this->{$key} = $value;
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMotivation(): ?string
    {
        return $this->motivation;
    }

    public function setMotivation(string $motivation): self
    {
        $this->motivation = $motivation;

        return $this;
    }


    public function getVieQuartier(): ?string
    {
        return $this->vie_quartier;
    }

    public function setVieQuartier(string $vie_quartier): self
    {
        $this->vie_quartier = $vie_quartier;

        return $this;
    }

    public function getEchangeMutualisation(): ?string
    {
        return $this->echange_mutualisation;
    }

    public function setEchangeMutualisation(string $echange_mutualisation): self
    {
        $this->echange_mutualisation = $echange_mutualisation;

        return $this;
    }

    public function getConnaissanceAnnonce(): ?string
    {
        return $this->connaissance_annonce;
    }

    public function setConnaissanceAnnonce(string $connaissance_annonce): self
    {
        $this->connaissance_annonce = $connaissance_annonce;

        return $this;
    }
}
