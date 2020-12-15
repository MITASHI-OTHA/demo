<?php

namespace App\Entity;

use App\Repository\DetailsAdRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DetailsAdRepository::class)
 */
class DetailsAd
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
    private $global_program;

    /**
     * @ORM\Column(type="text")
     */
    private $details_program;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $space_common_in;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $espace_common_out;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $space_private_out;

    /**
     * @ORM\Column(type="simple_array")
     */
    private $type_biens = [];

    /**
     * @ORM\Column(type="text")
     */
    private $typologies;

    /**
     * @ORM\Column(type="integer")
     */
    private $prix;

    /**
     * @ORM\Column(type="text")
     */
    private $montage;

    /**
     * @ORM\Column(type="text")
     */
    private $phase;

    /**
     * @ORM\Column(type="date")
     */
    private $date_delivre;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGlobalProgram(): ?string
    {
        return $this->global_program;
    }

    public function setGlobalProgram(string $global_program): self
    {
        $this->global_program = $global_program;

        return $this;
    }

    public function getDetailsProgram(): ?string
    {
        return $this->details_program;
    }

    public function setDetailsProgram(string $details_program): self
    {
        $this->details_program = $details_program;

        return $this;
    }

    public function getSpaceCommonIn(): ?int
    {
        return $this->space_common_in;
    }

    public function setSpaceCommonIn(?int $space_common_in): self
    {
        $this->space_common_in = $space_common_in;

        return $this;
    }

    public function getEspaceCommonOut(): ?int
    {
        return $this->espace_common_out;
    }

    public function setEspaceCommonOut(?int $espace_common_out): self
    {
        $this->espace_common_out = $espace_common_out;

        return $this;
    }

    public function getSpacePrivateOut(): ?int
    {
        return $this->space_private_out;
    }

    public function setSpacePrivateOut(?int $space_private_out): self
    {
        $this->space_private_out = $space_private_out;

        return $this;
    }

    public function getTypeBiens(): ?array
    {
        return $this->type_biens;
    }

    public function setTypeBiens(array $type_biens): self
    {
        $this->type_biens = $type_biens;

        return $this;
    }

    public function getTypologies(): ?string
    {
        return $this->typologies;
    }

    public function setTypologies(string $typologies): self
    {
        $this->typologies = $typologies;

        return $this;
    }

    public function getPrix(): ?int
    {
        return $this->prix;
    }

    public function setPrix(int $prix): self
    {
        $this->prix = $prix;

        return $this;
    }

    public function getMontage(): ?string
    {
        return $this->montage;
    }

    public function setMontage(string $montage): self
    {
        $this->montage = $montage;

        return $this;
    }

    public function getPhase(): ?string
    {
        return $this->phase;
    }

    public function setPhase(string $phase): self
    {
        $this->phase = $phase;

        return $this;
    }

    public function getDateDelivre(): ?\DateTimeInterface
    {
        return $this->date_delivre;
    }

    public function setDateDelivre(\DateTimeInterface $date_delivre): self
    {
        $this->date_delivre = $date_delivre;

        return $this;
    }
}
