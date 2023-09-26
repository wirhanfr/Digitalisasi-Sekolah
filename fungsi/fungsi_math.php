<?php

echo min(80, 90, 50, 55, 65) . "ss <br>";
echo max(80, 90, 50, 55, 65) . "sa <br>";

// Fungsi pi() banyak digunakan dalam perhitungan matematika dan nilainya kurang lebih sama dengan 3.1415926535898
echo pi() . "<br>";

//fungsi abs untuk membalikkan nilai negatif menjadi positif tapi positif tetap positif
echo abs(-5) . "a <br>";  // returns 5
echo abs(0) . " b <br>";  // returns 0
echo abs(5) . "c <br>";  // returns 5

//Fungsi sqrt() bertugas untuk menghitung akar kuadrat dari suatu bilangan
echo sqrt(64) . "d <br>";  // returns 8
echo sqrt(27) . " e<br>";  // returns 0  

//FUNGSI pow di PHP Pow adalah fungsi untuk mencari pangkat dari sebuah bilangan.
echo pow(8, 1 / 3) . " f<br>";


//round() adalah fungsi pembulatan yang menghasilkan bilangan bulat terdekat dari bilangan aslinya
echo round(1.49) . " g<br>";  // returns 1
echo round(1.50) . " h<br>";  // returns 0
echo round(1.51) . "i <br><br>";

// echo rand();
//Bahasa PHP menyediakan function rand() yang bisa dipakai untuk men-generate angka acak
echo rand(10, 20);
