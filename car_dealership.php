<?php

    class Car
    {
      public $make_model;
      public $price;
      public $miles;


      function __construct($make_model, $price, $miles)
      {
        $this->model = $make_model;
        $this->price = $price;
        $this->photo = $photo;
        $this->miles = $miles;
      }

    }

    $first_car = new Car ("Honda_Accord", 5000 , 200);
    $second_car = new Car ("Honda_Element", 1000, 200);

    $cars = array($first_car, $second_car);
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <title>Car Shop</title>
</head>
  <body>
    <div class="container">
      <h1>Find a Car</h1>
        <?php
          foreach ($cars as $car) {
            echo "<div class='row'>
                <div class='col-md-6'>
                    <img src='$car->photo'>
                    </div>
                    <div class='col-md-6'>
                        <p>$car->model</p>
                        <p>$$car->price</p>
                        <p>$car->miles</p>
                    </div>
                  </div>
                    ";
          }
          ?>
      </div>
  </body>
</html>
