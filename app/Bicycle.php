<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 11:03
 */

namespace OOP;

class Bicycle extends Vehicle
{
    private $frameType;

    public function __construct($model, $make, $frameType)
    {
        parent::__construct($model, $make);
        $this->model = $model;
        $this->make = $make;
        $this->frameType = $frameType;
    }

    /**
     * @return mixed
     */
    public function getFrameType()
    {
        return $this->frameType;
    }

    /**
     * @param mixed $frameType
     */
    public function setFrameType($frameType)
    {
        $this->frameType = $frameType;
    }

    public function showData() {
        $data[] = $this->getModel();
        $data[] = $this->getMake();
        $data[] = $this->getPrice();
        $data[] = $this->getWeight();
        $data[] = $this->getFrameType();

        return $data;
    }
}