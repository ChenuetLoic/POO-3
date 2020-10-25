<?php
require_once 'Camion.php';
require_once 'Bicycle.php';
require_once 'Cars.php';

$bicycle = new Bicycle('blue', 1);
echo $bicycle->forward();
var_dump($bicycle);

$car = new Car('green', 4, 'electric');
echo $car->forward();
var_dump($car);

$camion = new Camion (10,'red',2, 'electric');
$camion->setLoad(10);               //permet de parametré le chargement
echo $camion->isFull();                 //appel la fonction pour connaitre le chargement si il es plein ou pas
var_dump($camion);

echo $camion->forward();                //permet d'appelé une function qui fait avancé le camion qui viens de vehicule
echo '<br> Vitesse du camion : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion->brake();
echo '<br> Vitesse du camion : ' . $camion->getCurrentSpeed() . ' km/h' . '<br>';
echo $camion->brake();