<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item active" aria-current="page">Masuk Halaman Input Nilai</li>
    </ol>
  </nav>

	<?php echo $this->session->flashdata('pesan'); ?>

	<div class="card mb-3">
		<div class="card-header bg-info text-light">
			<h5><i class="fa fa-door-open"></i> Masuk Halaman Input Nilai</h5>
		</div>
		<div class="card-body">
		   <form method="post" action="<?php echo base_url('admin/nilai/input_nilai_aksi') ?>" class="">
			<div class="form-group">
		 		<label>Kode Mata Pelajaran </label>
		 		<input type="text" name="kode_mapel" placeholder="Masukan Kode Mapel " class="form-control">
		 		<?php echo form_error('kode_mapel','<div class ="text-danger small ml-2 mt-2">','</div>') ?>
		 	</div>
			<div class="form-group">
				<label>Tahun Akademik / Semester</label>
				<?php 
					$query = $this->db->query('SELECT id_thn_ak,semester,CONCAT(tahun_akademik,"/") AS thn_semester FROM tahun_akademik ');

					$dropdowns = $query->result();
					foreach ($dropdowns as $dropdown) {
						if ($dropdown->semester == 'Ganjil') {
							$tampilSemester = "Ganjil";
						}else{
							$tampilSemester = "Genap";
						}
						$dropDownList[$dropdown->id_thn_ak] = $dropdown->thn_semester. " ".$tampilSemester;
					}
					echo form_dropdown('id_thn_ak' ,$dropDownList,'','class="form-control" id = "id_thn_ak"');
				 ?>
			</div>
				<button type="submit" class="btn btn-primary mb-5">Kirim</button>
			</form>
		</div>
	</div>
 

</div>