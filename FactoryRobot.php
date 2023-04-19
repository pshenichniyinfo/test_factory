<?php

class FactoryRobot
{
    protected array $robotTypes;

    public function addType(Robot $robotType)
    {
        $this->robotTypes[] = $robotType;
    }

    public function createRobot1($count)
    {
        $result = array();
        for ($i = 0; $i < $count; $i++) {
            $result[] = new Robot1();
        }
        return $result;
    }

    public function createRobot2($count)
    {
        $result = array();
        for ($i = 0; $i < $count; $i++) {
            $result[] = new Robot2();
        }
        return $result;
    }

    public function createMergeRobot($count)
    {
        $result = array();
        for ($i = 0; $i < $count; $i++) {
            $mergeRobot = new MergeRobot();
            foreach ($this->robotTypes as $robotType) {
                $mergeRobot->addRobot(new $robotType());
            }
            $result[] = $mergeRobot;
        }
        return $result;
    }
}