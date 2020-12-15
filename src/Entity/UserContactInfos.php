<?php

namespace App\Entity;

use App\Repository\UserContactInfosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=UserContactInfosRepository::class)
 */
class UserContactInfos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     * @Assert\NotBlank(message="Veuillez remplir ce champs.")
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     * @Assert\NotBlank(message="Veuillez remplir ce champs.")
     */
    private $pays;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     * @Assert\NotBlank(message="Veuillez remplir ce champs.")
     */
    private $ville;

    /**
     * @ORM\Column(type="integer", nullable=true)
     * @Assert\NotBlank(message="Veuillez remplir ce champs.")
     * @Assert\Regex(
     *      pattern="#^[0-9]{4,5}$#", 
     *      message="Votre code postal doit comporter entre 4 et 5 chiffres.")
     */
    private $codePostal;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Assert\NotBlank(message="Veuillez remplir ce champs.")
     */
    private $adresse;

    /**
     * @var File
     */
    public $avatarFile;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $avatar;
    
    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $entreprise;

    /**
     * @ORM\OneToMany(targetEntity=User::class, mappedBy="UserContactInfos", orphanRemoval=true)
     */
    private $users;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getPays(): ?string
    {
        return $this->pays;
    }

    public function setPays(?string $pays): self
    {
        $this->pays = $pays;

        return $this;
    }

    public function getVille(): ?string
    {
        return $this->ville;
    }

    public function setVille(?string $ville): self
    {
        $this->ville = $ville;

        return $this;
    }

    public function getCodePostal(): ?int
    {
        return $this->codePostal;
    }

    public function setCodePostal(?int $codePostal): self
    {
        $this->codePostal = $codePostal;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): self
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getAvatar(): ?string
    {
        return $this->avatar;
    }

    public function setAvatar(?string $avatar): self
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getEntreprise(): ?string
    {
        return $this->entreprise;
    }

    public function setEntreprise(?string $entreprise): self
    {
        $this->entreprise = $entreprise;

        return $this;
    }

    /**
     * @return Collection|User[]
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) 
        {
            $this->users[] = $user;
            $user->setUserContactInfos($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->contains($user)) {
            $this->users->removeElement($user);
            // set the owning side to null (unless already changed)
            if ($user->getUserContactInfos() === $this) {
                $user->setUserContactInfos(null);
            }
        }

        return $this;
    }
}
