<?php

require('beverage.php');
class Beer extends Beverage
{
    // TODO: Create the properties name (string) and alcoholPercentage (float).
    public string $name;
    public float $alcoholPercentage;

    // TODO: Foresee a construct that's allows us to use all the properties from beverage and that sets the values for name and alcoholpercentage.
    // Remember for now we will use properties and methods that can be accessed from everywhere.
    public function __construct(string $name, float $alcoholPercentage, string $color, float $price, string $temperature="cold")
    {  
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcoholPercentage = $alcoholPercentage;
    }
    // TODO: Make a getAlcoholPercentage function which returns the alocoholPercentage.
    
    public function getAlcoholPercentage()
    {
        echo "This is {$this->name} and contains {$this->alcoholPercentage} % Alcohols and will cost {$this->price} "."<br>";
    }
}
?>