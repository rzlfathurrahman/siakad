<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-file mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Info Sekolah</a></li>
      <li class="breadcrumb-item"><a href="#">Contact</a></li>
      <li class="breadcrumb-item active" aria-current="page">Update Data</li>
    </ol>
  </nav>
 
	<div class="card mb-3">
		<div class="card-header bg-info">
			<h5 class="text-light"><i class="fa fa-edit "></i> Update Data </h5>
		</div>
		<div class="card-body">
		  <?php foreach ($kontak as $info) : ?>
			<form action="<?php echo base_url('admin/contact/update_kontak_aksi') ?>" method="post">
				<div class="form-group">
					<label>Icon</label>
					<input type="hidden" name="id_kontak" value="<?php echo $info->id_kontak ?>">
					<input type="text" name="icon" class="form-control" value="<?php echo $info->icon ?>">
					<?php echo form_error('icon','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>Keterangan</label>
					<input type="text" name="keterangan" class="form-control" value="<?php echo $info->keterangan ?>">
					<?php echo form_error('keterangan','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<button type="submit" class="btn btn-primary mb-3">Simpan</button>
			</form>
		  <?php endforeach; ?>
		</div>
	</div>


</div>