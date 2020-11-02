<div class="container-fluid">

  <nav aria-label="breadcrumb" >
    <ol class="breadcrumb">
    <li><i class="fas fa-tachometer-alt mr-2"></i></li>
      <li class="breadcrumb-item"><a href="<?php echo base_url('admin/dashboard') ?>"> Dashboard</a></li>
      <li class="breadcrumb-item active" aria-current="page"></li>
    </ol>
  </nav>

  <div class="alert alert-secondary border-left-info" role="alert">
    <h4 class="alert-heading"> <i class="fas fa-smile"></i> Selamat Datang!</h4>
    <p>Selamat Datang  <strong><?php echo $username; ?></strong> , Di Sistem Informasi Akademik <strong>SMK MA'ARIF NU 1 AJIBARANG </strong>, Anda Login Sebagai  <strong><?php echo $level; ?></strong> </p>
    <hr>
     <!-- Button trigger modal -->
    <button type="button" class="btn btn-sm btn-info " data-toggle="modal" data-target="#exampleModal">
       <i class="fas fa-cogs"></i> Control Panel
    </button>
  </div>

  <hr>

  <div class="row">
    <div class="col-md-5">  
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Data Warga Sekolah</h6>
        </div>
        <div class="card-body">
          <h4 class="small font-weight-bold">MURID <span class="float-right">60%</span></h4>
          <div class="progress mb-4">
            <div class="progress-bar bg-danger" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <h4 class="small font-weight-bold">GURU <span class="float-right">30%</span></h4>
          <div class="progress mb-4">
            <div class="progress-bar bg-warning" role="progressbar" style="width: 30%" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <h4 class="small font-weight-bold">KARYAWAN <span class="float-right">10%</span></h4>
          <div class="progress mb-4">
            <div class="progress-bar" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
         <!-- <h4 class="small font-weight-bold">PSIKOLOG <span class="float-right">15%</span></h4>
          <div class="progress mb-4">
            <div class="progress-bar bg-info" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
          </div>-->
          <h4 class="small font-weight-bold">IMAM MASJID <span class="float-right">35%</span></h4>
          <div class="progress mb-4">
            <div class="progress-bar bg-info" role="progressbar" style="width: 35%" aria-valuenow="35" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
          <h4 class="small font-weight-bold">JUMLAH WARGA SEKOLAH <span class="float-right">2.500 ORANG</span></h4>
          <div class="progress">
            <div class="progress-bar bg-success" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="col-md-7" >
      <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">Kalender (November 2019)</h6>
        </div>
        <div class="card-body">
         <?php require 'mapel_update.php'; ?>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"> <i class="fas fa-cogs"></i> Control Panel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
            <div class="col-md-3 text-info text-center">
              <a href="<?php echo base_url('admin/siswa') ?>">
                <p class="nav-link small text-uppercase text-info">Siswa</p>
              </a>
              <i class="fas fa-3x fa-user-graduate "></i>
            </div>

            <div class="col-md-3 text-info text-center">
              <a href="<?php echo base_url('admin/tahun_akademik') ?>">
                <p class="nav-link small text-uppercase text-info">tahun ajaran</p>
              </a>
              <i class="fas fa-3x fa-calendar-alt"></i>
            </div>

            <div class="col-md-3 text-info text-center">
              <a href="<?php echo base_url('admin/krs') ?>">
                <p class="nav-link small text-uppercase text-info">krs</p>
              </a>
              <i class="fas fa-3x fa-edit"></i>
            </div>

            <div class="col-md-3 text-info text-center">
              <a href="<?php echo base_url('admin/nilai') ?>"><p class="nav-link small text-uppercase text-info">khs</p></a>
              <i class="fas fa-3x fa-file-alt"></i>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-3 text-info text-center">
              <a href="<?php echo base_url('admin/nilai/input_nilai') ?>"><p class="nav-link small text-uppercase text-info">input nilai</p></a>
              <i class="fas fa-3x fa-sort-numeric-down"></i>
            </div>

            <div class="col-md-3 text-info text-center">
              <a href="<?php echo base_url('admin/transkrip_nilai') ?>"><p class="nav-link small text-uppercase text-info">cetak transkrip</p></a>
              <i class="fas fa-3x fa-print"></i>
            </div>

            <div class="col-md-3 text-info text-center">
              <a href="<?php echo base_url('admin/hubungi_kami') ?>"><p class="nav-link small text-uppercase text-info">Pesan User</p></a>
              <i class="fas fa-3x fa-comment-dots"></i>
            </div>

            <div class="col-md-3 text-info text-center">
              <a href="<?php echo base_url('admin/informasi') ?>"><p class="nav-link small text-uppercase text-info">info sekolah</p></a>
              <i class="fas fa-3x fa-bullhorn"></i>
            </div>
          </div>
          <hr>
          <div class="row">
            <div class="col-md-3 text-info text-center">
              <a href="<?php echo base_url('admin/identitas') ?>"><p class="nav-link small text-uppercase text-info">identitas</p></a>
              <i class="fas fa-3x fa-id-card-alt"></i>
            </div>

            <div class="col-md-3 text-info text-center">
              <a href="<?php echo base_url('admin/about_us') ?>"><p class="nav-link small  text-uppercase text-info">tentang sekolah</p></a>
              <i class="fas fa-3x fa-info-circle"></i>
            </div>

            <div class="col-md-3 text-info text-center">
              <a href="<?php echo base_url('admin/fasilitas') ?>"><p class="nav-link small text-uppercase text-info">fasilitas</p></a>
              <i class="fas fa-3x fa-laptop"></i>
            </div>

            <div class="col-md-3 text-info text-center">
              <a href="<?php echo base_url() ?>"><p class="nav-link small text-uppercase text-info">galleri</p></a>
              <i class="fas fa-3x fa-image"></i>
            </div>
          </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</div>