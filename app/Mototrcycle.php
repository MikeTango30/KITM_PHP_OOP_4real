<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 11:02
 */

namespace OOP;

class Mototrcycle extends Vehicle
{
    private $wheelCount;

    public function __construct($model, $make, $wheelCount)
    {
        parent::__construct($model, $make);
        $this->model = $model;
        $this->make = $make;
        $this->wheelCount = $wheelCount;
    }

    /**
     * @return mixed
     */
    public function getWheelCount()
    {
        return $this->wheelCount;
    }

    /**
     * @param mixed $wheelCount
     */
    public function setWheelCount($wheelCount)
    {
        $this->wheelCount = $wheelCount;
    }

    public function showData() {
        $data[] = $this->getModel();
        $data[] = $this->getMake();
        $data[] = $this->getPrice();
        $data[] = $this->getWeight();
        $data[] = $this->getWheelCount();
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