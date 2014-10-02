<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cadastros extends CI_Model {

  public function cliente($data)
  {
 
    $data['id'] = random_string('nozero', 10);
    $data['nome'] = ucwords($data['nome']);
    $this->db->insert('clientes', $data);

    return true;

  }



}



 ?>
