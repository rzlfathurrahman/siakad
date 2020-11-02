<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item "><a href="<?php echo base_url('admin/tahun_akademik') ?>">Tahun Akademik</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tambah Tahun Akademik </li>
    </ol>
  </nav>

  <div class="card  ">
  	<div class="card-header bg-primary  text-light">	
  		<h5><i class="fa fa-plus"></i> Tambah Data Tahun Akademik</h5> 
  	</div>
  	<div class="card-body"> 
  		<form method="post" action="<?php echo base_url('admin/tahun_akademik/tambah_tahun_akademik_aksi') ?>">

		<div class="form-group">
			<label>Tahun Akademik</label>
			<input type="text" name="tahun_akademik" placeholder="Masukan Tahun Akademik" class="form-control">
			<?php echo form_error('tahun_akademik','<div class="text-danger small ml-3 mt-2">'); ?>
		</div>
		<div class="form-group">
			<label>Semester</label>
			<select name="semester" class="form-control">
				<option value="">=== PILIH SEMESTER ===</option>
				<option>Ganjil</option>
				<option>Genap</option>
			</select>
			<?php echo form_error('semester','<div class="text-danger small ml-3 mt-2">'); ?>
		</div>
		<div class="form-group">
			<label>Status</label>
			<select name="status" class="form-control">
				<option value="">=== PILIH STATUS ===</option>
				<option>Aktif</option>
				<option>Tidak Aktif</option>
			</select>
			<?php echo form_error('status','<div class="text-danger small ml-3 mt-2">'); ?>
		</div>
		<button class="btn btn-sm btn-primary" type="submit">Simpan</button>
	</form>
  	</div>
  </div>
</div>