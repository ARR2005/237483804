<body>

<form action="math.php" method="POST">
    First Number: <input type="number" name="a"><br>
    Second Number: <input type="number" name="b"><br>
    <input type="submit">

    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $a = $_POST['a'];
            $b = $_POST['b'];



        $sum = $a + $b;
        $difference = $a - $b;
        $product = $a * $b;
        $quotient = $a / $b;

            
        echo "<h1>Simple Math</h1>";
        echo "<h3>Number A: $a || Number B: $b</h3>";
        echo "<h3>Sum: $sum<br> Difference: $difference <br> Product: $product <br> Quotient: $quotient</h3>";
        }
    ?>

</body>
