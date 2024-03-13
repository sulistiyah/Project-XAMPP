
<?php

//Cara ke dua mengambil nilai input pada form
extract($_GET);
if (isset($Simpan)){
    //Cara Mengambil input dari form
    echo "Nama : ".$nama;
    echo "<br>";
    echo "Nomor Telpon : ".$notelp;
    echo "<br>";
    echo "Umur : ".$umur;
}
echo "<br>";
echo "<a href='form.php'>Kembali</a>";

?>