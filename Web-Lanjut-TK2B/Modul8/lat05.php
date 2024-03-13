<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootsrap core CSS -->
        <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Form Control - bootstrap </title>
    </head>

    <body>
   
        <div class="container-fluid">
            <form class="row g-12">
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">Email</label>
                    <input type ="email" class="form-control" id="inputEmail4">
                </div>

                <div class="col-md-6">
                    <label for="inputPassword4" class="form-label">Password</label>
                    <input type ="password" class="form-control" id="inputPassword4">
                </div>

                <div class="col-12">
                    <label for="inputAddress" class="form-label">Address</label>
                    <textarea class ="form-control" id="inputAddress" placeholder="Muara Enim"> </textarea>
                </div>

                <div class="col-md-6">
                    <label for="inputCity" class="form-label">Kota/Kabupaten</label>
                    <input type ="text" class="form-control" id="inputCity">
                </div>

                <div class="col-md-4">
                    <label for="inputState" class="form-label">Provinsi</label>
                    <select id="inputState" class="form-select">
                        <option selected>Choose...</option>
                        <option value="Sumatera Barat">Sumatera Barat</option>
                        <option value="Sumatera Utara">Sumatera Utara</option>
                        <option value="Sumatera Selatan">Sumatera Selatan</option>
                    </select>    
                </div>

                <div class="col-md-2">
                    <label for="inputZip" class="form-label">Kode Pos</label>
                    <input type ="text" class="form-control" id="inputZip">
                </div>
            </form>
        </div>

</body>

</html>
<script src = "bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"> </script>