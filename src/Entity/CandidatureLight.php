<?php

namespace App\Entity;

use App\Repository\CandidatureLightRepository;
use DateTime;
use DateTimeInterface;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=CandidatureLightRepository::class)
 */
class CandidatureLight
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\GreaterThan(0, message="la taille du Foyer doit être supérieur que 0")
     */
    private $tailleFoyer;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotNull(message="Veuillez remplir ce champ")
     */
    private $logementRecherche;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\GreaterThan(0, message="la surface souhaitée doit être supérieur que 0")
     */
    private $surfaceSouhaitee;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\GreaterThan(-1, message="la surface souhaitée doit être supérieur que 0")
     */
    private $surfaceMin;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $surfaceMax;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $enveloppeMax;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     * @Assert\NotNull(message="veuillez remplir le champ motivation")
     */
    private $motivation;

    /**
     * @ORM\ManyToOne(targetEntity=User::class)
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;

    /**
     * @ORM\ManyToOne(targetEntity=Ad::class, inversedBy="CandidatureLights")
     */
    private $Ad;

    /**
     * @ORM\Column(type="boolean")
     */
    private $checks;

    /**
     * @ORM\Column(type="boolean")
     */
    private $visibility;

    /**
     * @ORM\Column(type="integer")
     */
    private $Status;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $name;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $createdAt;

    /**
     * @ORM\OneToOne(targetEntity=ResponseMessageCandidature::class, mappedBy="CandidatureLight", cascade={"persist", "remove"})
     */
    private $responseMessageCandidature;

	public function __construct($idAd, $idUser)
            	{
            		$this->setCreatedAt(new DateTime('now'));
            		$this->setName("candidaturelight_".$idAd);
            		$this->setAuthor($idUser);
            	}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTailleFoyer(): ?int
    {
        return $this->tailleFoyer;
    }

    public function setTailleFoyer(int $tailleFoyer): self
    {
        $this->tailleFoyer = $tailleFoyer;

        return $this;
    }

    public function getLogementRecherche(): ?string
    {
        return $this->logementRecherche;
    }

    public function setLogementRecherche(string $logementRecherche): self
    {
        $this->logementRecherche = $logementRecherche;

        return $this;
    }

    public function getSurfaceSouhaitee(): ?int
    {
        return $this->surfaceSouhaitee;
    }

    public function setSurfaceSouhaitee(int $surfaceSouhaitee): self
    {
        $this->surfaceSouhaitee = $surfaceSouhaitee;

        return $this;
    }

    public function getSurfaceMin(): ?int
    {
        return $this->surfaceMin;
    }

    public function setSurfaceMin(int $surfaceMin): self
    {
        $this->surfaceMin = $surfaceMin;

        return $this;
    }

    public function getSurfaceMax(): ?int
    {
        return $this->surfaceMax;
    }

    public function setSurfaceMax(int $surfaceMax): self
    {
        $this->surfaceMax = $surfaceMax;

        return $this;
    }

    public function getEnveloppeMax(): ?int
    {
        return $this->enveloppeMax;
    }

    public function setEnveloppeMax(int $enveloppeMax): self
    {
        $this->enveloppeMax = $enveloppeMax;

        return $this;
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

    public function getAuthor(): ?User
    {
        return $this->author;
    }

    public function setAuthor(?User $author): self
    {
        $this->author = $author;

        return $this;
    }

    public function getAd(): ?Ad
    {
        return $this->Ad;
    }

    public function setAd(?Ad $Ad): self
    {
        $this->Ad = $Ad;

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

    public function getVisibility(): ?bool
    {
        return $this->visibility;
    }

    public function setVisibility(bool $visibility): self
    {
        $this->visibility = $visibility;

        return $this;
    }

    public function getStatus(): ?int
    {
        return $this->Status;
    }

    public function setStatus(int $Status): self
    {
        $this->Status = $Status;

        return $this;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(?string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getCreatedAt(): ?DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

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
        $newCandidatureLight = null === $responseMessageCandidature ? null : $this;
        if ($responseMessageCandidature->getCandidatureLight() !== $newCandidatureLight) {
            $responseMessageCandidature->setCandidatureLight($newCandidatureLight);
        }

        return $this;
    }
}
