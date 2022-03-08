<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// EXERCISE 1
//TODO: Create a class beverage.
class beverage 
{
//TODO: Create the properties color (string), price (float) and temperature (string) and also foresee a construct.
    public string $color;
    public float  $price;
    //TODO: Have a default value "cold" in the construct for temperature.
    public string $temperature;

    public function __construct(string $color, float $price, string $temperature="cold")
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    //Remember for now we will use properties and methods that can be accessed from everywhere.
    //TODO: Make a getInfo function which returns "This beverage is <temperature> and <color>."

    public function getInfo()
    {
        echo "This beverage is {$this->temperature} and {$this->color}."."<br>";
    }
}
//TODO: Instantiate an object which represents cola. Make sure that the color is set to black, the price equals 2 euro and the temperature to cold //automatically

$cola = new beverage("black", 2);

// print the getInfo on the screen.
//TODO: Print the temperature on the screen.
//USE TYPE HINTING EVERYWHERE!
$cola->getInfo();

// EXERCISE 2
// TODO: Make class beer that extends from Beverage.
class beer extends beverage
{
    // TODO: Create the properties name (string) and alcoholPercentage (float).
    public string $name;
    public float $alcoholPercentage;

    // TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
    // Remember for now we will use properties and methods that can be accessed from everywhere.
    public function __construct(string $name, float $alcoholPercentage, string $color, float $price, string $temperature="cold")
    {  
        parent::__construct($color, $price, $temperature="cold");
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    // TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
    
    public function getAlcoholPercentage()
    {
        echo "This is {$this->name} and contains {$this->alcoholPercentage} % Alcohols and will cost {$this->price} "."<br>";
    }
}

// TODO: Also the name equal to Duvel and the alcohol percentage to 8,5%
$duvel = new beer("Duvel", 8.5, "Brown", 5);

// TODO: Print the getAlcoholPercentage 2 times on the screen in two different ways, print the color on the screen and the getInfo.
$duvel->getAlcoholPercentage();
$duvel->getInfo();

var_dump($duvel);



// Make sure that each print is on a different line.
// Try to get this error on the screen= Fatal error: Uncaught Error: Call to undefined method Beverage::getAlcoholPercentage() in /var/www/becode/workshop/exercise2.php on line 64
// USE TYPE HINTING EVERYWHERE!

