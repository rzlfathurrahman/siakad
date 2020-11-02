<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-file mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Info Sekolah</a></li>
      <li class="breadcrumb-item active" aria-current="page">Pesan User</li>
    </ol>
  </nav>

  <?php echo $this->session->flashdata('pesan'); ?>

	
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Pesan User</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead>
             <tr class="btn-success" align="middle">
                <th width="20px">NO</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Pesan</th>
                <th>Balas</th>
                <th>Hapus</th>
              </tr>
          </thead>
          <tbody>

            <?php  $no=1; foreach ($hubungi as $hub ) : ?>

		          <tr>
		            <td width="20px" align="middle"><?php echo $no++; ?></td>
                <td ><?php echo $hub->nama; ?></td>
		            <td ><?php echo $hub->email; ?></td>
		            <td><?php echo $hub->pesan; ?></td>
		            <td width="20px " align="middle"><?php echo anchor('admin/hubungi_kami/kirim_email/'.$hub->id_hubungi,'<div class="btn btn-sm btn-primary"><i class="fa fa-comment-dots"></i></div>'); ?></td>
		             <td width="20px" align="middle"><?php echo anchor('admin/hubungi_kami/delete/'.$hub->id_hubungi,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?></td>
		          </tr>

          <?php endforeach; ?>
          
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>