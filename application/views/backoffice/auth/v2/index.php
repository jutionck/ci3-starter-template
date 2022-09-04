<div class="limiter">
  <div class="container-login100">
    <div class="wrap-login100">
      <form class="login100-form validate-form" method="POST" action="<?= base_url('backoffice/authentication/login') ?>">
        <span class="login100-form-title p-b-43">
          Masuk ke akun anda
        </span>
        <?php if ($this->session->flashdata('errorusername')) : ?>
          <div class="alert alert-warning alert-dismissible fade show mt-3" role="alert">
            <i class="bi bi-exclamation-triangle me-1"></i>
            <?= $this->session->flashdata('errorusername'); ?>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
          </div>
        <?php endif ?>
        <div class="wrap-input100 validate-input" data-validate="Username wajib diisi">
          <input class="input100" type="text" name="username">
          <span class="focus-input100"></span>
          <span class="label-input100">Username</span>
        </div>
        <div class="wrap-input100 validate-input" data-validate="Password wajib diisi">
          <input class="input100" type="password" name="password">
          <span class="focus-input100"></span>
          <span class="label-input100">Password</span>
        </div>

        <div class="container-login100-form-btn">
          <button class="login100-form-btn" type="submit">
            Login
          </button>
        </div>
        <div class="text-center p-t-46 p-b-20">
          <span class="txt2">
            <strong><span>Backoffice Website Beasiswa KPwBI Provinsi Lampung</span></strong> &copy; <?= date('Y') ?>. All Rights Reserved
          </span>
        </div>
      </form>
      <div class="login100-more" style="background-image: url('assets/backoffice/auth/images/bi_bg.jpeg');">
      </div>
    </div>
  </div>
</div>