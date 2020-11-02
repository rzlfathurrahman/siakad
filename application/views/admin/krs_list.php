<div class="container-fluid" id="krs_list">

	<nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/krs/index') ?>">Masuk Halaman KRS</a></li>
      <li class="breadcrumb-item active" aria-current="page">Kartu Rencana Studi (KRS)</li>
    </ol>
  </nav>
  
	<div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary text-uppercase text-center">kartu rencana studi </h6>
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

       <?php echo anchor('admin/krs/tambah_krs/'.$nis.'/'.$id_thn_ak,'<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Data KRS</button>'); ?>
       <?php echo anchor('admin/krs/print','<button class="btn btn-sm btn-warning mb-3"><i class="fas fa-print fa-sm"></i> Print Data KRS</button>'); ?>

      <div class="card shadow mb-4">
            <div class="card-header py-3">
               <h6 class="m-0 font-weight-bold text-success text-uppercase"> Tabel Krs </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                      <tr class="btn-success">
	              		<th>NO</th>
	              		<th>KODE MATA PELJARAN</th>
	              		<th>NAMA MATA PELAJARAN</th>
	              		<th>UPDATE</th>
	              		<th>DELETE</th>
	              	</tr>
                  </thead>
                  <tbody>
                  	<?php 
                 	$no = 1;
                 	foreach ($krs_data as $krs) : ?>
                 <tr>
                 	<td width="20px"><?php echo $no++ ?></td>
                 	<td><?php echo $krs->kode_mapel ?></td>
                 	<td><?php echo $krs->nama_mapel ?></td>
                 	<td width="20px" align="middle"><?php echo anchor('admin/krs/update/'.$krs->id_krs,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
                    <td width="20px" align="middle"><?php echo anchor('admin/krs/delete/'.$krs->id_krs,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?></td>
                 </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>    
</div>