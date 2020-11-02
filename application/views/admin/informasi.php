<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-file mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Info Sekolah</a></li>
      <li class="breadcrumb-item active" aria-current="page">Informasi Sekolah</li>
    </ol>
  </nav>

  <?php echo $this->session->flashdata('pesan'); ?>

  <?php echo anchor('admin/informasi/tambah_informasi','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Informasi</button>'); ?> 
	
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Data Informasi</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead>
             <tr class="btn-success" align="middle">
                <th>NO</th>
                <th>ICON</th>
                <th>JUDUL INFORMASI</th>
                <th>ISI INFORMASI</th>
                <th>UPDATE</th>
                <th>DELETE</th>
              </tr>
          </thead>
          <tbody>

            <?php  $no=1; foreach ($informasi as $info ) : ?>

		          <tr>
		            <td width="20px" align="middle"><?php echo $no++; ?></td>
                <td ><?php echo $info->icon; ?></td>
		            <td ><?php echo $info->judul_informasi; ?></td>
		            <td><?php echo $info->isi_informasi; ?></td>
		            <td width="20px " align="middle"><?php echo anchor('admin/informasi/update/'.$info->id_informasi,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
		             <td width="20px" align="middle"><?php echo anchor('admin/informasi/delete/'.$info->id_informasi,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?></td>
		          </tr>

          <?php endforeach; ?>
          
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>