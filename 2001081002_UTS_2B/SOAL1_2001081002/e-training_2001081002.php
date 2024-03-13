<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Pendaftaran E-Training</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
</head>
<body>
    <form action="proses.php" method="post">
    <h3>Masukan Data Diri Anda</h3>

    <table>
        <td>Email Address</td> 
        <td>:</td>
        <td><input type="text" name="email" style="width:300px;"></td>
    </table>
   
    <table>
        <td>User Name</td>
        <td>:</td>
        <td><input type="text" name="username" style="width:300px;"></td>
    </table>
    
    <table> 
    Password        :<input type="text" name="password" style="width:300px;"><br><br>
    </table>
   
    
    Re Password:
    <input type="text" name="repassword" style="width:300px;"><br><br><br>

    Nama Lengkap    :<input type="text" name="nama" style="width:300px;"><br><br>

    INSTITUSI       :<input type="text" name="institusi" style="width:300px;"><br><br>

    
    Jenis Kelamin:<br>
    <input type="radio" name="jk" value="Laki Laki">Laki Laki
    <input type="radio" name="jk" value="Perempuan">Perempuan<br><br>
        
    Profesi         :
    <select name="profesi" style="width:309px;">
        <option value="Siswa">Siswa</option>
        <option value="Mahasiswa">Mahasiswa</option>
        <option value="PNS">PNS</option>
        <option value="Swasta">Swasta</option>
        <option value="Lain-Lain">Lain-Lain</option>
    </select><br><br>
    
    Hobby       :
        <input type="checkbox" name="hobby" value="Membaca" checked>Membaca<br>
        <input type="checkbox" name="hobby" value="Menonton" checked> Menonton<br>
        <input type="checkbox" name="hobby" value="Olahraga" checked> Olahraga<br>
        <input type="checkbox" name="hobby" value="Game"> Game<br>
        <input type="checkbox" name="hobby" value="Lain-Lain"> Lain-Lain<br><br>
    </table>

    <input type="submit" name="Submit" value="Simpan">
    <input type="reset" name="Reset" value="Reset">
   
    </form>
</body>
</html>