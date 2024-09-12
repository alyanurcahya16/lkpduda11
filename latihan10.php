<?php
//parameter pariadik nuat menampung banyak argumen
function checkJawaban($nama, ...$arrJawaban) {
    //ini adalah kunci jawaban
    $jawaban = ["A", "D", "C", "C", "B", "A", "E", "B", "A", "E"]; //$ = parameter
    $arrBenar = []; // Array buat menyimpan hasil nilaian (benar atau salah)

    // cek jawaban yang diberikan dengan jawaban yang benar
    // Perulangan foreach untuk memproses setiap elemen dalam $jawaban
    //key = itu index jawaban dari check jawaban
    //value jawaban asli
    foreach ($jawaban as $key => $value) {
        // Memeriksa jawaban di indeks yang sama cocok
        if ($arrJawaban[$key] == $value) {
            $arrBenar[$key] = 1;  // Jika benar, simpan 1 (jawaban benar) di array $arrBenar
        } else {
            $arrBenar[$key] = 0; //jawaban salah
        }
    }

    // menampilkan hasil
    echo "Nama : $nama <br>";
    echo "Jumlah Jawaban Benar : <b>" . count(array_keys($arrBenar, 1)) . "</b></br>"; // Menghitung benar
    echo "Jumlah Jawaban Salah : <b>" . count(array_keys($arrBenar, 0)) . "</b></br>"; //menghitung salah
}

checkJawaban("Putri", "A",  "D", "B", "C", "E", "B", "B", "A", "Z", "Z");
//count penjumlahan element
//Fungsi array_keys() mengembalikan array yang berisi kunci.