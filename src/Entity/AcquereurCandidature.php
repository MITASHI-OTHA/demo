<?php

namespace App\Entity;

use App\Repository\AcquereurCandidatureRepository;
use DateTimeInterface;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=AcquereurCandidatureRepository::class)
 */
class AcquereurCandidature
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=8, nullable=true)
     */
    private $gender;

    /**
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     * @ORM\Column(type="text", nullable=true)
     */
    private $firstname;

    /**
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     * @ORM\Column(type="text", nullable=true)
     */
    private $lastname;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateAnniversaire;

    /**
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     * @ORM\Column(type="text", nullable=true)
     */
    private $email;

    /**
     * @ORM\OneToOne(targetEntity=SituationProfessionnelFinanciere::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false, nullable=true)
     */
    private $financiaryProfessionalSituation;

    /**
     * @Assert\NotBlank(message="veuillez remplir ce champ")
     * @ORM\Column(type="string", length=46, nullable=true)
     */
    private $telMobile;

    /**
     * @ORM\Column(type="string", length=46, nullable=true)
     */
    private $telFixe;

    /**
     * @ORM\Column(type="string", length=46, nullable=true)
     */
    private $telProfessional;

    /**
     * @Assert\NotBlank(message="veuillez remplir ce champ")
     * @ORM\Column(type="text", nullable=true)
     */
    private $pays;

    /**
     * @Assert\NotBlank(message="veuillez remplir ce champ")
     * @ORM\Column(type="text", nullable=true)
     */
    private $codePostal;

    /**
     * @Assert\NotBlank(message="veuillez remplir ce champ")
     * @ORM\Column(type="text", nullable=true)
     */
    private $ville;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $addresse;

    /**
     * @ORM\OneToOne(targetEntity=Candidature::class, mappedBy="acquereur", cascade={"persist", "remove"})
     */
    private $candidature;


    /**
     * @ORM\ManyToOne(targetEntity=Candidature::class, inversedBy="acquereurs")
     */
    private $candidatures;


    public function __construct(Array $properties=array())
    {
        $this->personneCharges = new ArrayCollection();
        foreach($properties as $key => $value) {
	        if (strcmp($key, "financiaryProfessionalSituation") !== 0 && strcmp($key, "credits") !== 0) {
		        $this->{$key} = $value;
	        } elseif (strcmp($key, "financiaryProfessionalSituation") === 0) {
		        $this->setFinanciaryProfessionalSituation(new SituationProfessionnelFinanciere($value));
	        }  elseif (strcmp($key, "credits") === 0) {
	        	$credits = new Credit($value);
	        	$credits->setAcquereur($this);
	        	$this->addCredit($credits);
	        }
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGender(): ?string
    {
        return $this->gender;
    }

    public function setGender(?string $gender): self
    {
        $this->gender = $gender;

        return $this;
    }

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(?string $firstname): self
    {
        $this->firstname = $firstname;

        return $this;
    }

    public function getLastname(): ?string
    {
        return $this->lastname;
    }

    public function setLastname(?string $lastname): self
    {
        $this->lastname = $lastname;

        return $this;
    }

    public function getDateAnniversaire(): ?DateTimeInterface
    {
        return $this->dateAnniversaire;
    }

    public function setDateAnniversaire(?DateTimeInterface $dateAnniversaire): self
    {
        $this->dateAnniversaire = $dateAnniversaire;

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getFinanciaryProfessionalSituation(): ?SituationProfessionnelFinanciere
    {
        return $this->financiaryProfessionalSituation;
    }

    public function setFinanciaryProfessionalSituation(SituationProfessionnelFinanciere $financiaryProfessionalSituation): self
    {
        $this->financiaryProfessionalSituation = $financiaryProfessionalSituation;

        return $this;
    }

    public function getTelMobile(): ?string
    {
        return $this->telMobile;
    }

    public function setTelMobile(string $telMobile): self
    {
        $this->telMobile = $telMobile;

        return $this;
    }

    public function getTelFixe(): ?string
    {
        return $this->telFixe;
    }

    public function setTelFixe(string $telFixe): self
    {
        $this->telFixe = $telFixe;

        return $this;
    }

    public function getTelProfessional(): ?string
    {
        return $this->telProfessional;
    }

    public function setTelProfessional(string $telProfessional): self
    {
        $this->telProfessional = $telProfessional;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getCodePostal(): ?string
    {
        return $this->codePostal;
    }

    public function setCodePostal(string $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getAddresse(): ?string
    {
        return $this->addresse;
    }

    public function setAddresse(string $addresse): self
    {
        $this->addresse = $addresse;

        return $this;
    }

    public function getCandidature(): ?Candidature
    {
        return $this->candidature;
    }

    public function getCandidatures(): ?Candidature
    {
        return $this->candidatures;
    }

    public function setCandidatures(?Candidature $candidatures): self
    {
        $this->candidatures = $candidatures;

        return $this;
    }
}
