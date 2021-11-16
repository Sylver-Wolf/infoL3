<?php

namespace App\Entity;

use App\Repository\SalleRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SalleRepository::class)
 */
class Salle
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    
    ///**
    // * @ORM\Column(type="string", length=255)
    // */
    private $theme;

    ///**
    // * @ORM\Column(type="string", length=255)
    // */
    private $difficulte;
    
    /**
     * @ORM\ManyToOne(targetEntity=ThemeQuestion::class, inversedBy="salles")
     * @ORM\JoinColumn(nullable=false)
     */
    //private $ThemeQuestion;

    /**
     * @ORM\ManyToOne(targetEntity=DifficulteQuestion::class, inversedBy="salles")
     * @ORM\JoinColumn(nullable=false)
     */
    //private $DifficulteQuestion;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $Theme;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $Difficulte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTheme(): ?string
    {
        return $this->theme;
    }

    public function setTheme(string $theme): self
    {
        $this->theme = $theme;

        return $this;
    }

    public function getDifficulte(): ?string
    {
        return $this->difficulte;
    }

    public function setDifficulte(string $difficulte): self
    {
        $this->difficulte = $difficulte;

        return $this;
    }
/*
    public function getThemeQuestion(): ?ThemeQuestion
    {
        return $this->ThemeQuestion;
    }

    public function setThemeQuestion(?ThemeQuestion $ThemeQuestion): self
    {
        $this->ThemeQuestion = $ThemeQuestion;

        return $this;
    }

    public function getDifficulteQuestion(): ?DifficulteQuestion
    {
        return $this->DifficulteQuestion;
    }

    public function setDifficulteQuestion(?DifficulteQuestion $DifficulteQuestion): self
    {
        $this->DifficulteQuestion = $DifficulteQuestion;

        return $this;
    }*/
}
