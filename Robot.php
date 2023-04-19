<?php

class Robot
{
    protected float $weight;
    protected float $speed;
    protected float $height;

    public function getWeight(): float
    {
        return $this->weight;
    }

    public function getSpeed(): float
    {
        return $this->speed;
    }

    public function getHeight(): float
    {
        return $this->height;
    }
}