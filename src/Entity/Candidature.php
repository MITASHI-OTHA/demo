<?php

namespace App\Entity;

use App\Repository\CandidatureRepository;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use DateTime;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CandidatureRepository::class)
 */
class Candidature
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity=LogementActuel::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\NotNull
     * @Assert\Valid
     */
    private $LogementActuel;

    /**
     * @ORM\OneToOne(targetEntity=LogementDesire::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\NotNull
     * @Assert\Valid
     */
    private $LogementDesire;

    /**
     * @ORM\OneToOne(targetEntity=AcquereurCandidature::class, inversedBy="candidature", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=true)
     * @Assert\Valid
     * @Assert\NotNull
     */
    private $acquereur;

    /**
     * @ORM\Column(type="string", length=255, nullable=True)
     * @Assert\NotNull
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity=MotivationParticipation::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=True)
     * @Assert\Valid()
     * @Assert\NotNull
     */
    private $motivationParticipation;

    /**
     * @ORM\ManyToOne(targetEntity=Ad::class, inversedBy="candidatures")
     */
    private $ad;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @ORM\Column(type="boolean", nullable=True)
     * @Assert\NotNull(message="veuillez cocher cette case")
     */
    private $checks;

    /**
     *
     * @ORM\Column(type="integer", nullable=true)
     *
     */
    private $status;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="candidatures")
     * @ORM\JoinColumn(nullable=true)
     */
    private $Author;

    /**
     * @ORM\Column(type="boolean")
     */
    private $visibility = true;

    /**
     * @ORM\OneToMany(targetEntity=AcquereurCandidature::class, cascade={"persist"}, mappedBy="candidatures")
     */
    private $acquereurs;


	/**
	 * @Assert\Valid$responseMessageCandidature
	 * @ORM\OneToMany(targetEntity=Credit::class, mappedBy="Candidature",  cascade={"persist", "remove"}, orphanRemoval=true)
	 */
	private $credits;

    /**
     * @ORM\OneToOne(targetEntity=ResponseMessageCandidature::class, mappedBy="Candidature", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=True)
     */
    private $responseMessageCandidature;

	/**
	 * Candidature constructor.
	 * @param array|null $hydrate
	 * @param $Ad
	 * @param $idUser
	 */
	public function __construct($hydrate, $Ad = null, $idUser = 0)
         	{
         		if (!is_null($hydrate)) {
         			$this->hydrate($hydrate);
         		} else {
         			$this->setCreatedAt(new DateTime('now'));
         			$this->setName("candidature_".$Ad->getId());
         			$this->setAd($Ad);
         			$this->setAuthor($idUser);
         		}
	            $this->acquereurs = new ArrayCollection();
	            $this->credits = new ArrayCollection();
            }

	/**
	 * @param  $array
	 * @return $this
	 */
	public function hydrate($array): Candidature
                        	{
                        		foreach ($array as $attribut => $value) {
                        		$method = 'set'.str_replace(' ', '', ucwords(str_replace('_', ' ', $attribut)));
                        			if (is_callable(array($this, $method))) {
                        				$this->$method($attribut($value));
                        			}
                        		}
                        		return $this;
                        	}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLogementActuel(): ?LogementActuel
    {
        return $this->LogementActuel;
    }

    public function setLogementActuel(LogementActuel $LogementActuel): self
    {
        $this->LogementActuel = $LogementActuel;
        return $this;
    }

    public function getLogementDesire(): ?LogementDesire
    {
        return $this->LogementDesire;
    }

    public function setLogementDesire(LogementDesire $LogementDesire): self
    {
        $this->LogementDesire = $LogementDesire;

        return $this;
    }

    public function getAcquereur(): ?AcquereurCandidature
    {
        return $this->acquereur;
    }

    public function setAcquereur(AcquereurCandidature $acquereur): self
    {
        $this->acquereur = $acquereur;

        return $this;
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

    public function getMotivationParticipation(): ?MotivationParticipation
    {
        return $this->motivationParticipation;
    }

    public function setMotivationParticipation(MotivationParticipation $motivationParticipation): self
    {
        $this->motivationParticipation = $motivationParticipation;

        return $this;
    }

    public function getAd(): ?Ad
    {
        return $this->ad;
    }

    public function setAd(?Ad $ad): self
    {
        $this->ad = $ad;

        return $this;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(?DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getChecks(): ?bool
    {
        return $this->checks;
    }

    public function setChecks(bool $checks): self
    {
        $this->checks = $checks;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->status;
    }

    public function setStatus(int $status): self
    {
        $this->status = $status;

        return $this;
    }

    public function getAuthor(): ?User
    {
        return $this->Author;
    }

    public function setAuthor(?User $Author): self
    {
        $this->Author = $Author;

        return $this;
    }

    public function getVisibility(): ?bool
    {
        return $this->visibility;
    }

    public function setVisibility(bool $visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    /**
     * @return Collection|AcquereurCandidature[]
     */
    public function getAcquereurs(): Collection
    {
        return $this->acquereurs;
    }

    public function addAcquereur(AcquereurCandidature $acquereur): self
    {
        if (!$this->acquereurs->contains($acquereur)) {
            $this->acquereurs[] = $acquereur;
            $acquereur->setCandidatures($this);
        }

        return $this;
    }

    public function removeAcquereur(AcquereurCandidature $acquereur): self
    {
        if ($this->acquereurs->contains($acquereur)) {
            $this->acquereurs->removeElement($acquereur);
            // set the owning side to null (unless already changed)
            if ($acquereur->getCandidatures() === $this) {
                $acquereur->setCandidatures(null);
            }
        }

        return $this;
    }

	/**
	 * @return Collection|Credit[]
	 */
	public function getCredits(): Collection
         	{
         		return $this->credits;
         	}

	public function addCredit(Credit $credit): self
         	{
         		if (!$this->credits->contains($credit)) {
         			$this->credits[] = $credit;
         			$credit->setAcquereur($this);
         		}
         		return $this;
         	}

	public function removeCredit(Credit $credit): self
         	{
         		if ($this->credits->contains($credit)) {
         			$this->credits->removeElement($credit);
         			// set the owning side to null (unless already changed)
         			if ($credit->getAcquereur() === $this) {
         				$credit->setAcquereur(null);
         			}
         		}
         		return $this;
         	}

    public function getResponseMessageCandidature(): ?ResponseMessageCandidature
    {
        return $this->responseMessageCandidature;
    }

    public function setResponseMessageCandidature(?ResponseMessageCandidature $responseMessageCandidature): self
    {
        $this->responseMessageCandidature = $responseMessageCandidature;

        // set (or unset) the owning side of the relation if necessary
        $newCandidature = null === $responseMessageCandidature ? null : $this;
        if ($responseMessageCandidature->getCandidature() !== $newCandidature) {
            $responseMessageCandidature->setCandidature($newCandidature);
        }

        return $this;
    }

}
