<!DOCTYPE >
<html>
<head>
<title>EDIT DATA PASIEN | SIPAPA KIA</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <style>
        .form-control{
            border-color:rgba(27,181,213,255);    
        }
    </style>
</head>

<body>

<div class="container">
    <div class="p-5 text-center bg-light">
        <h1 class="display-4">EDIT DATA PASIEN</h1>
        <hr class="my-4">
        <p class="lead">Ganti data pasien di sini</p>
    </div>
    <?php 
        include 'koneksi.php';
        $id=$_GET ['id'];
        $data=mysqli_query($kon, "SELECT * FROM data_pasien WHERE id='$id'");
        while ($d=mysqli_fetch_array($data)){

        ?>
    <form action="update.php" method="post">
        <div class="form-group">
            
            <label>Tanggal:</label>
            <input type="hidden" name="id" value="<?php echo $d['id']; ?>"/>
            <input type="date" name="tanggal" class="form-control" placeholder="Pilih Tanggal" value="<?php echo $d['tanggal']; ?>"/>
        </div>
		<div class="form-group">
            <label>Nama Pasien:</label>
            <input type="text" name="nama_pasien" class="form-control" placeholder="Masukan Nama" value="<?php echo $d['nama_pasien'];?>"/>
            <div class="invalid-feedback">Kolom harus diisi</div>
        </div>
        <div class="form-group">
            <label>Umur Pasien (18-50 Tahun):</label>
            <input type="text" name="umur_pasien" class="form-control" placeholder="Masukan Umur" value="<?php echo $d['umur_pasien'];?>" />
        </div>
		<div class="form-group">
			<label>Alamat:</label>
			<input type="text" name="alamat" class="form-control" placeholder="Alamat" value="<?php echo $d['alamat']; ?>" />
		</div> 
		<div class="form-group">
            <label>Nama Suami:</label>
            <input type="text" name="nama_suami" class="form-control" placeholder="Masukan Nama Suami" value="<?php echo $d['nama_suami'];?>"/>
        </div>
        <div class="form-group">
            <label>No BPJS:</label>
            <input type="text" name="no_bpjs" class="form-control" placeholder="Masukan Nomor BPJS (Hanya Angka)" onkeypress="return hanyaAngka(event)" value="<?php echo $d['no_bpjs'];?>">
        </div>
        <div class="form-group">
            <label>HPHT:</label>
            <input type="date" name="hpht" class="form-control" placeholder="Masukan HPHT" value="<?php echo $d['hpht'];?>">
        </div>
        <div class="form-group">
            <label>TTP:</label>
            <input type="date" name="ttp" class="form-control" placeholder="Masukan TTP" value="<?php echo $d['ttp'];?>">
        </div>
        <div class="form-group">
            <label>Diagnosa:</label>
            <input type="text" name="diagnosa" class="form-control" placeholder="Masukan Hasil Diagnosa" value="<?php echo $d['diagnosa'];?>">
        </div>
        <div class="form-group">
            <label>Berat Badan (Kg):</label>
            <input type="text" name="berat_badan" class="form-control" placeholder="Berat Badan (Hanya Angka)" onkeypress="return hanyaAngka(event)" value="<?php echo $d['berat_badan'];?>">
        </div>
        <div class="form-group">
            <label>Tinggi Badan (cm):</label>
            <input type="text" name="tinggi_badan" class="form-control" placeholder="Tinggi Badan (Hanya Angka)" onkeypress="return hanyaAngka(event)" value="<?php echo $d['tinggi_badan'];?>">
        </div>
        <div class="form-group">
            <label>Tekanan Darah Sistole:</label>
            <input type="text" name="tekanan_darah_sistole" class="form-control" placeholder="Tekanan Darah Sistole" value="<?php echo $d['tekanan_darah_sistole'];?>"/>
        </div>
        <div class="form-group">
            <label>Tekanan Darah Diastole:</label>
            <input type="text" name="tekanan_darah_diastole" class="form-control" placeholder="Tekanan Darah Diastole" value="<?php echo $d['tekanan_darah_diastole'];?>" />
        </div>
        <div class="form-group">
            <label>Lingkar Lengan Atas-LILA (cm):</label>
            <input type="text" name="lila" class="form-control" placeholder="Lingkar Lengan Atas (Hanya Angka)" onkeypress="return hanyaAngka(event)" value="<?php echo $d['lila'];?>">
        </div>
        <div class="form-group">
            <label>Denyut Jantung Janin:</label>
            <input type="text" name="denyut_jantung_janin" class="form-control" placeholder="Denyut Jantung Janin" value="<?php echo $d['denyut_jantung_janin'];?>"/>
        </div>
        <div class="form-group">
        <label>Presentasi Janin:</label>
        <div class="form-check">
            <div class="form-check">
            <div class="from-check">
            <input class="form-check-input" type="radio" name="presentasi_janin" id="presentasi_janin" value="Ballotement" <?php if ($d['presentasi_janin']=='Ballotement')  echo 'checked'; ?> >
            <label class="form-check-label" for="flexRadioDefault1">Ballotement</label>
            </div>
            <div class="from-check">
            <input class="form-check-input" type="radio" name="presentasi_janin" id="presentasi_janin"  value="Kepala" <?php if ($d['presentasi_janin']=='Kepala')  echo 'checked'; ?>>
            <label class="form-check-label" for="flexRadioDefault1">Kepala</label>
            </div>
            <div class="from-check">
            <input class="form-check-input" type="radio" name="presentasi_janin" id="presentasi_janin"  value="Lintang" <?php if ($d['presentasi_janin']=='Lintang')  echo 'checked'; ?>>
            <label class="form-check-label" for="flexRadioDefault1">Lintang</label>
            </div>
            <div class="from-check">
            <input class="form-check-input" type="radio" name="presentasi_janin" id="presentasi_janin"  value="Sungsang" <?php if ($d['presentasi_janin']=='Sungsang')  echo 'checked'; ?>>
            <label class="form-check-label" for="flexRadioDefault1">Sungsang</label>
            </div>
            <div class="from-check">
            <input class="form-check-input" type="radio" name="presentasi_janin" id="presentasi_janin"  value="Teraba" <?php if ($d['presentasi_janin']=='Teraba')  echo 'checked'; ?>>
            <label class="form-check-label" for="flexRadioDefault1">Teraba</label>
            </div>
            </div>
        </div>
        </div>
        <div class="form-group">
        <label>Pemberian Tablet Fe 30 Butir:</label>
        <div class="form-check">
            <div class="form-check">
            <div class="from-check">
            <input class="form-check-input" type="radio" name="pemberian_fe_30" id="tabletfe30" <?php if ($d['pemberian_fe_30']=='belum_diberikan') echo "checked"; ?> value="belum_diberikan_30_butir">
            <label class="form-check-label" for="flexRadioDefault1">Belum Diberikan 30 butir</label>
            </div>
            <div class="from-check">
            <input class="form-check-input" type="radio" name="pemberian_fe_30" id="tabletfe30" <?php if ($d ['pemberian_fe_30']=='sudah_diberikan') echo "checked"; ?> value="sudah_diberikan_30_butir">
            <label class="form-check-label" for="flexRadioDefault1">Diberikan 30 butir</label>
            </div>
            </div>
            </div>
            <div class="form-check">
            <input type="date" name="tanggal_fe_30" class="form-control"  value="<?php echo $d['tanggal_fe_30'];?>"/>  
            </div>
        </div>
        <div class="form-group">
        <label>Pemberian Tablet Fe 60 Butir:</label>
        <div class="form-check">
            <div class="form-check">
            <div class="from-check">
            <input class="form-check-input" type="radio" name="pemberian_fe_60" id="tabletfe60" <?php if ($d['pemberian_fe_60']=='belum_diberikan') echo "checked"; ?> value="belum_diberikan_60_butir">
            <label class="form-check-label" for="flexRadioDefault1">Belum Diberikan 60 butir</label>
            </div>
            <div class="from-check">
            <input class="form-check-input" type="radio" name="pemberian_fe_60" id="tabletfe60" <?php if ($d ['pemberian_fe_60']=='sudah_diberikan') echo "checked"; ?> value="sudah_diberikan_60_butir">
            <label class="form-check-label" for="flexRadioDefault1">Diberikan 60 butir</label>
            </div>
            </div>
            </div>
            <div class="form-check">
            <input type="date" name="tanggal_fe_60" class="form-control"  value="<?php echo $d['tanggal_fe_60'];?>"/>  
            </div>
        </div>
        <div class="form-group">
        <label>Pemberian Tablet Fe 90 Butir:</label>
        <div class="form-check">
            <div class="form-check">
            <div class="from-check">
            <input class="form-check-input" type="radio" name="pemberian_fe_90" id="tabletfe90" <?php if ($d['pemberian_fe_90']=="belum_diberikan") echo "checked"; ?> value="belum_diberikan_90_butir">
            <label class="form-check-label" for="flexRadioDefault1">Belum Diberikan 90 butir</label>
            </div>
            <div class="from-check">
            <input class="form-check-input" type="radio" name="pemberian_fe_90" id="tabletfe90" <?php if ($d ['pemberian_fe_90']=="sudah_diberikan") echo "checked"; ?> value="sudah_diberikan_90_butir">
            <label class="form-check-label" for="flexRadioDefault1">Diberikan 90 butir</label>
            </div>
            </div>
            </div>
            <div class="form-check">
            <input type="date" name="tanggal_fe_90" class="form-control"  value="<?php echo $d['tanggal_fe_90'];?>"/>  
            </div>
        </div>
        <div class="form-group">
        <label>Imunisasi TT 1:</label>
        <div class="form-check">
            <div class="form-check">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="imunisasi_tt_1" id="imunisasitt1" <?php if ($d['imunisasi_tt_1']=="belum_diberikan") echo "checked"; ?> value="belum_diberikan">
            <label class="form-check-label" for="flexRadioDefault1">Belum diberikan</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="imunisasi_tt_1" id="imunisasitt1" <?php if ($d['imunisasi_tt_1']=="sudah_diberikan") echo "checked"; ?> value="sudah_diberikan">
            <label class="form-check-label" for="flexRadioDefault1">Sudah diberikan</label>
            </div>
            </div>
            </div>
            <div class="form-check">
            <input type="date" placeholder="tanggal_tt_1" class="form-control" name="tanggal_tt_1" value="<?php echo $d['tanggal_tt_1'];?>"/>
            </div>
        </div>
        <div class="form-group">
        <label>Imunisasi TT 2:</label>
        <div class="form-check">
            <div class="form-check">
            <div class="form-check">
            <input class="form-check-input" type="radio" name="imunisasi_tt_2" id="imunisasitt2" <?php if ($d['imunisasi_tt_2']=="belum_diberikan") echo "checked"; ?> value="belum_diberikan" >
            <label class="form-check-label" for="flexRadioDefault2">Belum diberikan</label>
            </div>
            <div class="form-check">
            <input class="form-check-input" type="radio" name="imunisasi_tt_2" id="imunisasitt2" <?php if ($d['imunisasi_tt_2']=="sudah_diberikan") echo "checked"; ?> value="sudah_diberikan">
            <label class="form-check-label" for="flexRadioDefault2">Sudah diberikan</label>
            </div>
            </div>
            </div>
            <div class="form-check">
            <input type="date" placeholder="tanggal_tt_2" class="form-control" name="tanggal_tt_2" value="<?php echo $d['tanggal_tt_2'];?>"/>
            </div>
        </div>
        <div class="form-group">
            <label>Hb:</label>
            <input type="text" name="hb" class="form-control" placeholder="Hb" value="<?php echo $d['hb'];?>"/>
        </div>
        <div class="form-group">
            <label>Proteine Urine:</label>
            <input type="text" name="proteine_urine" class="form-control" placeholder="Protein Urine" value="<?php echo $d['proteine_urine'];?>"/>
        </div>
        <div class="form-group">
            <label>Golongan Darah:</label>
            <input type="text" name="golongan_darah" class="form-control" placeholder="Golongan Darah" value="<?php echo $d['golongan_darah'];?>"/>
        </div>
        <div class="form-group">
            <label>HIV:</label>
            <input type="text" name="hiv" class="form-control" placeholder="HIV" value="<?php echo $d['hiv'];?>"/>
        </div>
        <div class="form-group">
            <label>Sipilis:</label>
            <input type="text" name="sipilis" class="form-control" placeholder="Sipilis" value="<?php echo $d['sipilis'];?>"/>
        </div>
        <div class="form-group">
            <label>Gula Darah:</label>
            <input type="text" name="gula_darah" class="form-control" placeholder="Gula Darah" value="<?php echo $d['gula_darah'];?>"/>
        </div>
        <div class="form-group">
            <label>Asam Urat:</label>
            <input type="text" name="asam_urat" class="form-control" placeholder="Asam Urat" value="<?php echo $d['asam_urat'];?>"/>
        </div>
        <div class="form-group">
            <label>Kolesterol:</label>
            <input type="text" name="kolesterol" class="form-control" placeholder="Kolesterol" value="<?php echo $d['kolesterol'];?>"/>
        </div>
        <div class="form-group">
        <label>Tata Laksana Kasus:</label>
        <div class="form-check">
            <div class="form-check">
            <div class="from-check">
            <input class="form-check-input" type="radio" name="tata_laksana" id="tatalaksana" <?php if ($d['tata_laksana']=="rujuk_obgyn_RSUD_sabang") echo "checked"; ?> value="Rujuk Obgyn RSUD sabang">
            <label class="form-check-label" for="flexRadioDefault1">Rujuk ke Bag. Obgyn RSUD Sabang</label>
            </div>
            <div class="from-check">
            <input class="form-check-input" type="radio" name="tata_laksana" id="tatalaksana" <?php if ($d['tata_laksana']=="tidak_dirujuk") echo "checked"; ?> value="Tidak Dirujuk">
            <label class="form-check-label" for="flexRadioDefault1">Tidak Dirujuk</label>
            </div>
            <div class="from-check">
            <input class="form-check-input" type="radio" name="tata_laksana" id="tatalaksana" <?php if ($d['tata_laksana']=="normal") echo "checked"; ?> value="normal">
            <label class="form-check-label" for="flexRadioDefault1">Normal</label>
            </div>
            </div>
            </div>
        </div>
        <div class="form-group">
            <label>Terapi Wicara:</label>
            <input type="text" name="terapi_wicara" class="form-control" placeholder="Terapi Wicara" value="<?php echo $d['terapi_wicara'];?>" />
        </div>
        <div class="form-group">
            <label>Keterangan:</label>
            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" value="<?php echo $d['keterangan'];?>"/>
        </div>
        <div class="form-group">
        <label >Dibuat di:</label>
        <input type="text" name="tempat_dibuat" class="form-control" placeholder="Masukkan Nama Tempat" value="<?php echo $d['tempat_dibuat']; ?>"/>
        </div>
        <div class="form-group">
        <label >Tanggal dibuat:</label>
        <input type="date" name="tanggal_dibuat" class="form-control" placeholder="Pilih Tanggal Dibuat" value="<?php echo $d["tanggal_dibuat"]; ?>"/>
        </div>
        <div class="form-group">
        <label >Jabatan:</label>
        <input type="text" name="jabatan" class="form-control" placeholder="Masukkan Nama Jabatan" value="<?php echo $d["jabatan"]; ?>"/>
        </div>
        <div class="form-group">
        <label >Nama Pejabat:</label>
        <input type="text" name="nama_pejabat" class="form-control" placeholder="Masukkan Nama Pejabat" value="<?php echo $d["nama_pejabat"]; ?>"/>
        </div>
        <div class="form-group">
        <label >NIP:</label>
        <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP" value="<?php echo $d["nip"]; ?>"/>
        </div>

        <a href="daftar-pasien.php" class="btn btn-secondary">BATAL</a>    
        <button type="submit" name="submit" class="btn btn-success">UPDATE</button>

    </form>
    <?php } 
    ?>
  
</div>

</body>
</html>