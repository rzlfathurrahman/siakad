<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-file mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Info Sekolah</a></li>
      <li class="breadcrumb-item"><a href="#">Informasi Sekolah</a></li>
      <li class="breadcrumb-item active" aria-current="page">Update Informasi Sekolah</li>
    </ol>
  </nav>
 
	<div class="card mb-3">
		<div class="card-header bg-info">
			<h5 class="text-light"><i class="fa fa-edit "></i> Update Data Informasi</h5>
		</div>
		<div class="card-body">
		  <?php foreach ($informasi as $info) : ?>
			<form action="<?php echo base_url('admin/informasi/update_informasi_aksi') ?>" method="post">
				<div class="form-group">
					<label>Icon</label>
					<input type="hidden" name="id_informasi" value="<?php echo $info->id_informasi ?>">
					<input type="text" name="icon" class="form-control" value="<?php echo $info->icon ?>">
					<?php echo form_error('icon','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>Judul Informasi</label>
					<input type="text" name="judul_informasi" class="form-control" value="<?php echo $info->judul_informasi ?>">
					<?php echo form_error('judul_informasi','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>Isi Informasi</label>
					<input type="text" name="isi_informasi" class="form-control" value="<?php echo $info->isi_informasi ?>">
					<?php echo form_error('isi_informasi','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<button type="submit" class="btn btn-primary mb-3">Simpan</button>
			</form>
		  <?php endforeach; ?>
		</div>
	</div>


</div>