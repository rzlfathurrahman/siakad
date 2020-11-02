<div class="container-fluid">
  
 <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item "><a href="<?php echo base_url('admin/mapel') ?>">Mapel</a></li>
      <li class="breadcrumb-item active" aria-current="page">Update Mapel</li>
    </ol>
  </nav>

  <div class="card">
    <div class="card-header bg-info text-light">
      <h5><i class="fa fa-edit"></i> Update Data Mapel</h5>
    </div>
    <div class="card-body">
       <?php foreach ($mapel as $mpl) : ?>
    
        <form action="<?php echo base_url('admin/mapel/update_mapel_aksi') ?>" method="post">
          <div class="form-group">
            <label>Kode Mapel</label>
            <input type="text" name="kode_mapel" class="form-control" value="<?php echo $mpl->kode_mapel ?>">
          </div>
          <div class="form-group">
            <label>Nama Mapel</label>
            <input type="text" name="nama_mapel" class="form-control" value="<?php echo $mpl->nama_mapel ?>">
          </div>
          <div class="form-group">
            <label>Nama Prodi</label>
            <select name="nama_prodi" class="form-control">

              <option value="<?php echo $mpl->nama_prodi; ?>"><?php echo $mpl->nama_prodi; ?></option> 

             <?php foreach ($prodi as $prd): ?>
                 <option value="<?php echo $prd->nama_prodi; ?>"><?php echo $prd->nama_prodi; ?></option>
              <?php endforeach; ?>

            </select>
          </div>
          <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    
     <?php endforeach; ?>

    </div>
  </div>
</div>