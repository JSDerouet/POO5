<?php
    require_once 'Car.php';

    $littleCar = new Car('purple', 5, 'electric');
    $littleCar->setParkBrake(true);
    try {
        echo $littleCar->forward();
        echo "<br> Vitesse de la voiture : " . $littleCar->getCurrentSpeed() . " km/h. <br>";
    } catch(Exception $e) {
        echo $e->getMessage();
    }  finally {
        echo "<br> Tout est bon on peut commencer !";

    }  
    
?>