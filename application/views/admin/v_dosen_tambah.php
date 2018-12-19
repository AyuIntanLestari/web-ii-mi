<div class="col-md-6 offset-md-3">
	<div class="card">
		<div class="card-header" style="background-color:aqua">
			<?php echo $sub_judul; ?>
		</div>

		<div class="card-body">
			<form action="<?php echo site_url('admin/dosen/proses_tambah');  ?>" method="post">

				<div class="form-group">
					<label>NIK</label>
					<input type="text" class="form-control" name="nik">
				</div>

				<div class="form-group">
					<label>Nama Dosen</label>
					<input type= "text" class="form-control" name="nama_dosen">
				</div>

				<div class="form-group">
					<label>Jenis Kelamin</label>
					<select class="form-control" name="jenis_kelamin">
						<option value="Perempuan">Perempuan</option>
						<option value="Laki - Laki">Laki - Laki</option>
					</select>
				</div>

				<div class="form-group">
					<label>Mata Kuliah</label>
					<select class="form-control" name="mata_kuliah">
						<option value="WEB">WEB</option>
						<option value="SO">SO</option>
						<option value="SIM">SIM</option>
						<option value="PBO">PBO</option>
					</select>
				</div>

				<div class="form-group">
					<button class="btn btn-primary" type="submmit">Simpan</button>
				</div>

			</form>
		</div>

	</div>
</div>