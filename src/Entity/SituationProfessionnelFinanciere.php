<?php

namespace App\Entity;

use App\Repository\SituationProfessionnelFinanciereRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=SituationProfessionnelFinanciereRepository::class)
 */
class SituationProfessionnelFinanciere
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank(message="Ce champ ne doit pas être vide")
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $statusEmploi;

    /**
     * @Assert\NotBlank(message="Ce champ ne dois pas être vide")
     * @ORM\Column(type="integer", nullable=true)
     */
    private $salaireMoyen;


    /**
     * @Assert\NotBlank(message="Si vous n'avez pas d'apport personnel veuillez tapez '0' ")
     * @ORM\Column(type="integer", nullable=true)
     */
    private $apportPersonnel;

    /**
     * @Assert\NotBlank(message="Ce champ ne doit pas être vide")
     * @ORM\Column(type="integer", nullable=true)
     */
    private $avisImposition;

    /**
     * @Assert\NotBlank(message="Si vous n'avez pas d'autres revenus veuillez tapez '0'")
     * @ORM\Column(type="integer", nullable=true)
     */
    private $autresRevenus;

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

    public function getStatusEmploi(): ?string
    {
        return $this->statusEmploi;
    }

    public function setStatusEmploi(string $statusEmploi): self
    {
        $this->statusEmploi = $statusEmploi;
        return $this;
    }

    public function getSalaireMoyen(): ?int
    {
        return $this->salaireMoyen;
    }

    public function setSalaireMoyen(int $salaireMoyen): self
    {
        $this->salaireMoyen = $salaireMoyen;

        return $this;
    }

    public function getApportPersonnel(): ?int
    {
        return $this->apportPersonnel;
    }

    public function setApportPersonnel(?int $apportPersonnel): self
    {
        $this->apportPersonnel = $apportPersonnel;

        return $this;
    }

    public function getAvisImposition(): ?int
    {
        return $this->avisImposition;
    }

    public function setAvisImposition(?int $avisImposition): self
    {
        $this->avisImposition = $avisImposition;

        return $this;
    }

    public function getAutresRevenus(): ?int
    {
        return $this->autresRevenus;
    }

    public function setAutresRevenus(?int $autresRevenus): self
    {
        $this->autresRevenus = $autresRevenus;

        return $this;
    }
}
