<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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
     * @ORM\ManyToOne(targetEntity="App\Entity\city", inversedBy="bin")
     * @ORM\JoinColumn(nullable=false)
     */
    private $city;





    public function __construct()
    {

    }



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

    public function getCity(): ?city
    {
        return $this->city;
    }

    public function setCity(?city $city): self
    {
        $this->city = $city;

        return $this;
    }






}
