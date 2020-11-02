<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-file mr-2"></i></li>
      <li class="breadcrumb-item"><a href="#">Info Sekolah</a></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/hubungi_kami') ?>">Pesan User</a></li>
      <li class="breadcrumb-item active" aria-current="page">Balas Pesan User</li>
    </ol>
  </nav>

  <div class="card mb-3">
	<div class="card-header bg-primary text-white ">
		<h4><i class="fa fa-comment-dots"></i> Balas Pesan User</h4>
	</div>
	<div class="card-body">
	  <?php foreach ($hubungi as $hub): ?>
	  
		<form method="post" action="<?php echo base_url('admin/hubungi_kami/kirim_email_aksi') ?>">
			<div class="form-group">
				<label>Email</label>
				<input type="hidden" name="id_hubungi" value="<?php echo $hub->id_hubungi ?>">	
				<input type="text" name="email" value="<?php echo $hub->email ?>" class="form-control" readonly="">
			</div>
			<div class="form-group">
				<label>Subject</label>
				<input type="text" name="subject" class="form-control">
			</div>
			<div class="form-group">
				<label>Pesan</label>
				<textarea name="pesan" class="form-control" rows="5" type="text"></textarea>
			</div>
			<button class="btn  btn-primary" type="submit">Kirim</button>
		</form>

	  <?php endforeach ?>

		</div>
	</div>

</div>