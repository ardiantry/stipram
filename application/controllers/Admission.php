<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admission extends CI_Controller
{
  public function index()
  {
    $data['page_title'] = 'Pendaftaran';
    $data['breadcrumb'] = 'Pendaftaran';
    $this->load->view('pages/admission/index', $data);
  }
}
