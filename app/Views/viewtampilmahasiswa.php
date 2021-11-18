<!DOCTYPE html>
<html>
<head>

<nav class="navbar navbar-expand-lg navbar-dark bg-danger">
        <div class="container-fluid">
        <img src="gambar/unesa.png" style="width: 40px">&nbsp;&nbsp;<a class="navbar-brand" href="#">Mutiara Vebriani || 20051214014</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          </div>
        </div>
      </nav>

	<title >Mutiara Vebriani_CRUD </title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>

<body class="bg-dark">
	<style>
		body
		 {
		 	background-color: #141f1f;

		}
	</style>
<div class="container mt-3">

	<H1 class="text-center text-info"> TUGAS PBO CRUD PHP & MY SQL </H1>
	<p class="text-center text-light">CRUD adalah singkatan yang berasal dari Create, Read, Update, dan Delete, dimana keempat istilah tersebut merupakan fungsi utama yang nantinya diimplementasikan ke dalam basis data.</p>
	
    <p>
         <button type="button" onclick="window.location='<?php echo site_url('mahasiswa/formtambah')?>'">
             Tambah data
         </button>
     </p>
<!-- TABEL AWAL -->
<div class="card mt-5">
	  <div class="card-header bg-dark text-danger">
	    Data Mahasiswa Sistem Informasi 2020 B UNESA
	  </div>
	  <div class="card-body">
	   <table class="table table-bordered  bg-dark text-white">
	   	<tr>
	   		
	   		<th>No</th>
	   		<th>NIM</th>
	   		<th>Nama</th>
	   		<th>Jenis Kelamin</th>
	   		<th>Alamat</th>
	   		<th>Kota</th>
	   		<th>Email</th>
	   		<th>Foto</th>
	   		<th>Aksi</th>

	   	</tr>
           <tbody>
               <?php
               $no =0;
               foreach ($tampildata as $row): 
                $no++;
               ?>
               <tr>
            <th><?= $no; ?></th>
            <td><?= $row->nim ?></td>
            <td><?= $row->namamhs ?></td>
            <td><?= $row->jk ?></td>
            <td><?= $row->alamat ?></td>
            <td><?= $row->kota ?></td>
            <td><?= $row->email ?></td>
            <td><?= $row->foto ?></td>
            <td>
                <button type="button" onclick="hapus('<?= $row->nim ?>')">
                Hapus
                </button>

                <button type="button" onclick="window.location='<?php echo site_url('mahasiswa/formedit/'.$row->nim)?>'">
             Edit
         </button>
            </td>
               </tr>
<?php 
endforeach;
?>

           </tbody>
       </table>
           <script>
               function hapus(nim){
                   pesan= confirm('Yakin menghapus data mahasiswa?');
                   if(pesan){
                       window.location.href=("<?= site_url('mahasiswa/hapus/')?>")+nim;
                   }else return false;
               }
               </script>
           </html>

         
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  