<?php
// class Car
// {
//     const WHEELS = 4;
//     public $color;

//     public function test()
//     {
//         echo $this->color;
//         echo "<br>";
//         echo self::WHEELS;
//         echo "<br>";
//     }
// }

// class Bicycle
// {
//     const WHEELS = 2;

//     public function test()
//     {
//         echo self::WHEELS;
//     }
// }
// $car1 = new Car;
// $car1->color = 'white';
// $car1->test();
// $car2 = new Bicycle;
// $car2->test();
// echo "<br>";

// class Engine
// {
//     public static $engine = 1;

//     public static function whatlslt()
//     {
//         echo "В авто присутні різні типу двигунів";
//     }

//     public function test()
//     {
//         echo self::$engine;
//         self::whatlslt();
//     }
// }
// echo Engine::$engine;
// Engine::whatlslt();
// $cars = new Engine();
// $cars->test();
// echo "<br>";

// class Cars
// {
//     public $color;
//     public $brand;
//     public $engine;
//     public $fuel;

//     public function __construct($color, $brand, $engine, $fuel)
//     {
//         $this->color = $color;
//         $this->brand = $brand;
//         $this->engine = $engine;
//         $this->fuel = $fuel;
//     }
//     public function tripTime ($distance){
//         $time = $distance / $this->engine;
//         return $time;
//     }
// }

// $car1 = new Cars('white', 'Audi','220', 'benzine');
// echo '<br> Car 1 time: ' . $car1->tripTime(1000);

// //learn oop

// class Vehicle{                                    //Клас Vehicle
//     public $color;
//     public $speed;
//     public $brand;

//     public function tripTime ($distan){
//         $time = $distan / $this ->speed;
//         return $time;
//     }
// }

// class Bicycle extends Vehicle{                    // Унаслідування класу Vehicle
//     public $type;
//     public $color = 'white';
//     const CALLORIES_PER_HOUR = 500;
//     public function caloriesBurned ($distan){
//         $time = $this->tripTime($distan);
//         $calories = $time * self::CALLORIES_PER_HOUR;
//         return $calories;
//     }
//     public function tripTime ($distan){
//         // $time = parent::tripTime($distan) * 1.2;
//         // $time = ($distan / $this ->speed)* 1.2 ;
//         return parent::tripTime($distan) * 1.2;
//     }
// }

// class Car extends Vehicle{                       // Унаслідування класу Vehicle
//     public $fuel;
//     public $color = 'black';
//     public function fuelCunsumption ($distan){
//         $result = ($this->fuel * $distan) / 100;
//         return $result;
//     }
// }

// $car1 = new Car;
// $car1->speed=110;
// $car1->fuel=12;

// $car2 = new Car;
// $car2->speed=130;
// $car2->fuel=14;

// $bicycle = new Bicycle;
// $bicycle->speed = 20;

// $distance = 100;

// echo "<br> Car1 time: " . $car1->tripTime($distance);
// echo "<br> Car2 time: " . $car2->tripTime($distance);
// echo "<br> Bicycle time: " . $bicycle->tripTime($distance);

// echo "<br> ";
// echo "<br> Car1 fuel Cunsumption: " . $car1->fuelCunsumption($distance);
// echo "<br> Car2 fuel Cunsumption: " . $car2->fuelCunsumption($distance);
// echo "<br> Calories burned: " . $bicycle->caloriesBurned($distance);

//Final methods

// class Vehicle {
//     final public function test () {         //не дозволяє змінювати метод

//     }
// }

// class Car extends Vehicle{
//     public function test(){

//     }
// }
// class Vehicle {
    
// }

// final class Car extends Vehicle{              //не дозволяє унасліджувати клас
    
// }
// class Audi extends Car{

// }

//Інкапсуляція 

// class Phone {
//     public function getNumberByName($name){

//     }
//     public function dialNumber(){

//     }
//     public function call($name){
//         $number = this->getNumberByName($name);
//         $this->dialNumber($number);
//     } 
// }

// $phone1 = new Phone;
// $phone1->call('Sasha');
// $phone1->dialNumber('number');

//Поліморфізм

