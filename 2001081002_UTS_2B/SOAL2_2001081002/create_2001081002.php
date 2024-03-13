<?php
extract($_POST);
$result = array();

//koneksi ke MySQL
require_once('koneksi_2001081002.php');
if (isset($email_2001081002)) {
	
	$sql="INSERT INTO tb_peserta_2001081002 VALUE (NULL, '$email_2001081002','$username_2001081002','$password_2001081002',
                '$nama_lengkap_2001081002','$institusi_2001081002','$jenis_kelamin_2001081002','$profesi_2001081002')";
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