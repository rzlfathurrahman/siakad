<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-file mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Info Sekolah</a></li>
      <li class="breadcrumb-item"><a href="#">Informasi Sekolah</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tambah Informasi Sekolah</li>
    </ol>
  </nav>
 
	<div class="card mb-3">
		<div class="card-header bg-info">
			<h5 class="text-light"><i class="fa fa-plus "></i> Tambah Data Informasi </h5>
		</div>
		<div class="card-body">
			<form method="post" action="<?php echo base_url('admin/informasi/tambah_informasi_aksi') ?>">

				<div class="form-group">
					<label>Icon</label>
					<input type="hidden" name="id_informasi" class="form-control">
					<input type="text" name="icon" class="form-control">
					<?php echo form_error('icon','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>Judul Informasi</label>
					<input type="text" name="judul_informasi" class="form-control">
					<?php echo form_error('judul_informasi','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>Isi Informasi</label>
					<textarea class="form-control" rows="3" name="isi_informasi">
						
					</textarea>
					<?php echo form_error('isi_informasi','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>
				<button type="submit" class="btn btn-primary mb-3">Simpan</button>
			</form>
		</div>
	</div>

</div>