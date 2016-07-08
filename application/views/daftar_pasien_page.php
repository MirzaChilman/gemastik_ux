<!-- modal daftar pasien -->
<div id="daftarModal" class="modal fade" role="modal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="body">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<div class="row" style="margin-top:25px;">
					<div class="col-sm-12">
						<div class="title-t">
							PENDAFTARAN PASIEN
						</div>
						<table class="table table-striped">
							<tbody>
								<tr>
									<td style="width:25%;"><b>Nomor TikeT</b></td>
									<td style="width:5%;">:</td>
									<td>
										Z239
										<div class="help">
											Nomor tiket di gunakan untuk proses antrian di rumah sakit.
										</div>
									</td>
								</tr>
								<tr>
									<td><b>Nama</b></td>
									<td>:</td>
									<td>Agus Soetomo</td>
								</tr>
								<tr>
									<td><b>Alamat</b></td>
									<td>:</td>
									<td>Jalan Cipinang Muara Besar, Kecamatan Cipinang Cempedak RT 02 RW 03</td>
								</tr>
								<tr>
									<td><b>Nomor Kontak</b></td>
									<td>:</td>
									<td>085230002391</td>
								</tr>
								<tr>
									<td><b>Asuransi</b></td>
									<td>:</td>
									<td>BPJS</td>
								</tr>
							</tbody>
						</table>
						<div class="panel panel-primary">
							<div class="panel-heading">
								Dokter
							</div>
							<div class="panel-body">
								<center>
									<img src="<?php echo base_url('assets/img/dokter.png'); ?>" class="img-responsive img-thumbnail" style="max-height:200px;">
								</center>
								<br/>
								<table class="table">
									<tbody>
										<tr>
											<td><b>Nama</b></td>
											<td>:</td>
											<td>Dr. Wahyudi Soedebyio</td>
										</tr>
										<tr>
											<td><b>Spesialis</b></td>
											<td>:</td>
											<td>Dokter THT</td>
										</tr>
									</tbody>
								</table>
								<b>Lokasi:</b>
								<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.325012060745!2d106.86264051423699!3d-6.2208036626583665!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f381fe05c171%3A0x3ec158f5116d7d17!2sRumah+Sakit+Ibu+dan+Anak+Hermina+Jatinegara!5e0!3m2!1sid!2sid!4v1467521258971" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen></iframe>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container pad-t">
	<div class="row">
		<div class="col-md-3">
			<div class="box-t">
				Billboard alur pendaftaran/berjalan
			</div>
		</div>
		<div class="col-md-9">
			<div class="box-t">
				<div class="title-t">
					DIAGNOSIS PASIEN
				</div>
				<form action="#" class="form-horizontal">
					<div class="form-group">
						<label class="control-label col-sm-3">Nama Pasien:</label>
						<div class="col-sm-4">
							<input type="text" value="Agus Soetomo" class="form-control" maxlength="50" placeholder="masukan nama pasien" required>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Alamat Pasien:</label>
						<div class="col-sm-8">
							<textarea class="form-control" maxlength="150" placeholder="masukan alamat pasien" required>Jalan Cipinang Muara Besar, Kecamatan Cipinang Cempedak RT 02 RW 03</textarea>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Nomor Kontak:</label>
						<div class="col-sm-4">
							<input type="text" value="085230002391" class="form-control" maxlength="50" placeholder="masukan nomor kontak" required>
							<div class="help">
								Nomor kontak harus dapat di hubungi
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Dokter:</label>
						<div class="col-sm-4">
							<input type="text" value="Dr. Wahyudi Soedebyio" class="form-control" maxlength="50" placeholder="Pilih Dokter/Spesialis" required>
							<div class="help">
								Pilih Dokter atau Spesialis Dokter
							</div>
						</div>
					</div>
					<div class="form-group">
						<label class="control-label col-sm-3">Asuransi:</label>
						<div class="col-sm-9" style="margin-top:8px;">
							<input type="radio" name="asuransi">&nbsp;Perusahaan&nbsp;
							<input type="radio" name="asuransi" checked>&nbsp;BPJS&nbsp;
							<input type="radio" name="asuransi">&nbsp;JAMSOSTEK&nbsp;
							<input type="radio" name="asuransi">&nbsp;Prudential&nbsp;
							<input type="radio" name="asuransi">&nbsp;Tidak ada&nbsp;
						</div>
					</div>
					<div align="right">
						<button type="button" data-target="#daftarModal" data-toggle="modal" class="btn btn-primary">Daftar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>