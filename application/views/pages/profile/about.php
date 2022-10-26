<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('pages/_partials/_head') ?>

<body>

  <?php $this->load->view('pages/_partials/_taptop') ?>
  <?php $this->load->view('pages/_partials/_header') ?>
  <!-- Breadcrumb Start -->
  <div class="bread_crumb">
    <div class="container">
      <div class="row">
        <div class="col-md-6 sec_low">
          <div class="functionalities">
            <ul id="breadcrumb" class="breadcrumb">
              <li><a title="Home" href="contraction.html"><i class="fa fa-home" aria-hidden="true"></i></a></li>
              <li><strong><i class="fa fa-angle-double-right" aria-hidden="true"></i> <?= $breadcrumb ?></strong></li>
            </ul>
          </div>
        </div>
        <div class="col-md-6">
          <div class="page-title">
            <h2><?= $breadcrumb ?></h2>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Breadcrumb Start -->
  <!-- blog Section starts-->
  <section class="cmn_bg blog_page">
    <ul class="plus_decore">
      <li></li>
      <li></li>
    </ul>
    <div class="container blog-shadow">
      <div class="row">
        <!-- blog details starts-->
        <div class="col-sm-12">
          <div class="single_blog_item">
            <div class="blog-text">
              <a href="#">
                <h3 class="blog-head">Tentang PPS STIPRAM</h3>
              </a>
              <div class="blog-divider"></div>
              <div class="blog-description">
                <p>Jenjang Strata Dua (S2) merupakan program lanjutan dari S1 Pariwisata khususnya dalam bidang keilmuan.
                  Program Magister ini hadir di STIPRAM dengan tujuan untuk menyiapkan tenaga-tenaga profesional serta intelektual muda dalam bidang Pariwisata termasuk bidang MICE.
                  Program ini ditempuh dalam 4 semester bergelar M.Par.
                  Nuansa berbeda akan dirasakan pada program S-2 Pariwisata di STIPRAM Yogyakarta.
                </p>
                <p>Program S-2 Pariwisata ini akan memperjelas bagaimana sebenarnya pengembangan pariwisata nasional itu dikelola.
                  Dinamika dan estetika keilmuan yang terpogram sangat diperhitungan.
                  Pemahaman pariwisata seutuhnya dilengkapi dengan fokus kajian Hospitality akan memperjelas arah langkah mengendalikan Industri Pariwisata dengan logika dan berbudaya.
                </p>

                <h5>Program S-2 Pariwisata</h5>
                <p>Sistem Perkuliahan <br>
                  1. Perkuliahan S2 Pariwisata ditempuh sejumlah tatap muka 44 SKS (Sistem Kredit Semester). <br>
                  2. Dietmpuh selama 4 semster (2 tahun). <br>
                  3. Konsentrasi Fokus pada Hospitality & MICE.
                </p>
                <p>Prospek Kerja
                  <br>Dosen, Tenaga Ahli profesional bidang Pariwisata, Peneliti, Entrepreneur/intelektual Muda bidang Pariwisata.
                </p>
                <p>Gelar Lulusan
                  <br> Lulusan S2 Pariwisata mendapatkan gelar M. Par (Magister Pariwisata).
                </p>
              </div>
            </div>
          </div>
        </div>
        <!-- blog details end-->
      </div>
    </div>
  </section>
  <!-- blog Section End-->
  <?php $this->load->view('pages/_partials/_footer') ?>
  <?php $this->load->view('pages/_partials/_js') ?>

</body>

</html>