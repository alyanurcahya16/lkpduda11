<?php
$teks = "Selamat ulang tahun yang ke-17!"; //tipe data string

// mencari semua simbol (karakter yang bukan huruf atau angka)
// preg_match ini untuk memeriksa apakah sebuah string dalam php berisi karakter selain a-zA-Z0-9
preg_match_all('/[^a-zA-Z0-9\s]/', $teks, $matches); //regular expresion

//fungsi count untuk menghitung jumlah elemen dalam array
if (count($matches[0]) > 0) {
    // menghitung duplikasi simbol
    $uniqueSymbols = array_unique($matches[0]); //arayunique buat ngehapuy element yamng mendupliat
    echo "Karakter yang terdapat pada kalimat : ". implode(', ', $uniqueSymbols); //menggabungkan elemen elemen array menjadi sebuah stirng dengan pemisahan tertentu
} else {
    echo "Tidak terdapat simbol pada kalimat";
} 
?>