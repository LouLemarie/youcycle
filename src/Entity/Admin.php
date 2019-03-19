<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass="App\Repository\AdminRepository")
 */
class Admin implements UserInterface
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
     * @ORM\Column(type="string", length=255)
     */
    private $firstname;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $pwd;

    /**
     * @ORM\Column(type="json")
     */
    private $role = [];

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\City", cascade={"persist", "remove"})
     */
    private $city;

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

    public function getFirstname(): ?string
    {
        return $this->firstname;
    }

    public function setFirstname(string $firstname): self
    {
        $this->firstname = $firstname;

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

    /**
     * @return mixed
     */
    public function getPwd()
    {
        return $this->pwd;
    }

    /**
     * @param mixed $pwd
     */
    public function setPwd($pwd): void
    {
        $this->pwd = $pwd;
    }

    public function getPassword(): ?string
    {
        return $this->pwd;
    }

    public function setPassword(string $pwd): self
    {
        $this->pwd = $pwd;

        return $this;
    }

    public function getRoles(): ?array
    {
        return $this->role = array();
    }

    public function setRoles(array $role): self
    {
        $this->role[0] = $role;

        return $this;
    }

    public function getCity(): ?City
    {
        return $this->city;
    }

//    //Fonction UserInterface

    public function setCity(?City $city): self
    {
        $this->city = $city;

        return $this;
    }

    public function getSalt()
    {
        return null;
    }
    public function eraseCredentials()
    {
        return null;
    }

    public function getUsername()
    {
        $this->getEmail();
    }

}
