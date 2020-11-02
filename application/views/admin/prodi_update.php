<div class="container-fluid">
	
 <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item "><a href="<?php echo base_url('admin/prodi') ?>">Prodi</a></li>
      <li class="breadcrumb-item active" aria-current="page">Update Prodi</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-header bg-info text-light">
      <h5><i class="fa fa-edit"></i> Update Data Prodi</h5>
    </div>
    <div class="card-body">
       <?php foreach ($prodi as $prd): ?>
    
      <form action="<?php echo base_url('admin/prodi/update_aksi') ?>" method="post">
        <div class="form-group">
          <label>Kode Prodi</label>
          <input type="hidden" name="id_prodi" value="<?php echo $prd->id_prodi ?>">
          <input type="text" name="kode_prodi" class="form-control" value="<?php echo $prd->kode_prodi ?>">
        </div>
        <div class="form-group">
          <label>Nama Prodi</label>
          <input type="text" name="nama_prodi" class="form-control" value="<?php echo $prd->nama_prodi ?>">
        </div>
        <div class="form-group">
          <label>Kode Jurusan</label>
          <select name="kode_jurusan" class="form-control">

            <option value="<?php echo $prd->kode_jurusan; ?>"><?php echo $prd->kode_jurusan; ?></option> 

            <?php foreach ($jurusan as $jrs): ?>
               <option value="<?php echo $jrs->kode_jurusan; ?>"><?php echo $jrs->kode_jurusan; ?></option>
            <?php endforeach; ?>
          </select>
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </form>

  <?php endforeach; ?>
    </div>
  </div>
</div>