<?php

class Car{
    public $make;
    public $model;
    public $year;

    public function displayInfo(){
       echo "<p>$this->year $this->make $this->model</p>";
    }
}

$car1 = new Car();
$car1->make = 'Toyota';
$car1->model = 'Camry';
$car1->year = 2022;

$car2 = new Car();
$car2->make = 'Ford';
$car2->model = 'Mustang';
$car2->year = 2023;

$car1->displayInfo();
$car2->displayInfo();


?>