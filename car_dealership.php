<?php

    class Car
    {
      private $make_model;
      private $price;
      private $miles;
      private $photo;

      function __construct($make_model, $price = 100000, $photo, $miles)
      {
        $this->model = $make_model;
        $this->price = $price;
        $this->photo = $photo;
        $this->miles = $miles;
      }

      function setMake($new_make)
      {
        $this->make_model = $new_make;
      }

      function getMake()
      {
        return $this->make_model;
      }

      function setPrice($new_price)
      {
        $float_price = (float) $new_price;
        if ($float_price != 0) {
          $formatted_price = number_format($float_price, 2);
          $this->price = $formatted_price;
        }
      }

      function getPrice()
      {
        return $this->price;
      }

      function setMiles($new_miles)
      {
        $this->miles = $new_miles;
      }

      function getMiles()
      {
        return $this->miles;
      }

      function setPhoto($new_photo)
      {
        $this->photo = $new_photo;
      }

      function getPhoto()
      {
        return $this->photo;
      }
    }

    $first_car = new Car ("Honda Accord", 1000, "img/hondaaccord.jpeg", 200);
    $second_car = new Car ("Honda Element", 1000, "img/hondaelement.jpeg", 200);
    $third_car = new Car ("Ferrari LaFerrari", 50000, "img/ferrari.jpeg", 50);
    $fourth_car = new Car ("Tesla Model S", 3000, "img/tesla.jpg", 3000);


    $cars = array($first_car, $second_car, $third_car, $fourth_car);

    function carSearch($cars)
    {
      $car_search = array();
      foreach ($cars as $car) {
        if($car->getPrice() < $_GET["price"] && $car->getMiles() <= $_GET["miles"]) {
            array_push($car_search, $car);
        }
      }
      return $car_search;
    }
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
  <link rel="stylesheet" href="styles.css">
  <title>Car Shop</title>
</head>
  <body>
    <div class="container">
      <h1>Find a Car</h1>
        <?php

            if (empty(carSearch($cars))) {
              echo "No cars match your search";
            } else {

                foreach (carSearch($cars) as $car) {

                  $car_model = $car->getMake();
                  $car_price = $car->getPrice();
                  $car_miles = $car->getMiles();
                  $car_photo = $car->getPhoto();

                    echo "<div class='row'>
                      <div class='col-md-6'>
                          <img src='$car_photo'>
                          </div>
                          <div class='col-md-6'>
                              <p>$car_model</p>
                              <p>$$car_price</p>
                              <p>$car_miles miles</p>
                          </div>
                        </div>
                          ";
                      }
            }

          ?>
      </div>
  </body>
</html>
