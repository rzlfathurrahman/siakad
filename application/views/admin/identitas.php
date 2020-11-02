<div class="container-fluid">
	<nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
      <li class="mr-2"><i class="fas fa-file"></i> </li>
      <li class="breadcrumb-item"><a href="#"> Info Sekolah</a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/identitas') ?>">Identitas</a></li>
      <li class="breadcrumb-item active" aria-current="page">Identitas Website</li>
    </ol>
  </nav>

  <?php echo $this->session->flashdata('pesan'); ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4 text-center">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Identitas Sekolah </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="Table" width="100%" cellspacing="0">
                  <thead class="text-light">
                       <tr class="bg-primary">
                        <th>Judul Website</th>
                        <th>Alamat</th>
                        <th>Email</th>
                        <th>Telepon</th>
                        <th>Update</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php 
                    foreach ($identitas as $id) : ?>
                      <tr>
                        <td><?php echo $id->judul_website; ?></td>
                        <td><?php echo $id->alamat; ?></td>
                        <td><?php echo $id->email; ?></td>
                        <td><?php echo $id->telp; ?></td>
                        <td width="20px" align="middle"><?php echo anchor('admin/identitas/update/'.$id->id_identitas,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>  
</div>
</div>