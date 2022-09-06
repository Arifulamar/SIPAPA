<?php 
include 'koneksi.php';

$id = $_GET['id'];
$query = ("DELETE FROM data_pasien WHERE id='$id'")or die(mysqli_error());


 if ($kon->query($query)) {
	/*echo "<script>alert('Berhasil hapus data pasien');window,location:'daftar-pasien.php'</script>";*/
	header("location:daftar-pasien.php");	
  }
else {
	echo "Gagal Hapus Data Pasien";
} 

?>