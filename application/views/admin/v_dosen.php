<div class="col-md-12">
	<div class="card">
		<div class="card-header" style="background-color:aqua"> <?php echo $sub_judul; ?> </div>

		<div class="card-body">

		<a href="<?php echo site_url('admin/dosen/tambah') ?>" class="btn btn-primary btn-sm"> Tambah Data </a>
			<br>
			<br> 

			<table class="table table-border" border="3px">
				<tr align="center" bgcolor="aqua">
					<th>NIK</th>
					<th>Nama Dosen</th>
					<th>Jenis Kelamin</th>
					<th>Mata Kuliah</th>
					<th>Aksi</th>
				</tr> 

				<?php foreach ($isi_tabel as $key ) {
				
				 ?>

				<tr align="center" bgcolor="silver">
					<td><?php echo $key->nik; ?></td>
					<td><?php echo $key->nama_dosen; ?></td>
					<td><?php echo $key->jenis_kelamin; ?></td>
					<td><?php echo $key->mata_kuliah; ?></td>
					<td>
						<a href="" class="btn btn-warning btn-sm">Ubah</a>
						<a href="<?php echo site_url('admin/dosen/hapus/'.$key->nik); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" >Hapus</a> 
					</td>
					
				</tr>
				<?php } ?>
			</table>
		</div>
		
	</div>
</div> 