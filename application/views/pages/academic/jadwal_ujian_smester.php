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

  <!-- Single-portfolio -->
  <section class="single-portfolio cmn_bg">
    <ul class="plus_decore">
      <li></li>
      <li></li>
    </ul>
    <div class="container">
      <div class="row">
        <div class="single-product">
          <div class="container">
            <div class="row">
              <div class="col-md-8">
                <h4>Tata Tertib Perkuliahan Dalam kegiatan perkuliahan mahasiswa wajib mentaati tata tertib berikut:</h4>
                <p>1. Diwajibkan hadir sekurang-kurangnya 10 menit sebelum jam perkuliahan dimulai. </p>
                <p>2. Tidak menimbulkan gangguan selama kuliah berlangsung</p>
                <p>3. Selama perkuliahan berlangsung tidak diperkenankan meninggalkan ruang kuliah, kecuali seijin dosen.</p>
                <p>4. Wajib menjaga dan memelihara sarana prasarana perkuliahan</p>
                <div class="portfolio-social">
                  <div class="view">
                    <a class="view-site" href="https://drive.google.com/file/d/0B2LcXWf3GBTuR0o0U3FZX3RxQ2s/view">View Site <i class="fa fa-angle-double-right" aria-hidden="true"></i></a>
                  </div>
                </div>
              </div>

            </div>
          </div>
        </div>
        <div class="col-12">
          <div class="slide_1 owl-carousel owl-theme">
            <div class="item">
              <div class="portfolio_sec">
                <img src="<?= base_url('assets/images/akademik/jadwal_perkuliahan_1.jpg') ?>" class="img-fluid " alt="">
              </div>
            </div>
            <div class="item">
              <div class="portfolio_sec">
                <img src="<?= base_url('assets/images/akademik/jadwal_perkuliahan_2.jpg') ?>" class="img-fluid " alt="">
              </div>
            </div>
            <div class="item">
              <div class="portfolio_sec">
                <img src="<?= base_url('assets/images/akademik/jadwal_perkuliahan_3.jpg') ?>" class="img-fluid " alt="">
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section>
  <!-- End-Single-portfolio -->


  <!-- </section> -->
  <?php $this->load->view('pages/_partials/_footer') ?>
  <?php $this->load->view('pages/_partials/_js') ?>

</body>

</html>