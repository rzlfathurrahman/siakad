<body class="bg-gradient-primary">

  <div class="container"><br><br><br>

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-5 col-lg-6 col-md-5">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-12">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4"><i class="fas fa-user"></i> Login Admin</h1>
                    <?php echo $this->session->flashdata('pesan'); ?>
                  </div>
                  <form class="user" method="post" action="<?php echo base_url('admin/auth/proses_login') ?>">
                    <div class="form-group">
                      <input type="text" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username Anda" name="username">
                      <?php echo form_error('username',' <div class="text-danger  small ml-3 mt-2">',' </div>'); ?>
                    </div>
                    <div class="form-group">
                      <input type="password"  class="form-control form-control-user" class="login_password" placeholder="Password Anda" name="password">
                      <?php echo form_error('password',' <div class="text-danger text-bold small ml-3 mt-2">',' </div>'); ?>
                    </div>
                  <hr>
                    <button class="btn btn-primary btn-user btn-block" type="submit">Login</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>

