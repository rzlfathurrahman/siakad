<div class="container-fluid" id="krs_list">

	<nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/nilai/index') ?>">Masuk Halaman KHS</a></li>
      <li class="breadcrumb-item active" aria-current="page">Kartu Hasil Studi (KHS)</li>
    </ol>
  </nav>
	<div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary text-uppercase text-center">kartu hasil studi </h6>
        </div>
        <div class="card-body">
          <div class="table-responsive">
            <table class="table table-bordered table-hover" width="100%" cellspacing="0">
              <tbody>
                   <tr class="btn-info" align="middle">
                    <td><strong>NIS</strong></td>
                    <td><strong><?php echo $nis ?></strong></td>
                  </tr>
                   <tr  align="middle">
                    <td><strong>Nama Lengkap </strong></td>
                    <td><?php echo $nama_lengkap ?></td>
                  </tr>
                  <tr  align="middle">
                    <td><strong>Program Studi</strong></td>
                    <td><?php echo $nama_prodi ?></td>
                  </tr>
                   <tr  align="middle">
                    <td><strong>Tahun Akademik (Semester)</strong></td>
                    <td><?php echo $tahun_akademik .' '. '('.$semester.')' ?></td>
                  </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>

       <?php echo anchor('admin/khs/print','<button class="btn btn-sm btn-warning mb-3"><i class="fas fa-print fa-sm"></i> Print Data KHS</button>'); ?>

      <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-success text-uppercase"> Tabel Khs </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr class="btn-success">
	              		<th>NO</th>
	              		<th>KODE MATA PELJARAN</th>
	              		<th>NAMA MATA PELAJARAN</th>
                    <th>NILAI</th>
	              	</tr>
                  </thead>
                  <tbody>
                  	<?php 
                 	$no = 1;
                  $jumlahNilai = 0;
                 	foreach ($khs_data as $khs) : ?>
                 <tr align="middle">
                 	<td width="20px"><?php echo $no++ ?></td>
                 	<td width="230px"><?php echo $khs->kode_mapel ?></td>
                 	<td><?php echo $khs->nama_mapel ?></td>
                  <td align="left"><?php echo $khs->nilai ?></td>
                  <?php 
                    $jumlahNilai += $khs->nilai;
                   ?>
                 </tr>
                    <?php endforeach; ?>
                  <tfoot>
                   <tr>
                      <td></td>
                      <td></td>
                      <td align="right"><strong>Jumlah</strong></td>
                      <td ><?php echo $jumlahNilai ?></td>
                   </tr>
                  </tfoot>
                  </tbody>
                </table>
              </div>
            </div>
          </div>   

</div>