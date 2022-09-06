<?php
include 'koneksi.php';

if (isset($_POST['submit'])){
   $bln = date ($_POST['bulan']);

   if (!empty($bln)){
      //perintah tampil berdasarkan periode bulan
      $q = mysqli_query($kon, "select * from data_pasien where month(tanggal) = '$bln'");
   } else {
      //perintah tampil semua data
      $q = mysqli_query ($kon, "select * from data_pasien d");
   }
   } else {
      //perintah tampil semua data 
      $q = mysqli_query ($kon, "select * from data_pasien");
   }
   //hitung jumlah baris data
   $s = $q -> num_rows;

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Pasien KIA</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="javascript" href="https://cdnjs.cloudfare.com/ajax/libs/jquery/3.6.0/jquery.min.js">
    <style>
      #myInput {

         }

         #myTable {
         border-collapse: collapse; /* Collapse borders */
         width: 100%; /* Full-width */
         border: 1px solid #ddd; /* Add a grey border */
         font-size: 18px; /* Increase font-size */
         }
    </style>
    <style>
      table{
         display:table;
         border-collapse:collapse;
         margin:auto;
      }
      caption{
         margin:20px auto;
         font-size:22px;
         font-family:arial, sans-serif;
         font-weight:bold;
      }
      thead{
         background-color:rgba(128,0,0,0.6);
         color:white;
      }
      tbody tr:nth-child(even){
         background-color:rgba(128,0,0,0.2);
      }
      tr,td,th{
         border:1px solid black;
         text-align:center;
         font-family:calibri,arial,sans-serif;
         padding:10px;
      }
      td{color:rgb(128,0,0);}
   </style>
</head>
<body>
    <div class="container-fluid">
      <div class="p-5 text-center bg-light">
        <h1 class="mb-3">Pasien KIA Puskesmas Cot Ba'u</h1>
        <h2 class="mb-3"><a href="form-pendaftaran.php" class="btn btn-danger">Tambah Pasien</a></h2>
        <h2 class="mb-3"><a href="index.php" class="btn btn-primary">Beranda</a></h2>
      </div>
      <div class=text-right>
    <input type="button" value="print" onClick="window.print()">

    </div>
      <div class="card col-md-12 mx-auto mt-3"> 
         <div class="card-body">
            <div class="row">
      
      <div class="col">
      <form method="POST" action="" class="form-inline">
       <label for="date1">Data pasien bulan: </label>
       <select class="form-control mr-2" name="bulan" id="bulan">
        <option value="">Semua</option>
        <option value="1">Januari</option>
        <option value="2">Februari</option>
        <option value="3">Maret</option>
        <option value="4">April</option>
        <option value="5">Mei</option>
        <option value="6">Juni</option>
        <option value="7">Juli</option>
        <option value="8">Agustus</option>
        <option value="9">September</option>
        <option value="10" >Oktober</option>
        <option value="11" >November</option>
        <option value="12" >Desember</option>
       </select>
       <button type="submit" name="submit" class="btn btn-primary" id="selected">Tampilkan</button>
      </form>

   </div>
   <div class="col-md-4 pt-2">
      <label for="carinama">Cari Nama:</label>
   <input type="text" id="myInput" onkeyup="myFunction()" placeholder="Ketik Nama..">
   </div>
   <?php 
if(isset($_GET['cari'])){
	$cari = $_GET['cari'];
	echo "<b>Hasil pencarian : ".$cari."</b>";
}
?>
      <div class="col-md-4 pt-2">
      <span>Jumlah Data: <b><?=$s ?> </b> </span>
      </div>
    <table width="1200px" id="myTable">
        <tr>
            <th>No</th>
            <th>Tanggal</th>
            <th>Nama</th>
            <th>Umur</th>
            <th>Alamat</th>
            <th>Nama Suami</th>
            <th>No. BPJS</th>
           <!-- <th>HPHT</th>
            <th>TTP</th>
            <th>Diagnosa</th>
            <th>Berat Badan (kg)</th>
            <th>Tinggi Badan (cm)</th>
            <th>Tekanan Darah Sistole</th>
            <th>Tekanan Darah Diastole</th>
            <th>Lingkar Lengan Atas (LILA)</th>
            <th>Denyut Jantung Janin</th>
            <th>Presentasi Janin</th>
            <th>Pemberian Tablet Fe</th>
            <th>pada tanggal</th>
            <th>Imunisasi TT 1</th>
            <th>Tanggal TT 1</th>
            <th>Imunisasi TT 2</th>
            <th>Tanggal TT 2</th>
            <th>Hb</th>
            <th>Proteine Urine</th>
            <th>Golongan Darah</th>
            <th>HIV</th>
            <th>Sipilis</th>
            <th>Gula Darah</th>
            <th>Asam Urat</th>
            <th>Kolesterol</th>
            <th>Tata Laksana Kasus</th>
            <th>Terapi Wicara</th>
            <th>Keterangan</th> -->
            <th>OPSI</th>
        </tr>
       
        <?php 
            $no = 1;
            while ($d = $q->fetch_assoc()) {
        ?> 
        <tr>
            <td><?php echo $no++; ?></td>
            <td><?php echo date ('d-m-Y', strtotime ($d['tanggal'])); ?></td>
            <td><?php echo $d['nama_pasien']; ?></td>
            <td><?php echo $d['umur_pasien']; ?></td>
            <td><?php echo $d['alamat']; ?></td>
            <td><?php echo $d['nama_suami']; ?></td>
           <td><?php echo $d['no_bpjs']; ?></td>
          <!-- <td><?php echo $d['hpht']; ?></td>
            <td><?php echo $d['ttp']; ?></td>
            <td><?php echo $d['diagnosa']; ?></td>
            <td><?php echo $d['berat_badan']; ?></td>
            <td><?php echo $d['tinggi_badan']; ?></td>
            <td><?php echo $d['tekanan_darah_sistole']; ?></td>
            <td><?php echo $d['tekanan_darah_diastole']; ?></td>
            <td><?php echo $d['lila']; ?></td>
            <td><?php echo $d['denyut_jantung_janin']; ?></td>
            <td><?php echo $d['presentasi_janin']; ?></td>
            <td><?php echo $d['pemberian_tablet_fe']; ?></td>
            <td><?php echo $d['tanggal_fe']; ?></td>
            <td><?php echo $d['imunisasi_tt_1']; ?></td>
            <td><?php echo $d['tanggal_tt_1']; ?></td>
            <td><?php echo $d['imunisasi_tt_2']; ?></td>
            <td><?php echo $d['tanggal_tt_2']; ?></td>
            <td><?php echo $d['hb']; ?></td>
            <td><?php echo $d['proteine_urine']; ?></td>
            <td><?php echo $d['golongan_darah']; ?></td>
            <td><?php echo $d['hiv']; ?></td>
            <td><?php echo $d['sipilis']; ?></td>
            <td><?php echo $d['gula_darah']; ?></td>
            <td><?php echo $d['asam_urat']; ?></td>
            <td><?php echo $d['kolesterol']; ?></td>
            <td><?php echo $d['tata_laksana']; ?></td>
            <td><?php echo $d['terapi_wicara']; ?></td>
            <td><?php echo $d['keterangan']; ?></td> -->
            <td>
                <a href="edit.php?id=<?=$d['id']; ?>">EDIT</a>
                <a href="hapus.php?id=<?=$d['id']; ?>">HAPUS</a>
                <a href="tampil.php?id=<?=$d['id']; ?>" target="_blank">TAMPIL</a>
            </td>
        </tr>
      <?php } ?>
    </table>
    </div>
    </div>
    </div>
    </div>
    <script>
function myFunction() {
  // Declare variables
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");

  // Loop through all table rows, and hide those who don't match the search query
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[2];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }
  }
}
</script>
</body>

</html>