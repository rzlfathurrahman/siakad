<div class="container-fluid">
  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
      <li class="mr-2"><i class="fas fa-file"></i> </li>
      <li class="breadcrumb-item"><a href="#"> Info Sekolah</a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/about_us') ?>">About Us </a></li>
      <li class="breadcrumb-item active" aria-current="page">Form Update</li>
    </ol>
  </nav>
<?php foreach ($about as $abt): ?>
	
	<div class="card mb-4">
		<div class="card-header bg-info text-white ">
			<h5><i class="fa fa-edit"></i> Update Data</h5>
		</div>
		<div class="card-body">
			<form method="post" action="<?php echo base_url('admin/about_us/update_aksi') ?>">
			<div class="form-group">
				<label>Sejarah</label>
				<input type="hidden" name="id" value="<?php echo $abt->id ?>">
				<input type="text" name="sejarah" class="form-control" value="<?php echo $abt->sejarah ?>">
			</div>
			<div class="form-group">
				<label>Visi</label>
				<input type="text" name="visi" class="form-control" value="<?php echo $abt->visi ?>">
			</div>
			<div class="form-group">
				<label>Misi</label>
				<input type="text" name="misi" class="form-control" value="<?php echo $abt->misi ?>">
			</div>
			<button class="btn btn-sm btn-outline-primary " type="submit">Simpan</button>
		</form>
		</div>
	</div>
<?php endforeach ?>
</div>