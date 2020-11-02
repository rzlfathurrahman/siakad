<div class="container-fluid ">

<nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-university mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#"> Akademik</a></li>
      <li class="breadcrumb-item"><a href="#">KRS</a></li>
      <li class="breadcrumb-item active " aria-current="page">Form Tambah Data KRS</li>
    </ol>
  </nav>

	<div class="card">
		<div class="card-header bg-primary text-white ">
			<h4><i class="fa fa-plus"></i> Tambah Data KRS</h4>
		</div>
		<div class="card-body">
			<form method="post" action="<?php echo base_url('admin/krs/tambah_krs_aksi') ?>">
			<div class="form-group">
				<label>Tahun Akademik</label>
				<input type="hidden" name="id_thn_ak" value="<?php echo $id_thn_ak ?>">
				<input type="hidden" name="id_krs" value="<?php echo $id_krs ?>">
				<input type="text" name="thn_akad_smt" class="form-control" value="<?php echo $thn_akad_smt. '/' .$semester; ?>" readonly>
			</div>
			<div class="form-group">
				<label>NIS</label>
				<input type="text" name="nis" class="form-control" value="<?php echo $nis ?>" readonly>
			</div>
			<div class="form-group">
				<label>Mata Pelajaran </label>
				<?php 
					$query = $this->db->query('SELECT kode_mapel,nama_mapel FROM mapel');
					$dropdowns = $query->result();
					foreach ($dropdowns as $dropdown) {
						$dropDownList[$dropdown->kode_mapel] = $dropdown->nama_mapel;
					}
						echo form_dropdown('kode_mapel' , $dropDownList , $kode_mapel,'class="form-control" id="kode_mapel"');	?>
			</div>
			<button class="btn btn-sm btn-primary mb-1" type="submit">Simpan</button>
			<?php echo anchor('admin/krs/krs_aksi','<div class="btn mb-1 btn-sm btn-danger">Cancel</div>') ?>
		</form>
		</div>
	</div>
</div>