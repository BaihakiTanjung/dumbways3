<?php

function drawImage($panjang)
{
    for ($i = 1; $i <= $panjang; $i++) {
        for ($j = 1; $j <= $panjang; $j++) {
            if ($j == 4 || $i == 2 || $i == $panjang || $i == 4) {
                echo "*";
            } elseif ($i == 1 || $i == 2) {
                echo "#";
            } else {
                echo "#";
            }
        }
        echo "<br>";
    }
}

drawImage(7);
