<?php
include 'Car.php';
$car1 = new Car();
$car1->setMake('Toyota');
echo $car1->getMake();
$car1->start();

