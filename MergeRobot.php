<?php

class MergeRobot extends Robot
{
    protected array $robots;

    public function addRobot(Robot $robot)
    {
        $this->robots[] = $robot;
    }

    public function getWeight(): float
    {
        $weight = 0;
        foreach ($this->robots as $robot) {
            $weight += $robot->getWeight();
        }
        return $weight;
    }

    public function getHeight(): float
    {
        $height = 0;
        foreach ($this->robots as $robot) {
            $height += $robot->getHeight();
        }
        return $height;
    }

    public function getSpeed(): float
    {
        $speeds = array();
        foreach ($this->robots as $robot) {
            $speeds[] = $robot->getSpeed();
        }
        return min($speeds);
    }
}