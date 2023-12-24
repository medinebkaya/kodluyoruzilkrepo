<?php

function triangle1($x){
    for ($i = 1; $i <= $x; $i++) {

        echo "0";
        echo "<br>";
        $y=$i;

        for ($j = 1; $j <= $y && $y<$x; $j++){
            echo "0"." ";
            $y=$i;

        }
    }
    
};

triangle1(150);




?>
