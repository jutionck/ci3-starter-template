<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= $title ?></title>
  <meta name="language" content="id">
  <meta name="geo.country" content="id">
  <meta name="geo.placename" content="Indonesia">
  <meta name="title" content=<?= $title ?> />
  <meta content="Beasiswa Bank Indonesia merupakan wujud Dedikasi Bank Indonesia dalam peningkatan kapasita sumber daya manusia di Indonesia. Tidak terbatas dalam pembiayaan untuk mendukung biaya pendidikan, tunjangan studi, maupun biaya hidup, para siswa/mahasiswa juga difasilitasi untuk terus bekembang bersama Komunita Generasi Baru Indonesia (GenBI)" name="description">
  <meta content="beasiswa bank indonesia, genbi, generasi bank indonesia, beasiswa, beasiswa kpwbi provinsi lampung, beasiswa bank indonesia, bank indonesia, dedikasi bank indonesia untuk genbi, indoenesia, kpwbi lampung, mahasiswa, universitas" name="keywords">
  <meta name="author" content="beasiswalampung.com" />
  <meta name="author" content="Jution Candra Kirana | mipdevp" />
  <link rel="canonical" href="https://beasiswabilampung.com" />
  <meta property="og:site_name" content="beasiswabilampung">
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= $title ?>">
  <meta property="og:url" content="https://beasiswabilampung.com/">
  <meta property="og:description" content="Beasiswa Bank Indonesia merupakan wujud Dedikasi Bank Indonesia dalam peningkatan kapasita sumber daya manusia di Indonesia. Tidak terbatas dalam pembiayaan untuk mendukung biaya pendidikan, tunjangan studi, maupun biaya hidup, para siswa/mahasiswa juga difasilitasi untuk terus bekembang bersama Komunita Generasi Baru Indonesia (GenBI)">
  <link href="<?= base_url('assets/official') ?>/img/favicon_bi.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <link href="<?= base_url('assets/official') ?>/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url('assets/official') ?>/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/official') ?>/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url('assets/official') ?>/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/official') ?>/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url('assets/official') ?>/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/official') ?>/css/style.css" rel="stylesheet">
</head>

<body>

  <header id="header" class="header fixed-top">
    <div class="container-fluid container-xl d-flex align-items-center justify-content-between">

      <a href="<?= base_url() ?>" class="logo d-flex align-items-center">
        <img src="<?= base_url('assets/official') ?>/img/<?= $about->header_logo ?>" alt="Logo Bank Indonesia" class="img-fluid">
        <img src="<?= base_url('assets/official') ?>/img/<?= $about->header_logo2 ?>" class="img-fluid" alt="Sigerians Logo">
        <img src="<?= base_url('assets/official') ?>/img/<?= $about->header_logo3 ?>" class="img-fluid" alt="Genbi Logo">
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto <?= ($this->uri->segment(2)  === '' ? 'active' : '') ?>" href="#hero">Beranda</a></li>
          <li><a class="nav-link scrollto" href="#about">Tentang</a></li>
          <li><a class="nav-link scrollto" href="#values">Manfaat</a></li>
          <li><a class="nav-link scrollto" href="#flow">Alur</a></li>
          <li><a class="nav-link scrollto" href="#faq">FAQs</a></li>
          <li><a class="nav-link scrollto" href="#university">Universitas</a></li>
          <li><a class="nav-link <?= ($this->uri->segment(1)  === 'artikel' ? 'active' : '') ?>" href="<?= base_url('artikel') ?>">Artikel</a></li>
          <li><a class="nav-link scrollto" href="#contact">Kontak</a></li>
          <li class="dropdown"><a href="#"><span>Unduh</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="<?= base_url('assets/official/berkas/Form_A1_Beasiswa_Bank_Indonesia.pdf') ?>" download="">Form A.1</a></li>
            </ul>
          </li>
          <li><a class="getstarted scrollto" href="<?= base_url('backoffice') ?>" target="_blank">Login</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
    </div>
  </header>