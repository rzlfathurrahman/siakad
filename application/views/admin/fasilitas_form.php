<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-file mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Info Sekolah</a></li>
      <li class="breadcrumb-item"><a href="#">Fasilitas Sekolah</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tambah Fasilitas Sekolah</li>
    </ol>
  </nav>
 
	<div class="card mb-3">
		<div class="card-header bg-info">
			<h5 class="text-light"><i class="fa fa-plus "></i> Tambah Data</h5>
		</div>
		<div class="card-body">
			<form method="post" action="<?php echo base_url('admin/fasilitas/tambah_fasilitas_aksi') ?>">

				<div class="form-group">
					<label>Fasilitas</label>
					<input type="hidden" name="id_fasilitas" class="form-control">
					<input type="text" name="fasilitas" class="form-control">
					<?php echo form_error('fasilitas','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>Jumlah </label>
					<input type="number" name="jumlah" class="form-control">
					<?php echo form_error('jumlah','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>

				<div class="form-group">
					<label>Kondisi</label>
					<select name="kondisi" class="form-control">
						<option value="Sangat Bagus">Sangat Bagus</option>
						<option value="Bagus">Bagus</option>
						<option value="Cukup">Cukup</option>
						<option value="Buruk">Buruk</option>
						<option value="Sangat Buruk">Sangat Buruk</option>
					</select>
					<?php echo form_error('kondisi','<div class="text-danger small ml-2 mt-2">','</div>') ?>
				</div>
				<button type="submit" class="btn btn-primary mb-3">Simpan</button>
			</form>
		</div>
	</div>

</div>