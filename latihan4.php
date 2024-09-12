<?php
    for ($i=1; $i < 10; $i++) { //pengulangan ke bawah
        for ($j=0; $j < 8; $j++ ) { //pengulangan ke samping
            if ($i % 5 == 0) {//jika $i sisa bagi dari 5 itu nol kosong atau ga di bagi jika 1 bakal nampil
                echo "";
            } else {
                echo "*";
            }
        }
        echo "<br>";
    }
    ?>