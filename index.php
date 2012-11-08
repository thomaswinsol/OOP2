<?php
ini_set('display_errors',1);
error_reporting(E_ALL);
// require the needed objects
require_once 'includes/Vehicle.php';
?>
<!doctype html>
<html>
    <head>
        <title>
            Vehicle
        </title>
    </head>
    <body>
    <?php
        // instantiate object $car
        $car = new Vehicle();
        $car->setBrand('Porsche');
        $car->setShape('Coupe');
        $car->setColor('Green');
        $car->setNumDoors(2);
        $car->setPrice(50000);
        
        echo $car->getColor() . '<br />';
                
        $car->showPrice();
        $car->numDoors();
        $car->drive();
    ?>
    </body>
</html>

