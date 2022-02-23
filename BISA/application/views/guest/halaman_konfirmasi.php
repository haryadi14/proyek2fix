<div class="container-fluid">
<div class="row justify-content-center my-5">
	<div class="col-md-5 ">
		<?php if($this->session->flashdata('pesan') !== null):?>
			<div class="alert alert-success">
				<?= $this->session->flashdata('pesan') ?></div>
		<?php endif; ?>
		<div class="card-header bg-primary text-white text-center">Konfirmasi Pembayaran</div>
		<div class="card-body">
			
			<form action="<?= base_url ('cekKonfirmasi') ?>" method="POST">
				

				<div class="form-group">
					<label>Kode Booking</label>
					<input name="kode" type="text" class="form-control" placeholder="Kode-Booking">
				</div>
				<button class="btn btn-primary">Cek Kode Booking</button>
			</form>
		</div>

	</div>	
</div>

<hr>
<div class="row justify-content-center my-5">

	<div class="col-md-6 " >

	<?php if(isset($_GET['kode'])): ?>
			<h4>Kode Booking : <?= $_GET['kode'] ?></h4>
			<div class="card">
				<div class="card-header bg-primary text-white">
					Detail Pembayaran Anda
				</div>
				<div class="card-body ">
					<h1 class="text-center">
						<?php if($no_tiket->status === '0' || $no_tiket->status === '1'): ?>
							<i class="fa fa-times text-danger"></i> Belum Di Bayar
						<?php elseif($no_tiket->status === '2'): ?>
							<i class="fa fa-check text-success"></i> Sudah Di Bayar
						<?php endif; ?>
					</h1>
					<?php  if($this->session->flashdata('alert') !== null): ?>
						<div class="alert alert-danger">
							<?= $this->session->flashdata('alert') ?>
						</div>
					<?php endif; ?>

					</h1>
					<div class="table-responsive">
						<table class="table ">
							<thead>
								<tr class="text-center">
									<th >Nama</th>
									<th class="text-center">Identitas</th>
								</tr>
							</thead>
							<tbody>
							<?php foreach($detail as $dt): ?>
								<tr class="text-center">
									<td><?= $dt->nama ?></td>
									<td><?= $dt->no_identitas ?></td>
								</tr>
							<?php endforeach; ?>
							</tbody>
						</table>
								<p class="text-danger">** Silahkan Screenshot atau simpan halaman ini untuk bukti pembayaran sudah berhasil.  </p>
						<p><b>Total Pembayaran Anda : Rp. <?= $no_tiket->total_pembayaran ?></b></p>
						<p class="text-danger">Silahkan Kirim Bukti Pembayaran Berupa Screenshot Bukti Transfer Anda pada Kolom di Bawah.  </p>
						<?= form_open_multipart("kirimKonfirmasi"); ?>
						<input type="hidden" name="no_pembayaran" value="<?= $no_tiket->no_pembayaran ?>">

						<p>Foto Bukti Pembayaran</p>
						<input id="foto" type="file" name="userfile" class="form-control" required>
						<br>
						<p class="d-none" id="pesan"></p>
						<button id="btn_konfirmasi" type="submit" class="btn btn-block btn-dark">Kirim Bukti Pembayaran</button>
						<?= form_close(); ?>
					</div>
</div>
					</div>
				</div>
		</div>

 
<?php endif; ?>
