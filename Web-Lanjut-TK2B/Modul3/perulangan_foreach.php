<?php

$buah = array(
    'semangka' ,
    'jeruk' ,
    'apel' ,
    'anggur'
);

echo "<pre>";
print_r($buah);
echo "</pre>";

foreach ($buah as $key => $value) {
    echo "Index ke $key, value adalah $value <br>";
}