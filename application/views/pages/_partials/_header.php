<header class="header">
  <!-- Top-Section -->
  <div class="top-contact" style="background-color: #234d4c">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="top-content">
            <ul>
              <li><i class="fa fa-phone" aria-hidden="true"></i>(0274) 485 650</li>
              <li><i class="fa fa-envelope-o" aria-hidden="true"></i>pascasarjana@stripram.ac.id</li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="top-social">
            <ul>
              <li><a href=""><i class="fa fa-facebook"></i></a></li>
              <li><a href=""><i class="fa fa-google-plus"></i></a></li>
              <li><a href=""><i class="fa fa-twitter"></i></a></li>
              <li><a href=""><i class="fa fa-instagram"></i></a></li>
              <!-- <li><a href=""><i class="fa fa-rss"></i></a></li> -->
              <li class="my-account"><a href=""></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!--End-Top-Section-->
  <!-- Nav Start -->
  <!-- <nav class="navbar nav_3 navbar-expand-lg navbar-light theme-nav bg-white" id="navbar"> -->
  <nav class="navbar education navbar-expand-lg navbar-light theme-nav bg-white" id="navbar">
    <!-- <nav class="navbar nav_2 navbar-expand-lg navbar-light construct" id="navbar"> -->
    <div class="container">
      <a class="navbar-brand" href="education.html"><img src="<?= base_url('assets') ?>/images/education/logo.png" alt="logo"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fa fa-bars" aria-hidden="true"></i>
      </button>
      <div class="collapse navbar-collapse default-nav" id="navbarSupportedContent">
        <ul class="navbar-nav ml-auto" id="mymenu">
          <li class="nav-item">
            <a class="nav-link" href="<?= site_url('home')  ?>">Beranda</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Akademik</a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link" href="<?= site_url('akademik/jadwal_perkuliahan') ?>">Jadwal Perkuliahan</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= site_url('akademik/jadwal_ujian_semester') ?>">Jadwal Ujian Semester</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= site_url('akademik/jadwal_seminar_tesis') ?>">Jadwal Seminar Tesis</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= site_url('akademik/rps') ?>">RPS</a></li>
              <li class="nav-item"><a class="nav-link" href="https://ejournal.stipram.ac.id/">Ejurnal STIPRAM</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Tentang PPS</a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link" href="<?= site_url('profile/visi_misi')  ?>">Visi & Misi</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= site_url('profile/about')  ?>">Tentang PPS STIPRAM</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= site_url('profile/akreditasi') ?>">Akreditasi</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= site_url('profile/staff') ?>">Staf</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= site_url('profile/dosen_kepakaran') ?>">Data Dosen & Kepakaran</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= site_url('profile/unit_support')  ?>">Sarana & Prasarana</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= site_url('profile/prestasi_mahasiswa')  ?>">Prestasi Mahasiswa</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= site_url('profile/article')  ?>">Artikel</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Program Studi</a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link" href="<?= site_url('programs/program_master')  ?>">Program Magister</a></li>
              <li class="nav-item"><a class="nav-link" href="<?= site_url('programs/program_doktor')  ?>">Program Doktor</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="education.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mahasiswa</a>
            <ul class="dropdown-menu" style="min-width: 300px;">
              <li class="nav-item"><a class="nav-link" href="#">Pengajuan Topik Tesis</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Pengajuan Topik Disertasi</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Usulan Dosen Pembimbing Tesis</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Usulan Dosen Pembimbing Disertasi</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Form Evaluasi Perkuliahan</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Layanan Aduan</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="education.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pendaftaran</a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link" href="#">Biaya Kuliah</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Pendaftaran Seminar</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Pendaftaran</a></li>
            </ul>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="education.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Informasi</a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link" href="#">Informasi Publik STIPRAM</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Berita</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Agenda</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Pengumuman</a></li>
            </ul>
          </li>
          <!-- <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="education.html" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Galeri</a>
            <ul class="dropdown-menu">
              <li class="nav-item"><a class="nav-link" href="#">Dokumentasi</a></li>
              <li class="nav-item"><a class="nav-link" href="#">Video</a></li>
            </ul>
          </li> -->
        </ul>
      </div>
    </div>
  </nav>
</header>