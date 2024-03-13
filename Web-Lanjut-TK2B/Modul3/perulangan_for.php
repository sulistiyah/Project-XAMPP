<?php

for ($i = 1; $i <= 10; $i+=2){
    echo "$i ";
}

echo "<br>";

// latihan

$total_genap=0;
$total_ganjil=0;
for ($i = 1; $i <= 10; $i++){
    if($i % 2 ==0){
        echo "<font color ='red'>$i</font> <br>";
        $total_genap++;
    }else {
        echo "$i <br>";
        $total_ganjil++;
    }
}
echo "<br>";
echo "<font color = 'red'>Total genap : $total_genap</font><br>";
echo "Total Ganjil $total_ganjil<br>";
echo "<br>";

// decrement

for ($i = 10; $i >= 1; $i--){
    echo "$i ";
}

echo "<br><br>";

/* Contoh 2 For */

for ($i = 1; ; $i++){
    if ($i > 10){
        break;
    }
    echo "$i ";
}
echo "<br><br>";

/* Contoh 3 For */
$i2 = 1;
for (; ; ){
    if ($i2 > 10) {
        break;
    }
    echo "$i2 ";
    $i2++;
}
echo "<br><br>";

/* Contoh 4 For */
for ($i = 1; $i <= 10; print "$i ", $i++);