<?php

namespace App\Entity;

use ApiPlatform\Core\Annotation\ApiResource;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Mapping\JoinColumn;
use Doctrine\ORM\Mapping\ManyToOne;

/**
 * @ApiResource
 * @ORM\Entity(repositoryClass="App\Repository\BookingRepository")
 */
class Booking
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
    private $begin;

    /**
     * @ORM\Column(type="datetime")
     */
    private $en;

    /**
     * @ORM\Column(type="integer")
     */
    private $people_number;

    /**
     * Many Bookings have One Housing.
     * @ManyToOne(targetEntity="Housing", inversedBy="bookings")
     * @JoinColumn(name="housing_id", referencedColumnName="id")
     */
    private $housing;

    public function getId()
    {
        return $this->id;
    }

    public function getBegin(): ?\DateTimeInterface
    {
        return $this->begin;
    }

    public function setBegin(\DateTimeInterface $begin): self
    {
        $this->begin = $begin;

        return $this;
    }

    public function getEn(): ?\DateTimeInterface
    {
        return $this->en;
    }

    public function setEn(\DateTimeInterface $en): self
    {
        $this->en = $en;

        return $this;
    }

    public function getPeopleNumber(): ?int
    {
        return $this->people_number;
    }

    public function setPeopleNumber(int $people_number): self
    {
        $this->people_number = $people_number;

        return $this;
    }

    public function getHousing(): ?Housing
    {
        return $this->housing;
    }

    public function setHousing(?Housing $housing): self
    {
        $this->housing = $housing;

        return $this;
    }
}
