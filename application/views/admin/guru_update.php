<div class="container-fluid">
  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Akademik</a></li>
      <li class="breadcrumb-item "><a href="<?php echo base_url('admin/guru') ?>">Guru</a></li>
      <li class="breadcrumb-item active"  aria-current="page">Update Guru</li>
    </ol>
  </nav>
 
	<div class="card mb-3">
		<div class="card-header bg-info">
			<h5 class="text-light"><i class="fa fa-edit "></i> Update Data Guru</h5>
		</div>
		<div class="card-body">
		  <?php foreach ($guru as $gr) : ?>
			<?php echo form_open_multipart('admin/guru/update_guru_aksi') ?>

				<div class="form-group">
					<label>NIS</label>
					<input type="hidden" name="id_guru" value="<?php echo $gr->id_guru ?>">
					<input type="text" name="nig" class="form-control" value="<?php echo $gr->nig ?>">
					<?php echo form_error('nig','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>NAMA GURU</label>
					<input type="text" name="nama_guru" class="form-control" value="<?php echo $gr->nama_guru ?>">
					<?php echo form_error('nama_guru','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>ALAMAT</label>
					<input type="text" name="alamat" class="form-control" value="<?php echo $gr->alamat ?>">
					<?php echo form_error('alamat','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>JENIS KELAMIN</label>
					<select name="jenis_kelamin" class="form-control" value="<?php echo $gr->jenis_kelamin ?>">
						<option>Laki-Laki</option>
						<option>Perempuan</option>
					</select>
					<?php echo form_error('jenis_kelamin','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>EMAIL</label>
					<input type="email" name="email" class="form-control" value="<?php echo $gr->email ?>">
					<?php echo form_error('email','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>NOMOR TELEPON</label>
					<input type="text" name="telp" class="form-control" value="<?php echo $gr->telp ?>">
					<?php echo form_error('telp','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>
				
				<div class="form-group">
					<?php foreach ($detail as $dt) :  ?>
						<img width="100px" src="<?php echo base_url() . 'assets/uploads/'. $gr->photo ?>">
					<?php endforeach; ?><br><br>
					<label>FOTO</label><br>
					<input type="file" name="userfile" value="<?php echo $gr->photo ?>" class="form-control-file">
				</div>

				<button type="submit" class="btn btn-primary mb-3">Simpan</button>
			<?php form_close(); ?>
		  <?php endforeach; ?>
		</div>
	</div>


</div>