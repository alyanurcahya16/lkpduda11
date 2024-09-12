<?php
for ($i=1; $i < 30; $i++) { //buat pengulangan
    if (90 % $i == 0) { //jika sisa bagi dari 90 dibagi $i == 0 maka akan ditampilkan
        echo "90 : $i = " . 90 / $i . "</br>";
    }
}
?>