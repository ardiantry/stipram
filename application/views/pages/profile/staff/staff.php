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
        <div class="col-12">
          <div class="slide_1 owl-carousel owl-theme">
            <div class="item">
              <div class="portfolio_sec">
                <img src="<?= base_url('assets/images/staff/struktur pengelola pascasarjana.jpg') ?>" class="img-fluid " alt="">
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