<!DOCTYPE html>
<html>
<head>
	<title>Dashboard Admin</title>


	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>
<body>
		<?php include 'include/nav.php'; ?>


<div class="container-fluid my-5">
<div class="row justify-content-center">
<div class="col-md-4"> 	
	<div  class="card">
	<div class="card-header text-center bg-primary text-white"> Edit Terminal</div>
	<div class="card-body">
		<form action="<?= base_url('edit_stasiun')?>" method="POST">
		<input type="hidden" name="id" value="<?= $data_stasiun->id ?>">
			<div class="form-group">
				<label>Nama Terminal</label>
				<input type="text" class="form-control" name="nama_stasiun" value="<?=$data_stasiun->nama_stasiun?>">
			</div>
			<button class="btn btn-primary text-white btn-block">Edit Nama Terminal </button>




		  </form>

	</div>

</div>

</body>
</html>

	








