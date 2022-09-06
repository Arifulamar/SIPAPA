<?php 

include "koneksi.php";

$id=$_POST["id"];
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
$guladarah =$_POST["gula_darah"];
$asamurat=$_POST["asam_urat"];
$kolesterol=$_POST["kolesterol"];
$tatalaksana=$_POST["tata_laksana"];
$terapiwicara=$_POST["terapi_wicara"];
$keterangan=$_POST["keterangan"];
$tempatdibuat =$_POST["tempat_dibuat"];
$tempatdibuat = addslashes($_POST["tempat_dibuat"]);
$tanggaldibuat = $_POST["tanggal_dibuat"];
$jabatan = $_POST["jabatan"];
$namapejabat = $_POST["nama_pejabat"];
$nip=$_POST["nip"];

mysqli_query($kon, "UPDATE data_pasien set tanggal='$tanggal', nama_pasien='$nama',
umur_pasien ='$umur', alamat='$alamat', nama_suami='$suami', no_bpjs='$bpjs',
hpht='$hpht', ttp='$ttp', diagnosa='$diagnosa', berat_badan='$beratbadan',
tinggi_badan='$tinggibadan', tekanan_darah_sistole='$sistole', tekanan_darah_diastole='$diastole',
lila='$lila', denyut_jantung_janin='$denyutjantungjanin', presentasi_janin='$presentasijanin',
pemberian_fe_30='$tabletfe30', tanggal_fe_30='$tanggalfe30', pemberian_fe_60='$tabletfe60', tanggal_fe_60='$tanggalfe60',
pemberian_fe_90='$tabletfe90', tanggal_fe_90='$tanggalfe90',imunisasi_tt_1='$imunisasitt1', tanggal_tt_1='$tanggaltt1', imunisasi_tt_2='$imunisasitt2',tanggal_tt_2='$tanggaltt2', 
hb='$hb', proteine_urine='$proteineurine',
golongan_darah='$golongandarah', hiv='$hiv', sipilis='$sipilis', gula_darah='$guladarah', asam_urat='$asamurat',
kolesterol='$kolesterol', tata_laksana='$tatalaksana',
terapi_wicara='$terapiwicara', keterangan='$keterangan', tempat_dibuat='$tempatdibuat', tanggal_dibuat='$tanggaldibuat',
jabatan='$jabatan', nama_pejabat='$namapejabat', nip='$nip' WHERE id='$id'"); 
header ("location:daftar-pasien.php");
?>