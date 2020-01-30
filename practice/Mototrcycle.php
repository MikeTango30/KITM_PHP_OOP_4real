<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 11:02
 */

class Mototrcycle extends Vehicle
{
    private $wheelCount;

    public function __construct($model, $make, $wheelCount)
    {
        parent::__construct($model, $make);
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
}