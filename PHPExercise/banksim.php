<?php
    $balance = 4000;
    $deposit = 2000;
    $withdraw = 5000;

    echo "<h1>Bank Account Simulation</h1>";
    echo "<h3>Current balance:$balance";
    $balance = $balance + $deposit;
    echo "<h3>Current balance:$balance after deposits";
    $balance = $balance - $withdraw;
    echo "<h3>current Balance(Final): ₱" . $balance ." after withdrawal of $withdraw</h3>";
    
?>