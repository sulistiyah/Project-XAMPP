<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Formulir</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <form action="proses.php" method="post">
    <h3>Register a new membership</h3>
    
    Username<br>
    <input type="text" name="username" style="width:300px;"><br><br>
    
    Nama<br>
    <input type="text" name="nama" style="width:300px;"><br><br>
    
    Jenis Kelamin<br>
    <input type="radio" name="jk" value="Laki Laki">Laki Laki
    <input type="radio" name="jk" value="Perempuan">Perempuan<br><br>
    
    Tempat Tanggal Lahir<br>
    <input type="text" name="ttl" style="width:300px;"><br><br>
    
<?php
    $jurusan = array (  "choose",   "Teknik Mesin", "Teknik Sipil", "Teknik Elektro",   "Administrasi Niaga",
                        "Akuntansi" ,   "Teknologi Informasi",  "Bahasa Inggris" );
    echo "Jurusan<br>";
    echo "<select name=\"jurusan\" style=\"width:309px\"> ";
        foreach($jurusan as $key) {
            echo "<option value='$key'>$key</option>";
        }
    echo "</select>";
       
?><br><br>

<?php
    $prodi = array (    "choose", "D3 Konsentrasi Teknik Pemeliharaan", "D3 Konsentrasi teknik Produksi",
                        "D3 Teknik Alat Berat", "D4 Teknik Manufaktur", "D3 Konsentrasi Konstruksi Sipil",
                        "D3 Konsentrasi Konstruksi Bangunan Gedung", "D4 Teknik Perencanaan Irigasi dan Rawa",
                        "D4 Manajemen Rekayasa Konstruksi", "D4 Perancangan Jalan dan Jembatan",
                        "D3 Teknik Listrik", "D3 Teknik Elektronika", "D3 Teknik Telekomunikasi",
                        "D4 Teknik Elektronika", "D4 Teknik Telekomunikasi", "D3 Administrasi Bisnis",
                        "D3 Usaha Perjalanan Wisata", "D4 Destinasi Pariwisata", "D3 Akuntansi",
                        "D4 Akuntansi", "D3 Teknik Komputer", "D3 Manajemen Informatika",
                        "D4 Teknik Rekayasa Perangkan Lunak", "D3 Bahasa Inggris", "D4 Bahasa Inggris");
    echo "Prodi<br>";
    echo "<select name=\"prodi\" style=\"width:309px\">";
        foreach ($prodi as $key) {
            echo "<option value='$key'>$key</option>";
    }
    echo "</select>";

?> <br><br>
   
    Password<br>
    <input type="text" name="password" style="width:300px;"><br><br>
    
    Retype Password<br>
    <input type="text" name="retype" style="width:300px;"><br><br><br>

    <input type="submit" name="Submit" value="Daftar">
   
    </form>
</body>
</html>