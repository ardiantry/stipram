<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Information extends CI_Controller
{
  public function index()
  {
    echo site_url();
    // $this->load->view('home');
  }
}
