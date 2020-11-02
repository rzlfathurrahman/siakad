<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Akademik</a></li>
      <li class="breadcrumb-item "><a href="<?php echo base_url('admin/mapel') ?>">Mapel</a></li>
      <li class="breadcrumb-item active"  aria-current="page">Tambah Mapel</li>
    </ol>
  </nav>
 
	<div class="card mb-3">
		<div class="card-header bg-primary text-light">
			<h5><i class="fa fa-plus"></i> Tambah Data Mapel</h5>
		</div>
		<div class="card-body">
			<form action="<?php echo base_url('admin/mapel/tambah_mapel_aksi') ?>" method="post">
		<div class="form-group">
			<label>KODE MAPEL</label>
			<input type="text" name="kode_mapel" class="form-control">
			<?php echo form_error('kode_mapel','<div class="text-danger small ml-3 mt-2">'); ?>
		</div>
		<div class="form-group">
			<label>NAMA MAPEL</label>
			<input type="text" name="nama_mapel" class="form-control">
			<?php echo form_error('nama_mapel','<div class="text-danger small ml-3 mt-2">'); ?>
		</div>
		<div class="form-group">
			<label>SEMESTER</label>
			<select name="semester" class="form-control">
				<option>1</option>
				<option>2</option>
			</select>
			<?php echo form_error('semester','<div class="text-danger small ml-3 mt-2">'); ?>
		</div>
		<div class="form-group">
			<label>PROGRAM STUDI</label>
			<select name="nama_prodi" class="form-control">
				<option value="">---- Pilih Program Studi ----</option>
				
				<?php foreach ($prodi as $prd) : ?>
					<option value="<?php echo $prd->nama_prodi ?>"><?php echo $prd->nama_prodi; ?></option>
				<?php endforeach; ?>
			</select>
			<?php echo form_error('nama_prodi','<div class="text-danger small ml-3 mt-2">'); ?>
		</div>
		<button type="submit" class="btn btn-primary mb-5">Simpan</button>
	</form>
		</div>
	</div>
</div>