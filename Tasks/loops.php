<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Question (1)</h1>
    <?php
    for ($i = 1; $i <= 10; $i++) {
        if ($i == 10) {
            echo $i;
        } else {
            echo $i . "-";
        }
    }
    ?>
    <hr>
    <h1>Question (2)</h1>
    <?php
    global $total;
    for ($i = 1; $i < 30; $i++) {
        $total += $i;
    }
    echo $total;
    ?>
    <hr>
    <h1>Question (3)</h1>
    <?php
    $length = 5;
    for ($i = 0; $i < $length; $i++) {
        echo "<br>";
        for ($j = 0; $j < $length; $j++) {
            if ($j >= ($length - 1 - $i)) {
                echo chr(ord("A") + $i);
            } else {
                echo "A";
            }
        }
    }
    ?>
    <hr>
    <h1>Question (4)</h1>
    <?php
    $length = 5;
    for ($i = 0; $i < $length; $i++) {
        echo "<br>";
        for ($j = 0; $j < $length; $j++) {
            if ($j >= ($length - 1 - $i)) {
                echo $i + 1;
            } else {
                echo 1;
            }
        }
    }
    ?>
    <hr>
    <h1>Question (5)</h1>
    <?php
    $length = 5;
    for ($i = 0; $i < $length; $i++) {
        echo "<br>";
        for ($j = 0; $j < $length; $j++) {
            if ($j === $i) {
                echo $i + 1;
            } else {
                echo 0;
            }
        }
    }
    ?>

    <hr>
    <h1>Question (6)</h1>
    <?php
    $number = 5;
    $sum = 0;
    for ($i = 0; $i <= $number; $i++) {
        $sum *= $i;
    }
    echo $sum;
    ?>

    <hr>
    <h1>Question (7)</h1>
    <?php
    $num1 = 0;
    $num2 = 1;
    $length = 10;
    for ($i = 0; $i < $length; $i++) {
        echo $num1 . " ";
        $num3 = $num2 + $num1;
        $num1 = $num2;
        $num2 = $num3;
    }
    ?>

    <hr>
    <h1>Question (8)</h1>
    <?php
    $string = "Orange Coding Academy";
    $sum = 0;
    for ($i = 0; $i < strlen($string); $i++) {
        if (strtolower($string[$i]) === "c") {
            $sum += 1;
        }
    }
    echo $sum;
    ?>

    <hr>
    <h1>Question (9)</h1>
    <?php
    echo "<table border =1 style='border-collapse: collapse', cellpadding=3px>";
    for ($i = 0; $i < 6; $i++) {
        echo "<tr>";
        for ($j = 0; $j < 5; $j++) {
            echo "<td>" . ($i + 1) . '*' . ($j + 1) . '=' . (($i + 1) * ($j + 1)) . "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    ?>

    <hr>
    <h1>Question (10)</h1>
    <?php
    $numbers = range(1, 50);
    foreach ($numbers as $val) {
        if ($val % 3 === 0) {
            echo "Fizz ";
        } elseif ($val % 5 === 0) {
            echo "Buzz ";
        } elseif ($val % 3 === 0 && $val % 5 === 0) {
            echo "FizzBuzz ";
        } else {
            echo $val . " ";
        }
    }
    ?>

    <hr>
    <h1>Question (11)</h1>
    <?php
    $counter = 1;
    for ($i = 1; $i <= 5; $i++) {
        echo "<br>";
        for ($j = 1; $j <= $i; $j++) {
            echo $counter;
            $counter++;
        }
    }
    ?>
    <hr>
    <h1>Question (12)</h1>
    <?php
    $char5 = "A";
      for($i=0;$i<=5;$i++){
            for($k=5;$k>=$i;$k--){
            echo "&nbsp";
            }
            for($j=1;$j<=$i;$j++){
                echo $char5++," ";
            }
            echo "<br>";
            }
                for($i=4;$i>=1;$i--){
                for($k=5;$k>=$i;$k--){
                echo "&nbsp";
            }
            for($j=1;$j<=$i;$j++){
            echo $char5++," ";
            }
            echo "<br>";
        }
        ?>
</body>

</html>