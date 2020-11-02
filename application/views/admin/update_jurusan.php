<div class="container-fluid">
	
 <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item" ><a href="<?php echo base_url('admin/jurusan') ?>">Jurusan</a></li>
      <li class="breadcrumb-item " aria-current="page">Form Update Jurusan</li>
    </ol>
  </nav>
  <div class="card">
    <div class="card-header bg-info text-light">
       <h5><i class="fas fa-edit mt-2 mb-2"></i> UPDATE DATA JURUSAN</h5>
    </div>
    <div class="card-body">

      <?php foreach ($jurusan as $jrs): ?>

      <form action="<?php echo base_url('admin/jurusan/update_aksi') ?>" method="post">
        <div class="form-group">
          <label>Kode Jurusan</label>
          <input type="hidden" name="id_jurusan" value="<?php echo $jrs->id_jurusan ?>">
          <input type="text" name="kode_jurusan" class="form-control" value="<?php echo $jrs->kode_jurusan ?>">
        </div>
        <div class="form-group">
          <label>Nama Jurusan</label>
          <input type="text" name="nama_jurusan" class="form-control" value="<?php echo $jrs->nama_jurusan ?>">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>

  <?php endforeach; ?>

    </div>
  </div>
</div>