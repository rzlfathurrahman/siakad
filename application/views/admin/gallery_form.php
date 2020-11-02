<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-file mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Akademik</a></li>
      <li class="breadcrumb-item "><a href="<?php echo base_url('admin/gallery') ?>">Gallery</a></li>
      <li class="breadcrumb-item active"  aria-current="page">Tambah Data</li>
    </ol>
  </nav>
 
	<div class="card mb-3">
		<div class="card-header bg-info">
			<h5 class="text-light"><i class="fa fa-plus "></i> Tambah Data Gallery</h5>
		</div>
		<div class="card-body">
			<?php echo form_open_multipart('admin/gallery/tambah_gallery_aksi') ?>

				<div class="form-group">
					<label>Judul</label>
					<input type="hidden" name="id">
					<input type="text" name="judul" placeholder="Masukan Judul" class="form-control">
					<?php echo form_error('judul','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>Keterangan</label>
					<input type="text" name="keterangan" placeholder="Masukan Keterangan" class="form-control">
					<?php echo form_error('keterangan','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>FOTO</label><br>
					<input type="file" name="photo" class="form-control-file">
					<?php echo form_error('photo','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<button type="submit" class="btn btn-primary mb-3">Simpan</button>
			<?php form_close(); ?>
		</div>
	</div>


</div>