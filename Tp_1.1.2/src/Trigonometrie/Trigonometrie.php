<?php

namespace MathPro\Trigonometrie;

class Trigonometrie
{
    private float $angle;

    
    public function __construct(float $angle)
    {
        $this->angle = $angle;
    }

    
    public function getAngle(): float
    {
        return $this->angle;
    }

    
    public function setAngle(float $angle): void
    {
        if (!is_finite($angle)) {
            throw new \InvalidArgumentException("Angle invalide.");
        }

        $this->angle = $angle;
    }

    
    public function degresEnRadians(): float
    {
        return deg2rad($this->angle);
    }

    
    public function sinus(): float
    {
        return sin($this->degresEnRadians());
    }

    
    public function cosinus(): float
    {
        return cos($this->degresEnRadians());
    }

    
    public function tangente(): float
    {
        $angle = $this->degresEnRadians();

        if (abs(cos($angle)) < 1e-12) {
            throw new \DomainException(
                "Tangente non définie pour cet angle."
            );
        }

        return tan($angle);
    }

    
    public static function radiansEnDegres(float $radians): float
    {
        return rad2deg($radians);
    }
}
