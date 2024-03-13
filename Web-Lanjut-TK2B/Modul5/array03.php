<?php
//Program Mendeklarasikan array dengan index numerik

    $arrWarna = array ("Blue", "Black", "Red", "Yellow","Green", "Purple"); 

//Cara 1
    echo "Menampilkan isi array dengan for : <br>";
    for ($i=0; $i<count($arrWarna); $i++) {
        echo "Do You Like <font color=$arrWarna[$i]>" . $arrWarna[$i] . "</font> ? <br>";
    }

    echo "<br><br>";

//cara ke 2 menampilkan kedalam combobox
    $jurusan = array("Teknologi Infromasi","Elektro","Sipil","Akuntansi");
        echo "Jurusan<br>";
        echo "<select name=\"jurusan\">";
        foreach ($jurusan as $key) {
            # code.....
            echo "<option value = '$key'>$key</option>";
        }
    echo "</select>";