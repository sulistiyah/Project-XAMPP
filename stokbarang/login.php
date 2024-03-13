<?php
require 'function.php';


//cek login terdaftar or no
if(isset($_POST['login'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    //pencocokan database
    $cekdatabase = mysqli_query($conn, "SELECT * FROM login where email='$email' and password='$password'");

    //hitung jumlah data
    $hitung = mysqli_num_rows($cekdatabase);

    if($hitung>0){
        //Login berhasil
        $ambildatarole = mysqli_fetch_array($cekdatabase);
        $role = $ambildatarole['level'];

        if($role=='admin'){
            //Kalau ia admin
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'admin';
            $_SESSION['email'] = $email;
            header('location:index.php');
           
        } else {
            //kalau ia user
            $_SESSION['log'] = 'Logged';
            $_SESSION['role'] = 'user';
            $_SESSION['email'] = $email;
            header('location:user');
        }
    } else {
        //Kalau tidak ditemukan
        header('location:login.php');
        echo 'Data tidak ditemukan';
    };
};

if(!isset($_SESSION['log'])){

}else{
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Login | Fungsi Umum</title>
        <link href="css/styles.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/js/all.min.js" crossorigin="anonymous"></script>
        <style> div > div  {
        
    }
    body {
background-image: url("assets/img/dark.jpg");
background-size: cover,auto;
background-repeat: no-repeat;
}
  </style>
    </head>
    <body>
        <div id="layoutAuthentication">
            <div id="layoutAuthentication_content">
                <main>
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-lg-5"  style="margin-top: 12%">
                                <div class="card shadow-lg border-1 rounded-lg mt-5" >
                                    
                                <h3 class="text-center font-weight-light my-4">Login</h3></div>
                                    <div class="card-body shadow-lg border-1 rounded-lg mt-5">
                                        <form method="post">
                                        <div class="imgcontainer">
                                      <center>  <img src="assets/img/BPS.png"  style="margin-top: -10%" width="75px" height="60px" alt="Avatar" class="avatar"> </center><br>
                                     <div class="text-center font-weight-light"> Badan Pusat Statistik </div>
                                        </div><br>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputEmailAddress">Email</label>
                                                <input class="form-control py-4" name="email"  id="inputEmailAddress" type="email" placeholder="Masukan Email " />
                                            </div>
                                            <div class="form-group">
                                                <label class="small mb-1" for="inputPassword">Password</label>
                                                <input class="form-control py-4" name="password" id="inputPassword" type="password" placeholder="Masukan password" />
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input class="custom-control-input" id="rememberPasswordCheck" type="checkbox" />
                                                    <label class="custom-control-label" for="rememberPasswordCheck">Remember password</label>
                                                </div>
                                            </div>
                                            <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                                <button class="btn btn-primary btn-block"  name="login">Login</button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="card-footer text-center">
                                        <div class="small"><a href="register.php">Need an account? Sign up!</a></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
    </body>
</html>
