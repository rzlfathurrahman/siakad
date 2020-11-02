<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/jurusan') ?>"> Akademik</a></li>
      <li class="breadcrumb-item active" aria-current="page">Prodi</li>
    </ol>
  </nav>

  <?php echo $this->session->flashdata('pesan'); ?>

  <?php echo anchor('admin/prodi/tambah_prodi','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Prodi</button>'); ?>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Program Studi </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                       <tr class="btn-warning">
                        <th>NO</th>
                        <th>KODE PRODI</th>
                        <th >NAMA PRODI</th>
                        <th>KODE JURUSAN</th>
                        <th>UPDATE</th>
                        <th>DELETE</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;
                    foreach ($prodi as $prd) : ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $prd->kode_prodi; ?></td>
                        <td><?php echo $prd->nama_prodi; ?></td>
                        <td><?php echo $prd->kode_jurusan; ?></td>
                        <td width="20px" align="middle"><?php echo anchor('admin/prodi/update/'.$prd->id_prodi,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
                        <td width="20px" align="middle"><?php echo anchor('admin/prodi/delete/'.$prd->id_prodi,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>  
</div>

<script type="text/javascript">
	$(document).ready(function() {
  	$('#dataTable').DataTable();
	});
</script>