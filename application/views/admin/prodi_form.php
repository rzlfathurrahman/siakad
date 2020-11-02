<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item "><a href="<?php echo base_url('admin/prodi') ?>">Prodi</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tambah Prodi</li>
    </ol>
  </nav>

  <div class="card  ">
  	<div class="card-header bg-primary text-white">	
  		<h5><i class="fa fa-plus"></i> Tambah Data Prodi</h5> 
  	</div>
  	<div class="card-body"> 
  		<form method="post" action="<?php echo base_url('admin/prodi/tambah_prodi_aksi') ?>">

		<div class="form-group">
			<label>Kode Prodi</label>
			<input type="text" name="kode_prodi" placeholder="Masukan Kode Prodi" class="form-control">
			<?php echo form_error('kode_prodi','<div class="text-danger small ml-3 mt-2">'); ?>
		</div>
		<div class="form-group">
			<label>Nama Prodi</label>
			<input type="text" name="nama_prodi" placeholder="Masukan Nama Prodi" class="form-control">
			<?php echo form_error('nama_prodi','<div class="text-danger small ml-3 mt-2">'); ?>
		</div>
		<div class="form-group">
			<label>Kode Jurusan</label>
			<select name="kode_jurusan" class="form-control">
				<option value="">--- Pilih Jurusan ---</option>
				<?php foreach ($jurusan as $jrs) : ?>
					<option class="small" value="<?php echo $jrs->kode_jurusan ?>"><?php echo $jrs->kode_jurusan; ?></option>
				<?php endforeach; ?>
			</select>
		</div>
		<button class="btn btn-sm btn-primary" type="submit">Simpan</button>
	</form>
  	</div>
  </div>
</div>