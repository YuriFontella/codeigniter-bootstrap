<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Clientes extends CI_Controller {

  public function index()
  {

    //Variáveis do template

    $data['title'] = 'Listando e cadastrando os clientes';
    $data['subtitle'] = 'Lista de Clientes';
    $data['container'] = 'clientes';

    //Resultados do Model

    $data['clientes'] = $this->listar->clientes();
    
    //Carregando a view com o parser e o array $data
    
    $this->parser->parse('template', $data);

  }

  //Function para cadastrar os clientes

  public function cadastrar() 
  {

    foreach($_POST as $key => $value) {

      $this->form_validation->set_rules($key, $key, 'required');

    }

    if($this->form_validation->run() ==  false) {
      die('Preencher todos os campos!');
    }
    
    if(!valid_email($_POST['email'])) {

      die('Por favor, informe um e-mail válido!');

    } else {

      $data = $this->cadastros->cliente($_POST);

      if($data == true)
      {

        $this->session->set_flashdata('success', 'O cliente foi cadastrado com sucesso!');

      }  
  
    }

  }

  //Function para deletar os clientes

  public function deletar() 
  {

    $id = $this->uri->segment(3);  //3º segmento da url como parametro

    is_null($id) and redirect(base_url());
  
    $data = $this->delete->cliente($id);
   
    if($data == true)
    {

      $this->session->set_flashdata('success', 'O cliente #'. $id .' foi exlcuído com sucesso!');
      redirect(base_url());

    }    

  }

  public function editar($id = null)
  {

    is_null($id) and redirect(base_url());

    $id = $this->uri->segment(2);

    //Resultados do Model e a validação se existe id

    if( ! $data['editar'] = $this->listar->clientes($id)) 
    {

      $this->session->set_flashdata('error', 'Não foi possível encontrar o cliente com essa identificação!');
      redirect(base_url());

    }

    //Variáveis do template

    $data['title'] = 'Editar cliente';
    $data['subtitle'] = 'Editando o cliente ' . $this->listar->clientes($id)[0]->nome;
    $data['container'] = 'editar';
    
    //Carregando a view com o parser e o array $data
 
    $this->parser->parse('template', $data);
    
  }

  public function alterar()
  {

    $id = $this->uri->segment(3);

    $data = $this->update->cliente($id, $_POST);

   
    if($data == true)
    {

      $this->session->set_flashdata('success', 'O cliente #'. $_POST['nome'] .' foi alterado com sucesso!');

    }  
   

  }



}
