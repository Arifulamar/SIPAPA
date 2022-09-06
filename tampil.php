

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <title>Aplikasi SIPAPA-KIA Puskesmas Cot Ba'u</title>
</head>
<body>
<div class="container">
    <table width="100%">
        <tr>
            <td width="30" align="right"><img src="logo.jpg" width="100%"> </td>
            <td width="40" align="center"> <h3>PEMERINTAH KOTA SABANG</h3> 
            <h5>DINAS KESEHATAN DAN KELUARGA BERENCANA</h5> 
            <h3>PUSKESMAS COT BA'U</h3>
            <h6>jln.By Pass, Cot Ba'u, Kec. Sukajaya, Kota Sabang, Aceh 23522</h6>
            <h6>Telp. 082160487556 E-mail : pkm.cot_bau@hotmail.com</h6>
        </td>
        <td width="30" align="center"> <img src="logo-puskesmas.jpg" width="100%"> </td>
        </tr>
    </table>
    <div style="border-top: 4px groove #0a0a0a; margin-top: 1em; padding-top: 1em;">
</div>

        <div class="text-center">
    <h1>DATA PASIEN KIA</h1>

    
    </div>
    <?php 
        include 'koneksi.php';
        $id = $_GET ['id'];
        $data = mysqli_query ($kon, "SELECT * FROM data_pasien WHERE id ='$id'");
        while ($d = mysqli_fetch_array($data)){
    ?>
    <div class=text-right>
    <input type="button" value="print" onClick="window.print()">

    </div>
    <h3>Identitas Pasien:</h3>
    
    <table border="1" width="500px">
        <tr>
            <td width="200"> <b>Nama</b>  </td>
            <td width="300"><?php echo $d['nama_pasien']; ?></td>
        </tr>
        <tr>
            <td><b>Umur</b></td>
            <td><?php echo $d['umur_pasien'] ?></td>
        </tr>
        <tr>
            <td> <b>Tanggal Kontrol</b></td>
            <td><?php echo date ('d-m-Y', strtotime ($d['tanggal'])); ?></td>
        </tr>
        <tr>
            <td><b>Nama Suami</b></td>
            <td><?php echo $d['nama_suami']; ?></td>
        </tr>
        <tr>
            <td> <b>Alamat</b></td>
            <td><?php echo $d['alamat']; ?></td>
        </tr>
        <tr>
            <td><b>No BPJS</b></td>
            <td><?php echo $d['no_bpjs']; ?></td>
        </tr>
    </table>
            <br>


            
     <div class="container">
            <div class="row">
                <div class="col">
                <h5>Hasil Pemeriksaan Kehamilan:</h5>
                <table border="1" width="500px">
                <tr>
                    <td width="150px">HPHT</td>
                    <td   align="center" width="150px"><?php echo date('d-m-Y', strtotime( $d['hpht'])); ?></td>
                </tr>
                <tr >
                    <td>TTP</td>
                    <td  align="center"><?php echo date('d-m-Y', strtotime( $d['ttp'])); ?></td>
                </tr> 
                <tr  >
                    <td>Diagnosa</td>
                    <td align="center"><?php echo $d['diagnosa']; ?></td>
                </tr>
                <tr  >
                    <td>Berat Badan</td>
                    <td align="center"><?php echo $d['berat_badan']; ?></td>
                </tr>
                <tr  >
                    <td>Tinggi Badan</td>
                    <td align="center"><?php echo $d['tinggi_badan'];?> </td>
                </tr>
                <tr  >
                    <td>TD Sistole</td>
                    <td align="center"><?php echo $d['tekanan_darah_sistole']; ?></td>
                </tr>
                <tr >
                    <td>TD Diastole</td>
                    <td  align="center"><?php echo $d['tekanan_darah_diastole']; ?></td>
                </tr>
                <tr  >
                    <td>Lingkar Lengan Atas</td>
                    <td align="center"><?php echo $d['lila']; ?></td>
                </tr>
                <tr >
                        <td width="150px">Denyut Jantung Janin</td>
                        <td  align="center" width="150px"><?php echo $d['denyut_jantung_janin']; ?></td>
                    </tr>
                    <tr  >
                        <td>Presentasi Janin</td>
                        <td align="center"><?php echo $d['presentasi_janin']; ?></td>
                    </tr> 
                    <tr  >
                        <td>Pemberian Tablet Fe 30</td>
                        <td align="center"><?php if ($d['pemberian_fe_30']=="sudah_diberikan_30_butir") { echo "sudah diberikan, "; echo date ('d-m-y', strtotime ( $d['tanggal_fe_30']));}
                        else {
                            echo ("belum diberikan");
                        }?></td>
                    </tr>

                    <tr  >
                        <td>Pemberian Tablet Fe 60</td>
                        <td align="center"><?php if ($d['pemberian_fe_60']=="sudah_diberikan_60_butir") { echo "sudah diberikan, "; echo date ('d-m-y', strtotime ( $d['tanggal_fe_60']));}
                        else {
                            echo ("belum diberikan");
                        }?></td>
                    </tr>

                    <tr  >
                        <td>Pemberian Tablet Fe 90</td>
                        <td align="center"><?php if ($d['pemberian_fe_90']=="sudah_diberikan_90_butir") { echo "sudah diberikan, "; echo date ('d-m-y', strtotime ( $d['tanggal_fe_90']));}
                        else {
                            echo ("belum diberikan");
                        }?></td>
                    </tr>

                    <tr  >
                        <td>Imunisasi TT 1</td>
                        <td align="center"><?php if ($d['imunisasi_tt_1']=="sudah_diberikan") { echo "sudah diberikan, "; echo date ('d-m-y', strtotime ( $d['tanggal_tt_1']));}
                        else {
                            echo ("belum diberikan");
                        }?></td>
                    </tr>
                    
                    <tr >
                    <td>Imunisasi TT 2</td>
                        <td  align="center"><?php if ($d['imunisasi_tt_2']=="sudah_diberikan") { echo "sudah diberikan, "; echo date ('d-m-y', strtotime ( $d['tanggal_tt_2']));}
                        else {
                            echo ("belum diberikan");
                        }?></td>
                    </tr>

                </table>
                </div>
                <div class="col-sm">
                 <!--    
                <table border="1" width="400px">
                    <tr  align="center">
                        <td width="150px">Denyut Jantung Janin</td>
                        <td width="150px"><?php echo $d['denyut_jantung_janin']; ?></td>
                    </tr>
                    <tr  align="center">
                        <td>Presentasi Janin</td>
                        <td><?php echo $d['presentasi_janin']; ?></td>
                    </tr> 
                    <tr  align="center">
                        <td>Pemberian Tablet Fe 30</td>
                        <td><?php if ($d['pemberian_fe_30']=="sudah_diberikan_30_butir") { echo "sudah diberikan, "; echo date ('d-m-y', strtotime ( $d['tanggal_fe_30']));}
                        else {
                            echo ("belum diberikan");
                        }?></td>
                    </tr>

                    <tr  align="center">
                        <td>Pemberian Tablet Fe 60</td>
                        <td><?php if ($d['pemberian_fe_60']=="sudah_diberikan_60_butir") { echo "sudah diberikan, "; echo date ('d-m-y', strtotime ( $d['tanggal_fe_60']));}
                        else {
                            echo ("belum diberikan");
                        }?></td>
                    </tr>

                    <tr  align="center">
                        <td>Pemberian Tablet Fe 90</td>
                        <td><?php if ($d['pemberian_fe_90']=="sudah_diberikan_90_butir") { echo "sudah diberikan, "; echo date ('d-m-y', strtotime ( $d['tanggal_fe_90']));}
                        else {
                            echo ("belum diberikan");
                        }?></td>
                    </tr>

                    <tr  align="center">
                        <td>Imunisasi TT 1</td>
                        <td><?php if ($d['imunisasi_tt_1']=="sudah_diberikan") { echo "sudah diberikan, "; echo date ('d-m-y', strtotime ( $d['tanggal_tt_1']));}
                        else {
                            echo ("belum diberikan");
                        }?></td>
                    </tr>
                    
                    <tr  align="center">
                    <td>Imunisasi TT 2</td>
                        <td><?php if ($d['imunisasi_tt_2']=="sudah_diberikan") { echo "sudah diberikan, "; echo date ('d-m-y', strtotime ( $d['tanggal_tt_2']));}
                        else {
                            echo ("belum diberikan");
                        }?></td>
                    </tr>

                </table> -->
                </div>
                <br>
                <div class="col">
                <h5>Hasil Pemeriksaan laboratorium:</h5>
                    <table border="1" width="300px">
                    <tr  >
                        <td width="150px">Hb</td>
                        <td width="150px" align="center"><?php echo $d['hb']; ?></td>
                    </tr>
                    <tr  >
                        <td>Proteine Urine</td>
                        <td align="center"><?php echo $d['proteine_urine']; ?></td>
                    </tr> 
                    <tr  >
                        <td>Golongan Darah</td>
                        <td align="center"><?php echo $d['golongan_darah']; ?></td>
                    </tr>
                    <tr  >
                        <td>HIV</td>
                        <td align="center"><?php echo $d['hiv']; ?></td>
                    </tr>
                    <tr  >
                        <td>Sipilis</td>
                        <td align="center"><?php echo $d['sipilis']; ?></td>
                    </tr>
                    <tr  >
                        <td>Gula Darah</td>
                        <td align="center"><?php echo $d['gula_darah']; ?></td>
                    </tr>
                    <tr  >
                        <td>Asam Urat</td>
                        <td align="center"><?php echo $d['asam_urat']; ?></td>
                    </tr>
                    <tr  >
                        <td>Kolesterol</td>
                        <td align="center"><?php echo $d['kolesterol']; ?></td>
                    </tr>
                    </table>
                    </div>
                 <!-- Tabel tindak lanjut pasien -->  
                     
                 <div class="col">
                 <br><br>
                 <h5>Tindak Lanjut Penanganan</h5>

                    <table border="1" width="500px">
                        <tr>
                        <td> <b>Tata Laksana</b> </td>
                            <td width="300px" align="left"><?php echo $d['tata_laksana']; ?></td>
                        </tr>
                        <tr>
                        <td> <b>Terapi Wicara</b></td>
                            <td align="left"><?php echo $d['terapi_wicara']; ?></td>
                        </tr>
                        <tr>
                        <td> <b> Keterangan</b></td>
                            <td align="left"><?php echo $d['keterangan'];?></td>
                        </tr>
                    </table>
                    </div>
            </div>
     </div>
            
    
    <br>


<br> <br> <br>
         <div class="row">
                    <div class="col-sm"></div>
                    <div class="col-sm"></div>
                    <div class="col-sm">
                    <tr>
                        <td><?php echo $d['tempat_dibuat']; ?></td>
                        <td>,</td>
                        <td><?php echo date('d-m-Y', strtotime ($d['tanggal_dibuat'])); ?></td>
                    </tr>
                    <br>
                <tr>
                    <td>
                    <?php echo $d['jabatan']; ?>
                    </td>
                        <br> <br><br><br>
                        <td> <?php echo $d['nama_pejabat']; ?> </td> <br>
                        <td>NIP. <?php echo $d['nip']; ?> </td>
                    
                </tr>
                        
                    </div>
         </div>
         <?php 
        }
         ?>    
         <br>
</div>
</body>
</html>