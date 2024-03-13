<?php

$teman = "andi";
if($teman == "Budi"){
    echo "Budi adalah teman saya";
}elseif($teman == "andi"){
    echo "Andi adalah teman saya";
}else{
    echo "Saya tidak punya teman";
}

echo "<br>";

// Latihan

$nilai = 1000;
if($nilai<0){
    echo "Status $nilai = BL";
}else if(($nilai >=85) && ($nilai <=100)){
    echo " Status $nilai = A";
} elseif (($nilai >=80) && ($nilai <85)){
    echo "Status $nilai = A-";
} elseif (($nilai >=75) && ($nilai <80)){
    echo "Status $nilai = B+";
} elseif (($nilai >=70) && ($nilai <75)){
    echo "Status $nilai = B";
} elseif (($nilai >=65) && ($nilai <70)){
    echo "Status $nilai = B-";
} elseif (($nilai >=60) && ($nilai <65)){
    echo "Status $nilai = C+";
} elseif (($nilai >=55) && ($nilai <60)){
    echo "Status $nilai = C";
} elseif (($nilai >=50) && ($nilai <55)){
    echo "Status $nilai = C-";
} elseif (($nilai >=40) && ($nilai <50)){
    echo "Status $nilai = D";
}elseif (($nilai >=0) && ($nilai <40)){
    echo "Status $nilai = E";
} else {
    echo "Status $nilai = ERROR";
}