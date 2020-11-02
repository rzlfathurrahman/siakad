<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Akademik</a></li>
      <li class="breadcrumb-item "><a href="<?php echo base_url('admin/guru') ?>">Guru</a></li>
      <li class="breadcrumb-item active"  aria-current="page">Tambah Guru</li>
    </ol>
  </nav>
 
	<div class="card mb-3">
		<div class="card-header bg-info">
			<h5 class="text-light"><i class="fa fa-plus "></i> Tambah Data Guru</h5>
		</div>
		<div class="card-body">
			<?php echo form_open_multipart('admin/guru/tambah_guru_aksi') ?>

				<div class="form-group">
					<label>NIG</label>
					<input type="text" name="nig" class="form-control">
					<?php echo form_error('nig','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>NAMA GURU</label>
					<input type="text" name="nama_guru" class="form-control">
					<?php echo form_error('nama_guru','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>ALAMAT</label>
					<input type="text" name="alamat" class="form-control">
					<?php echo form_error('alamat','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>JENIS KELAMIN</label>
					<select name="jenis_kelamin" class="form-control">
						<option value="">
							=== Pilih Jenis Kelamin ===	
						</option>
						<option>Laki-Laki</option>
						<option>Perempuan</option>
					</select>
					<?php echo form_error('jenis_kelamin','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>EMAIL</label>
					<input type="email" name="email" class="form-control">
					<?php echo form_error('email','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>NOMOR TELEPON</label>
					<input type="text" name="telp" class="form-control">
					<?php echo form_error('telp','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>FOTO</label><br>
					<input type="file" name="photo" class="form-control-file">
				</div>

				<button type="submit" class="btn btn-primary mb-3">Simpan</button>
			<?php form_close(); ?>
		</div>
	</div>


</div>