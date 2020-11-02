<?php 

$nilai = get_instance();
$nilai->load->model('model_mapel');
$nilai->load->model('model_tahun_akademik');
$nilai->load->model('model_krs');
$nilai->load->model('model_siswa');

$krs = $nilai->model_krs->get_by_id($id_krs[0]);
$kode_mapel = $krs->kode_mapel;
$id_thn_ak = $krs->id_thn_ak;

 ?>
 <div class="container-fluid">
 	
	<nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/nilai/input_nilai') ?>">Masuk Halaman Input Nilai</a></li>
      <li class="breadcrumb-item active" aria-current="page">Daftar Nilai Siswa</li>
    </ol>
  </nav>

	<div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary text-uppercase text-center">daftar nilai siswa </h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" width="100%" cellspacing="0">
              <tbody>
                   <tr class="btn-info" align="middle">
                    <td><strong>KODE  MATA PELAJARAN</strong></td>
                    <td><strong><?php echo $kode_mapel ?></strong></td>
                  </tr>
                  <tr  align="middle">
                    <td><strong>Nama Mata Pelajaran</strong></td>
                    <td><?php echo $nilai->model_mapel->get_by_id($kode_mapel)->nama_mapel ?></td>
                  </tr>

                  <?php 
                   		$thn = $nilai->model_tahun_akademik->get_by_id($id_thn_ak);
                   		$semester = $thn->semester == "Ganjil";
                   		if ($semester ) {
                   			$tampilSemester = "Ganjil";
                   		}else{
                   			$tampilSemester = "Genap";
                   		}
                   	 ?>

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
               <h6 class="m-0 font-weight-bold text-success text-uppercase"> Tabel Nilai </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table text-center table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr class="btn-success">
	              		<th>NO</th>
	              		<th>NIS</th>
	              		<th>NAMA LENGKAP</th>
	              		<th>NILAI</th>
	              	</tr>
                  </thead>
                  <tbody>
                  	<?php 
                 	$no = 1;
                 	for ($i=0; $i < sizeof($id_krs); $i++) { ?>
	                 <tr>
	                 	<td width="20px"><?php echo $no++ ?></td>
	                 	<?php $nis = $nilai->model_krs->get_by_id($id_krs[$i])->nis;  ?>
	                 	<td><?php echo $nis; ?></td>
	                 	<td><?php echo $nilai->model_siswa->get_by_id($nis)->nama_lengkap; ?></td>
	                 	<td><?php echo $nilai->model_krs->get_by_id($id_krs[$i])->nilai; ?></td>
	                 </tr>
                    <?php } ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>    
 </div>