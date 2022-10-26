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
                <h3 class="blog-head">Fisi & Misi PPS STIPRAM</h3>
              </a>
              <div class="blog-divider"></div>
              <div class="blog-description">
                Visi:
                <p>"Menjadikan Program Studi Pariwisata untuk (Magister Pariiwsata) yang unggul dalam menghasilkan ahli Pariwisata yang cerdas, mandiri, dan mampu bersaing di kawasan Asia Tenggara di tahun 2025"</p>

                Misi:
                <p>Berkomitmen penuh dalam pengembangan Pariwisata secara global dan merata pada seluruh lapisan masyarakat.
                  Mengembangkan sikap dan pemikiran kreatif secara profesional.
                  Mengupayakan penemuan-penemuan baru bidang pariwisata dan menyebarluaskan sebagai ilmu pariwisata berbsais masyarakat kreatif.
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