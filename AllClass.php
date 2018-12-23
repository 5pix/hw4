<?php
/**
 * Created by PhpStorm.
 * User: AnyCoder
 * Date: 22.12.2018
 * Time: 15:47
 */

class AllClass
{
    public function move($distance, $speed, $side)
    {
        //проверить параметры по типам...
        $startEngine = new Engine();
        $startEngine->start();
        $transmission = new Transmission();
        if ($transmission->transmissionType('auto', 'назад')) {
//            echo '<br> едем ';
//            $transmissionAuto = new TransmissionAuto();
//            $transmissionAuto->moveForvard('вперед');
        }
    }
}
class Engine
{
    protected $state = 'off';
    protected $totalDistance = 0;

    public function start()
    {
        $this->state = 'on';
        echo 'двигатель включен<br/> ';
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

class Transmission
{

    public function transmissionType($type, $moveSide)
    {
        $transmissionAuto = new TransmissionAuto();
        $transmissionManual = new TransmissionManual();

        if ($type === 'auto') { //проверяем тип трансмиссии
            if ($moveSide === 'вперед') { //уточняем сторону движения вместе с типом данных
                echo $transmissionAuto->moveForvard('вперед') ;
            } elseif ($moveSide === 'назад') {
                echo $transmissionAuto->moveBackward('назад');
            }
        } elseif ($type === 'manual') {
            //в первую очередь выясняем куда двигаемся (вперед/назад)
            if ($moveSide === 'вперед') {
                // сначала нужно включить 1-ю передачу, затем вулючить вторую передачу(по параметру скорость)
                return 0;
            } elseif ($type === 'назад') {
                return $transmissionManual->moveBackward('назад'); // class TransmissionManual, метод MoveBack
            } else { //если введен неправильный параметр
                return 'параметр стороны движения задан некорректно.<br> Выберите сторону движения: вперед/назад';
            }
        }
    }
}

class TransmissionAuto
{
    private $forward;
    private $goBack;

    public function moveForvard($moveForvard)
    {
        return $this->forward = $moveForvard;
    }
    public function moveBackward($moveBacnward)
    {
        return $this->goBack = $moveBacnward;
    }
}

class TransmissionManual
{
    //Ручная коробка передач имеет:
    //передачи от 1 до 2. При скорости от 0 до 20 используется передача №1, в противном
    //случае передача №2.
    private $back;
    private $front;

    public function moveForward($moveType = 'вперед')
    {
        //необходимо задавать скорость
        //при получении значения скорости от 1 до 20 - 1 передача
        //остальное 2-я предача
        //скорее всего нужен цикл for для выяснения текущего состояния скорости
        for ($speed = 1; $speed < 20; $speed++) {
            if ($speed < 20) {
                echo 'включили первую передачу';
                return "скорость равна - {$speed}";
            } else {
                return 'включили вторую передачу';
            }
        }
        return $this->front = $moveType;

    }
    public function moveBackward($moveType = 'назад')
    {
        return $this->back = $moveType;
    }
}

$check = new AllClass();
$check->move(1,1,'erer');