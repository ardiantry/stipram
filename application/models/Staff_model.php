<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Staff_model extends CI_Model
{
  private $_table = 'staffs';

  public function getAll()
  {
    return $this->db->get($this->_table)->result_array();
  }
}
