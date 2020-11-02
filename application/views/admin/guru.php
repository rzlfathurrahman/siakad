<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Akademik</a></li>
      <li class="breadcrumb-item active" aria-current="page">Guru</li>
    </ol>
  </nav>

  <?php echo $this->session->flashdata('pesan'); ?>

  <?php echo anchor('admin/guru/tambah_guru','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah guru</button>'); ?> 
	
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Data Guru</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead>
             <tr class="btn-success" align="middle">
                <th>NO</th>
                <th>NIG</th>
                <th>NAMA GURU</th>
                <th>ALAMAT</th>
                <th>DETAIL</th>
                <th>UPDATE</th>
                <th>DELETE</th>
              </tr>
          </thead>
          <tbody>

            <?php  $no=1; foreach ($guru as $gr ) : ?>

		          <tr>
		            <td width="20px" align="middle"><?php echo $no++; ?></td>
                <td ><?php echo $gr->nig; ?></td>
		            <td ><?php echo $gr->nama_guru; ?></td>
		            <td><?php echo $gr->alamat; ?></td>
		            <td width="20px" align="middle"><?php echo anchor('admin/guru/detail/'.$gr->nig,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'); ?></td>
		            <td width="20px " align="middle"><?php echo anchor('admin/guru/update/'.$gr->nig,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
		             <td width="20px" align="middle"><?php echo anchor('admin/guru/delete/'.$gr->nig,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?></td>
		          </tr>

          <?php endforeach; ?>
          
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>