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
     * @ORM\Column(type="integer")
     */
    private $category;

    /**
     * @ORM\Column(type="boolean")
     */
    private $type;

    /**
     * @ORM\ManyToOne(targetEntity=DifficulteQuestion::class, inversedBy="questions")
     * @ORM\JoinColumn(nullable=false)
     */
    private $difficulty;

    /**
     * @ORM\Column(type="text")
     */
    private $question;

    /**
     * @ORM\Column(type="text")
     */
    private $answer;

    /**
     * @ORM\Column(type="text")
     */
    private $incorrect0;

    /**
     * @ORM\Column(type="text")
     * @ORM\JoinColumn(nullable=true)
     */
    private $incorrect1;

    /**
     * @ORM\Column(type="text")
     * @ORM\JoinColumn(nullable=true)
     */
    private $incorrect2;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCategory(): ?int
    {
        return $this->category;
    }

    public function setCategory(int $category): self
    {
        $this->category = $category;

        return $this;
    }

    public function getType(): ?bool
    {
        return $this->type;
    }

    public function setType(bool $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getDifficulty(): ?DifficulteQuestion
    {
        return $this->difficulty;
    }

    public function setDifficulty(?DifficulteQuestion $difficulty): self
    {
        $this->difficulty = $difficulty;

        return $this;
    }

    public function getQuestion(): ?string
    {
        return $this->question;
    }

    public function setQuestion(string $question): self
    {
        $this->question = $question;

        return $this;
    }

    public function getAnswer(): ?string
    {
        return $this->answer;
    }

    public function setAnswer(string $answer): self
    {
        $this->answer = $answer;

        return $this;
    }

    public function getIncorrect0(): ?string
    {
        return $this->incorrect0;
    }

    public function setIncorrect0(string $incorrect0): self
    {
        $this->incorrect0 = $incorrect0;

        return $this;
    }

    public function getIncorrect1(): ?string
    {
        return $this->incorrect1;
    }

    public function setIncorrect1(string $incorrect1): self
    {
        $this->incorrect1 = $incorrect1;

        return $this;
    }

    public function getIncorrect2(): ?string
    {
        return $this->incorrect2;
    }

    public function setIncorrect2(string $incorrect2): self
    {
        $this->incorrect2 = $incorrect2;

        return $this;
    }
}
