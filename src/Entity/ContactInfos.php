<?php

namespace App\Entity;

use App\Repository\ContactInfosRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=ContactInfosRepository::class)
 */
class ContactInfos
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $role;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\Email(message = "L'email {{ value }} n'est pas un email valide.")
     * @Assert\NotBlank(message = "Email obligatoire.")
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $nom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $prenom;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $societe;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $telephone;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $contactReason;

    /**
     * @ORM\Column(type="string", length=255)
     * @Assert\NotBlank(message = "Objet obligatoire.")
     */
    private $objet;

    /**
     * @ORM\Column(type="text")
     * @Assert\NotBlank(message = "Message obligatoire.")
     * @Assert\Length(
     *      min = 200,
     *      minMessage = "Votre message doit comporter au moins 200 caractères",
     *      allowEmptyString = false
     * )
     */
    private $message;

    /**
     * Not ORM
     */
    private $recaptchaToken;

    /**
     * @ORM\ManyToOne(targetEntity=Image::class, cascade={"persist", "remove"})
     */
    private $file;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(string $role): self
    {
        $this->role = $role;

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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): self
    {
        $this->nom = $nom;

        return $this;
    }

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): self
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getSociete(): ?string
    {
        return $this->societe;
    }

    public function setSociete(?string $societe): self
    {
        $this->societe = $societe;

        return $this;
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

    public function getContactReason(): ?string
    {
        return $this->contactReason;
    }

    public function setContactReason(?string $contactReason): self
    {
        $this->contactReason = $contactReason;

        return $this;
    }

    public function getObjet(): ?string
    {
        return $this->objet;
    }

    public function setObjet(string $objet): self
    {
        $this->objet = $objet;

        return $this;
    }

    public function getMessage(): ?string
    {
        return $this->message;
    }

    public function setMessage(string $message): self
    {
        $this->message = $message;

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

    public function getFile(): ?Image
    {
        return $this->file;
    }

    public function setFile(?Image $file): self
    {
        $this->file = $file;

        return $this;
    }
}
