<?php
/**
 * Created by PhpStorm.
 * User: moksleivis
 * Date: 2020-01-30
 * Time: 10:18
 */

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

$vehicle = new Vehicle("Dodge", "Charger");
$vehicle->setPrice("20 000 USD");
$vehicle->setWeight("3 Tons");
$vehicle->setHasEngine(True);
$vehicle->setEnginePower("5000 CC");
$vehicle->setMaxSpeed("300 MPH");
$vehicle->setDescription("Very powerful muscle car");
$vehicle->setPassengerCount("5");

$vehicleData = $vehicle->showData();

?>


<!doctype html>
<html lang="lt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <!-- Bootstrap core CSS -->
  <link href="../src/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="../src/css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
  <div class="container">
    <div class="row">
      <div class="card">
        <div class="card-header">
          <h4><?= $vehicle->getModel() . " " . $vehicle->getMake() ?></h4>
        </div>
        <div class="card-body">
          <ul>
              <?php foreach ($vehicleData as $datum): ?>
                <li><?= $datum; ?></li>
              <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>