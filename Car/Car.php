<?php
namespace AutoApp\Car;

use AutoApp\Engine\Engine;
use AutoApp\Transmissions\Transmission;


class Car
{
    public function move($distance, $speed, $side)
    {
        //проверить параметры по типам...
        $startEngine = new Engine();
        $startEngine->start();
        $transmission = new Transmission();
        if ($transmission->transmissionType('auto', 'вперед')) {
            echo 'едем';
        }
    }
}
$check = new Car();
$check->move(1,1,'r');
