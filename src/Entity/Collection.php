<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CollectionRepository")
 */
class Collection
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
}
