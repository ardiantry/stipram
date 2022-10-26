<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{

  public function __construct()
  {
    parent::__construct();

    $this->load->model('staff_model');
  }

  public function visi_misi()
  {
    $data['page_title'] = 'Visi & Misi';
    $data['breadcrumb'] = 'Visi & Misi';
    $this->load->view('pages/profile/visi_misi', $data);
  }

  public function about()
  {
    $data['page_title'] = 'Tentang PPS STIPRAM';
    $data['breadcrumb'] = 'Tentang PPS STIPRAM';
    $this->load->view('pages/profile/about', $data);
  }

  public function akreditasi()
  {
    $data = array();

    $data['page_title'] = 'Akreditasi';
    $data['breadcrumb'] = 'Akreditasi';
    // $data['staff_list'] = $this->staff_model->getAll();

    // print_r($data);

    $this->load->view('pages/profile/akreditasi', $data);
  }

  public function staff()
  {
    $data = array();

    $data['page_title'] = 'Staff';
    $data['breadcrumb'] = 'Staff';
    $data['staff_list'] = $this->staff_model->getAll();

    // print_r($data);

    $this->load->view('pages/profile/staff/staff', $data);
  }

  public function dosen_kepakaran()
  {
    $data = array();

    $data['page_title'] = 'Dosen & Kepakaran';
    $data['breadcrumb'] = 'Dosen & Kepakaran';
    $data['staff_list'] = $this->staff_model->getAll();


    $this->load->view('pages/profile/staff/dosen_kepakaran', $data);
  }

  public function unit_support()
  {
    $data['page_title'] = 'Unit Pendukung';
    $data['breadcrumb'] = 'Unit Pendukung';
    $this->load->view('pages/profile/unit_support', $data);
  }

  public function article()
  {
    $data['page_title'] = 'Artikel';
    $data['breadcrumb'] = 'Artikel';
    $this->load->view('pages/profile/article', $data);
  }

  public function prestasi_mahasiswa()
  {
    $data['page_title'] = 'Prestasi Mahasiswa';
    $data['breadcrumb'] = 'Prestasi Mahasiswa';
    $this->load->view('pages/profile/article', $data);
  }
}
