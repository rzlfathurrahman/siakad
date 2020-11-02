<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Akademik</a></li>
      <li class="breadcrumb-item "><a href="<?php echo base_url('admin/siswa') ?>">Siswa</a></li>
      <li class="breadcrumb-item active"  aria-current="page">Update Siswa</li>
    </ol>
  </nav>
 
	<div class="card mb-3">
		<div class="card-header bg-info">
			<h5 class="text-light"><i class="fa fa-edit "></i> Update Data Siswa</h5>
		</div>
		<div class="card-body">
		  <?php foreach ($siswa as $sw) : ?>
			<?php echo form_open_multipart('admin/siswa/update_siswa_aksi') ?>

				<div class="form-group">
					<label>NIS</label>
					<input type="hidden" name="id" value="<?php echo $sw->id ?>">
					<input type="text" name="nis" class="form-control" value="<?php echo $sw->nis ?>">
					<?php echo form_error('nis','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>NAMA SISWA</label>
					<input type="text" name="nama_lengkap" class="form-control" value="<?php echo $sw->nama_lengkap ?>">
					<?php echo form_error('nama_lengkap','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>ALAMAT</label>
					<input type="text" name="alamat" class="form-control" value="<?php echo $sw->alamat ?>">
					<?php echo form_error('alamat','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>EMAIL</label>
					<input type="email" name="email" class="form-control" value="<?php echo $sw->email ?>">
					<?php echo form_error('email','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>TELEPON</label>
					<input type="text" name="telepon" class="form-control" value="<?php echo $sw->telepon ?>">
					<?php echo form_error('telepon','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>TEMPAT LAHIR</label>
					<input type="text" name="tempat_lahir" class="form-control" value="<?php echo $sw->tempat_lahir ?>">
					<?php echo form_error('tempat_lahir','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>TANGGAL LAHIR</label>
					<input type="date" name="tanggal_lahir" class="form-control" value="<?php echo $sw->tanggal_lahir?>">
					<?php echo form_error('tanggal_lahir','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>JENIS KELAMIN</label>
					<select name="jenis_kelamin" class="form-control" value="<?php echo $sw->jenis_kelamin ?>">
						<option>Laki-Laki</option>
						<option>Perempuan</option>
					</select>
					<?php echo form_error('jenis_kelamin','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>PROGRAM STUDI</label>
					<select name="nama_prodi" class="form-control" value="<?php echo $sw->nama_prodi ?>">

					<?php foreach ($prodi as $prd) : ?>
						<option value="<?php echo $prd->nama_prodi ?>">
							<?php echo $prd->nama_prodi ?>
						</option>		
					<?php endforeach; ?>

					</select>
					<?php echo form_error('jenis_kelamin','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>
				<div class="form-group">
					<?php foreach ($detail as $dt) :  ?>
						<img width="100px" src="<?php echo base_url() . 'assets/uploads/'. $sw->photo ?>">
					<?php endforeach; ?><br><br>
					<label>FOTO</label><br>
					<input type="file" name="userfile" value="<?php echo $sw->photo ?>" class="form-control-file">
				</div>

				<button type="submit" class="btn btn-primary mb-3">Simpan</button>
			<?php form_close(); ?>
		  <?php endforeach; ?>
		</div>
	</div>


</div>