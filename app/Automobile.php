<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 11:02
 */
namespace OOP;

class Automobile extends Vehicle
{
    private $wunderBaum;

    public function __construct($model, $make, $wunderBaum)
    {
        parent::__construct($model, $make);
        $this->model = $model;
        $this->make = $make;
        $this->wunderBaum = $wunderBaum;
    }

    /**
     * @return mixed
     */
    public function getWunderBaum()
    {
        return $this->wunderBaum;
    }

    /**
     * @param mixed $wunderBaum
     */
    public function setWunderBaum($wunderBaum)
    {
        $this->wunderBaum = $wunderBaum;
    }

    public function showData() {
        $data[] = $this->getModel();
        $data[] = $this->getMake();
        $data[] = $this->getPrice();
        $data[] = $this->getWeight();
        $data[] = $this->getWunderBaum();
        $data[] = $this->getHasEngine();
        if ($this->getHasEngine()) {
            $data[] = $this->getEnginePower();
            $data[] = $this->getMaxSpeed();
            $data[] = $this->getDescription();
            $data[] = $this->getPassengerCount();
        }

        return $data;
    }
}