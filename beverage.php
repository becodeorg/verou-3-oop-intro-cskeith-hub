<?php

// EXERCISE 1
//TODO: Create a class beverage.
class Beverage
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

?>