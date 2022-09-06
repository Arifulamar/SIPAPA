<!DOCTYPE >
<html>
<head>
<title>SIPAPA KIA</title>
    <!-- Load file CSS Bootstrap offline -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
            integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    
        <link href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.css" rel="stylesheet">
        </link>    
    <style>
        
        .form-control{
         border-color:rgba(100,0,0,0.3);
        }
        .placeholder{
            color: white;
        }
    </style>
</head>

<body>
<div class="container">
    <div class="p-5 text-center bg-light">
        <h1 class="mb-3">SIPAPA-KIA</h1>
        <h2 class="mb-3">SISTEM INFORMASI PENCATATAN PASIEN-KIA</h2>
        <a href="daftar-pasien.php" class="btn btn-info">DAFTAR PASIEN LAMA</a>
    </div>

    <form action="simpan-pendaftaran.php" method="post">
        <div class="form-group">
            <label>Tanggal:</label>
            <input type="date" name="tanggal" class="form-control" placeholder="Pilih Tanggal"/>
        </div>
		<div class="form-group">
            <label>Nama Pasien:</label>
            <input type="text" name="nama_pasien" class="form-control" placeholder="Masukan Nama" required />
        </div>
        <div class="form-group">
            <label>Umur Pasien (18-50 Tahun):</label>
            <input type="text" name="umur_pasien" class="form-control" placeholder="Masukan Umur" required/>
        </div>
		<div class="form-group">
			<label>Alamat:</label>
			<input type="text" name="alamat" id="alamat" class="form-control" placeholder="Alamat" required/>
		</div> 
		<div class="form-group">
            <label>Nama Suami:</label>
            <input type="text" name="nama_suami" class="form-control" placeholder="Masukan Nama Suami" required/>
        </div>
        <div class="form-group">
            <label>No BPJS:</label>
            <input type="text" name="no_bpjs" class="form-control" placeholder="Masukan Nomor BPJS (Hanya Angka)" onkeypress="return hanyaAngka(event)" required >
        </div>
        <div class="form-group">
            <label>HPHT:</label>
            <input type="date" name="hpht" class="form-control"/>
        </div>
        <div class="form-group">
            <label>TTP:</label>
            <input type="date" name="ttp" class="form-control"/>
        </div>
        <div class="form-group">
            <label>Diagnosa:</label>
            <input type="text" name="diagnosa" class="form-control" placeholder="Masukan Hasil Diagnosa">
        </div>
        <div class="form-group">
            <label>Berat Badan (Kg):</label>
            <input type="text" name="berat_badan" class="form-control" placeholder="Berat Badan (Hanya Angka)" onkeypress="return hanyaAngka(event)">
        </div>
        <div class="form-group">
            <label>Tinggi Badan (cm):</label>
            <input type="text" name="tinggi_badan" class="form-control" placeholder="Tinggi Badan (Hanya Angka)" onkeypress="return hanyaAngka(event)">
        </div>
        <div class="form-group">
            <label>Tekanan Darah Sistole:</label>
            <input type="text" name="tekanan_darah_sistole" class="form-control" placeholder="Tekanan Darah Sistole" />
        </div>
        <div class="form-group">
            <label>Tekanan Darah Diastole:</label>
            <input type="text" name="tekanan_darah_diastole" class="form-control" placeholder="Tekanan Darah Diastole" />
        </div>
        <div class="form-group">
            <label>Lingkar Lengan Atas-LILA (cm):</label>
            <input type="text" name="lila" class="form-control" placeholder="Lingkar Lengan Atas (Hanya Angka)" onkeypress="return hanyaAngka(event)">
        </div>
        <div class="form-group">
            <label>Denyut Jantung Janin:</label>
            <input type="text" name="denyut_jantung_janin" class="form-control" placeholder="Denyut Jantung Janin" />
        </div>
        <div class="form-group">
        <label>Presentasi Janin:</label>
        <div class="form-check">
            <div class="form-check">
            <div class="from-check">
            <input class="form-check-input" type="radio" name="presentasi_janin" id="presentasi_janin" <?php if (isset($presentasijanin) && $presentasijanin=="Ballotement") echo "checked"; ?> value="Ballotement" checked>
            <label class="form-check-label" for="flexRadioDefault1">Ballotement</label>
            </div>
            <div class="from-check">
            <input class="form-check-input" type="radio" name="presentasi_janin" id="presentasi_janin" <?php if (isset($presentasijanin) && $presentasijanin=="Kepala") echo "checked"; ?> value="Kepala">
            <label class="form-check-label" for="flexRadioDefault1">Kepala</label>
            </div>
            <div class="from-check">
            <input class="form-check-input" type="radio" name="presentasi_janin" id="presentasi_janin" <?php if (isset($presentasijanin) && $presentasijanin=="Lintang") echo "checked"; ?> value="Lintang">
            <label class="form-check-label" for="flexRadioDefault1">Lintang</label>
            </div>
            <div class="from-check">
            <input class="form-check-input" type="radio" name="presentasi_janin" id="presentasi_janin" <?php if (isset($presentasijanin) && $presentasijanin=="Sungsang") echo "checked"; ?> value="Sungsang">
            <label class="form-check-label" for="flexRadioDefault1">Sungsang</label>
            </div>
            <div class="from-check">
            <input class="form-check-input" type="radio" name="presentasi_janin" id="presentasi_janin" <?php if (isset($presentasijanin) && $presentasijanin=="Teraba") echo "checked"; ?> value="Teraba">
            <label class="form-check-label" for="flexRadioDefault1">Teraba</label>
            </div>
            </div>
        </div>
        </div>
        <div class="form-group">
        <label>Pemberian Tablet Fe 30 Butir:</label>
        <select name="pemberian_fe_30" id="pemberian_fe_30">
            <option value="belum_diberikan">Belum Diberikan</option>
            <option value="sudah_diberikan">Sudah Diberikan</option>
        </select>
        <div class="form-group">
            <div class="form-check">
                <label>Pada Tanggal:</label>
            <input type="date" name="tanggal_fe_30" class="form-control"/>
            </div>
        </div>
        <div class="form-group">
        <label>Pemberian Tablet Fe 60 Butir:</label>
        <select name="pemberian_fe_60" id="pemberian_fe_60">
            <option value="belum_diberikan">Belum Diberikan</option>
            <option value="sudah_diberikan">Sudah Diberikan</option>
        </select>
            
        </div>
        <div class="form-group">
            <div class="form-check">
                <label>Pada Tanggal:</label>
            <input type="date" name="tanggal_fe_60" class="form-control"/>
            </div>
        <div class="form-group">
        <label>Pemberian Tablet Fe 90 Butir:</label>
           <select name="pemberian_fe_90" id="pemberian_fe_90">
            <option value="belum_diberikan">Belum Diberikan</option>
            <option value="sudah_diberikan">Sudah Diberikan</option>
           </select>
            
        <div class="form-group">
            <div class="form-check">
                <label>Pada Tanggal:</label>
            <input type="date" name="tanggal_fe_90" class="form-control"/>
            </div>
        </div>

        <div class="form-group">
        <label>Imunisasi TT 1:</label>
        <select name="imunisasi_tt_1" id="imunisasi_tt_1">
        <option value="belum_diberikan">Belum Diberikan</option>
        <option value="sudah_diberikan">Sudah Diberikan</option>    
        </select>
        </div>
        <div class="form-group">
            <div class="form-check">
                <label>Pada Tanggal:</label>
            <input type="date" name="tanggal_tt_1" class="form-control"/>
            </div>
        </div>
        <div class="form-group">
        <label>Imunisasi TT 2:</label>
        <select name="imunisasi_tt_2" id="imunisasi_tt_2">
            <option value="belum_diberikan">Belum Diberikan</option>
            <option value="sudah_diberikan">Sudah Diberikan</option>
        </select>
        </div>
        <div class="form-group">
            <div class="form-check">
                <label>Pada Tanggal:</label>
            <input type="date" name="tanggal_tt_2" class="form-control"/>
            </div>
        </div>
        <div class="form-group">
            <label>Hb:</label>
            <input type="text" name="hb" class="form-control" placeholder="Hb" />
        </div>
        <div class="form-group">
            <label>Proteine Urine:</label>
            <input type="text" name="proteine_urine" class="form-control" placeholder="Protein Urine" />
        </div>
        <div class="form-group">
            <label>Golongan Darah:</label>
            <input type="text" name="golongan_darah" class="form-control" placeholder="Golongan Darah" />
        </div>
        <div class="form-group">
            <label>HIV:</label>
            <input type="text" name="hiv" class="form-control" placeholder="HIV" />
        </div>
        <div class="form-group">
            <label>Sipilis:</label>
            <input type="text" name="sipilis" class="form-control" placeholder="Sipilis" />
        </div>
        <div class="form-group">
            <label>Gula Darah:</label>
            <input type="text" name="gula_darah" class="form-control" placeholder="Gula Darah" />
        </div>
        <div class="form-group">
            <label>Asam Urat:</label>
            <input type="text" name="asam_urat" class="form-control" placeholder="Asam Urat" />
        </div>
        <div class="form-group">
            <label>Kolesterol:</label>
            <input type="text" name="kolesterol" class="form-control" placeholder="Kolesterol" />
        </div>
        <div class="form-group">
        <label>Tata Laksana Kasus:</label>
        <div class="form-check">
            <div class="form-check">
            <div class="from-check">
            <input class="form-check-input" type="radio" name="tata_laksana" id="tatalaksana" <?php if (isset($tatalaksana) && $tatalaksana=="rujuk_obgyn_RSUD_sabang") echo "checked"; ?> value="rujuk_obgyn_RSUD_sabang" checked>
            <label class="form-check-label" for="flexRadioDefault1">Rujuk ke Bag. Obgyn RSUD Sabang</label>
            </div>
            <div class="from-check">
            <input class="form-check-input" type="radio" name="tata_laksana" id="tatalaksana" <?php if (isset($tatalaksana) && $tatalaksana=="tidak_dirujuk") echo "checked"; ?> value="tidak_dirujuk">
            <label class="form-check-label" for="flexRadioDefault1">Tidak Dirujuk</label>
            </div>
            <div class="from-check">
            <input class="form-check-input" type="radio" name="tata_laksana" id="tatalaksana" <?php if (isset($tatalaksana) && $tatalaksana=="normal") echo "checked"; ?> value="normal">
            <label class="form-check-label" for="flexRadioDefault1">Normal</label>
            </div>
            </div>
            </div>
        </div>
        <div class="form-group">
            <label>Terapi Wicara:</label>
            <input type="text" name="terapi_wicara" class="form-control" placeholder="Terapi Wicara" />
        </div>
        <div class="form-group">
            <label>Keterangan:</label>
            <input type="text" name="keterangan" class="form-control" placeholder="Keterangan" />
        </div>
        <div class="form-group">
        <label >Dibuat di:</label>
        <input type="text" name="tempat_dibuat" class="form-control" placeholder="Masukkan Nama Tempat" />
        </div>
        <div class="form-group">
        <label >Tanggal dibuat:</label>
        <input type="date" name="tanggal_dibuat" class="form-control" placeholder="Pilih Tanggal Dibuat" />
        </div>
        <div class="form-group">
        <label >Jabatan:</label>
        <input type="text" name="jabatan" class="form-control" placeholder="Masukkan Nama Jabatan" />
        </div>
        <div class="form-group">
        <label >Nama Pejabat:</label>
        <input type="text" name="nama_pejabat" class="form-control" placeholder="Masukkan Nama Pejabat" />
        </div>
        <div class="form-group">
        <label >NIP:</label>
        <input type="text" name="nip" class="form-control" placeholder="Masukkan NIP" onkeypress="return hanyaAngka(event)"/>
        </div>
        <button type="submit" name="submit" class="btn btn-success">SIMPAN</button>

    </form>
    <script>
        function hanyaAngka(event) {
            var angka = (event.which) ? event.which : event.keyCode
            if (angka != 46 && angka > 31 && (angka < 48 || angka > 57))
                return false;
            return true;
        }
    </script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
        </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
        </script>
        <!-- jangan lupa menambahkan script js sweet alert di bawah ini  -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.33.1/sweetalert2.min.js"></script>

</div>
</body>
</html>