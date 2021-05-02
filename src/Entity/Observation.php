<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use App\Repository\ObservationRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ApiResource()
 * @ORM\Entity(repositoryClass=ObservationRepository::class)
 */
class Observation
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $datetime;

    /**
     * @ORM\Column(type="decimal", precision=6, scale=2)
     */
    private $value;

    /**
     * @ORM\ManyToOne(targetEntity=SetPoint::class, inversedBy="observations")
     * @ORM\JoinColumn(nullable=false)
     */
    private $setPoint;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatetime(): ?\DateTimeInterface
    {
        return $this->datetime;
    }

    public function setDatetime(\DateTimeInterface $datetime): self
    {
        $this->datetime = $datetime;

        return $this;
    }

    public function getValue(): ?string
    {
        return $this->value;
    }

    public function setValue(string $value): self
    {
        $this->value = $value;

        return $this;
    }

    public function getSetPoint(): ?SetPoint
    {
        return $this->setPoint;
    }

    public function setSetPoint(?SetPoint $setPoint): self
    {
        $this->setPoint = $setPoint;

        return $this;
    }
}
