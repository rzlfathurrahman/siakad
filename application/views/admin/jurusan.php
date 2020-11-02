<div class="container-fluid" id="jurusan">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item active" aria-current="page">Jurusan</li>
    </ol>
  </nav>

 <?php echo $this->session->flashdata('pesan'); ?>

  <?php echo anchor('admin/jurusan/input','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Jurusan</button>'); ?> 
          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">Tabel Jurusan</h6>
            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                     <tr class="btn-info">
                        <th width="20px">NO</th>
                        <th>KODE JURUSAN</th>
                        <th>NAMA JURUSAN</th>
                        <th>UPDATE</th>
                        <th>DELETE</th>
                      </tr>
                  </thead>
                  <tbody>
                    <?php $no=1;
                    foreach ($jurusan as $jrs ) : ?>
                    <tr>
                      <td><?php echo $no++; ?></td>
                      <td><?php echo $jrs->kode_jurusan; ?></td>
                      <td><?php echo $jrs->nama_jurusan; ?></td>
                      <td width="20px" align="center"><?php echo anchor('admin/jurusan/update/'.$jrs->id_jurusan,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
                      <td width="20px" align="center"><?php echo anchor('admin/jurusan/delete/'.$jrs->id_jurusan,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?></td>
                    </tr>
                    <?php endforeach; ?>
                  </tbody>
                </table>
              </div>
            </div>
          </div>
         
</div>
