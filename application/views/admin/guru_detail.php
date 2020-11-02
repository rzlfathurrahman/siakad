<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Akademik</a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/guru') ?>"> Guru</a></li>
      <li class="breadcrumb-item active" aria-current="page">Detail Guru</li>
    </ol>
  </nav>

  <!-- DataTales Example -->
  <div class="card shadow mb-4">
    <div class="card-header py-3">
      <h6 class="m-0 font-weight-bold text-primary">Detail Guru</h6>
    </div>
    <div class="card-body">
      <div class="table-responsive">
        <table class="table table-bordered table-hover"  width="100%" cellspacing="0">
          <thead>
          	<?php foreach ($detil as $dt) : ?>
          		<strong ><h4 class="text-center text-uppercase"><?php echo $dt->nama_guru; ?></h4></strong>
          		<center><img class="text-center mb-4 mt-2" src="<?php echo base_url('assets/uploads/').$dt->photo ?>" style="width: 20%; "></center>
             <tr class="btn-success">
                <th>NIG</th>
                <th><?php echo $dt->nig; ?></th>
              </tr>
          </thead>
          <tbody>
              <tr>
                <th>Nama Guru</th>
                <th><?php echo $dt->nama_guru; ?></th>
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
                <th>Nomor Telepon</th>
                <th><?php echo $dt->telp; ?></th>
              </tr>
              <tr>
                <th>Jenis Kelamin</th>
                <th><?php echo $dt->jenis_kelamin; ?></th>
              </tr>
             <?php endforeach; ?>
          </tbody>
        </table>
        <?php echo anchor('admin/guru','<div class="btn btn-sm btn-danger">Kembali </div>'); ?>
       
      </div>
    </div>
  </div>

</div>