<?php
namespace AutoApp\Transmissions;

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
