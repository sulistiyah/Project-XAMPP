<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Radio</title>
        <Meta name='viewport' content='width=device-with, initial-scale=1'>
    </head>
    <body>
        <form action = "proses.php" method="post">
            <h2>Pilih Jurusan Anda :</h2>
            <input type="radio" name="jurusan" value="TI">Teknik Informatika<br>
            <input type="radio" name="jurusan" value="SI" checked> Sistem Informasi<br>
            <input type="radio" name="jurusan" value="SK"> Sistem Komputer<br>
            <input type="radio" name="jurusan" value="KA"> Komputerisasi Akutansi<br>
            <input type="submit" name="Submit" value="Pilih">

            <h2>Pilih Prodi :</h2>
            <input type="radio" name="prodi" value="TRPL">TRPL<br>
            <input type="radio" name="prori" value="MI">Manajemen Informatika<br>
            <input type="submit" name="Submit" value="Pilih">
        </form>
    </body>
</html>