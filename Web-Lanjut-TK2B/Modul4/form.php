

<form action="" method="post" name="input">

Nama Anda : <input type="text" name="nama"><br>
Nomor Telpon : <input type="text" name="notelp"><br>
Umur : <input type="text" name="umur"><br>
<input type="submit" name="Simpan" value="Input">

</form>

<?php
/*
if(isset($_POST['Simpan'])){
    echo "Nama : ".$_POST['nama'];
    echo "<br>";
    echo "Nomor Telpon : ".$_POST['notelp'];
    echo "<br>";
    echo "Umur : ".$umur;
}
*/
extract($_POST);
if(isset($Simpan)){
    echo "Nama : ".$nama;
    echo "<br>";
    echo "Nomor Telpon : ".$notelp;
    echo "<br>";
    echo "Umur : ".$umur;
}
?>

