  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
            <div class="card-header"><h4 style="display: flex; align-items: center; justify-content: center;">Create Your Account</h4></div>

              <div class="card-body">
              <form action="<?php echo base_url().'register'; ?>" method="post">
                        <div class="mb-3">
                            <label for="name" class="form-label">Name</label>
                            <input type="name" class="form-control" id="email" name="name" value="<?= set_value('name') ?>">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('name') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="email" class="form-control" id="email" name="email" value="<?= set_value('email') ?>">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('email') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="phonenumber" class="form-label">Phone Number</label>
                            <input type="phonenumber" class="form-control" id="phonenumber" name="phonenumber" value="<?= set_value('phonenumber') ?>">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('phonenumber') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="mb-3">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password">
                            <?php if(isset($validation)):?>
                                <small class="text-danger"><?= $validation->getError('password') ?></small>
                            <?php endif;?>
                        </div>
                        <div class="d-grid gap-2">
                            <button type="submit" class="btn btn-primary btn-block">Register Now</button>
                            <p class="text-center">Have already an account <a href="<?php echo base_url('/login'); ?>">Login here</a><p>
                        </div>
                    </form>
                <!-- <form method="POST" action="#" class="needs-validation" novalidate="">

                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input id="nama" type="nama" class="form-control" name="nama" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your nama
                    </div>
                  </div>

                  <div class="form-group mt-4">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>

                  <div class="form-group mt-4">
                    <label for="tel">phone number</label>
                    <input id="tel" type="phonenumber" class="form-control" name="phonenumber" tabindex="1" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your phone number
                    </div>
                  </div>

                  <div class="form-group mt-4">
                    <div class="d-block">
                    	<label for="password" class="control-label">Password</label>
                    
                    </div>
                    <input id="password" type="password" class="form-control" name="password" tabindex="2" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div> -->

                  <!-- <div class="form-group mt-2">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me">
                      <label class="custom-control-label" for="remember-me">Remember Me</label>
                    </div>
                  </div> -->

                  <!-- <div class="form-group mt-3">
                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                      Register
                    </button>
                  </div>
                </form> -->
                
                <!-- <div class="text-center mt-4 mb-3">
                  <div class="text-job text-muted">Login With Social</div>
                  </div>
                  <div class="row sm-gutters">
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-facebook">
                      <span class="fab fa-facebook"></span> Facebook
                    </a>
                  </div>
                  <div class="col-6">
                    <a class="btn btn-block btn-social btn-twitter">
                      <span class="fab fa-twitter"></span> Twitter
                    </a>
                  </div>
                </div> -->

              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="container-xxl py-5 mt-4"></div>
  <div class="container-xxl py-5 mb-4"></div>