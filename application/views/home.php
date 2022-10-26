<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>

<!DOCTYPE html>
<html lang="en">

<?php $this->load->view('pages/_partials/_head') ?>

<body>

    <?php $this->load->view('pages/_partials/_taptop') ?>
    <?php $this->load->view('pages/_partials/_header') ?>
    <?php $this->load->view('pages/home/index') ?>

    <?php //$this->load->view('pages/_partials/_newsletter') 
    ?>
    <?php $this->load->view('pages/_partials/_footer') ?>
    <?php $this->load->view('pages/_partials/_js') ?>

</body>

</html>