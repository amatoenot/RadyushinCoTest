<?php

declare(strict_types=1);

namespace App\Entity;

class Package
{
    private $weight;

    public function __construct(int $weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return int
     */
    public function getWeight(): int
    {
        return $this->weight;
    }

    /**
     * @param int $weight
     */
    public function setWeight(int $weight): void
    {
        $this->weight = $weight;
    }
}