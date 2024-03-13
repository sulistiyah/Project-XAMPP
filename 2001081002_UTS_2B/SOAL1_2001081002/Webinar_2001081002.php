<?php

extract($_POST);
if (isset($Submit)){
    echo "<h3>Data Sudah Disimpan:</h3>";
    echo "<table border='0' cellpadding= '10'>";
    echo "<tr>";
    echo "<td>Email Address: </td>";
    echo "<td>:</td>";
    echo "<td>$email </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Nama Lengkap: </td>";
    echo "<td>$nama </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Username: </td>";
    echo "<td>$username </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>INTITUSI: </td>";
    echo "<td>$institusi</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Jenis Kelamin: </td>";
    echo "<td>$jk</td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Profesi: </td>";
    echo "<td>$profesi </td>";
    echo "</tr>";
    echo "<tr>";
    echo "<td>Hobby: </td>";
    echo "<td>$hobby </td>";
    echo "</tr>";
    echo "</table>";
    echo "<br><a href='e-training_2001081002.php'>Back</a>";
}