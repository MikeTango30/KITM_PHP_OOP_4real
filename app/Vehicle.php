<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 10:18
 */

namespace OOP;

class Vehicle
{
    protected $model;
    protected $make;
    protected $price;
    protected $weight;
    protected $hasEngine;
    protected $enginePower;
    protected $maxSpeed;
    protected $description;
    protected $passengerCount;

    public function __construct(string $model, string $make)
    {
        $this->model = $model;
        $this->make = $make;
    }

    public function showData() {
      $data[] = $this->getModel();
      $data[] = $this->getMake();
      $data[] = $this->getPrice();
      $data[] = $this->getWeight();
      $data[] = $this->getHasEngine();
      if ($this->getHasEngine()) {
          $data[] = $this->getEnginePower();
          $data[] = $this->getMaxSpeed();
          $data[] = $this->getDescription();
          $data[] = $this->getPassengerCount();
      }

      return $data;
    }

    /**
     * @return string
     */
    public function getModel(): string
    {
        return $this->model;
    }

    /**
     * @param string $model
     */
    public function setModel(string $model)
    {
        $this->model = $model;
    }

    /**
     * @return string
     */
    public function getMake(): string
    {
        return $this->make;
    }

    /**
     * @param string $make
     */
    public function setMake(string $make)
    {
        $this->make = $make;
    }

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price)
    {
        $this->price = $price;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight)
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getHasEngine()
    {
        return $this->hasEngine;
    }

    /**
     * @param mixed $hasEngine
     */
    public function setHasEngine($hasEngine)
    {
        $this->hasEngine = $hasEngine;
    }

    /**
     * @return mixed
     */
    public function getEnginePower()
    {
        return $this->enginePower;
    }

    /**
     * @param mixed $enginePower
     */
    public function setEnginePower($enginePower)
    {
        $this->enginePower = $enginePower;
    }

    /**
     * @return mixed
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param mixed $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description)
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPassengerCount()
    {
        return $this->passengerCount;
    }

    /**
     * @param mixed $passengerCount
     */
    public function setPassengerCount($passengerCount)
    {
        $this->passengerCount = $passengerCount;
    }

}