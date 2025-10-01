<?php
for ($x = 1; $x <= 100; $x++) {
    if (($x % 5) == 0 && ($x % 3) == 0 ){
      echo "FizzBuzz"."\n";
    }elseif (($x % 5) == 0){
      echo "Buzz"."\n";
    }elseif (($x % 3) == 0){
      echo "Fizz"."\n";
    }else{
        echo $x."\n";
    }
}

echo "fibonacci";
$num1 = 0;
    $num2 = 1;
      for ( $i = 0; $i <=10; $i++ ) {
        echo $num1 . ", ";
        $num3 = $num1 + $num2;
        $num1 = $num2;
        $num2 = $num3;
    }
?>