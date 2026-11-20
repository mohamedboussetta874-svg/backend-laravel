<?php

namespace MathPro\Arithmetique;

class Calculatrice
{
    private float $nombre1;
    private float $nombre2;

    
    public function __construct(float $nombre1, float $nombre2)
    {
        $this->nombre1 = $nombre1;
        $this->nombre2 = $nombre2;
    }

    
    public function getNombre1(): float
    {
        return $this->nombre1;
    }

    public function getNombre2(): float
    {
        return $this->nombre2;
    }

    
    public function setNombre1(float $nombre1): void
    {
        $this->nombre1 = $nombre1;
    }

    public function setNombre2(float $nombre2): void
    {
        $this->nombre2 = $nombre2;
    }

    
    public function addition(): float
    {
        return $this->nombre1 + $this->nombre2;
    }

    
    public function soustraction(): float
    {
        return $this->nombre1 - $this->nombre2;
    }

    
    public function multiplication(): float
    {
        return $this->nombre1 * $this->nombre2;
    }

    
    public function division(): float
    {
        if ($this->nombre2 == 0) {
            throw new \DivisionByZeroError(
                "Division par zéro impossible."
            );
        }

        return $this->nombre1 / $this->nombre2;
    }

    
    public function puissance(): float
    {
        return $this->nombre1 ** $this->nombre2;
    }

    
    public function racineCarree(): float
    {
        if ($this->nombre1 < 0) {
            throw new \DomainException(
                "Racine carrée d'un nombre négatif non définie."
            );
        }

        return sqrt($this->nombre1);
    }
}
