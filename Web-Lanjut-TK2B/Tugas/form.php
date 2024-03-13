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
    
    Jenis Kelamin <br>
    <input type="radio" name="jk" value="Laki Laki">Laki Laki
    <input type="radio" name="jk" value="Perempuan">Perempuan<br><br>
    
    Tempat Tanggal Lahir<br>
    <input type="text" name="ttl" style="width:300px;"><br><br>
    
    Jurusan<br>
    <select name="jurusan" style="width:309px;">
        <option value="choose"selected>choose</option>
        <option value="Teknik Mesin">Teknik Mesin</option>
        <option value="Teknik Sipil">Teknik Sipil</option>
        <option value="Teknik Elektro">Teknik Elektro</option>
        <option value="Administrasi Niaga">Administrasi Niaga</option>
        <option value="Akuntansi">Akuntansi</option>
        <option value="Teknologi Informasi">Tekonologi Informasi</option>
        <option value="Bahasa Inggris">Bahasa Inggris</option>
    </select><br><br>
    
    Prodi<br>
    <select name="prodi" style="width:309px;">
        <option value="choose"selected>choose</option>
        <option value="D3 Konsentrasi Teknik Pemeliharaan">D3 Konsentrasi Teknik Pemeliharaan</option>
        <option value="D3 Konsentrasi teknik Produksi">D3 Konsentrasi teknik Produksi</option>
        <option value="D3 Teknik Alat Berat">D3 Teknik Alat Berat</option>
        <option value="D4 Teknik Manufaktur"> D4 Teknik Manufaktur</option>
        <option value="D3 Konsentrasi Konstruksi Sipil">D3 Konsentrasi Konstruksi Sipil</option>
        <option value="D3 Konsentrasi Konstruksi Bangunan Gedung">D3 Konsentrasi Konstruksi Bangunan Gedung</option>
        <option value="D4 Teknik Perencanaan Irigasi dan Rawa">D4 Teknik Perencanaan Irigasi dan Rawa</option>
        <option value="D4 Manajemen Rekayasa Konstruksi">D4 Manajemen Rekayasa Konstruksi</option>
        <option value="D4 Perancangan Jalan dan Jembatan">D4 Perancangan Jalan dan Jembatan</option>
        <option value="D3 Teknik Listrik">D3 Teknik Listrik</option>
        <option value="D3 Teknik Elektronika">D3 Teknik Elektronika</option>
        <option value="D3 Teknik Telekomunikasi">D3 Teknik Telekomunikasi</option>
        <option value="D4 Teknik Elektronika">D4 Teknik Elektronika</option>
        <option value="D4 Teknik Telekomunikasi">D4 Teknik Telekomunikasi</option>
        <option value="D3 Administrasi Bisnis">D3 Administrasi Bisnis</option>
        <option value="D3 Usaha Perjalanan Wisata">D3 Usaha Perjalanan Wisata</option>
        <option value="D4 Destinasi Pariwisata">D4 Destinasi Pariwisata</option>
        <option value="D3 Akuntansi">D3 Akuntansi</option>
        <option value="D4 Akuntansi">D4 Akuntansi</option>
        <option value="D3 Teknik Komputer">D3 Teknik Komputer</option>
        <option value="D3 Manajemen Informatika">D3 Manajemen Informatika</option>
        <option value="D4 Teknik Rekayasa Perangkan Lunak">D4 Teknik Rekayasa Perangkan Lunak</option>
        <option value="D3 Bahasa Inggris">D3 Bahasa Inggris</option>
        <option value="D4 Bahasa Inggris">D4 Bahasa Inggris</option>
    </select><br><br>
   
    Password<br>
    <input type="text" name="password" style="width:300px;"><br><br>
    
    Retype Password<br>
    <input type="text" name="retype" style="width:300px;"><br><br><br>

    <input type="submit" name="Submit" value="Daftar">
   
    </form>
</body>
</html>