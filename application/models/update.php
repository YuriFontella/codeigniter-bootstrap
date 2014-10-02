<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update extends CI_Model {

  public function cliente($id, $data)
  {
 
    $this->db->where('id', $id);
    $this->db->update('clientes', $data);

    return true;   
 
  }



}
