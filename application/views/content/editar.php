<div class="col-md-12 status"></div>
<div class="col-md-12">

<?php $this->load->view('content/form') ?>

<button class="btn btn-default" onclick="window.location = '<?php echo base_url() ?>'">Voltar</button>
<button class="btn btn-success" onclick="alterar(<?php foreach($editar as $row) echo $row->id ?>)">Alterar</button>

</div>