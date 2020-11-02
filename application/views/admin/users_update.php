<div class="container-fluid">

<nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-fw fa-wrench"></i></li>
      <li class="breadcrumb-item"><a href="#"> Pengaturan</a></li>
      <li class="breadcrumb-item" ><a href="<?php echo base_url('admin/users') ?>">Users</a></li>
      <li class="breadcrumb-item " aria-current="page">Form Update Jurusan</li>
    </ol>
  </nav>
<?php foreach ($users as $users): ?>
	
	<div class="card mb-4">
		<div class="card-header bg-info text-white ">
			<h5><i class="fa fa-edit"></i> Update Data User</h5>
		</div>
		<div class="card-body">
			<form method="post" action="<?php echo base_url('admin/users/update_aksi') ?>">
			<div class="form-group">
				<label>Username</label>
				<input type="hidden" name="id" value="<?php echo $users->id ?>">
				<input type="text" name="username" placeholder="Masukan Username" class="form-control" value="<?php echo $users->username ?>">
				<?php echo form_error('username','<div class="text-danger small ml-3 mt-2">'); ?>
			</div>
			<div class="form-group">
				<label>Password</label>
				<input type="text" name="password" placeholder="Masukan Password" class="form-control" value="<?php echo $users->password ?>">
				<?php echo form_error('nama_jurusan','<div class="text-danger small ml-3 mt-2">'); ?>
			</div>
			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" placeholder="Masukan email" class="form-control" value="<?php echo $users->email ?>">
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
						  <option value="N" selected="">Tidak</option>
						  
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
<?php endforeach ?>
</div>