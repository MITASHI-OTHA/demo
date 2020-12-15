<?php

namespace App\Entity;

use App\Repository\CreditRepository;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=CreditRepository::class)
 */
class Credit
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @Assert\NotBlank(message="Veuillez indiquer la date de début de votre crédit")
     * @ORM\Column(type="date", nullable=true)
     */
    private $begin;

    /**
     * @Assert\NotBlank(message="Veuillez indiquer la date de début de votre crédit")
     * @ORM\Column(type="date", nullable=true)
     */
    private $end;

    /**
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     * @Assert\GreaterThan(0)
     * @ORM\Column(type="integer", nullable=true)
     */
    private $payementMois;

    /**
     * @ORM\ManyToOne(targetEntity=Candidature::class, inversedBy="credits")
     * @ORM\JoinColumn(nullable=true)
     */
    private $Candidature;

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

    public function getBegin(): ?DateTimeInterface
    {
        return $this->begin;
    }

    public function setBegin(DateTimeInterface $begin): self
    {
        $this->begin = $begin;

        return $this;
    }

    public function getEnd(): ?DateTimeInterface
    {
        return $this->end;
    }

    public function setEnd(DateTimeInterface $end): self
    {
        $this->end = $end;

        return $this;
    }

    public function getPayementMois(): ?int
    {
        return $this->payementMois;
    }

    public function setPayementMois(int $payementMois): self
    {
        $this->payementMois = $payementMois;

        return $this;
    }

    public function getCandidature(): ?Candidature
    {
        return $this->Candidature;
    }

    public function setCandidature(?AcquereurCandidature $Candidature): self
    {
        $this->Candidature = $Candidature;

        return $this;
    }
}
