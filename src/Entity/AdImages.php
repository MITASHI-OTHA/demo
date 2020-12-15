<?php

namespace App\Entity;

use App\Repository\AdImagesRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=AdImagesRepository::class)
 */
class AdImages
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=MediaAds::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Assert\NotBlank(message="Veuillez au moins choisir une photo.")
     */
    private $photo1;

    /**
     * @ORM\OneToOne(targetEntity=MediaAds::class, cascade={"persist", "remove"})
     */
    private $photo2;

    /**
     * @ORM\OneToOne(targetEntity=MediaAds::class, cascade={"persist", "remove"})
     */
    private $photo3;

    /**
     * @ORM\OneToOne(targetEntity=MediaAds::class, cascade={"persist", "remove"})
     */
    private $photo4;

    /**
     * @ORM\OneToOne(targetEntity=MediaAds::class, cascade={"persist", "remove"})
     */
    private $photo5;

    /**
     * @ORM\OneToOne(targetEntity=MediaAds::class, cascade={"persist", "remove"})
     */
    private $photo6;

    /**
     * @ORM\OneToOne(targetEntity=MediaAds::class, cascade={"persist", "remove"})
     */
    private $photo7;

    /**
     * @ORM\OneToOne(targetEntity=MediaAds::class, cascade={"persist", "remove"})
     */
    private $photo8;

    /**
     * @ORM\OneToOne(targetEntity=MediaAds::class, cascade={"persist", "remove"})
     */
    private $photo9;

    /**
     * @ORM\OneToOne(targetEntity=MediaAds::class, cascade={"persist", "remove"})
     */
    private $photo10;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhoto1(): ?Image
    {
        return $this->photo1;
    }

    public function setPhoto1(Image $photo1): self
    {
        $this->photo1 = $photo1;

        return $this;
    }

    public function getPhoto2(): ?Image
    {
        return $this->photo2;
    }

    public function setPhoto2(?Image $photo2): self
    {
        $this->photo2 = $photo2;

        return $this;
    }

    public function getPhoto3(): ?Image
    {
        return $this->photo3;
    }

    public function setPhoto3(?Image $photo3): self
    {
        $this->photo3 = $photo3;

        return $this;
    }

    public function getPhoto4(): ?Image
    {
        return $this->photo4;
    }

    public function setPhoto4(?Image $photo4): self
    {
        $this->photo4 = $photo4;

        return $this;
    }

    public function getPhoto5(): ?Image
    {
        return $this->photo5;
    }

    public function setPhoto5(?Image $photo5): self
    {
        $this->photo5 = $photo5;

        return $this;
    }

    public function getPhoto6(): ?Image
    {
        return $this->photo6;
    }

    public function setPhoto6(?Image $photo6): self
    {
        $this->photo6 = $photo6;

        return $this;
    }

    public function getPhoto7(): ?Image
    {
        return $this->photo7;
    }

    public function setPhoto7(?Image $photo7): self
    {
        $this->photo7 = $photo7;

        return $this;
    }

    public function getPhoto8(): ?Image
    {
        return $this->photo8;
    }

    public function setPhoto8(?Image $photo8): self
    {
        $this->photo8 = $photo8;

        return $this;
    }

    public function getPhoto9(): ?Image
    {
        return $this->photo9;
    }

    public function setPhoto9(?Image $photo9): self
    {
        $this->photo9 = $photo9;

        return $this;
    }

    public function getPhoto10(): ?Image
    {
        return $this->photo10;
    }

    public function setPhoto10(?Image $photo10): self
    {
        $this->photo10 = $photo10;

        return $this;
    }

}
