<div class="container-fluid">
  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
      <li class="mr-2"><i class="fas fa-file"></i> </li>
      <li class="breadcrumb-item"><a href="#"> Info Sekolah</a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/identitas') ?>">Identitas</a></li>
      <li class="breadcrumb-item active" aria-current="page">Form Update Identitas</li>
    </ol>
  </nav>
<?php foreach ($identitas as $id): ?>
	
	<div class="card mb-4">
		<div class="card-header bg-info text-white ">
			<h5><i class="fa fa-edit"></i> Update Identitas</h5>
		</div>
		<div class="card-body">
			<form method="post" action="<?php echo base_url('admin/identitas/update_aksi') ?>">
			<div class="form-group">
				<label>Judul Website</label>
				<input type="hidden" name="id_identitas" value="<?php echo $id->id_identitas?>">
				<input type="text" name="judul_website" class="form-control" value="<?php echo $id->judul_website ?>">
			</div>
			<div class="form-group">
				<label>Alamat</label>
				<input type="text" name="alamat" class="form-control" value="<?php echo $id->alamat ?>">
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" value="<?php echo $id->email ?>">
			</div>
			<div class="form-group">
				<label>Nomor Telepon</label>
				<input type="text" name="telp" class="form-control" value="<?php echo $id->telp ?>">
			</div>
			<button class="btn btn-sm btn-primary" type="submit">Simpan</button>
		</form>
		</div>
	</div>
<?php endforeach ?>
</div>