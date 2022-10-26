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

  <!--section start-->
  <section class="cart-section section-b-space cmn_bg_yellow">
    <ul class="plus_decore">
      <li></li>
      <li></li>
    </ul>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <table class="table cart-table table-responsive-sm">
            <thead>
              <tr class="table-head">
                <th scope="col">No</th>
                <th scope="col">Photo</th>
                <th scope="col">Nama Dosen</th>
                <!-- <th scope="col">Jabatan / Golongan</th> -->
                <th scope="col">Kepakaran</th>
              </tr>
            </thead>
            <tbody>

              <?php if (!empty($staff_list)) : ?>
                <?php foreach ($staff_list as $data) : ?>
                  <?php $image = empty($data['image']) ? 'ukuran.jpg' : $data['image'] ?>
                  <tr>
                    <td>
                      <a href="#"><?= $data['id'] ?></a>
                    </td>
                    <td>
                      <a href="#"><img src="<?= base_url('assets/images/education/dosen/' . $image) ?>" alt=""></a>
                    </td>
                    <td style="text-align: left;">
                      <a href="#"><?= $data['name'] ?></a>
                    </td>
                    <!-- <td>
                      <a href="#"><?= $data['golongan'] ?></a>
                    </td> -->
                    <td style="text-align: left;">
                      <a href="#"><?= $data['kepakaran'] ?></a>
                    </td>
                  </tr>
                <?php endforeach; ?>
              <?php else : ?>
                <tr>
                  <td style="text-align:center;" colspan="6">Data Staff tidak ditemukan...</td>
                </tr>
              <?php endif; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </section>
  <!--section end-->


  <!-- </section> -->
  <?php $this->load->view('pages/_partials/_footer') ?>
  <?php $this->load->view('pages/_partials/_js') ?>

</body>

</html>