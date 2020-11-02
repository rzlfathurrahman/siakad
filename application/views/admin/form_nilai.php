<?php 
	$nilai = get_instance();
	$nilai->load->model('model_mapel');
	$nilai->load->model('model_krs');
	$nilai->load->model('model_tahun_akademik');
 ?>
 <div class="container-fluid" id="krs_list">

	<nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/nilai/input_nilai') ?>">Masuk Halaman Input Nilai</a></li>
      <li class="breadcrumb-item active" aria-current="page">Halaman Input Nilai Siswa</li>
    </ol>
  </nav>

  <?php 
  	if ($list_nilai == null) {
  		$thn = $nilai->model_tahun_akademik->get_by_id($id_thn_ak);
  		$semester = $thn->semester == "Ganjil";
  		if ($semester == "Ganjil") {
  			$tampilSemester = "Ganjil";
  		}else{
  			$tampilSemester = "Genap";
  		}
   ?>

   <div class="alert alert-danger ">
   		Maaf , Kode Mata Pelajaran Yang Anda Input <strong>Tidak Tersedia</strong> Di Tahun Ajaran <?php echo $thn->tahun_akademik." " ."(".$tampilSemester.")" ?>
   </div>

   <?php echo anchor('admin/nilai/input_nilai','<div class="btn btn-sm btn-danger">Kembali</div>') ?>

   <?php 
  	 }else{		
    ?>

    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary text-uppercase text-center">Masukan Nilai Akhir </h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" width="100%" cellspacing="0">
              <tbody>
                   <tr class="btn-info" align="middle">
                    <td><strong>Kode Mata Pelajaran</strong></td>
                    <td><strong><?php echo $kode_mapel ?></strong></td>
                  </tr>
                   <tr  align="middle">
                    <td><strong>Nama Mata Pelajaran </strong></td>
                    <td><?php echo $nilai->model_mapel->get_by_id($kode_mapel)->nama_mapel ?></td>
                  </tr>
                  <tr  align="middle">
                    <?php 
                    	$thn = $nilai->model_tahun_akademik->get_by_id($id_thn_ak);
                    	$semester = $thn->semester == "ganjil";

					    if ($semester == "Ganjil") {
				  			$tampilSemester = "Ganjil";
				  		}else{
				  			$tampilSemester = "Genap";
				  		}

                     ?>
                  </tr>
                   <tr  align="middle">
                    <td><strong>Tahun Akademik (Semester)</strong></td>
                    <td><?php echo $thn->tahun_akademik .' '. '('.$tampilSemester.')' ?></td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>


      <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-success text-uppercase"> Form Input Nilai </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <?php echo form_open('admin/nilai/simpan_nilai') ?>
                <table class="table table-hover table-bordered"  width="100%" cellspacing="0">
                  <thead>
                   <tr class="btn-success text-center">
	              		<th>NO</th>
	              		<th>NIS</th>
	              		<th>NAMA SISWA</th>
	              		<th>NILAI</th>
	              	</tr>
                  </thead>
                  <tbody>
                  	<?php 
                 	$no = 1;
                 	foreach ($list_nilai as $row) : ?>
                	 <tr align="middle">
	                 	<td width="20px"><?php echo $no++; ?></td>
	                 	<td><?php echo $row->nis; ?></td>
	                 	<td><?php echo $row->nama_lengkap; ?></td>
                    <input type="hidden" name="id_krs[]" value="<?php echo $row->id_krs; ?>">
	                 	<td width="80px" align="middle"><input type="text" name="nilai[]" class="form-control" value="<?php echo $row->nilai; ?>"></td>
                    <?php endforeach; ?>
	                 </tr>
                  </tbody>
                </table>
                 <button class="btn btn-primary" type="submit">Simpan</button>
                <?php echo form_close(); ?>
              </div>
            </div>
          </div>

    <?php 
    	} 
    ?>
	
</div>