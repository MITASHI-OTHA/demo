<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdMessagesRepository")
 * @ORM\HasLifecycleCallbacks()
 * @Vich\Uploadable
 */
class AdMessages
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="messageSender")
     */
    private $sender;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="messageReceiver")
     */
    private $receiver;

    /**
     * @ORM\Column(type="text", nullable=true)
     * @Assert\NotBlank(message="Ce champs ne doit pas être vide.")
     */
    private $content;

    /**
     * @ORM\Column(type="datetime")
     */
    private $sendAt;

    /**
     * @ORM\Column(type="boolean")
     */
    private $isRead;

    /**
     * 
     * @Vich\UploadableField(mapping="ads_image", fileNameProperty="fileMessage")
     * 
     * @var File
     */
    private $imageFileMessage;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     *
     * @var \DateTime
     */
    private $updatedAt;

    /**
     * @ORM\column(type="string", length=255, nullable=true)
     */
    private $fileMessage;

    /**
     * @ORM\ManyToOne(targetEntity=Ad::class, inversedBy="messages")
     * @ORM\JoinColumn(nullable=false)
     */
    private $ads;

    /**
     * @ORM\PrePersist
     * @return void
     */
    public function prePersist() 
    {
        if(null === $this->sendAt) 
        {
            $this->sendAt = new \Datetime;
        }
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSender(): ?User
    {
        return $this->sender;
    }

    public function setSender(?User $sender): self
    {
        $this->sender = $sender;

        return $this;
    }

    public function getReceiver(): ?User
    {
        return $this->receiver;
    }

    public function setReceiver(?User $receiver): self
    {
        $this->receiver = $receiver;

        return $this;
    }

    public function getContent(): ?string
    {
        return $this->content;
    }

    public function setContent(string $content): self
    {
        $this->content = $content;

        return $this;
    }

    public function getSendAt(): ?\DateTimeInterface
    {
        return $this->sendAt;
    }

    public function setSendAt(\DateTimeInterface $sendAt): self
    {
        $this->sendAt = $sendAt;

        return $this;
    }

    public function getIsRead(): ?bool
    {
        return $this->isRead;
    }

    public function setIsRead(bool $isRead): self
    {
        $this->isRead = $isRead;

        return $this;
    }

    public function getFileMessage(): ?string
    {
        return $this->fileMessage;
    }

    public function setFileMessage(?string $fileMessage): self
    {
        $this->fileMessage = $fileMessage;

        return $this;
    }

    /**
     * @param File|\Symfony\Component\HttpFoundation\File\UploadedFile $imageFileMessage
     */
    public function setImageFileMessage(?File $imageFileMessage = null): void
    {
        $this->imageFileMessage = $imageFileMessage;

        if (null !== $imageFileMessage) 
        {
            $this->updatedAt = new \DateTimeImmutable();
        }
    }

    public function getImageFileMessage(): ?File
    {
        return $this->imageFileMessage;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getAds(): ?Ad
    {
        return $this->ads;
    }

    public function setAds(?Ad $ads): self
    {
        $this->ads = $ads;

        return $this;
    }


}
