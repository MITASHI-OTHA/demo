<?php

namespace App\Entity;

use App\Entity\Image;
use App\Entity\BodyText;
use Cocur\Slugify\Slugify;
use App\Entity\PostCategories;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\PostRepository;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\Validator\Constraints as Assert;

/**
 * @ORM\Entity(repositoryClass=PostRepository::class)
 * @ORM\HasLifecycleCallbacks()
 */
class Post
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
     * @ORM\Column(type="text", nullable=true)
     */
    private $chapeau;

    /**
     * @ORM\OneToMany(targetEntity=BodyText::class, mappedBy="posts", orphanRemoval=true, cascade={"persist", "remove"})
     */
    private $contents;

    /**
     * @ORM\OneToMany(targetEntity=Image::class, mappedBy="posts", cascade={"persist", "remove"})
     */
    private $images;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $slug;

    /**
     * @ORM\Column(type="datetime")
     */
    private $createdAt;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $updatedAt;

    /**
     * @ORM\OneToOne(targetEntity=PostCategories::class, cascade={"persist", "remove"})
     * @Assert\Valid
     */
    private $category;

    /**
     * @ORM\PrePersist
     */
    public function initializeCreatedAt()
    {
        if (null === $this->createdAt) 
        {
            $this->createdAt = new \DateTime;
        }
    }

    /**
     * @ORM\PreUpdate
     */
    public function initializeUpdatedAt()
    {
        $this->updatedAt = new \DateTime;
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

    public function __construct()
    {
        $this->contents = new ArrayCollection();
        $this->images = new ArrayCollection();
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

    public function getChapeau(): ?string
    {
        return $this->chapeau;
    }

    public function setChapeau(?string $chapeau): self
    {
        $this->chapeau = $chapeau;

        return $this;
    }

    /**
     * @return Collection|BodyText[]
     */
    public function getContents(): Collection
    {
        return $this->contents;
    }

    public function addContent(BodyText $content): self
    {
        if (!$this->contents->contains($content)) 
        {
            $this->contents[] = $content;
            $content->setPosts($this);
        }

        return $this;
    }

    public function removeContent(BodyText $content): self
    {
        if ($this->contents->contains($content)) {
            $this->contents->removeElement($content);
            // set the owning side to null (unless already changed)
            if ($content->getPosts() === $this) {
                $content->setPosts(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Image[]
     */
    public function getImages(): Collection
    {
        return $this->images;
    }

    public function addImage(Image $image): self
    {
        if (!$this->images->contains($image)) {
            $this->images[] = $image;
            $image->setPosts($this);
        }

        return $this;
    }

    public function removeImage(Image $image): self
    {
        if ($this->images->contains($image)) {
            $this->images->removeElement($image);
            // set the owning side to null (unless already changed)
            if ($image->getPosts() === $this) {
                $image->setPosts(null);
            }
        }

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

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeInterface
    {
        return $this->updatedAt;
    }

    public function setUpdatedAt(?\DateTimeInterface $updatedAt): self
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    public function getCategory(): ?PostCategories
    {
        return $this->category;
    }

    public function setCategory(?PostCategories $category): self
    {
        $this->category = $category;

        return $this;
    }
}
