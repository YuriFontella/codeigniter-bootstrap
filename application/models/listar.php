<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Listar extends CI_Model {

  public function __construct()
  {
    
    parent::__construct();

    setlocale(LC_ALL, 'pt_BR.utf-8', 'ptb'); 
    date_default_timezone_set('America/Sao_Paulo');    
   
  }

	public function clientes($id = null)
	{

    /* Reuso da func para listar todos ou com parametro id */
    
    if($id == null) {

      $query = $this->db->get('clientes'); //Todos os clientes da tabela
   
    } else {

      $query = $this->db->get_where('clientes', array('id' => $id)); //Com uma condição
  
    }
 
    foreach($query->result() as $row) {

      $row->created_at = strftime('%d de %B - %Y', strtotime($row->created_at));
      $row->slug = str_replace(' ', '-', convert_accented_characters(strtolower($row->nome))); 
  
    }

    return $query->result();

  }


}

 ?>