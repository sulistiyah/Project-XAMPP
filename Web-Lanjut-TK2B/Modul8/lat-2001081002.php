<!DOCTYPE html>
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <!-- Bootsrap core CSS -->
        <link href="bootstrap-5.1.3-dist/css/bootstrap.min.css" rel="stylesheet">
        <title>Sulis Tiyah - Latihan Bootstrap </title>
    </head>

    <body>
    
        <div class="container-fluid">
            <form class="row g-12">
                <div class="col-md-6">
                    <label for="inputIdAnggota" class="form-label">ID Anggota</label>
                    <input type ="email" class="form-control" id="inputIdAnggota">
                </div>

                <div class="col-md-6">
                    <label for="inputNamaAnggota" class="form-label">Nama Anggota</label>
                    <input type ="name" class="form-control" id="inputNamaAnggota">
                </div>

                <div class="col-md-4">
                    <label for="inputjJK" class="form-label">Jenis Kelamin</label>
                    <select id="inputJK" class="form-select">
                        <option selected>Choose...</option>
                        <option value="Pria">Pria</option>
                        <option value="Wanita">Wanita</option>
                    
                    </select>    
                </div>

                <div class="col-md-6">
                    <label for="inputFile" class="form-label">File Foto</label>
                    <input type ="file" class="form-control" id="inputFile">
                </div>

                <div class="col-md-2">
                    <label for="inputTahun" class="form-label">Tahun</label>
                    <input type ="text" class="form-control" id="inputTahun">
                </div>

                <div class="col-12">
                    <label for="inputAlamat" class="form-label">Alamat</label>
                    <textarea class ="form-control" id="inputAlamat" placeholder="Muara Enim"> </textarea>
                </div>
            </form>
        </div>
    </body>
</html>
<script src = "bootstrap-5.1.3-dist/js/bootstrap.bundle.min.js"> </script>