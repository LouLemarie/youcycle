<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BinRepository")
 */
class Bin
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
    private $localisation;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $serial_nb;

    /**
     * @ORM\Column(type="integer")
     */
    private $volume;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\City", inversedBy="bins")
     * @ORM\JoinColumn(nullable=false)
     */
    private $city;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\City", inversedBy="bins")
     * @ORM\JoinColumn(nullable=false)
     */
    private $Collection;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\City", cascade={"persist", "remove"})
     */
    private $Admin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(string $localisation): self
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getSerialNb(): ?string
    {
        return $this->serial_nb;
    }

    public function setSerialNb(string $serial_nb): self
    {
        $this->serial_nb = $serial_nb;

        return $this;
    }

    public function getVolume(): ?int
    {
        return $this->volume;
    }

    public function setVolume(int $volume): self
    {
        $this->volume = $volume;

        return $this;
    }

    public function getCity(): ?City
    {
        return $this->city;
    }

    public function setCity(?City $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getCollection(): ?City
    {
        return $this->Collection;
    }

    public function setCollection(?City $Collection): self
    {
        $this->Collection = $Collection;

        return $this;
    }

    public function getAdmin(): ?City
    {
        return $this->Admin;
    }

    public function setAdmin(?City $Admin): self
    {
        $this->Admin = $Admin;

        return $this;
    }
}
