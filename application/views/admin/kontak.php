<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-file mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Info Sekolah</a></li>
      <li class="breadcrumb-item active" aria-current="page">Contact</li>
    </ol>
  </nav>

  <?php echo $this->session->flashdata('pesan'); ?>

  <?php echo anchor('admin/contact/tambah_contact','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Contact</button>'); ?> 
	
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Data Contact</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead>
             <tr class="btn-success">
                <th>NO</th>
                <th>NAMA ICON</th>
                <th>ICON</th>
                <th>KETERANGAN</th>
                <th>UPDATE</th>
                <th>DELETE</th>
              </tr>
          </thead>
          <tbody>

            <?php  $no=1; foreach ($kontak as $info ) : ?>

		          <tr>
		            <td width="20px" align="middle"><?php echo $no++; ?></td>
                <td ><?php echo $info->icon; ?></td>
                <td align="middle"><i class="<?php echo $info->icon; ?>"></i></td>
		            <td ><?php echo $info->keterangan; ?></td>
		            <td width="20px " align="middle"><?php echo anchor('admin/contact/update/'.$info->id_kontak,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
		             <td width="20px" align="middle"><?php echo anchor('admin/contact/delete/'.$info->id_kontak,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?></td>
		          </tr>

          <?php endforeach; ?>
          
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>