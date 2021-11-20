<?php

namespace App\Entity;

use App\Repository\DifficulteQuestionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DifficulteQuestionRepository::class)
 */
class DifficulteQuestion

{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=32)
     */
    private $difficulte;

    /**
     * @ORM\OneToMany(targetEntity=Salle::class, mappedBy="DifficulteQuestion")
     */
    private $salles;

    /**
     * @ORM\OneToMany(targetEntity=Question::class, mappedBy="difficulty")
     */
    private $questions;

    public function __construct()
    {
        $this->salles = new ArrayCollection();
        $this->questions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
    

    /**
     * @return Collection|Salle[]
     */
    /*public function getSalles(): Collection
    {
        return $this->salles;
    }

    public function addSalle(Salle $salle): self
    {
        if (!$this->salles->contains($salle)) {
            $this->salles[] = $salle;
            $salle->setDifficulteQuestion($this);
        }

        return $this;
    }

    public function removeSalle(Salle $salle): self
    {
        if ($this->salles->removeElement($salle)) {
            // set the owning side to null (unless already changed)
            if ($salle->getDifficulteQuestion() === $this) {
                $salle->setDifficulteQuestion(null);
            }
        }

        return $this;
    }*/

    /**
     * @return Collection|Question[]
     */
    public function getQuestions(): Collection
    {
        return $this->questions;
    }

    public function addQuestion(Question $question): self
    {
        if (!$this->questions->contains($question)) {
            $this->questions[] = $question;
            $question->setDifficulty($this);
        }

        return $this;
    }

    public function removeQuestion(Question $question): self
    {
        if ($this->questions->removeElement($question)) {
            // set the owning side to null (unless already changed)
            if ($question->getDifficulty() === $this) {
                $question->setDifficulty(null);
            }
        }

        return $this;
    }
}

//INSERT INTO difficulte_question VALUES (1, 'Facile'), (2, 'Normale'),(3, 'Difficile')