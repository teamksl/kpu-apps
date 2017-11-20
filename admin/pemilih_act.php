<?php
	include '../koneksi.php';
	
	$nim=$_POST['nim'];
	$nama=$_POST['nama'];
	$fakultas=$_POST['fakultas'];
	$partai=$_POST['partai'];

	$save = mysql_query("INSERT INTO pemilih VALUES('$nim','$nama','$fakultas','$partai')");
	
	if ($save){
		echo "<script>alert('Data BERHASIL di Simpan!');window.location='index.php';</script>";
	}else{
		echo "<script>alert('Data GAGAL di Simpan!');window.location='index.php';</script>";
	}	
?>