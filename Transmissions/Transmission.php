<?php
namespace AutoApp\Transmissions;

//use AutoApp\Transmissions\TransmissionAuto;
//use AutoApp\Transmissions\TransmissionManual;

class Transmission
{

    public function transmissionType($type, $moveSide)
    {
        $transmissionAuto = new TransmissionAuto();
        $transmissionManual = new TransmissionManual();

        if ($type === 'auto') { //проверяем тип трансмиссии
            if ($moveSide === 'вперед') { //уточняем сторону движения вместе с типом данных
                return $transmissionAuto->moveForvard('вперед') ;
            } elseif ($moveSide === 'назад') {
                return $transmissionAuto->moveBackward('назад');
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
//$one = new Transmission();
//print_r($one->transmissionType('auto', 'вперед'));
