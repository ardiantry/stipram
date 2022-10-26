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
                <th scope="col" style="text-align: left;">Sertifkat Akreditasi STIPRAM</th>
                <th scope="col" style="text-align: left;">Akreditasi</th>
                <th scope="col" style="text-align: left;">SK</th>
                <th scope="col">Download</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>
                  <a href="#">1</a>
                </td>

                <td style="text-align: left;">
                  Instituti 'STIPRAM'
                </td>
                <td style="text-align: left;">
                  B
                </td>
                <td style="text-align: left;">No. 1023/SK/BAN-PT/Akred/PT/X/2015</td>
                <td>
                  <a href="https://drive.google.com/file/d/1YKabLfPQ2pPNPpndbHNtS1q8lBDa9lPR/view" class="icon"><i class="fa fa-download" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#">2</a>
                </td>

                <td style="text-align: left;">
                  Prodi S2 Pariwisata
                </td>
                <td style="text-align: left;">
                  B
                </td>
                <td style="text-align: left;">No. 2990/SK/BAN-PT/Akred/M/VIII/2019</td>
                <td>
                  <a href="https://drive.google.com/file/d/1TZ5n3Mcaxjs7gMK1NATQNAg-ITNdOk3Q/view" class="icon"><i class="fa fa-download" aria-hidden="true"></i></a>
                </td>
              </tr>
              <tr>
                <td>
                  <a href="#">3</a>
                </td>
                <td style="text-align: left;">
                  SK Perubahan Prodi Hospitality ke Pariwisata
                </td>
                <td style="text-align: left;">
                  -
                </td>
                <td style="text-align: left;">-</td>
                <td>
                  <a href="https://drive.google.com/file/d/1-wlLEImcgONVYYQqLCGSegGCYgxkD8IT/view" class="icon"><i class="fa fa-download" aria-hidden="true"></i></a>
                </td>
              </tr>
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