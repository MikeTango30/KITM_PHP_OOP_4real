<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 11:02
 */

class Automobile extends Vehicle
{
    private $wunderBaum;

    public function __construct($model, $make, $wunderBaum)
    {
        parent::__construct($model, $make);
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
}