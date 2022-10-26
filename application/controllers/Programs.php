<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Programs extends CI_Controller
{
  public function program_master()
  {
    $data['page_title'] = 'Program Studi Master';
    $data['breadcrumb'] = 'Program Studi Master';
    $this->load->view('pages/programs/program_master', $data);
  }

  public function program_doktor()
  {
    $data['page_title'] = 'Program Studi Doktor';
    $data['breadcrumb'] = 'Program Studi Doktor';
    $this->load->view('pages/programs/program_doktor', $data);
  }
}
