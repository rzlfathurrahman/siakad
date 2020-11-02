  <!-- Begin Page Content -->
<div class="container-fluid">
  
  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Akademik</a></li>
      <li class="breadcrumb-item active" aria-current="page">Mapel</li>
    </ol>
  </nav>

  <?php echo $this->session->flashdata('pesan'); ?>

  <?php echo anchor('admin/mapel/tambah_mapel','<button class="btn btn-sm btn-primary mb-3"><i class="fas fa-plus fa-sm"></i> Tambah Mapel</button>'); ?> 
  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Tabel Data Mapel</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover" id="dataTable" width="100%" cellspacing="0">
          <thead>
             <tr class="btn-success" align="middle">
                <th>NO</th>
                <th>KODE</th>
                <th>NAMA MAPEL</th>
                <th>PROGRAM STUDI</th>
                <th>DETAIL</th>
                <th>UPDATE</th>
                <th>DELETE</th>
              </tr>
          </thead>
          <tbody>

            <?php  $no=1; foreach ($mapel as $mpl ) : ?>

		          <tr>
		            <td width="20px"><?php echo $no++; ?></td>
		            <td width="50px"><?php echo $mpl->kode_mapel; ?></td>
		            <td><?php echo $mpl->nama_mapel; ?></td>
		            <td><?php echo $mpl->nama_prodi; ?></td>
		            <td width="20px" align="middle"><?php echo anchor('admin/mapel/detail/'.$mpl->kode_mapel,'<div class="btn btn-sm btn-info"><i class="fa fa-eye"></i></div>'); ?></td>
		            <td width="20px " align="middle"><?php echo anchor('admin/mapel/update/'.$mpl->kode_mapel,'<div class="btn btn-sm btn-primary"><i class="fa fa-edit"></i></div>'); ?></td>
		             <td width="20px" align="middle"><?php echo anchor('admin/mapel/delete/'.$mpl->kode_mapel,'<div class="btn btn-sm btn-danger"><i class="fa fa-trash"></i></div>'); ?></td>
		          </tr>

          <?php endforeach; ?>
          
          </tbody>
        </table>
      </div>
    </div>
  </div>

</div>
<!-- /.container-fluid -->