<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete extends CI_Model {

  public function cliente($id) //Recebendo a variável
  {

    $this->db->where('id', $id); //Usando como parametro na consição
    $this->db->delete('clientes');

    return true;

  }



}