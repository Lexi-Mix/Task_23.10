<?php
interface GameTransportInterface 
{
    public function Go(float $speed);
}
abstract class GameTransport implements GameTransportInterface
{
    public $width = 0;
    public $lenght = 0;
    public $color = '';
    public $speed = 0;
    public $status = 'Stop';

        public function Go(float $speed){
            if ($speed != 0 && $speed > 0 ) {
                $this->speed = $speed;
                $this->status = 'MoveAhead';
                echo "Status: {$this->status} , Speed = {$this->speed}";
            } elseif ($speed != 0 && $speed < 0){
                $this->speed = $speed;
                $this->status = 'MoveBack';
                echo "Status: {$this->status} , Speed = {$this->speed}";
            }
            else {
                $this->speed = $speed;
                echo "Status: {$this->status} , Speed = {$this->speed}";
                return null;
            }
        }
}
class Cars extends GameTransport
{
    public $numberOfSeats = 0;
    public $enginesType = '';
    public $signal = 'Off';
    public $carBrush = 'Off';

    public function NitrousOxideLevel(int $nitroLevel){
        $this->speed = $this->speed*$nitroLevel;
        echo 'Get Nitro, speed = ' . $this->speed;
    }
    public function getSignal(string $signal) :string
    {
        if ($signal === 'On'){
            $this->signal = $signal;
            echo "Siglan status: {$this->signal}";
        } elseif ($signal === 'Off'){
            $this->signal = $signal;
            echo "Siglan status: {$this->signal}";
        }
        else
            echo "Siglan status: {$this->signal}";
            return $this->signal;
    }
    public function getCarBrush(string $carBrush) : string
    {
        if ($carBrush === 'On'){
            $this->carBrush = $carBrush;
            echo "carBrush status: {$this->carBrush}";
        } elseif ($carBrush === 'Off'){
            $this->carBrush = $carBrush;
            echo "carBrush status: {$this->carBrush}";
        }
        else
            echo "carBrush status: {$this->carBrush}";
        return $this->carBrush;
    }
}
class SpecialTransport extends GameTransport {
    public $weight = 0;
    public $power = 0;
    public $usetool = 'Off';
    public function getUsetool(string $usetool): string
    {
        if ($usetool === 'On'){
            $this->usetool = $usetool;
            echo "Use tool status: {$this->usetool}";
        } elseif ($usetool === 'Off'){
            $this->usetool = $usetool;
            echo "Use tool status: {$this->usetool}";
        }
        else
            echo "Use tool status: {$this->usetool}";
        return $this->usetool;
    }
}


