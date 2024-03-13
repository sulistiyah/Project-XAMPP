<?php

    $listMahasiswaJSON = '[
       {"nama": "Sulis Tiyah" },
       {"nama": "Aldo Spama" },
       {"nama": "Wan Bunga" },
       {"nama": "Ilma Yusnita" }
    ]';

    $listMahasiswa = json_decode($listMahasiswaJSON);

    foreach($listMahasiswa as $key => $mahasiswa) {
        echo "{$key}. Nama: {$mahasiswa->nama} <br>";
    }
