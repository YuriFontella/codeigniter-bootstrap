<!DOCTYPE html>
<html lang="pt-br">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $title ?></title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url() ?>bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>bootstrap/css/bootstrap-theme.css" rel="stylesheet">

    <style type="text/css">
      .status {
        float: left;
        width: 100%;
        margin-top: 10px;
      }
      .text-status {
        float: left;
        width: 100%;
        text-align: center;
      }
    </style>

  </head>
  <body>
   
  <!-- Conteúdo dos controllers -->

  <div class="container">
    <div class="row">

    <!-- Título da página -->

    <div class="col-md-12">
      <div class="page-header">
        <h1><?php echo $subtitle ?></h1>
      </div>

      <!-- Carregando as configurações de mensagens 'alerts' -->
    
      <div class="col-md-12">
          <?php $this->load->view('sections/success_and_error') ?>
      </div>
    </div>
      

