<?php

namespace App\Entity;

use App\Repository\LevelRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LevelRepository::class)
 */
class Level
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=55)
     */
    private $grade;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $schoolClass;

    /**
     * @ORM\OneToMany(targetEntity=Learner::class, mappedBy="level")
     */
    private $learners;

    public function __construct()
    {
        $this->learners = new ArrayCollection();
        $this->matters = new ArrayCollection();
    }

    public function __toString(): string
    {
        return $this->grade.' | '.$this->schoolClass;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getGrade(): ?string
    {
        return $this->grade;
    }

    public function setGrade(string $grade): self
    {
        $this->grade = $grade;

        return $this;
    }

    public function getSchoolClass(): ?string
    {
        return $this->schoolClass;
    }

    public function setSchoolClass(string $schoolClass): self
    {
        $this->schoolClass = $schoolClass;

        return $this;
    }

    /**
     * @return Collection|Learner[]
     */
    public function getLearners(): Collection
    {
        return $this->learners;
    }

    public function addLearner(Learner $learner): self
    {
        if (!$this->learners->contains($learner)) {
            $this->learners[] = $learner;
            $learner->setLevel($this);
        }

        return $this;
    }

    public function removeLearner(Learner $learner): self
    {
        if ($this->learners->contains($learner)) {
            $this->learners->removeElement($learner);
            // set the owning side to null (unless already changed)
            if ($learner->getLevel() === $this) {
                $learner->setLevel(null);
            }
        }

        return $this;
    }
}