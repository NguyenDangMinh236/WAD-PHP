<?php

echo "Bai 2";
echo "<br>";
$n=4;
if ($n ==2)
    echo "Ngay thu 2";
else if ($n == 3)
    echo "Ngay thu 3";
else if ($n == 4)
    echo "Ngay thu 4";
else if ($n == 5)
    echo "Ngay thu 5";
else if ($n == 6)
    echo "Ngay thu 6";
else if ($n == 7)
    echo "Ngay thu 7";
else if ($n == 8)
    echo "Ngay thu CN";
else
    echo "Khong phai thu ngay trong tuan";

echo "<br>";
echo "<br>";
echo "Bai 3";
echo "<br>";
$n = 5;
switch ($n){
    case 2:
        echo "Ngay thu 2";
        break;
    case 3:
        echo "Ngay thu 3";
        break;
    case 4:
        echo "Ngay thu 4";
        break;
    case 5:
        echo "Ngay thu 5";
        break;
    case 6:
        echo "Ngay thu 6";
        break;
    case 7:
        echo "Ngay thu 7";
        break;
    case 8:
        echo "Ngay thu CN";
        break;
    default:
        echo "Khong phai thu ngay trong tuan";
        break;
}

echo  "<br>";
echo "<br>";

echo "Bai 4";
echo "<br>";
function myFunction(){
    for ($n = 0; $n <= 100; $n++) {
        if ($n % 6 == 0) {
            echo $n . " chia het cho 6";
        } else if ($n % 2 == 0) {
            echo $n . " chia het cho 2";
        } else if ($n % 3 == 0) {
            echo $n . " chia het cho 3";
        } else echo $n . " không chia hết cho 2, 3, 6";
        echo "<br>";
    }
    }
myFunction();
echo  "<br>";
echo "<br>";

echo "Bai 5";
echo "<br>";
function myFunction5(){
    $a = 27;
    $b = $a/3;
    for ($i = 1 ; $i<= 27; $i++ ){
        $a -= $i;
        $b += $i;
        if ($a ==($b*2)){
            echo "phai chuyen: ".($i+1);
        }

    }
}
myFunction5();
echo  "<br>";
echo "<br>";

echo "Bai 5";
echo "<br>";
function myFunction6(){
    $a = 2000;
    $keo = $a / 200;
    $tong = $keo;
    do{
       $doi = $keo/2 - $keo%2/2;
       $tong += $doi;
     $keo = $doi + $keo %2;
    }while($keo >1);
    echo "Tong: ". $tong;
}
myFunction6();


?>