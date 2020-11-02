<div class="container-fluid">
	<nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
      <li class="mr-2"><i class="fas fa-fw fa-wrench"></i> </li>
      <li class="breadcrumb-item"><a href="#"> Pengaturan</a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/users') ?>">Users</a></li>
      <li class="breadcrumb-item active" aria-current="page">Daftar Users</li>
    </ol>
  </nav>

  <?php echo $this->session->flashdata('pesan'); ?>

  <?php echo anchor('admin/users/tambah_users','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Users</button>'); ?>
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Daftar Users </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                       <tr class="btn-primary">
                        <th align="middle">NO</th>
                        <th>Username</th>
                        <th>Email</th>
                        <th>Level</th>
                        <th width="10px" align="middle">Blokir</th>
                        <th>Update</th>
                        <th>Delete</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;
                    foreach ($user as $usr) : ?>
                      <tr>
                        <td align="middle" width="10px"><?php echo $no++; ?></td>
                        <td><?php echo $usr->username; ?></td>
                        <td><?php echo $usr->email; ?></td>
                        <td><?php echo $usr->level; ?></td>
                        <td align="middle"><?php echo $usr->blockir; ?></td>
                        <td width="20px" align="middle"><?php echo anchor('admin/users/update/'.$usr->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
                        <td width="20px" align="middle"><?php echo anchor('admin/users/delete/'.$usr->id,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>  
</div>
</div>