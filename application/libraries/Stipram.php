<?php

class Stipram
{
  protected $ci;

  function __construct()
  {
    $this->ci = &get_instance();
  }

  function navbar_menus()
  {
    $this->ci->db->select('*');
    $this->ci->db->from('menu');
    $rows = $this->c1->db->get()->result_array();

    $menus = [];
    foreach ($rows as $index => $row) {
      if ($row['menu_id']) {
        $id = $row['menu_id'];
        if ($row['id']) {
          $menus['menu_' . $id]['submenu'][] = [
            'id' => $row['id'],
            'segment' => $row['segment'],
            'title' => $row['title'],
            'url' => $row['url'],
            'icon' => $row['icon'],
            'is_active' => $row['is_active']
          ];
        }
      } else {
        $id = $row['id'];
        $menus['menu_' . $id] = [
          'id' => $row['id'],
          'segment' => $row['segment'],
          'title' => $row['title'],
          'url' => $row['url'],
          'icon' => $row['icon'],
          'is_active' => $row['is_active'],

        ];
      }
    }
  }

  $html = '';
  $segment = $this->ci->uri->segment(2);

  foreach ($menus as $menu) {
    $seg = ($segment == $menu['segment']) ? 'active' : null;
  }
}
