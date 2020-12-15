<?php

namespace App\Entity;

use App\Repository\PresentationAdRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PresentationAdRepository::class)
 */
class PresentationAd
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $description_ad;

    /**
     * @ORM\Column(type="text")
     */
    private $description_ville;

    /**
     * @ORM\Column(type="text")
     */
    private $description_methode_participation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $more_infos;

    /**
     * @ORM\Column(type="text")
     */
    private $media_1;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $media_2;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $media_3;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $media_4;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDescriptionAd(): ?string
    {
        return $this->description_ad;
    }

    public function setDescriptionAd(string $description_ad): self
    {
        $this->description_ad = $description_ad;

        return $this;
    }

    public function getDescriptionVille(): ?string
    {
        return $this->description_ville;
    }

    public function setDescriptionVille(string $description_ville): self
    {
        $this->description_ville = $description_ville;

        return $this;
    }

    public function getDescriptionMethodeParticipation(): ?string
    {
        return $this->description_methode_participation;
    }

    public function setDescriptionMethodeParticipation(string $description_methode_participation): self
    {
        $this->description_methode_participation = $description_methode_participation;

        return $this;
    }

    public function getMoreInfos(): ?string
    {
        return $this->more_infos;
    }

    public function setMoreInfos(?string $more_infos): self
    {
        $this->more_infos = $more_infos;

        return $this;
    }

    public function getMedia1(): ?string
    {
        return $this->media_1;
    }

    public function setMedia1(string $media_1): self
    {
        $this->media_1 = $media_1;

        return $this;
    }

    public function getMedia2(): ?string
    {
        return $this->media_2;
    }

    public function setMedia2(?string $media_2): self
    {
        $this->media_2 = $media_2;

        return $this;
    }

    public function getMedia3(): ?string
    {
        return $this->media_3;
    }

    public function setMedia3(?string $media_3): self
    {
        $this->media_3 = $media_3;

        return $this;
    }

    public function getMedia4(): ?string
    {
        return $this->media_4;
    }

    public function setMedia4(?string $media_4): self
    {
        $this->media_4 = $media_4;

        return $this;
    }
}
