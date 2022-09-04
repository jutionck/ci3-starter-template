<?php
$ip = $this->input->ip_address();
if ($this->agent->is_browser()) {
  $browser = $this->agent->browser() . ' ' . $this->agent->version();
} elseif ($this->agent->is_mobile()) {
  $browser = $this->agent->mobile();
} else {
  $browser = 'Data user gagal di dapatkan';
}
$os      = $this->agent->platform();
if (!isset($_COOKIE['VISITOR'])) {
  $duration = time() + 60 * 60 * 24;
  setcookie('VISITOR', $browser, $duration);
  $data = [
    'ip' => $ip,
    'os' => $os,
    'browser' => $browser,
    'date_created' => time()
  ];

  $this->db->insert('tr_visitors',  $data);
}
?>
<section id="hero" class="hero d-flex align-items-center">
  <div class="container">
    <div class="row">
      <div class="col-lg-6 d-flex flex-column justify-content-center">
        <h1 data-aos="fade-up"><?= $about->title ?></h1>
        <h2 data-aos="fade-up" data-aos-delay="400"><?= $about->sub_title ?></h2>
        <div data-aos="fade-up" data-aos-delay="600">
          <div class="text-center text-lg-start">
            <a href="#about" class="btn-get-started scrollto d-inline-flex align-items-center justify-content-center align-self-center">
              <span>Selengkapnya</span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <div class="col-lg-6 hero-img" data-aos="zoom-out" data-aos-delay="200">
        <img src="<?= base_url('assets/official') ?>/img/<?= $about->title_logo ?>" class="img-fluid" alt="<?= $about->title_logo ?>">
      </div>
    </div>
  </div>
</section>

<main id="main">
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="row gx-0">
        <div class="col-lg-6 d-flex flex-column justify-content-center" data-aos="fade-up" data-aos-delay="200">
          <div class="content">
            <h3>Tentang</h3>
            <h2><?= $about->title ?></h2>
            <p>
              <?= $about->description ?>
            </p>
          </div>
        </div>
        <div class="col-lg-6 d-flex align-items-center" data-aos="zoom-out" data-aos-delay="200">
          <img src="<?= base_url('assets/official') ?>/img/<?= $about->desc_image ?>" class="img-fluid" alt="<?= $about->desc_image ?>">
        </div>
      </div>
    </div>
  </section>

  <section id="values" class="values">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h2>Manfaat</h2>
        <p>Penerima <?= $about->title ?></p>
      </header>
      <div class="row">
        <?php foreach ($benefits as $benefit) : ?>
          <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="box">
              <img src="<?= base_url('assets/official') ?>/img/<?= $benefit->benefit_logo ?>" class="img-fluid" alt="<?= $benefit->benefit_logo ?>">
              <h3><?= $benefit->title ?></h3>
            </div>
          </div>
        <?php endforeach ?>
      </div>
    </div>
  </section>

  <section id="flow" class="features">
    <header class="section-header">
      <h2>Alur</h2>
      <p>Pendaftaran <?= $about->title ?></p>
    </header>
    <div class="container" data-aos="fade-up">
      <div class="row feature-icons g-0" data-aos="fade-up">

        <div class="col-xl-4 text-center" data-aos="fade-right" data-aos-delay="100">
          <img src="<?= base_url('assets/official') ?>/img/features-3.png" class="img-fluid p-4" alt="Alur Pendaftaran">
        </div>
        <div class="col-xl-8 d-flex content">
          <div class="row align-self-center gy-4">
            <?php foreach ($scholarship_stages as $row) : ?>
              <div class="col-md-6 icon-box" data-aos="fade-up">
                <i class="<?= $row->stage_icon ?>"></i>
                <div>
                  <h4><?= $row->title ?></h4>
                  <p><?= $row->description ?></p>
                </div>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="faq" class="faq">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h2>F.A.Q</h2>
        <p>Frequently Asked Questions</p>
      </header>
      <div class="row">
        <div class="col-lg-6">
          <div class="accordion accordion-flush" id="faqlist1">
            <?php
            $btnNo = 1;
            $targetNo = 1;
            foreach ($faqs_left as $row) : ?>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq-content-<?= $btnNo++ ?>">
                    <?= $row->title ?>
                  </button>
                </h2>
                <div id="faq-content-<?= $targetNo++ ?>" class="accordion-collapse collapse" data-bs-parent="#faqlist1">
                  <div class="accordion-body">
                    <?= $row->description ?>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="accordion accordion-flush" id="faqlist2">
            <?php
            $btnNo = 1;
            $targetNo = 1;
            foreach ($faqs_right as $row) : ?>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2-content-<?= $btnNo++ ?>">
                    <?= $row->title ?>
                  </button>
                </h2>
                <div id="faq2-content-<?= $targetNo++ ?>" class="accordion-collapse collapse" data-bs-parent="#faqlist2">
                  <div class="accordion-body">
                    <?= $row->description ?>
                  </div>
                </div>
              </div>
            <?php endforeach ?>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section id="university" class="clients">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h2>Universitas</h2>
        <p>Kerjasama <?= $about->title ?></p>
      </header>
      <div class="clients-slider swiper">
        <div class="swiper-wrapper align-items-center">
          <?php foreach ($university as $row) : ?>
            <div class="swiper-slide"><img src="<?= base_url('assets/official') ?>/img/university/<?= $row->university_logo ?>" class="img-fluid" alt="<?= $row->university_logo ?>"></div>
          <?php endforeach ?>
        </div>
        <div class="swiper-pagination"></div>
      </div>
    </div>
  </section>

  <section id="recent-blog-posts" class="recent-blog-posts">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <h2>Artikel</h2>
        <p>Artikel Terbaru Kami</p>
      </header>

      <div class="row">

        <?php
        if ($articles->num_rows() > 0) :
          foreach ($articles->result() as $row) : ?>
            <div class="col-lg-4">
              <div class="post-box">
                <div class="post-img">
                  <img src="<?= base_url('assets/official/img/blog/' . $row->image) ?>" class="img-fluid" alt="">
                </div>
                <span class="post-date"><?= indonesianDate($row->created_at, 'dddd, D MMMM Y, HH:mm') ?></span>
                <h3 class="post-title">
                  <?= strtoupper($row->title) ?>
                </h3>
                <a href="<?= base_url('artikel/baca/' . $row->slug) ?>" class="readmore stretched-link mt-auto"><span>Selengkapnya</span><i class="bi bi-arrow-right"></i></a>
              </div>
            </div>
          <?php endforeach;
        else : ?>
          <div class="text-center">
            <h5>Artikel Belum Ada</h5>
          </div>
        <?php endif ?>
      </div>
    </div>
  </section><!-- End Recent Blog Posts Section -->


  <section id="contact" class="contact">
    <div class="container" data-aos="fade-up">
      <header class="section-header">
        <h2>Kontak</h2>
        <p>Hubungi Kami</p>
      </header>
      <div class="row gy-4">
        <div class="col-lg-6">
          <div class="row gy-4">
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-geo-alt"></i>
                <h3>Alamat</h3>
                <p><?= $contact->address ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-telephone"></i>
                <h3>No Telepon</h3>
                <p><?= $contact->telp ?></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-envelope"></i>
                <h3>Email</h3>
                <p><?= $contact->email ?><br><?= $contact->other_email ?> </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box">
                <i class="bi bi-clock"></i>
                <h3>Jam Operasional</h3>
                <p><?= $contact->open_hours ?></p>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6">
          <div id="map-container-google-1" class="z-depth-1-half map-container" style="height: 500px">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3971.8254167335454!2d105.26521731476545!3d-5.443460096052213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40dbd35bf38c9b%3A0xf1909b2cb15bd4fb!2sBank%20Indonesia!5e0!3m2!1sen!2sid!4v1644458054103!5m2!1sen!2sid" frameborder="0" style="border:0" allowfullscreen></iframe>
          </div>
        </div>
      </div>
    </div>
  </section>

</main>