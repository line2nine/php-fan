<?php
define("SLOW", "1");
define("MEDIUM", "2");
define("FAST", "3");

class Fan
{
    private $speed = SLOW;
    private $status = false;
    private $radius = 5;
    private $color = "blue";

    public function __construct()
    {

    }

    public function isStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getSpeed()
    {
        return $this->speed;
    }

    public function setSpeed($speed)
    {
        $this->speed = $speed;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color)
    {
        $this->color = $color;
    }

    public function getRadius()
    {
        return $this->radius;
    }

    public function setRadius($radius)
    {
        $this->radius = $radius;
    }

    public function toString()
    {
        if ($this->isStatus()) {
            return "<br>Speed is " . $this->speed . "<br>Color is " . $this->color . "<br>Radius is " . $this->radius . "<br>Status: " . "Fan is on";
        } else {
            return "<br>Color is " . $this->color . "<br>Radius is " . $this->radius . "<br>Status: " . "Fan is off";
        }
    }
}