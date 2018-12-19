<div class="col-md-12">
	<div class="card">
		<div class="card-header" style="background-color:aqua"> <?php echo $sub_judul; ?> </div>

		<div class="card-body">

		<a href="mahasiswa/tambah" class="btn btn-primary btn-sm"> Tambah Data </a>
			<br>
			<br> 

			<table class="table table-border" border="3px">
				<tr align="center" bgcolor="aqua">
					<th>NIM</th>
					<th>Nama Mahasiswa</th>
					<th>Program Studi</th>
					<th>Tanggal Dibuat</th>
					<th>Aksi</th>
				</tr> 

				<?php foreach ($isi_tabel as $key ) {
				
				 ?>

				<tr align="center" bgcolor="silver">
					<td><?php echo $key->nim; ?></td>
					<td><?php echo $key->nama_mahasiswa; ?></td>
					<td><?php echo $key->program_studi; ?></td>
					<td><?php echo date('d M Y', strtotime($key->created_at))?></td>
					<td>
						<a href="<?php echo site_url('admin/mahasiswa/ubah/'.$key->nim); ?>" class="btn btn-warning btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Merubah Data ?')" >Ubah</a> 
						<a href="<?php echo site_url('admin/mahasiswa/hapus/'.$key->nim); ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda Yakin Ingin Menghapus ?')" >Hapus</a> 
						
					
				</tr>
				<?php } ?>
			</table>
		</div>
		
	</div>
</div> 