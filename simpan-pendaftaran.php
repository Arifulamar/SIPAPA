<?php

//Include file koneksi ke database
include 'koneksi.php';

//menerima nilai dari kiriman form pendaftaran
$tanggal=$_POST["tanggal"];
$nama=$_POST["nama_pasien"];
$umur=$_POST["umur_pasien"];
$alamat=addslashes($_POST["alamat"]);
$suami=$_POST["nama_suami"];
$bpjs=$_POST["no_bpjs"];
$hpht=$_POST["hpht"];
$ttp=$_POST["ttp"];
$diagnosa=$_POST["diagnosa"];
$beratbadan=$_POST["berat_badan"];
$tinggibadan=$_POST["tinggi_badan"];
$sistole=$_POST["tekanan_darah_sistole"];
$diastole=$_POST["tekanan_darah_diastole"];
$lila=$_POST["lila"];
$denyutjantungjanin=$_POST["denyut_jantung_janin"];
$presentasijanin=$_POST["presentasi_janin"];
$tabletfe30=$_POST["pemberian_fe_30"];
$tanggalfe30=$_POST["tanggal_fe_30"];
$tabletfe60=$_POST["pemberian_fe_60"];
$tanggalfe60=$_POST["tanggal_fe_60"];
$tabletfe90=$_POST["pemberian_fe_90"];
$tanggalfe90=$_POST["tanggal_fe_90"];
$imunisasitt1=$_POST["imunisasi_tt_1"];
$tanggaltt1=$_POST["tanggal_tt_1"];
$imunisasitt2=$_POST["imunisasi_tt_2"];
$tanggaltt2=$_POST["tanggal_tt_2"];
$hb=$_POST["hb"];
$proteineurine=$_POST["proteine_urine"];
$golongandarah=$_POST["golongan_darah"];
$hiv=$_POST["hiv"];
$sipilis=$_POST["sipilis"];
$asamurat=$_POST["asam_urat"];
$kolesterol=$_POST["kolesterol"];
$tatalaksana=$_POST["tata_laksana"];
$terapiwicara=$_POST["terapi_wicara"];
$keterangan=$_POST["keterangan"];
$tempatdibuat =$_POST["tempat_dibuat"];
$tempatdibuat =$_POST["tempat_dibuat"];
$tanggaldibuat = $_POST["tanggal_dibuat"];
$jabatan = $_POST["jabatan"];
$namapejabat = $_POST["nama_pejabat"];
$nip=$_POST["nip"];

//Query input menginput data kedalam tabel data pasien
  $sql="INSERT INTO data_pasien (tanggal,nama_pasien,umur_pasien, alamat, nama_suami, no_bpjs, hpht, ttp,  diagnosa, berat_badan, tinggi_badan,
  tekanan_darah_sistole, tekanan_darah_diastole, lila, denyut_jantung_janin, presentasi_janin, pemberian_fe_30, tanggal_fe_30, pemberian_fe_60, tanggal_fe_60, pemberian_fe_90, tanggal_fe_90, imunisasi_tt_1, tanggal_tt_1,
 imunisasi_tt_2, tanggal_tt_2, hb, proteine_urine, golongan_darah, hiv, sipilis, asam_urat, kolesterol, tata_laksana, terapi_wicara, keterangan,tempat_dibuat, 
 tanggal_dibuat, jabatan, nama_pejabat, nip) VALUES
		('$tanggal','$nama','$umur','$alamat','$suami','$bpjs','$hpht','$ttp','$diagnosa','$beratbadan','$tinggibadan','$sistole',
		'$diastole','$lila','$denyutjantungjanin','$presentasijanin','$tabletfe30','$tanggalfe30', '$tabletfe60','$tanggalfe60', '$tabletfe90','$tanggalfe90','$imunisasitt1','$tanggaltt1','$imunisasitt2','$tanggaltt2',
    '$hb' ,'$proteineurine', '$golongandarah', '$hiv', '$sipilis','$asamurat','$kolesterol','$tatalaksana','$terapiwicara','$keterangan', '$tempatdibuat','$tanggaldibuat', 
    '$jabatan', '$namapejabat', '$nip')";

//Mengeksekusi/menjalankan query diatas	
  $hasil=mysqli_query($kon,$sql);

  if($hasil){
    echo "<script>alert('Data Berhasil Disimpan!');window.location='daftar-pasien.php'</script>";
}
else {
    echo 'Silakan coba lagi!';
    exit;
}
?>