<?php

namespace App\Entity;

use Cocur\Slugify\Slugify;
use App\Repository\AdRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=AdRepository::class)
 * @ORM\HasLifecycleCallbacks()
 * @ORM\Table(name="ad", indexes={@ORM\Index(columns={"typologie", "etat_avancement_projet"}, flags={"fulltext"})})
 */
class Ad
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $name;

    /**
     * @ORM\OneToOne(targetEntity=AdType::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Valid
     */
    private $typeProjet;

    /**
     * @ORM\Column(type="array")
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    
    private $typologie = [];

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="ads")
     * @ORM\JoinColumn(nullable=false)
     */
    private $author;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $nbreLogementsTotal;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $nbreLogementsDispo;

    /**
     * @ORM\Column(type="array")
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $typesLogementsDispo = [];

    /**
     * @ORM\Column(type="integer")
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $prix;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $montage;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $etatAvancementProjet;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $dateLivraison;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $programmeGlobal;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $servicesBiensMutualises;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $espacesCommunsInterieurs;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $espacesCommunsExterieurs;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $espacesPrivesExterieurs;

    /**
     * @ORM\OneToOne(targetEntity=MediaAds::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @Assert\Valid
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
     * @ORM\OneToOne(targetEntity=AdPresentationProjet::class, cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     * @assert\Valid
     */
    private $presentationProjet;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $enSavoirPlus;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $ajouterLien;

    /**
     * @ORM\OneToOne(targetEntity=AdActeursOperation::class, cascade={"persist", "remove"})
     */
    private $acteur1;

    /**
     * @ORM\OneToMany(targetEntity=AdActeursOperation::class, mappedBy="adActor")
     */
    private $actor;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $mailModerator;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $phoneModerator;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $modalitesCandidatureDesc;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $typeFormCandidature;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\ManyToOne(targetEntity=AdSubscription::class, inversedBy="ads")
     */
    private $typeAbonnement;

    /**
     * @ORM\ManyToMany(targetEntity=User::class, inversedBy="adsFavoris")
     */
    private $favoris;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isActive;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $reference;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\OneToOne(targetEntity=MediaAds::class, cascade={"persist", "remove"})
     */
    private $ajouterDocument;

    /**
     * @ORM\OneToMany(targetEntity=AdMessages::class, mappedBy="ads")
     */
    private $messages;

    ///**
     //* @ORM\OneToMany(targetEntity=Candidature::class, mappedBy="idAd", //orphanRemoval=true)
     //*/
    //private $candidatures;

    public function __construct()
    {
        $this->actor = new ArrayCollection();
        $this->favoris = new ArrayCollection();
        $this->messages = new ArrayCollection();
    }
    
    /**
     * @ORM\PrePersist
     */
    public function initializeReferenceAndCreatedAt()
    {
        if(null === $this->reference) 
        {
            $this->reference = strtoupper(bin2hex(random_bytes(5)));
        }
        
        if(null === $this->createdAt) 
        {
            $this->createdAt = new \DateTime;
        }
    }
    
    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function initializeSlug()
    {
        $slugify = new Slugify;
        $this->slug = $slugify->slugify($this->name);
    }

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

    public function getTypeProjet(): ?AdType
    {
        return $this->typeProjet;
    }

    public function setTypeProjet(AdType $typeProjet): self
    {
        $this->typeProjet = $typeProjet;

        return $this;
    }
    
    public function getTypologie(): ?array
    {
        return $this->typologie;
    }

    public function setTypologie(array $typologie): self
    {
        $this->typologie = $typologie;

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

    public function getNbreLogementsTotal(): ?string
    {
        return $this->nbreLogementsTotal;
    }

    public function setNbreLogementsTotal(string $nbreLogementsTotal): self
    {
        $this->nbreLogementsTotal = $nbreLogementsTotal;

        return $this;
    }

    public function getNbreLogementsDispo(): ?string
    {
        return $this->nbreLogementsDispo;
    }

    public function setNbreLogementsDispo(string $nbreLogementsDispo): self
    {
        $this->nbreLogementsDispo = $nbreLogementsDispo;

        return $this;
    }

    public function getTypesLogementsDispo(): ?array
    {
        return $this->typesLogementsDispo;
    }

    public function setTypesLogementsDispo(array $typesLogementsDispo): self
    {
        $this->typesLogementsDispo = $typesLogementsDispo;

        return $this;
    }

    public function getPrix(): ?string
    {
        return $this->prix;
    }

    public function setPrix(string $prix): self
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

    public function getEtatAvancementProjet(): ?string
    {
        return $this->etatAvancementProjet;
    }

    public function setEtatAvancementProjet(string $etatAvancementProjet): self
    {
        $this->etatAvancementProjet = $etatAvancementProjet;

        return $this;
    }

    public function getDateLivraison(): ?\DateTimeInterface
    {
        return $this->dateLivraison;
    }

    public function setDateLivraison(?\DateTimeInterface $dateLivraison): self
    {
        $this->dateLivraison = $dateLivraison;

        return $this;
    }

    public function getProgrammeGlobal(): ?string
    {
        return $this->programmeGlobal;
    }

    public function setProgrammeGlobal(string $programmeGlobal): self
    {
        $this->programmeGlobal = $programmeGlobal;

        return $this;
    }

    public function getServicesBiensMutualises(): ?string
    {
        return $this->servicesBiensMutualises;
    }

    public function setServicesBiensMutualises(string $servicesBiensMutualises): self
    {
        $this->servicesBiensMutualises = $servicesBiensMutualises;

        return $this;
    }

    public function getEspacesCommunsInterieurs(): ?string
    {
        return $this->espacesCommunsInterieurs;
    }

    public function setEspacesCommunsInterieurs(string $espacesCommunsInterieurs): self
    {
        $this->espacesCommunsInterieurs = $espacesCommunsInterieurs;

        return $this;
    }

    public function getEspacesCommunsExterieurs(): ?string
    {
        return $this->espacesCommunsExterieurs;
    }

    public function setEspacesCommunsExterieurs(string $espacesCommunsExterieurs): self
    {
        $this->espacesCommunsExterieurs = $espacesCommunsExterieurs;

        return $this;
    }

    public function getEspacesPrivesExterieurs(): ?string
    {
        return $this->espacesPrivesExterieurs;
    }

    public function setEspacesPrivesExterieurs(string $espacesPrivesExterieurs): self
    {
        $this->espacesPrivesExterieurs = $espacesPrivesExterieurs;

        return $this;
    }

    public function getPresentationProjet(): ?AdPresentationProjet
    {
        return $this->presentationProjet;
    }

    public function setPresentationProjet(AdPresentationProjet $presentationProjet): self
    {
        $this->presentationProjet = $presentationProjet;

        return $this;
    }

    public function getEnSavoirPlus(): ?string
    {
        return $this->enSavoirPlus;
    }

    public function setEnSavoirPlus(?string $enSavoirPlus): self
    {
        $this->enSavoirPlus = $enSavoirPlus;

        return $this;
    }

    public function getAjouterLien(): ?string
    {
        return $this->ajouterLien;
    }

    public function setAjouterLien(?string $ajouterLien): self
    {
        $this->ajouterLien = $ajouterLien;

        return $this;
    }

    public function getActeur1(): ?AdActeursOperation
    {
        return $this->acteur1;
    }

    public function setActeur1(AdActeursOperation $acteur1): self
    {
        $this->acteur1 = $acteur1;

        return $this;
    }

    public function getAjouterDocument(): ?MediaAds
    {
        return $this->ajouterDocument;
    }

    public function setAjouterDocument(?MediaAds $ajouterDocument): self
    {
        $this->ajouterDocument = $ajouterDocument;

        return $this;
    }

    public function getReference(): ?string
    {
        return $this->reference;
    }

    public function setReference(string $reference): self
    {
        $this->reference = $reference;

        return $this;
    }

    /**
     * @return Collection|AdActeursOperation[]
     */
    public function getActor(): Collection
    {
        return $this->actor;
    }

    public function addActor(AdActeursOperation $actor): self
    {
        if (!$this->actor->contains($actor)) 
        {
            $this->actor[] = $actor;
            $actor->setAdActor($this);
        }

        return $this;
    }

    public function removeActor(AdActeursOperation $actor): self
    {
        if ($this->actor->contains($actor)) 
        {
            $this->actor->removeElement($actor);
            // set the owning side to null (unless already changed)
            if ($actor->getAdActor() === $this) 
            {
                $actor->setAdActor(null);
            }
        }

        return $this;
    }

    public function getMailModerator(): ?string
    {
        return $this->mailModerator;
    }

    public function setMailModerator(string $mailModerator): self
    {
        $this->mailModerator = $mailModerator;

        return $this;
    }

    public function getPhoneModerator(): ?string
    {
        return $this->phoneModerator;
    }

    public function setPhoneModerator(?string $phoneModerator): self
    {
        $this->phoneModerator = $phoneModerator;

        return $this;
    }

    public function getModalitesCandidatureDesc(): ?string
    {
        return $this->modalitesCandidatureDesc;
    }

    public function setModalitesCandidatureDesc(?string $modalitesCandidatureDesc): self
    {
        $this->modalitesCandidatureDesc = $modalitesCandidatureDesc;

        return $this;
    }

    public function getTypeFormCandidature(): ?string
    {
        return $this->typeFormCandidature;
    }

    public function setTypeFormCandidature(?string $typeFormCandidature): self
    {
        $this->typeFormCandidature = $typeFormCandidature;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getSlug(): ?string
    {
        return $this->slug;
    }

    public function setSlug(string $slug): self
    {
        $this->slug = $slug;

        return $this;
    }

    public function getTypeAbonnement(): ?AdSubscription
    {
        return $this->typeAbonnement;
    }

    public function setTypeAbonnement(?AdSubscription $typeAbonnement): self
    {
        $this->typeAbonnement = $typeAbonnement;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getFavoris(): Collection
    {
        return $this->favoris;
    }

    public function addFavori(User $favori): self
    {
        if (!$this->favoris->contains($favori)) {
            $this->favoris[] = $favori;
        }

        return $this;
    }


    public function removeFavori(User $favori): self
    {
        if ($this->favoris->contains($favori)) {
            $this->favoris->removeElement($favori);
        }

        return $this;
    }

    public function getIsActive(): ?bool
    {
        return $this->isActive;
    }

    public function setIsActive(?bool $isActive): self
    {
        $this->isActive = $isActive;

        return $this;
    }

    public function getPhoto1(): ?MediaAds
    {
        return $this->photo1;
    }

    public function setPhoto1(MediaAds $photo1): self
    {
        $this->photo1 = $photo1;

        return $this;
    }

    public function getPhoto2(): ?MediaAds
    {
        return $this->photo2;
    }

    public function setPhoto2(?MediaAds $photo2): self
    {
        $this->photo2 = $photo2;

        return $this;
    }

    public function getPhoto3(): ?MediaAds
    {
        return $this->photo3;
    }

    public function setPhoto3(?MediaAds $photo3): self
    {
        $this->photo3 = $photo3;

        return $this;
    }

    /**
     * @return Collection|AdMessages[]
     */
    public function getMessages(): Collection
    {
        return $this->messages;
    }

    public function addMessage(AdMessages $message): self
    {
        if (!$this->messages->contains($message)) {
            $this->messages[] = $message;
            $message->setAds($this);
        }

        return $this;
    }

    public function removeMessage(AdMessages $message): self
    {
        if ($this->messages->contains($message)) {
            $this->messages->removeElement($message);
            // set the owning side to null (unless already changed)
            if ($message->getAds() === $this) {
                $message->setAds(null);
            }
        }

        return $this;
    }

}
