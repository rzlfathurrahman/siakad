<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item active" aria-current="page">Masuk Halaman Transrkip Nilai</li>
    </ol>
  </nav>

	<?php echo $this->session->flashdata('pesan'); ?>

	<div class="container">
		<div class="card-header bg-info text-light">
			<h5><i class="fa fa-door-open"></i> Masuk Halaman Transkrip Nilai</h5>
		</div>
		<div class="card-body">
		   <form method="post" action="<?php echo base_url('admin/transkrip_nilai/buat_transkrip_aksi') ?>" class="">
			<div class="form-group">
		 		<label>NIS Siswa</label>
		 		<input type="text" name="nis" placeholder="Masukan Nis Siswa" class="form-control">
		 		<?php echo form_error('nis','<div class ="text-danger small ml-2 mt-2">','</div>') ?>
		 	</div>
				<button type="submit" class="btn btn-primary mb-5">Kirim</button>
			</form>
		</div>
	</div>
 	
 	

</div>