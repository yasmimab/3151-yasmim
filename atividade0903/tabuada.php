<?php
    $a = 1;
    echo "<table border='1'>";

    while($a <= 10){
        echo "<tr>";
        for($i=1; $i<= 5; $i++){
            echo "<td>";
            echo "$a x $i = " .$a * $i . " ";
            echo "</td>";
        }
        $a++;
        echo "</tr>";
    }
    echo "</table>";

    echo "<br>";

    $b = 1;
    echo "<table border = '1'>";
    while($b <= 10){
        echo "<tr>";
        for($i=6; $i <= 10; $i++){
            echo "<td>";
            echo "$b x $i = " .$b * $i . " ";
            echo "</td>";
        }
        $b++;
        echo "</tr>";
    }
    echo "</table>";
?>