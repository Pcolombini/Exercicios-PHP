<?php

    $a = 10;

    while ($a > 0) {
       
        if ($a == 5 || $a == 7) {
            echo "Pulou o $a <br>";
            $a--;
            continue;
        }

        if ($a == 2) {
            echo "Interrompendo o loop com break no $a";
            break;
        }

        echo "Loop $a <br>";
        $a--;

    

    }