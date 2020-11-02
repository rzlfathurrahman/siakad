<div class="container-fluid">

<nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item" ><a href="<?php echo base_url('admin/jurusan') ?>">Jurusan</a></li>
      <li class="breadcrumb-item " aria-current="page">Form Input Jurusan</li>
    </ol>
  </nav>

	<div class="card">
		<div class="card-header bg-primary text-white ">
			<h4><i class="fa fa-plus"></i> Tambah Data</h4>
		</div>
		<div class="card-body">
			<form method="post" action="<?php echo base_url('admin/jurusan/input_aksi') ?>">
			<div class="form-group">
				<label>Kode Jurusan</label>
				<input type="text" name="kode_jurusan" placeholder="Masukan Kode Jurusan" class="form-control">
				<?php echo form_error('kode_jurusan','<div class="text-danger small ml-3 mt-2">'); ?>
			</div>
			<div class="form-group">
				<label>Nama Jurusan</label>
				<input type="text" name="nama_jurusan" placeholder="Masukan Nama Jurusan" class="form-control">
				<?php echo form_error('nama_jurusan','<div class="text-danger small ml-3 mt-2">'); ?>
			</div>
			<button class="btn btn-sm btn-primary" type="submit">Simpan</button>
		</form>
		<button class="btn btn-sm btn-danger"><a class="text-white" href="<?php echo base_url('admin/jurusan') ?>"> Kembali</a></button>
		</div>
	</div>
</div>