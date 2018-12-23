<?php
//use AutoApp\Car;
use AutoApp\Car\Car;

require_once "Car\Car.php";
require_once "Engine\Engine.php";
require_once "Transmissions\Transmission.php";
require_once "Transmissions\TransmissionAuto.php";
require_once "Transmissions\TransmissionManual.php";

$newcar = new Car();
$newcar->move(1,1, 'rrrr');
