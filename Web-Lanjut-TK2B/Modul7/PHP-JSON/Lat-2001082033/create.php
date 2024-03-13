<?php
extract($_POST);
$result = array();

//koneksi ke MySQL
require_once('koneksi.php');
if (isset($nik)) {
	
	$sql="INSERT INTO tb_penghasilan VALUE (NULL, '$nik','$nama','$pekerjaan','$gaji')";
	$hasil= mysqli_query($db, $sql);
	if ($hasil) {
		$result['succes'] = 1;
		$result['message'] = "Data berhasil di tambahkan";
	} else {
		$result['succes'] = 0;
		$result['message'] = "Data gagal di tambahkan";
	}
	echo json_encode($result);

} else {
	$result['succes'] = 0;
	$result['message'] = "Halaman tidak bisa di akses";
	echo json_encode($result);
}
mysqli_close($db);