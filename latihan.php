<?php
$koordinat = array(
        array(8,7),
        array(2,4),
        array(1,9),
);
echo $koordinat[0][0];
echo"<br>";
echo $koordinat[0][1];
echo "<br>";
echo $koordinat[2][1];
echo"<br>";

$macam2 = array(121, "joko", 44.99, "belajar php");
$macam2[4] = "Duniailkom";
$macam2[5] = 212;
$macam2[6] =3.14;
$macam2[1] = "belajar";
$macam2[2] = "php";
$macam2[3] = "STIKI INDONESIA";

$macam2[99]="array baru";
$macam2[] = 100;
echo "<pre>";
print_r($macam2);
echo "</pre>";

$mahasiswa = array(
        'nama' => "kristya",
        'alamat' => "Denpasar",
        'umur' => 20 ,
        'telepon' => "089506540717",
);
echo "<pre>";
print_r($mahasiswa);
echo "</pre>";


//operator aritmatika

$angka1=10;
$angka2=20;

$angka3=$angka1%$angka2;


echo "hasilnya MODULONYA adalah = $angka3 <br>";

//increment
$a=10;
$b=$a++;
$b=$a;
//$c= ++$a;

echo" hasil increment A = $a <br>";
echo"hasil increment B = $b <br>";

//perbandingan

echo"================================================================================<br>";
$angka1=10;
$angka2=7;

if ($angka1<$angka2) {
        echo "";

}else{
        echo"salah <br>";
}

echo"============================STRING PHP======================= <br>";

$string1="<br>Haloo nama saya ";
$string2="kristya";
$string3=$string1.$string2;
$string4="umur saya ";
$umur=20;

echo $string4.$umur."tahun";


echo"$string3";

?>