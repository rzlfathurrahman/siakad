<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/transkrip_nilai') ?>"> Masuk Halaman Transkrip Nilai</a></li>
      <li class="breadcrumb-item active" aria-current="page"> Transkrip Nilai</li>
    </ol>
  </nav>

	<?php echo $this->session->flashdata('pesan'); ?>

	<ul class="list-group mx-auto w-75 mb-4">
	 <span class="text-center ">
		  <li class="list-group-item bg-info text-light">
		  	<h5><i class="fa fa-print"></i> Transkrip Nilai</h5>
		  </li>
		  <li class="list-group-item"><strong class="mr-2">NIS</strong>   :  <?php echo $nis ?></li>
		  <li class="list-group-item"><strong class="mr-2">NAMA</strong>  :  <?php echo $nama ?></li>
		  <li class="list-group-item"><strong class="mr-2">PROGRAM STUDI</strong>  :  <?php echo $prodi ?></li>
	  </span>
	</ul>

  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Detail Transkrip Nilai</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-hover table-bordered text-center" id="dataTable" width="100%" cellspacing="0">
          <thead class="bg-primary text-light">
          	<tr>
          		<th width="20px" align="middle">No</th>
          		<th align="middle">Kode Mata Pelajaran</th>
          		<th>Nama Mata Pelajaran</th>
          		<th>Nilai</th>
          	</tr>
          </thead>
          <tbody>
          	<?php $Jnilai=0; $no = 1; foreach ($transkrip as $ts) : ?>
              <tr>
              	<td width="20px" align="middle"><?php echo $no++; ?></td>
              	<td ><?php echo $ts->kode_mapel; ?></td>
              	<td><?php echo $ts->nama_mapel; ?></td>
              	<td><?php echo $ts->nilai; ?></td>
              </tr>
              	<?php 
              		$Jnilai += $ts->nilai;
              	 ?>
            <?php endforeach; ?>
          </tbody>
          <tfoot>
          	<tr>
          		<td></td>
          		<td></td>
          		<td align="right"><strong>Jumlah Nilai</strong></td>
          		<td><strong><?php echo $Jnilai; ?></strong></td>
          	</tr>
          </tfoot>
        </table>       
      </div>
    </div>
  </div>
 

</div>