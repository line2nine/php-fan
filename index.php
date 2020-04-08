<?php
include "Fan.php";

$fan1 = new Fan();
$fan1->setSpeed(FAST);
$fan1->setRadius(10);
$fan1->setColor("yellow");
$fan1->setStatus(true);

var_dump($fan1->toString());

echo "<br>";
echo "<br>";

$fan2 = new Fan();
$fan2->setSpeed(MEDIUM);
$fan2->setRadius(5);
$fan2->setColor("blue");
$fan2->setStatus(false);

var_dump($fan2->toString());
