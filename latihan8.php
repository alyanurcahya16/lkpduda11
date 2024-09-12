<?php

// parameter pariadik karena dia bisa menampung banyak argumen
//mendefinisikan fungsi array
function createArray(...$jurusan){
    $arr = []; //ini adalah variabel
    foreach ($jurusan as $value) {
        // mengubah ke ke kapital
        if (in_array(strtoupper($value), $arr) == false) { //in array bbuat meriksa ada atau ngga array
            array_push($arr, strtoupper($value));
        }
    }
    return $arr;
}

print_r(createArray("PPLG", "HTL", "KLN", "PMN", "pplg", "htl"));