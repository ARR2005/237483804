<?php
    $distance =50.3;
    $fuel_consumption = 21;
    $fuel_price = 64;

    $needed_fuel = $distance / $fuel_consumption;
    $travel_cost = $needed_fuel * $fuel_price;

    echo "<h1>Baguio to Agoo Travel Cost Estimator</h1>";
    echo "<h3>Distance: $distance km</h3><br>";
    echo "<h3>  Fuel Consumption: $fuel_consumption km/l</h3>";
    echo "<h3>  Fuel Price: ₱$fuel_price per liter</h3>";
    echo "<h3>  Fuel Needed: ".  number_format($needed_fuel,2) ." liters</h3>";
    echo "<h3>  Travel Cost: ₱" . number_format( $travel_cost,2) ."</h3>";
    
?>