<?php
namespace AutoApp\Transmissions;

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
