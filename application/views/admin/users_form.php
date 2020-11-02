<div class="container-fluid">

<nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-fw fa-wrench"></i></li>
      <li class="breadcrumb-item"><a href="#"> Pengaturan</a></li>
      <li class="breadcrumb-item" ><a href="<?php echo base_url('admin/users') ?>">Users</a></li>
      <li class="breadcrumb-item " aria-current="page">Form Input Jurusan</li>
    </ol>
  </nav>

	<div class="card">
		<div class="card-header bg-primary text-white ">
			<h4><i class="fa fa-plus"></i> Tambah Data</h4>
		</div>
		<div class="card-body">
			<form method="post" action="<?php echo base_url('admin/users/tambah_users_aksi') ?>">
			<div class="form-group">
				<label>Username</label>
				<input type="text" name="username" placeholder="Masukan Username" class="form-control">
				<?php echo form_error('username','<div class="text-danger small ml-3 mt-2">'); ?>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="text" name="password" placeholder="Masukan Password" class="form-control">
				<?php echo form_error('nama_jurusan','<div class="text-danger small ml-3 mt-2">'); ?>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" placeholder="Masukan email" class="form-control">
				<?php echo form_error('email','<div class="text-danger small ml-3 mt-2">'); ?>
			</div>
			<div class="form-group">
				<label>Level</label>
				<select name="level" class="form-control">

					<?php 
						if($level == 'admin'){
					 ?>

						 <option value="admin" selected="">Admin</option>
						 <option value="siswa">Siswa</option>

					 <?php 
					 	}elseif($level == 'siswa'){
					  ?>

						  <option value="admin">Admin</option>
						  <option value="siswa" selected="">Siswa</option>

					  <?php 
					  	}else{
					   ?>

					   	  <option value="admin">Admin</option>
						  <option value="siswa">Siswa</option>

					  <?php 
						}
					   ?>
				</select>
				<?php echo form_error('level','<div class="text-danger small ml-3 mt-2">'); ?>
			</div>
			<div class="form-group">
				<label>Blokir</label>
				<select name="blockir" class="form-control">

					<?php 
						if($blockir == 'Y'){
					 ?>

						 <option value="Y" selected>Ya</option>
						 <option value="N">Tidak</option>

					 <?php 
					 	}elseif($blockir == 'N'){
					  ?>

						  <option value="Y">Ya</option>
						  <option value="N">Tidak</option>

					  <?php 
					  	}else{
					   ?>

					   	  <option value="Y">Ya</option>
						  <option value="N">Tidak</option>
						  
					  <?php 
						}
					   ?>
				</select>
				<?php echo form_error('blockir','<div class="text-danger small ml-3 mt-2">'); ?>
			</div>
			<button class="btn btn-sm btn-primary" type="submit">Simpan</button>
		</form>
		</div>
	</div>
</div>