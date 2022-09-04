<main>
  <div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
            <div class="d-flex justify-content-center py-4">
              <a href="index.html" class="logo d-flex align-items-center w-auto">
                <img src="assets/img/bi-b.png" alt="" class="img-fluid">
              </a>
            </div>
            <div class="card mb-3">
              <div class="card-body">
                <div class="pb-2">
                  <h5 class="card-title text-center pb-0 fs-4">Masuk</h5>
                  <p class="text-center small">Silahkan masuk dengan akun anda</p>
                </div>
                <form class="row g-3 needs-validation" novalidate id="demo-form" method="POST" action="<?= base_url('backoffice/authentication/login') ?>">
                  <div class="col-12">
                    <label for="yourUsername" class="form-label">Username</label>
                    <div class="input-group has-validation">
                      <input type="text" name="username" class="form-control" id="yourUsername" required>
                      <div class="invalid-feedback">
                        Please enter your username.

                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="yourPassword" class="form-label">Password</label>
                    <input type="password" name="password" class="form-control" id="yourPassword" required>
                    <div class="invalid-feedback">
                      Please enter your password!
                      <?= $this->session->flashdata('errorpassword'); ?>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary w-100 g-recaptcha" type="submit" id="myWish">Login</button>
                  </div>
                </form>
              </div>
            </div>
            <div class="credits">
              Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
          </div>
        </div>
      </div>
      <?php if ($this->session->flashdata('errorusername')) : ?>
        <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
          <i class="bi bi-exclamation-triangle me-1"></i>
          <?= $this->session->flashdata('errorusername'); ?>
          <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
      <?php endif ?>
    </section>

  </div>
</main>