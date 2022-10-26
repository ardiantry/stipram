<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akademik extends CI_Controller
{

  public function jadwal_perkuliahan()
  {
    $data['page_title'] = 'Jadwal Perkuliahan';
    $data['breadcrumb'] = 'Jadwal Perkuliahan';
    $this->load->view('pages/academic/jadwal_perkuliahan', $data);
  }

  public function jadwal_ujian_semester()
  {
    $data['page_title'] = 'Jadwal Ujian Semester';
    $data['breadcrumb'] = 'Jadwal Ujian Semester';
    $this->load->view('pages/academic/jadwal_ujian_smester', $data);
  }

  public function jadwal_seminar_tesis()
  {
    $data['page_title'] = 'Jadwal Seminar Tesis';
    $data['breadcrumb'] = 'Jadwal Seminar Tesis';
    $this->load->view('pages/academic/jadwal_seminar_tesis', $data);
  }

  public function rps()
  {
    $data['page_title'] = 'RPS';
    $data['breadcrumb'] = 'RPS';
    $this->load->view('pages/academic/rps', $data);
  }
}
