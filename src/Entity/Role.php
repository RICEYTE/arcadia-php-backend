<?php

namespace App\Entity;

use App\Repository\RoleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RoleRepository::class)]
class Role
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $role_id = null;

    #[ORM\Column(length: 50)]
    private ?string $label = null;

    #[ORM\ManyToOne(inversedBy: 'role')]
    private ?Utilisateur $roles = null;


    public function getRoleId(): ?int
    {
        return $this->role_id;
    }

    public function getLabel(): ?string
    {
        return $this->label;
    }

    public function setLabel(string $label): static
    {
        $this->label = $label;

        return $this;
    }

    public function getRoles(): ?Utilisateur
    {
        return $this->roles;
    }

    public function setRoles(?Utilisateur $roles): static
    {
        $this->roles = $roles;

        return $this;
    }
}
