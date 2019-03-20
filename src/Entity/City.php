<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CityRepository")
 */
class City
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
     * @ORM\Column(type="integer")
     */
    private $zip_code;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Bin", mappedBy="city")
     */
    private $bin;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Collectin", mappedBy="city")
     */
    private $collectin;


    public function __construct()
    {
        $this->bin = new ArrayCollection();
        $this->collectin = new ArrayCollection();
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

    public function getZipCode(): ?int
    {
        return $this->zip_code;
    }

    public function setZipCode(int $zip_code): self
    {
        $this->zip_code = $zip_code;

        return $this;
    }

    /**
     * @return Collection|Bin[]
     */
    public function getBin(): Collection
    {
        return $this->bin;
    }

    public function addBin(Bin $bin): self
    {
        if (!$this->bin->contains($bin)) {
            $this->bin[] = $bin;
            $bin->setCity($this);
        }

        return $this;
    }

    public function removeBin(Bin $bin): self
    {
        if ($this->bin->contains($bin)) {
            $this->bin->removeElement($bin);
            // set the owning side to null (unless already changed)
            if ($bin->getCity() === $this) {
                $bin->setCity(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection|Collectin[]
     */
    public function getCollectin(): Collection
    {
        return $this->collectin;
    }

    public function addCollectin(Collectin $collectin): self
    {
        if (!$this->collectin->contains($collectin)) {
            $this->collectin[] = $collectin;
            $collectin->setCity($this);
        }

        return $this;
    }

    public function removeCollectin(Collectin $collectin): self
    {
        if ($this->collectin->contains($collectin)) {
            $this->collectin->removeElement($collectin);
            // set the owning side to null (unless already changed)
            if ($collectin->getCity() === $this) {
                $collectin->setCity(null);
            }
        }

        return $this;
    }

}
