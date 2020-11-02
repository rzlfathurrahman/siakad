<?php foreach ($identitas as $id): ?>

  <nav class="navbar navbar-expand-lg navbar-dark bg-success" id="page-top">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand" href="#"><?php echo $id->judul_website ?></a>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#informasi">Informasi</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">About Us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Fasilitas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Gallery</a>
        </li>
        <li class="nav-item">
          <a  class="nav-link" href="#">Contact</a>
        </li>
      </ul>
      <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
        <li class="nav-item ">
            <a class="nav-link text-light" href="#"><i class="fas fa-envelope"></i> <?php echo $id->email ?> <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light" href="#"><i class="fa fa-school"></i> <?php echo $id->alamat ?></a>
        </li>
        <li class="nav-item">
          <?php echo anchor('admin/auth', ' <div  target="__blank" class="btn btn-outline-primary">Login</div>'); ?>
        </li>
      </ul>
    </div>
  </nav>
  
<?php endforeach; ?>
  <div id="carouselExampleIndicators" class="carousel slide " data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner carousel-fade">
      <div class="carousel-item active">
        <img src="<?php echo base_url() ?>assets/img/slider.jpg" class="d-block w-100" alt="HAHAHAHA">
         <div class="carousel-caption d-none d-md-block" style="background: rgba(0,0,0,0.3)">
          <h5>First slide label</h5>
          <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url() ?>assets/img/slider1.jpg" class="d-block w-100" alt="...">
        <div class="carousel-caption d-none d-md-block"  style="background: rgba(0,0,0,0.3)">
          <h5>Second slide label</h5>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img src="<?php echo base_url() ?>assets/img/slider2.jpg" class="d-block w-100" alt="...">
         <div class="carousel-caption d-none d-md-block"  style="background: rgba(0,0,0,0.3)">
          <h5>Third slide label</h5>
          <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  <!--###################################################-->
<div class="card m-4 text-center">
  <div class="card-header bg-gradient-primary text-light">
    <strong>TENTANG SMK MA'ARIF NU 1 AJIBARANG </strong> 
  </div>
  <div class="card-body">
    <p class="card-text">
      <?php foreach ($about as $abt): ?>
        <?php echo word_limiter($abt->sejarah,100)  ?>
      <?php endforeach ?>
    </p>
    <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
      Selengkapnya...
    </button>
  </div>
</div>
<!--###################################################################-->
<div class="text-center p-2" style="background: rgba(0,0,0,0.7);">
  <div class="w-50 ml-5 mr-5 btn btn-success text-light text-center" id="informasi">
    <strong><i class="fas fa-info mr-2"></i> Papan Informasi</strong>
  </div>

  <div class="row m-4 text-center">
   <?php foreach ($informasi as $info): ?>

    <div class="card border-left-success mx-auto m-2" style="width: 18rem;">  
      <span class="display-2  text-success"><i class="<?php echo $info->icon ?>"></i></span>
      <div class="card-body " >
        <h5 class="card-title badge badge-success"><?php echo $info->judul_informasi ?></h5>
        <p class="card-text "><?php echo word_limiter($info->isi_informasi,5) ?></p>
        <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#Modal">
          Selengkapnya...
        </button>
      </div>
    </div>

   <?php endforeach ?>
  </div>
</div>
<!--###################################################################-->
<!-- Modal Tentang Sekolah -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Tentang Kami</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-justify">
        <label><strong>SEJARAH SMK MA'AARIF NU 1 AJIBARANG</strong></label>
        <?php foreach ($about as $abt): ?>
          <?php echo $abt->sejarah  ?>
        <?php endforeach ?><br><br>

        <label><strong>VISI SMK MA'AARIF NU 1 AJIBARANG</strong></label>
        <?php foreach ($about as $abt): ?>
          <?php echo $abt->visi  ?>
        <?php endforeach ?><br><br>

        <label><strong>MISI SMK MA'AARIF NU 1 AJIBARANG</strong></label>
        <?php foreach ($about as $abt): ?>
          <?php echo $abt->misi  ?>
        <?php endforeach ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Informasi  -->
<div class="modal fade" id="Modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Informasi Sekolah</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-justify">
        <div class="table-responsive">
          <table class="table table-bordered table-hover" width="100%" cellspacing="0"  id="dataTable">
            <tr class="bg-success text-light text-center">
              <th>No</th>
              <th>Judul Informasi</th>
              <th>Isi Informasi</th>
            </tr>
            <?php $no=1; foreach ($informasi as $abt): ?>
              <tr>
                <td><?php echo $no++ ?></td>
                <td><?php echo $abt->judul_informasi ?></td>
                <td><?php echo $abt->isi_informasi ?></td>
              </tr>
            <?php endforeach ?>
          </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--###################################################################-->
<form method="post" action="<?php echo base_url('landing_page/kirim_pesan')  ?>">
    
    <div class="row m-4" id="hub">
      <div class="col-md-8">
        <div class="alert alert-primary">
          <i class="fas fa-envelope-open-text mr-2"></i> Hubungi Kami
        </div>

        <?php echo $this->session->flashdata('pesan'); ?>

        <div class="form-group">
          <label>Nama</label>
          <input type="hidden" name="id_hubungi">
          <input type="text" name="nama" class="form-control">
          <?php echo form_error('nama','<div class="text-danger small ml-3 mt-2">'); ?>
        </div>

        <div class="form-group">
          <label>Email</label>
          <input type="email" name="email" class="form-control">
          <?php echo form_error('email','<div class="text-danger ml-3 mt-2 small">','</div>') ?> 
        </div>

        <div class="form-group">
          <label>Pesan</label>
          <textarea name="pesan" class="form-control" rows="5" type="text"></textarea>
          <?php echo form_error('pesan','<div class="text-danger ml-3 mt-2 small">','</div>') ?> 
        </div>
        <button class="mb-2 btn-outline-primary btn" type="submit">Kirim</button>
        </form>
      </div>

      <div class="col-md-4">
        <div class="alert alert-success">
          <i class="fas fa-book mr-2"></i> Jurusan 
        </div>

        <?php foreach ($jurusan as $jrs): ?>
          <span class="d-inline-block" tabindex="0" data-toggle="tooltip" title="<?php echo $jrs->nama_jurusan ?>">
            <button class="btn m-1 btn-success" style="pointer-events: none;" type="button" disabled><?php echo $jrs->kode_jurusan ?></button>
          </span>
        <?php endforeach ?>

        <div class="alert alert-warning mt-4">
          <i class="fas fa-university mr-2"></i> Data  Sekolah 
        </div>

        <?php foreach ($siswa as $sw): ?>
         <button type="button" class="m-1 btn btn-warning">
            Jumlah Siswa <span class="badge badge-light ml-2"><?php echo $sw->total ?></span>
            <span class="sr-only">unread messages</span>
          </button>
        <?php endforeach ?>

        <?php foreach ($guru as $gr): ?>
         <button type="button" class="m-1 btn btn-warning">
            Jumlah guru <span class="badge badge-light ml-2"><?php echo $gr->total ?></span>
            <span class="sr-only">unread messages</span>
          </button>
        <?php endforeach ?>

        <?php foreach ($Jurusan as $jurus): ?>
         <button type="button" class="m-1 btn btn-warning">
            Jumlah Jurusan <span class="badge badge-light ml-2"><?php echo $jurus->total ?></span>
            <span class="sr-only">unread messages</span>
          </button>
        <?php endforeach ?>

        <?php foreach ($Mapel as $jurus): ?>
         <button type="button" class="m-1 btn btn-warning">
            Mapel <span class="badge badge-light ml-2"><?php echo $jurus->total ?></span>
            <span class="sr-only">unread messages</span>
          </button>
        <?php endforeach ?>

        <?php foreach ($Prodi as $jurus): ?>
         <button type="button" class="m-1 btn btn-warning">
            Prodi <span class="badge badge-light ml-2"><?php echo $jurus->total ?></span>
            <span class="sr-only">unread messages</span>
          </button>
        <?php endforeach ?>

        <?php foreach ($Karyawan as $jurus): ?>
         <button type="button" class="m-1 btn btn-warning">
            Karyawan <span class="badge badge-light ml-2"><?php echo $jurus->total ?></span>
            <span class="sr-only">unread messages</span>
          </button>
        <?php endforeach ?>

        <?php foreach ($fasilitas as $jurus): ?>
         <button type="button" class="m-1 btn btn-warning">
             <?php echo $jurus->fasilitas ?><span class="badge badge-light ml-2"><?php echo $jurus->jumlah ?></span>
            <span class="sr-only">unread messages</span>
          </button>
        <?php endforeach ?>

      </div>

    </div>

  <footer class="bg-gray-900 p-1"> 
      <nav class="navbar navbar-expand-lg navbar-light bg-faded" id="page-top">
    <a class="navbar-brand text-light" href="#"><h2>Contact</h2></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarText">
      <ul class="navbar-nav mr-auto">
      <?php foreach ($kontak as $value): ?>
        <li class="nav-item">
          <a class="nav-link text-light" href="#"><i class="<?php echo $value->icon ?>"></i> <?php echo $value->keterangan ?></a>
        </li>
      <?php endforeach ?>
        
      </ul>
      <span class="navbar-text text-light">
        <i class="fas fa-phone"></i> <?php echo $id->telp ?>
      </span>
    </div>
  </nav>  
  </footer>