<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Akademik</a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/siswa') ?>"> Siswa</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Siswa</li>
    </ol>
  </nav>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Detail Siswa</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover"  width="100%" cellspacing="0">
          <thead>
          	<?php foreach ($detail as $dt) : ?>
          		<strong ><h4 class="text-center text-uppercase"><?php echo $dt->nama_lengkap ?></h4></strong>
          		<center><img class="text-center mb-4 mt-2" src="<?php echo base_url('assets/uploads/').$dt->photo ?>" style="width: 20%; "></center>
             <tr class="btn-success">
                <th>NIS</th>
                <th><?php echo $dt->nis; ?></th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <th>Nama Lengkap</th>
                <th><?php echo $dt->nama_lengkap; ?></th>
              </tr>
              <tr>
                <th>Alamat</th>
                <th><?php echo $dt->alamat; ?></th>
              </tr>
              <tr>
                <th>Email</th>
                <th><?php echo $dt->email; ?></th>
              </tr>
              <tr>
                <th>Telepon</th>
                <th><?php echo $dt->telepon; ?></th>
              </tr>
              <tr>
                <th>Tempat Lahir</th>
                <th><?php echo $dt->tempat_lahir; ?></th>
              </tr>
              <tr>
                <th>Tanggal Lahir</th>
                <th><?php echo $dt->tanggal_lahir; ?></th>
              </tr>
              <tr>
                <th>Jenis Kelamin</th>
                <th><?php echo $dt->jenis_kelamin; ?></th>
              </tr>
              <tr>
                <th>Nama Prodi</th>
                <th><?php echo $dt->nama_prodi; ?></th>
              </tr>
             <?php endforeach; ?>
          </tbody>
        </table>
        <?php echo anchor('admin/siswa','<div class="btn btn-sm btn-danger">Kembali </div>'); ?>
       
      </div>
    </div>
  </div>

</div>