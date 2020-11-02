<div class="container-fluid">
	<nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
      <li class="mr-2"><i class="fas fa-file"></i> </li>
      <li class="breadcrumb-item"><a href="#"> Info Sekolah</a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/about_us') ?>">About US</a></li>
      <li class="breadcrumb-item active" aria-current="page">Tentang Sekolah</li>
    </ol>
  </nav>

  <?php echo $this->session->flashdata('pesan'); ?>

          <!-- DataTales Example -->
          <div class="card shadow mb-4 text-center">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Tentang Sekolah </h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="Table" width="100%" cellspacing="0">
                  <thead class="text-light">
                       <tr class="bg-primary">
                        <th>No</th>
                        <th>Sejarah</th>
                        <th>Visi</th>
                        <th>Misi</th>
                        <th>Update</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;
                    foreach ($about as $abt) : ?>
                      <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $abt->sejarah; ?></td>
                        <td><?php echo $abt->visi; ?></td>
                        <td><?php echo $abt->misi; ?></td>
                        <td width="20px" align="middle"><?php echo anchor('admin/about_us/update/'.$abt->id,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
                      </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>  
</div>
</div>
