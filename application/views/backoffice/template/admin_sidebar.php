<aside id="sidebar" class="sidebar">
  <ul class="sidebar-nav" id="sidebar-nav">
    <li class="nav-item">
      <a class="nav-link <?= ($this->uri->segment(3)  === 'dashbaord' ? '' : 'collapsed') ?>" href="<?= base_url('backoffice/admin/dashboard') ?>" class="<?= ($this->uri->segment(3)  === 'dashbaord' ? 'active' : '') ?>">
        <i class="bi bi-grid"></i>
        <span>Dashboard</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
        <i class="bi bi-menu-button-wide"></i><span>Master</span><i class="bi bi-chevron-down ms-auto"></i>
      </a>
      <ul id="components-nav" class="nav-content collapse <?= ($this->uri->segment(4)  === 'tentang' || $this->uri->segment(4)  === 'benefit' || $this->uri->segment(4)  === 'alur'  || $this->uri->segment(4)  === 'faqs' || $this->uri->segment(4)  === 'perguruan_tinggi' || $this->uri->segment(4)  === 'contacts' || $this->uri->segment(4)  === 'user' || $this->uri->segment(4)  === 'kegiatan' ? 'show' : '') ?>" data-bs-parent="#sidebar-nav">
        <li>
          <a href="<?= base_url('backoffice/admin/master/tentang') ?>" class="<?= ($this->uri->segment(4)  === 'tentang' ? 'active' : '') ?>">
            <i class="bi bi-circle"></i><span>Tentang</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('backoffice/admin/master/benefit') ?>" class="<?= ($this->uri->segment(4)  === 'benefit' ? 'active' : '') ?>">
            <i class="bi bi-circle"></i><span>Benefit</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('backoffice/admin/master/alur') ?>" class="<?= ($this->uri->segment(4)  === 'alur' ? 'active' : '') ?>">
            <i class="bi bi-circle"></i><span>Alur</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('backoffice/admin/master/faqs') ?>" class="<?= ($this->uri->segment(4)  === 'faqs' ? 'active' : '') ?>">
            <i class="bi bi-circle"></i><span>FAQs</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('backoffice/admin/master/perguruan_tinggi') ?>" class="<?= ($this->uri->segment(4)  === 'perguruan_tinggi' ? 'active' : '') ?>">
            <i class="bi bi-circle"></i><span>Perguruan Tinggi</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('backoffice/admin/master/contacts') ?>" class="<?= ($this->uri->segment(4)  === 'contacts' ? 'active' : '') ?>">
            <i class="bi bi-circle"></i><span>Contact</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('backoffice/admin/master/user') ?>" class="<?= ($this->uri->segment(4)  === 'user' ? 'active' : '') ?>">
            <i class="bi bi-circle"></i><span>User</span>
          </a>
        </li>
        <li>
          <a href="<?= base_url('backoffice/admin/master/kegiatan') ?>" class="<?= ($this->uri->segment(4)  === 'kegiatan' ? 'active' : '') ?>">
            <i class="bi bi-circle"></i><span>Kegiatan</span>
          </a>
        </li>
      </ul>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($this->uri->segment(2)  === 'periode_pendaftaran' ? '' : 'collapsed') ?>" href="<?= base_url('backoffice/periode_pendaftaran') ?>">
        <i class="bi bi-calendar-check"></i>
        <span>Periode Pendaftaran</span>
      </a>
    </li>
    <li class="nav-heading">Pages</li>
    <li class="nav-item">
      <a class="nav-link <?= ($this->uri->segment(2)  === 'artikel' ? '' : 'collapsed') ?>" href="<?= base_url('backoffice/admin/artikel') ?>" class="<?= ($this->uri->segment(2)  === 'artikel' ? 'active' : '') ?>">
        <i class="bi bi-newspaper"></i>
        <span>Artikel</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($this->uri->segment(3)  === 'pendaftar_beasiswa' ? '' : 'collapsed') ?>" href="<?= base_url('backoffice/admin/pendaftar_beasiswa') ?>" class="<?= ($this->uri->segment(3)  === 'pendaftar_beasiswa' ? 'active' : '') ?>">
        <i class="bi bi-person"></i>
        <span>Pendaftar Beasiswa</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($this->uri->segment(3)  === 'wawancara' ? '' : 'collapsed') ?>" href="<?= base_url('backoffice/admin/wawancara') ?>" class="<?= ($this->uri->segment(3)  === 'wawancara' ? 'active' : '') ?>">
        <i class="bi bi-question-circle"></i>
        <span>Wawancara Peserta</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($this->uri->segment(3)  === 'hasil_wawancara' ? '' : 'collapsed') ?>" href="<?= base_url('backoffice/admin/hasil_wawancara') ?>" class="<?= ($this->uri->segment(3)  === 'hasil_wawancara' ? 'active' : '') ?>">
        <i class="bi bi-award"></i>
        <span>Hasil Akhir</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($this->uri->segment(3)  === 'kegiatan_mahasiswa' ? '' : 'collapsed') ?>" href="<?= base_url('backoffice/admin/kegiatan_mahasiswa') ?>" class="<?= ($this->uri->segment(3)  === 'kegiatan_mahasiswa' ? 'active' : '') ?>">
        <i class="bi bi-grid-3x3-gap"></i>
        <span>Kegiatan Mahasiswa</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link <?= ($this->uri->segment(3)  === 'berkas' ? '' : 'collapsed') ?>" href="<?= base_url('backoffice/admin/berkas') ?>" class="<?= ($this->uri->segment(3)  === 'berkas' ? 'active' : '') ?>">
        <i class="bi bi-file-bar-graph"></i>
        <span>Berkas Final</span>
      </a>
    </li>
    <li class="nav-heading">Email</li>
    <li class="nav-item">
      <a class="nav-link <?= ($this->uri->segment(2)  === 'kirim_email' ? '' : 'collapsed') ?>" href="<?= base_url('backoffice/kirim_email') ?>" class="<?= ($this->uri->segment(2)  === 'kirim_email' ? 'active' : '') ?>">
        <i class="ri ri-mail-line"></i>
        <span>Kirim Email</span>
      </a>
    </li>
  </ul>
</aside>

<main id="main" class="main">