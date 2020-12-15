<?php

namespace App\Entity;

use App\Repository\LogementActuelRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=LogementActuelRepository::class)
 */
class LogementActuel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $types;

    /**
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $statuts;

    /**
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     * @ORM\Column(type="integer", nullable=true)
     */
    private $taille;

    public function __construct($properties=array())
    {
	    foreach($properties as $key => $value) {
	        $this->{$key} = $value;
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTypes(): ?string
    {
        return $this->types;
    }

    public function setTypes(string $types): self
    {
        $this->types = $types;

        return $this;
    }

    public function getStatuts(): ?string
    {
        return $this->statuts;
    }

    public function setStatuts(string $statuts): self
    {
        $this->statuts = $statuts;

        return $this;
    }

    public function getTaille(): ?string
    {
        return $this->taille;
    }

    public function setTaille(string $taille): self
    {
        $this->taille = $taille;

        return $this;
    }
}
