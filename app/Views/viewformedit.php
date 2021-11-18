
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
         <button type="button" onclick="window.location='<?php echo site_url('mahasiswa')?>'">
             Kembali
         </button>
     </p>
	 <!-- FORM AWAL -->
	<div class="card mt-5">
	  <div class="card-header bg-dark text-danger">
	    Form Edit Data Mahasiswa Sistem Informasi 2020 B UNESA
	  </div>
	  <div class="card-body">
        <?= form_open('mahasiswa/simpandata')?>
        
	   <form method="post" action="" class="card-header bg-dark text-white">
	   	<div class="form-group">
	   		<label>NIM</label>
	   		<input type="text" name="tnim" value="<?=@$nim?>" class="form-control" placeholder="Masukan NIM" required="">
	   	</div>

	   	<div class="form-group">
	   		<label>Nama</label>
	   		<input type="text" name="tnama" value="<?=@$vnama?>" class="form-control" placeholder="Masukan Nama" required="">
	   	</div>

	   	<div class="form-group">
	   		<label>Jenis Kelamin</label>
	   		<select class="form-control" name="tjk">
	   		<option value="<?=@$vjk?>"><?=@$vjk?></option>
	   		<option value="L">Laki-Laki</option>
	   		<option value="P">Perempuan </option>
	   		</select>
	   	</div>

	   	<div class="form-group">
	   		<label>Alamat</label>
	   		<textarea type="text" name="talm" class="form-control" placeholder="Masukan Alamat" required=""><?=@$valm?></textarea> 
	   	</div>

	   	<div class="form-group">
	   		<label>Kota</label>
	   		<input type="text" name="tkota" value="<?=@$vkot?>" class="form-control" placeholder="Masukan Kota" required="">
	   	</div>

	   		<div class="form-group" >
	   		<label>Email</label>
	   		<input type="text" name="tkeml" value="<?=@$veml?>" class="form-control" placeholder="Masukan Email" required="">
	   		<p> 
	   		</p>
	   	</div>
	   	<div class="form-group">
	   		<label>Foto</label>
	   		<input type="file" name="tfoto" value="<?=@$vfoto?>" required="" multiple >
	   		<p style="color: red">Ekstensi yang diperbolehkan .png | .jpg | .jpeg | .gif</p> 
	   	</div>
		

	   	<button type="Submit" class="btn-md btn-success" name="bsim" >Simpan</button>

	   	<button type="reset" class="btn-md btn-danger" name="bres">Kosongkan</button>

	   </form>
       <?= form_close();?>
	  </div>
	</div>
	<!-- FORM AKHIR -->

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
         
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  