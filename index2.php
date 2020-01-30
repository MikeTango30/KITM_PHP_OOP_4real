<?php
require "vendor/autoload.php";

use OOP\Vehicle;
use OOP\Bicycle;
use OOP\Mototrcycle;
use OOP\Automobile;

$vehicle = new Vehicle("Dodge", "Charger");
$vehicle->setPrice("20 000 USD");
$vehicle->setWeight("3 Tons");
$vehicle->setHasEngine(True);
$vehicle->setEnginePower("5000 CC");
$vehicle->setMaxSpeed("300 MPH");
$vehicle->setDescription("Very powerful muscle car");
$vehicle->setPassengerCount("5");

$vehicleData = $vehicle->showData();

$automobile = new Automobile("Audi", "Quattro", "Peach");
$motorcycle = new Mototrcycle("Honda", "Hornet", 2);
$bicycle = new Bicycle("Author", "Reflex", "Hard tail");

$automobileData = $automobile->showData();
$motorcycleData = $motorcycle->showData();
$bicycleData = $bicycle->showData();

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
  <link href="/src/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <link href="/src/css/styles.css" rel="stylesheet">
</head>
<body>
<div class="container-fluid">
  <div class="container">
      <div class="row">
          <div class="card">
              <div class="card-header">
                  <h4><?= $bicycle->getModel() . " " . $bicycle->getMake() ?></h4>
              </div>
              <div class="card-body">
                  <ul>
                      <?php foreach ($bicycleData as $datum): ?>
                          <?php if(isset($datum)):?>
                              <li><?= $datum; ?></li>
                          <?php endif; ?>
                      <?php endforeach; ?>
                  </ul>
                  <div class="card-footer">
                      <?= get_class($bicycle); ?>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="card">
              <div class="card-header">
                  <h4><?= $automobile->getModel() . " " . $automobile->getMake() ?></h4>
              </div>
              <div class="card-body">
                  <ul>
                      <?php foreach ($automobileData as $datum): ?>
                          <?php if(isset($datum)):?>
                              <li><?= $datum; ?></li>
                          <?php endif; ?>
                      <?php endforeach; ?>
                  </ul>
                  <div class="card-footer">
                      <?=get_class($automobile);?>
                  </div>
              </div>
          </div>
      </div>
      <div class="row">
          <div class="card">
              <div class="card-header">
                  <h4><?= $motorcycle->getModel() . " " . $motorcycle->getMake() ?></h4>
              </div>
              <div class="card-body">
                  <ul>
                      <?php foreach ($motorcycleData as $datum): ?>
                          <?php if(isset($datum)):?>
                          <li><?= $datum; ?></li>
                          <?php endif; ?>
                      <?php endforeach; ?>
                  </ul>
                  <div class="card-footer">
                      <?=get_class($vehicle);?>
                  </div>
              </div>
          </div>
      </div>
</div>
</div>
</body>
</html>