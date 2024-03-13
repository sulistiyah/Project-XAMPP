<?php

extract($_POST);
if (isset($Submit)){
    echo "<h3>Berikut Data Diri Anda:</h3>";
    echo "a";
    echo "<tr>";
    echo "<td>Username: </td>";
    echo "<td>$username </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nama: </td>";
    echo "<td>$nama </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jenis Kelamin: </td>";
    echo "<td>$jk </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Tempat Tanggal Lahir: </td>";
    echo "<td>$ttl </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jurusan: </td>";
    echo "<td>$jurusan </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Prodi: </td>";
    echo "<td>$prodi </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Password: </td>";
    echo "<td>$password </td>";
    echo "</tr>";
    echo "</table>";
    echo "<br><a href='form.php'>Back</a>";
}