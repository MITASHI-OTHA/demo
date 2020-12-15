<?php

namespace App\Entity;

use App\Repository\AdActeursOperationRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=AdActeursOperationRepository::class)
 */
class AdActeursOperation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue(strategy="IDENTITY")
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $role;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $description;

    /**
     * @ORM\OneToOne(targetEntity=MediaAds::class, cascade={"persist", "remove"})
     */
    private $image;

    /**
     * @ORM\ManyToOne(targetEntity=Ad::class, inversedBy="actor")
     */
    private $adActor;
    
    /**
     * @ORM\OneToOne(targetEntity=Ad::class, mappedBy="acteur1", cascade={"persist", "remove"})
     */
    private $adActeur1;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;

        return $this;
    }

    public function getImage(): ?MediaAds
    {
        return $this->image;
    }

    public function setImage(?MediaAds $image): self
    {
        $this->image = $image;

        return $this;
    }

    public function getAdActor(): ?Ad
    {
        return $this->adActor;
    }

    public function setAdActor(?Ad $adActor): self
    {
        $this->adActor = $adActor;

        return $this;
    }

    public function getAdActeur1(): ?Ad
    {
        return $this->adActeur1;
    }

    public function setAdActeur1(Ad $adActeur1): self
    {
        $this->adActeur1 = $adActeur1;

        // set the owning side of the relation if necessary
        if ($adActeur1->getActeur1() !== $this) {
            $adActeur1->setActeur1($this);
        }

        return $this;
    }

}
