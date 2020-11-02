<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item "><a href="<?php echo base_url('admin/mapel') ?>">Mapel</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Mapel</li>
    </ol>
  </nav>


   <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Detail Mata Pelajaran</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover"  width="100%" cellspacing="0">
          <thead>
          	<?php foreach ($detail as $dt) : ?>
             <tr class="btn-success">
                <th>Kode Mata Pelajaran</th>
                <th><?php echo $dt->kode_mapel; ?></th>
              </tr>
          </thead>
          <tbody>
              <tr >
                <th>Nama Mata Pelajaran</th>
                <th><?php echo $dt->nama_mapel; ?></th>
              </tr>
              <tr >
                <th>Semester</th>
                <th><?php echo $dt->semester; ?></th>
              </tr>
              <tr >
                <th>Nama Prodi</th>
                <th><?php echo $dt->nama_prodi; ?></th>
              </tr>
             <?php endforeach; ?>
          </tbody>
        </table>
        <?php echo anchor('admin/mapel','<div class="btn btn-sm btn-danger">Kembali </div>'); ?>
       
      </div>
    </div>
  </div>

</div>