<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item "><a href="<?php echo base_url('admin/tahun_akademik') ?>">Tahun Akademik</a></li>
      <li class="breadcrumb-item active" aria-current="page">Update Tahun Akademik </li>
    </ol>
  </nav>

  <div class="card  ">
  	<div class="card-header bg-info text-light">	
  		<h5><i class="fa fa-edit"></i> Update Data Tahun Akademik</h5> 
  	</div>
  	<div class="card-body"> 
  	  <?php foreach ($tahun_akademik as $ta) :?>
  		<form method="post" action="<?php echo base_url('admin/tahun_akademik/update_aksi') ?>">

		<div class="form-group">
			<label>Tahun Akademik</label>
			<input type="hidden" name="id_thn_ak" value="<?php echo $ta->id_thn_ak ?>">
			<input type="text" name="tahun_akademik" placeholder="Masukan Tahun Akademik" class="form-control" value="<?php echo $ta->tahun_akademik ?>">
			<?php echo form_error('tahun_akademik','<div class="text-danger small ml-3 mt-2">'); ?>
		</div>
		<div class="form-group">
			<label>Semester</label>
			<select name="semester" class="form-control">
				<option ><?php echo $ta->semester?> </option>
				<option>Ganjil</option>
				<option>Genap</option>
			</select>
			<?php echo form_error('semester','<div class="text-danger small ml-3 mt-2">'); ?>
		</div>
		<div class="form-group">
			<label>Status</label>
			<select name="status" class="form-control">
				<option ><?php echo $ta->status ?></option>
				<option>Aktif</option>
				<option>Tidak Aktif</option>
			</select>
			<?php echo form_error('status','<div class="text-danger small ml-3 mt-2">'); ?>
		</div>
		<button class="btn btn-sm btn-primary" type="submit">Simpan</button>
	</form>
   <?php endforeach; ?>
  	</div>
  </div>
</div>