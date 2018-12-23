<?php
namespace AutoApp\Engine;

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
