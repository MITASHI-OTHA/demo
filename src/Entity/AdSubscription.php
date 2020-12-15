<?php

namespace App\Entity;

use App\Repository\AdSubscriptionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AdSubscriptionRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class AdSubscription
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
    private $name;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="adSubscriptions")
     */
    private $subscriber;

    /**
     * @ORM\Column(type="datetime")
     */
    private $subscribedAt;

    /**
     * @ORM\OneToMany(targetEntity=Ad::class, mappedBy="typeAbonnement")
     */
    private $ads;

    /**
     * @ORM\PrePersist
     */
    public function initializeSubscribedAt()
    {
        if (null === $this->subscribedAt) 
        {
            $this->subscribedAt = new \DateTime;
        }
    }

    public function __construct()
    {
        $this->ads = new ArrayCollection();
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

    public function getSubscriber(): ?User
    {
        return $this->subscriber;
    }

    public function setSubscriber(?User $subscriber): self
    {
        $this->subscriber = $subscriber;

        return $this;
    }

    public function getSubscribedAt(): ?\DateTimeInterface
    {
        return $this->subscribedAt;
    }

    public function setSubscribedAt(\DateTimeInterface $subscribedAt): self
    {
        $this->subscribedAt = $subscribedAt;

        return $this;
    }

    /**
     * @return Collection|Ad[]
     */
    public function getAds(): Collection
    {
        return $this->ads;
    }

    public function addAd(Ad $ad): self
    {
        if (!$this->ads->contains($ad)) {
            $this->ads[] = $ad;
            $ad->setTypeAbonnement($this);
        }

        return $this;
    }

    public function removeAd(Ad $ad): self
    {
        if ($this->ads->contains($ad)) {
            $this->ads->removeElement($ad);
            // set the owning side to null (unless already changed)
            if ($ad->getTypeAbonnement() === $this) {
                $ad->setTypeAbonnement(null);
            }
        }

        return $this;
    }

}
