<?php

namespace App\Entity;

use App\Repository\QuestionRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=QuestionRepository::class)
 */
class Question
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $Theme;

    /**
     * @ORM\Column(type="string", length=64)
     */
    private $Difficulte;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTheme(): ?string
    {
        return $this->Theme;
    }

    public function setTheme(string $Theme): self
    {
        $this->Theme = $Theme;

        return $this;
    }

    public function getDifficulte(): ?string
    {
        return $this->Difficulte;
    }

    public function setDifficulte(string $Difficulte): self
    {
        $this->Difficulte = $Difficulte;

        return $this;
    }
}
