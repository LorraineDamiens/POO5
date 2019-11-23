<?php

require_once 'Bicycle.php';
require_once 'Car.php';


$dacia = new Car;
 
 try {
        $dacia ->start();
        } catch(Exception $e){
            $dacia->$hasParkBrake = false;
        }finally{
            echo "Ma voiture roule comme un donut";
        }


$bike = new Bicycle();


$bike->color = "blue";
$bike->currentSpeed = 0;
var_dump($bike);

// Moving bike
echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->currentSpeed . ' km/h' . '<br>';
echo $bike->brake();



var_dump($bike);
$bike->dump();

$volvo= new car('yellow', 'gas', 4 );
var_dump($volvo);
$volvo->dump();

echo $volvo->start();
echo $volvo->forward();
echo $volvo->brake();

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$superTruck = new Truck('yellow',2,'fuel',2);
$superTruck -> setCurrentSpeed(0);
$superTruck -> setName("Super Camion");
$superTruck -> setNbWheels(4);
$superTruck -> setEnergyLevel(100);
$superTruck -> setColor('blue');
$superTruck -> setEnergy('gas');
$superTruck -> setCapacity(2);
$superTruck -> setLoad(1);
echo $superTruck->start();
echo $superTruck->forward();
echo '<br> Vitesse de '.$superTruck->getName(). " ".$superTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $superTruck->brake();
echo '<br> Vitesse de '.$superTruck->getName(). " ".$superTruck->getCurrentSpeed() . ' km/h' . '<br>';
echo $superTruck->brake().'<br><br>';
echo $superTruck->filling().'<br>';
$superTruck -> setLoad(2);
echo $superTruck->filling().'<br>';
$superTruck -> setLoad(3);
echo $superTruck->filling().'<br>';