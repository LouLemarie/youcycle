<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CollectinRepository")
 */
class Collectin
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $begin_co;

    /**
     * @ORM\Column(type="datetime")
     */
    private $end_co;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\City", inversedBy="collectin")
     * @ORM\JoinColumn(nullable=false)
     */
    private $City;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getBeginCo(): ?\DateTimeInterface
    {
        return $this->begin_co;
    }

    public function setBeginCo(\DateTimeInterface $begin_co): self
    {
        $this->begin_co = $begin_co;

        return $this;
    }

    public function getEndCo(): ?\DateTimeInterface
    {
        return $this->end_co;
    }

    public function setEndCo(\DateTimeInterface $end_co): self
    {
        $this->end_co = $end_co;

        return $this;
    }

    public function getCity(): ?City
    {
        return $this->City;
    }

    public function setCity(?City $City): self
    {
        $this->City = $City;

        return $this;
    }
}
