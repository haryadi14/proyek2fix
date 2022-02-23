<!DOCTYPE html>
<html>
<head>
	<title>kelola jadwal -  Admin</title>


	<link rel="stylesheet" href="<?= base_url('assets/css/bootstrap.min.css')?>">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
</head>
<body>
		<?php include 'include/nav.php'; ?>


<div class="container-fluid my-3 " >
<div class="row">
	
<div class="col-md-9 "> 	
	<div  class="card">
	<div class="card-header bg-primary text-white text-center"> Daftar Jadwal</div>
	<div class="card-body">
		<table class="table table-condensed table-hover">
			<thead>
				<tr>
					<th>NO</th>
					<th>Nama Bus</th>
					<th>Asal</th>
					<th>Tujuan</th>
					<th>Tanggal Berangkat</th>
					<th>Tanggal Sampai</th>
					<th>Kelas</th>
					<th>Aksi</th>


				</tr>
			</thead>
			<tbody>
				<?php $no = 1; ?>
				<?php foreach ($jadwal as $jd): ?>
				<tr>
				<td><?=	$no++ ?></td>
				<td><?=	$jd->nama_bus ?></td>
				<td><?=	$jd->ASAL ?></td>
				<td><?=	$jd->TUJUAN ?></td>
				<td><?=	$jd->tgl_berangkat ?></td>
				<td><?=	$jd->tgl_sampai?>
				</td>
				<td><?=	$jd->kelas?>

				</td>
				<td>
					<div class="btn btn-group btn-group-sm">
					<a class="btn btn-danger" href="<?= base_url('hapusJadwal/'.$jd->id) ?>">Hapus</a>
					<a class="btn btn-primary" href="<?= base_url('admin/dashboard/edit-jadwal/'.$jd->id) ?>">Edit</a>
					</div>

				</td>



				</tr>
				<?php endforeach ?>
			</tbody>
		</table>

	</div>

</div>


</div>
<div class="col-md-3">
	<div class="card">
		<div class="card-header bg-primary text-white text-center">Form Tambah Jadwal </div>
		<div class="card-body">
			<form action="<?= base_url('tambahJadwal') ?>" method="POST">
		<div class="form-group">
			<label>Nama Bus</label><br>
			<input type="text" name="nama_bus" placeholder="Nama Bus">
					</div>
<div class="form-group">
	<label>Terminal Asal</label>
	<select name="asal"class="form-control" >
	<?php foreach ($stasiun as $st): ?>
	<option value="<?= $st->id?>"><?= $st->nama_stasiun ?></option>	
	<?php endforeach ?>
	</select>
</div>

<div class="form-group">
	<label>Terminal Tujuan</label>
	<select name="tujuan" class="form-control" >
	<?php foreach ($stasiun as $st): ?>
	<option value="<?= $st->id ?>"> <?= $st->nama_stasiun ?> </option>
	<?php endforeach ?>
	</select>
</div>

<div class="form-group">
	
	<label>Tanggal Berangkat</label>
			<input type="datetime-local" name="tgl_berangkat" min="<?= date('Y-m-d\TH:i:S') ?>"class="form-control">
</div>

<div class="form-group">
	
	<label>Tanggal Sampai</label>
			<input type="datetime-local" name="tgl_sampai" min="<?= date('Y-m-d\TH:i:S') ?>"class="form-control">
</div>

<div class="form-group">
	<label>Kelas</label>
	<select name="kelas" id=""class="form-control">
		<option>Ekonomi</option>
		<option>Eksekutif</option>
		<option>Bisnis</option>
		
	</select>

</div>

<div class="form-group">
				<label>Harga</label>
				<input type="number" name='harga' placeholder='Harga' class='form-control' required>
			</div>
			
			
		<button class="btn btn-succes btn-block btn-primary"> Tambah Jadwal</button>
	</form> </div>
	</div>
	
</div>
</div>	



</div>







</body>
</html>