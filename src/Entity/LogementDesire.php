<?php

namespace App\Entity;

use App\Repository\LogementDesireRepository;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
/**
 * @ORM\Entity(repositoryClass=LogementDesireRepository::class)
 */
class LogementDesire
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @var array
     * @ORM\Column(type="array")
     */
    private $type;

    /**
     * @Assert\GreaterThan(0)
     * @Assert\NotBlank(message="veuillez remplir ce champ")
     * @ORM\Column(type="integer")
     */
    private $surface_desire;

    /**
     * @Assert\NotBlank(message="veuillez remplir ce champ")
     * @ORM\Column(type="integer")
     */
    private $surface_min;

    /**
     * @Assert\NotBlank(message="Veuillez remplir ce champ")
     * @ORM\Column(type="integer")
     */
    private $surface_max;

    /**
     * @ORM\Column(type="integer")
     */
    private $enveloppe_max;

    public function __construct(Array $properties=array())
    {
        if (count($properties) !== 0) {
	        $this->hydrate($properties);
        }
    }

	/**
	 * @param $array
	 * @return $this
	 */
	public function hydrate($array): LogementDesire
	{
        foreach($array as $key => $value){
            $this->{$key} = $value;
        }

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getType(): ?array
    {
        return $this->type;
    }

    public function setType(array $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getSurfaceDesire(): ?int
    {
        return $this->surface_desire;
    }

    public function setSurfaceDesire(int $surface_desire): self
    {
        $this->surface_desire = $surface_desire;

        return $this;
    }

    public function getSurfaceMin(): ?int
    {
        return $this->surface_min;
    }

    public function setSurfaceMin(int $surface_min): self
    {
        $this->surface_min = $surface_min;

        return $this;
    }

    public function getSurfaceMax(): ?int
    {
        return $this->surface_max;
    }

    public function setSurfaceMax(int $surface_max): self
    {
        $this->surface_max = $surface_max;

        return $this;
    }

    public function getEnveloppeMax(): ?int
    {
        return $this->enveloppe_max;
    }

    public function setEnveloppeMax(int $enveloppe_max): self
    {
        $this->enveloppe_max = $enveloppe_max;

        return $this;
    }
}
