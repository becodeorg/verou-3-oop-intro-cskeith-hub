<?php

declare(strict_types=1);

require('beer.php');

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

//TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold //automatically

$cola = new Beverage("black", 2);

// print the getInfo on the screen.
//TODO: Print the temperature on the screen.
//USE TYPE HINTING EVERYWHERE!
$cola->getInfo();

// EXERCISE 2
// TODO: Make class beer that extends from Beverage.


// TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
$duvel = new Beer("Duvel", 8.5, "Brown", 5);

// TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
$duvel->getAlcoholPercentage();
$duvel->getInfo();

var_dump($duvel);



// Make sure that each print is on a different line.
// Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
// USE TYPE HINTING EVERYWHERE!

