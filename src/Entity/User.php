<?php

namespace App\Entity;

use Cocur\Slugify\Slugify;
use App\Entity\UserContactInfos;
use DateTime;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\UserRepository;
use Egulias\EmailValidator\EmailValidator;
use Symfony\Component\Serializer\Annotation\Groups;
use Egulias\EmailValidator\Validation\RFCValidation;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Security\Core\User\UserInterface;
use Egulias\EmailValidator\Validation\DNSCheckValidation;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Egulias\EmailValidator\Validation\MultipleValidationWithAnd;

/**
 * @ORM\Entity(repositoryClass=UserRepository::class)
 * @ORM\HasLifecycleCallbacks()
 * @UniqueEntity(
 *      fields={"username"},
 *      message="Désolé, ce nom d'utilisateur est déjà utilisé.")
 * @UniqueEntity(
 *      fields={"email"},
 *      message="Désolé, cet email est déjà utilisé.")
 */
class User implements UserInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     * @Groups("public")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=20)
     * @Assert\NotBlank(message="Veuillez remplir ce champs.")
     * @Assert\Regex(
     * pattern="#^[\w.-]{3,20}$#", 
     * message="Votre nom d'utilisateur doit comporter entre 3 et 20 caractères (a à z, A à Z, 0 à 9 et .,-,_).")
     * @Groups("public")
     */
    private $username;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message="Veuillez saisir votre mot de passe.")
     */
    private $password;

    /**
     * Not ORM property
     */
    private $plainPassword;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Veuillez remplir ce champs.")
     * @Assert\Regex(
     *      pattern="~^[a-zA-ZÀ-ÖØ-öø-ÿœŒ ]+$~u", 
     *      message="Votre nom doit comporter entre 3 et 20 caractères.")
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Veuillez saisir votre prénom.")
     * @Assert\Regex(
     *      pattern="~^[a-zA-ZÀ-ÖØ-öø-ÿœŒ ]+$~u", 
     *      message="Votre nom doit comporter entre 3 et 20 caractères.")
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=50)
     * @Assert\NotBlank(message="Veuillez insérer votre email.")
     * @Assert\Email(message="Veuillez entrer un email valide.")
     */
    private $email;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $abonneNewsletter;

    /**
     * @ORM\Column(type="string", length=20)
     * @Assert\NotBlank(message="Veuillez préciser votre civilité.")
     */
    private $civilite;

    /**
     * @ORM\Column(type="datetime")
     */
    private $lastLogin;

    /**
     * @ORM\Column(type="datetime")
     */
    private $registrationDate;

    /**
     * @ORM\ManyToOne(targetEntity=UserContactInfos::class, inversedBy="users", cascade={"persist", "remove"})
     */
    private $userContactInfos;

    /**
     * @ORM\Column(type="string", nullable=true)
     */
    private $confirmationToken;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $enabled;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\ManyToMany(targetEntity=Role::class, mappedBy="role", cascade={"persist", "remove"})
     */
    private $userRoles;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $resetPassword;

    /**
     * @ORM\Column(type="boolean")
     * @Assert\NotBlank(message="Veuillez accepter les Conditions d’utilisation du site welcoom.fr.")
     */
    private $cguAccepted;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $lastActivityAt;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isConnected;

    /**
     * @ORM\OneToMany(targetEntity=AdSubscription::class, mappedBy="subscriber")
     */
    private $adSubscriptions;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $typeAccount;

    /**
     * Not ORM
     */
    private $recaptchaToken;

    /**
     * @ORM\ManyToMany(targetEntity=Ad::class, mappedBy="favoris")
     */
    private $adsFavoris;

    /**
     * @ORM\Column(type="boolean", nullable=True)
     */
    private $ads;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $isAdAuthor;
    /**
     * @ORM\Column(type="boolean", nullable=True)
     */
    private $BlockedCandidature;
    ///**
    //* @ORM\OneToMany(targetEntity=Candidature::class, mappedBy="User")
    //*/
    //private $candidatures;

    public function __construct()
    {
        $this->userRoles = new ArrayCollection();

        $this->adSubscriptions = new ArrayCollection();
        $this->adsFavoris = new ArrayCollection();
    }

    /**
     * @ORM\PrePersist
     * @ORM\PreUpdate
     */
    public function initializeSlug()
    {
        $slugify = new Slugify;
        $this->slug = $slugify->slugify($this->prenom . '_' . $this->nom);
    }

    /**
     * @ORM\PrePersist
     */
    public function initializeDate()
    {
        if (null === $this->lastLogin) {
            $this->lastLogin = new DateTime;
        }
        if (null === $this->registrationDate) {
            $this->registrationDate = new DateTime;
        }

        $validator = new EmailValidator;
        $multipleValidations = new MultipleValidationWithAnd(
        [
            new RFCValidation,
            new DNSCheckValidation
        ]);
        $validator->isValid($this->email, $multipleValidations); //true
    }
    
    public function getUsername(): ?string
    {
        return $this->username;
    }

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function getRoles(): array
    {
        $roles = $this->userRoles->map(function ($role) 
        {
            return $role->getName();
        })->toArray();

        $roles[] = 'ROLE_USER';

        return $roles;
    }

    public function getSalt() {}
    public function eraseCredentials() {}

    public function getId(): ?int
    {
        return $this->id;
    }

    public function setUsername(string $username): self
    {
        $this->username = $username;

        return $this;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getPlainPassword(): ?string
    {
        return $this->plainPassword;
    }
    public function setPlainPassword($plainPassword)
    {
        return $this->plainPassword = $plainPassword;
    }

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(string $prenom): self
    {
        $this->prenom = $prenom;
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

    public function getAbonneNewsletter(): ?bool
    {
        return $this->abonneNewsletter;
    }

    public function setAbonneNewsletter(?bool $abonneNewsletter): self
    {
        $this->abonneNewsletter = $abonneNewsletter;

        return $this;
    }

    public function getCivilite(): ?string
    {
        return $this->civilite;
    }

    public function setCivilite(string $civilite): self
    {
        $this->civilite = $civilite;

        return $this;
    }

    public function getLastLogin(): ?\DateTimeInterface
    {
        return $this->lastLogin;
    }

    public function setLastLogin(\DateTimeInterface $lastLogin): self
    {
        $this->lastLogin = $lastLogin;

        return $this;
    }

    public function getRegistrationDate(): ?\DateTimeInterface
    {
        return $this->registrationDate;
    }

    public function setRegistrationDate(\DateTimeInterface $registrationDate): self
    {
        $this->registrationDate = $registrationDate;

        return $this;
    }

    public function getConfirmationToken(): ?string
    {
        return $this->confirmationToken;
    }

    public function setConfirmationToken(?string $confirmationToken): self
    {
        $this->confirmationToken = $confirmationToken;

        return $this;
    }

    public function getEnabled(): ?bool
    {
        return $this->enabled;
    }

    public function setEnabled(?bool $enabled): self
    {
        $this->enabled = $enabled;

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

    public function getResetPassword(): ?string
    {
        return $this->resetPassword;
    }

    public function setResetPassword(?string $resetPassword): self
    {
        $this->resetPassword = $resetPassword;

        return $this;
    }

    public function getCguAccepted(): ?bool
    {
        return $this->cguAccepted;
    }

    public function setCguAccepted(bool $cguAccepted): self
    {
        $this->cguAccepted = $cguAccepted;

        return $this;
    }

    public function getLastActivityAt(): ?\DateTimeInterface
    {
        return $this->lastActivityAt;
    }

    public function setLastActivityAt(?\DateTimeInterface $lastActivityAt): self
    {
        $this->lastActivityAt = $lastActivityAt;

        return $this;
    }

    public function isActiveNow()
    {
        $delay = new DateTime('2 minutes ago');

        return $this->getLastActivityAt() > $delay;
    }

    public function getIsConnected(): ?bool
    {
        return $this->isConnected;
    }

    public function setIsConnected(?bool $isConnected): self
    {
        $this->isConnected = $isConnected;

        return $this;
    }

    public function getUserContactInfos(): ?UserContactInfos
    {
        return $this->userContactInfos;
    }

    public function setUserContactInfos(?UserContactInfos $userContactInfos): self
    {
        $this->UserContactInfos = $userContactInfos;

        return $this;
    }

    /**
     * @return Collection|Role[]
     */
    public function getUserRoles(): Collection
    {
        return $this->userRoles;
    }

    public function addUserRole(Role $userRole): self
    {
        if (!$this->userRoles->contains($userRole)) {
            $this->userRoles[] = $userRole;
            $userRole->addRole($this);
        }

        return $this;
    }

    public function removeUserRole(Role $userRole): self
    {
        if ($this->userRoles->contains($userRole)) {
            $this->userRoles->removeElement($userRole);
            $userRole->removeRole($this);
        }

        return $this;
    }

    /**
     * @return Collection|AdSubscription[]
     */
    public function getAdSubscriptions(): Collection
    {
        return $this->adSubscriptions;
    }

    public function addAdSubscription(AdSubscription $adSubscription): self
    {
        if (!$this->adSubscriptions->contains($adSubscription)) {
            $this->adSubscriptions[] = $adSubscription;
            $adSubscription->setSubscriber($this);
        }

        return $this;
    }

    public function removeAdSubscription(AdSubscription $adSubscription): self
    {
        if ($this->adSubscriptions->contains($adSubscription)) {
            $this->adSubscriptions->removeElement($adSubscription);
            // set the owning side to null (unless already changed)
            if ($adSubscription->getSubscriber() === $this) {
                $adSubscription->setSubscriber(null);
            }
        }

        return $this;
    }


    public function getTypeAccount(): ?string
    {
        return $this->typeAccount;
    }

    public function setTypeAccount(string $typeAccount): self
    {
        $this->typeAccount = $typeAccount;

        return $this;
    }

    public function getRecaptchaToken(): ?string 
    {
        return $this->recaptchaToken;
    }

    public function setRecaptchaToken($recaptchaToken): self 
    {
        $this->recaptchaToken = $recaptchaToken;
        return $this;
    }

    /**
     * @return Collection|Ad[]
     */
    public function getAdsFavoris(): Collection
    {
        return $this->adsFavoris;
    }

    public function addAdsFavori(Ad $adsFavori): self
    {
        if (!$this->adsFavoris->contains($adsFavori)) {
            $this->adsFavoris[] = $adsFavori;
            $adsFavori->addFavori($this);
        }

        return $this;
    }


    public function removeAdsFavori(Ad $adsFavori): self
    {
        if ($this->adsFavoris->contains($adsFavori)) {
            $this->adsFavoris->removeElement($adsFavori);
            $adsFavori->removeFavori($this);
        }

        return $this;
    }

    public function getBlockedCandidature(): ?bool
    {
        return $this->BlockedCandidature;
    }

    public function setBlockedCandidature(bool $BlockedCandidature): self
    {
        $this->BlockedCandidature = $BlockedCandidature;

        return $this;
    }

    public function getIsAdAuthor(): ?bool
    {
        return $this->isAdAuthor;
    }

    public function setIsAdAuthor(?bool $isAdAuthor): self
    {
        $this->isAdAuthor = $isAdAuthor;

        return $this;
    }

}
