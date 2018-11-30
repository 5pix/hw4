<?php
/**
 * Created by PhpStorm.
 * User: AnyCoder
 * Date: 24.11.2018
 * Time: 19:50
 *
 * 1 лошадь = 2 метра в секунду
 * 10 метров += 5 градусов

 */

class Engine
{
    protected $state = 'off';
    protected $totalDistance = 0;

    public function start()
    {
        $this->state = 'on';
            echo 'двигатель включен';
    }
    public function stop()
    {
        $this->state = 'off';
            echo 'двигатель выключен';
    }
    public function getDistance()
    {
        return $this->totalDistance;
    }

    public function accelerate()
    {
        return $this->totalDistance + 1;
    }
}
$two = new Engine(); //создаем двигатель
print_r($two->start().PHP_EOL); //запускаем его
print_r($two->getDistance().PHP_EOL); //газуем
print_r($two->stop().PHP_EOL); //выключаем двигатель
print_r($two->accelerate().PHP_EOL); //узнаем дистанцию
