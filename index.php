<?php
include 'FactoryRobot.php';
include 'Robot.php';
include 'Robot1.php';
include 'Robot2.php';
include 'MergeRobot.php';

$factory = new FactoryRobot();
$factory->addType(new Robot1());
$factory->addType(new Robot2());

echo '<pre>';
var_dump($factory->createRobot1(5));
var_dump($factory->createRobot2(2));
echo '</pre>';

$mergeRobot = new MergeRobot();
$mergeRobot->addRobot(new Robot2());
$mergeRobot->addRobot($factory->createRobot2(2)[0]);

$array = $factory->createMergeRobot(1);
$res = reset($array);

echo $res->getSpeed();
echo '<br>';
echo $res->getWeight();