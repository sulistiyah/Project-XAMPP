
<?php

//Cara ke pertama mengambil nilai input pada form
if(isset($_POST['Simpan'])){
    echo "Nama : ".$_POST['nama'];
    echo "<br>";
    echo "Nomor Telpon : ".$_POST['notelp'];
    echo "<br>";
    echo "Umur : ".$_POST['umur'];
}
echo "<br>";
echo "<a href='form.php'>Kembali</a>";

?>