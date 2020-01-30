<?php
require "vendor/autoload.php";

use OOP\Teacher;


$user = new Teacher("Jackson", "jack@son.com", "+55 555 55 555");
$user2 = new Teacher("Crystal", "crystal@method.com", "+66 666 66 666");

$userComment = "Jackson is an outstanding guy, who likes cats";
$userComment2 = "Crystal has new bag";

$user->addComment($userComment);
$user2->addComment($userComment2);

$data = $user->show();
$user2Data = $user2->show();


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
          <h4>User Number One</h4>
        </div>
        <div class="card-body">
          <ul>
              <?php foreach ($data as $datum): ?>
                <li><?= $datum; ?></li>
              <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="card">
        <div class="card-header">
          <h4>User Number Two</h4>
        </div>
        <div class="card-body">
          <ul>
              <?php foreach ($user2Data as $datum): ?>
                <li><?= $datum; ?></li>
              <?php endforeach; ?>
          </ul>
        </div>
      </div>
    </div>
    <div class="row">
    </div>
  </div>
</div>
</body>
</html>