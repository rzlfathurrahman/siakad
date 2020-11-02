<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-file mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Info Sekolah</a></li>
      <li class="breadcrumb-item active" aria-current="page">Gallery</li>
    </ol>
  </nav>

  <?php echo $this->session->flashdata('pesan'); ?>

  <?php echo anchor('admin/gallery/tambah_gallery','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Gallery</button>'); ?> 
	
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Data Gallery</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead>
             <tr class="btn-success" align="middle">
                <th>NO</th>
                <th>JUDUL</th>
                <th>KETERANGAN</th>
                <th>FOTO</th>
                <th>UPDATE</th>
                <th>DELETE</th>
              </tr>
          </thead>
          <tbody>

            <?php  $no=1; foreach ($gallery as $gl ) : ?>

		          <tr>
		            <td width="20px" align="middle"><?php echo $no++; ?></td>
                <td ><?php echo $gl->judul; ?></td>
		            <td ><?php echo $gl->keterangan; ?></td>
		            <td>
                  <img class="img-thumbnail" src="<?php echo base_url('assets/uploads/').$gl->photo ?>">
                </td>
		            <td width="20px" align="middle"><?php echo anchor('admin/gallery/update/'.$gl->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
		             <td width="20px" align="middle"><?php echo anchor('admin/gallery/delete/'.$gl->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?></td>
		          </tr>

          <?php endforeach; ?>
          
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>