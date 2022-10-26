<?php

class Car
{
    const WHEELS = 4;
    public $color;

    public function test()
    {
        echo $this->color;
        echo "<br>";
        echo self::WHEELS;
        echo "<br>";
    }
}

class Bicycle
{
    const WHEELS = 2;

    public function test()
    {
        echo self::WHEELS;
    }
}
$car1 = new Car;
$car1->color = 'white';
$car1->test();
$car2 = new Bicycle;
$car2->test();
echo "<br>";


class Engine
{
    public static $engine = 1;

    public static function whatlslt()
    {
        echo "В авто присутні різні типу двигунів";
    }

    public function test()
    {
        echo self::$engine;
        self::whatlslt();
    }
}
echo Engine::$engine;
Engine::whatlslt();
$cars = new Engine();
$cars->test();
echo "<br>";


class Cars
{
    public $color;
    public $brand;
    public $engine;
    public $fuel;

    public function __construct($color, $brand, $engine, $fuel)
    {
        $this->color = $color;
        $this->brand = $brand;
        $this->engine = $engine;
        $this->fuel = $fuel;
    }
    public function tripTime ($distance){
        $time = $distance / $this->engine;
        return $time;
    }
}

$car1 = new Cars('white', 'Audi','220', 'benzine');
echo '<br> Car 1 time: ' . $car1->tripTime(1000);

//learn oop

