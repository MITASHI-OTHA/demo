<?php

namespace App\Entity;

use App\Repository\AdTypeRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=AdTypeRepository::class)
 */
class AdType
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $parent;

    /**
     * @ORM\Column(type="array", nullable=true)
     */
    private $child = [];

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getParent(): ?string
    {
        return $this->parent;
    }

    public function setParent(string $parent): self
    {
        $this->parent = $parent;

        return $this;
    }

    public function getChild(): ?array
    {
        return $this->child;
    }

    public function setChild(?array $child): self
    {
        $this->child = $child;

        return $this;
    }
}
