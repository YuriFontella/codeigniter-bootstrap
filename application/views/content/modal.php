<!-- Modal -->
<div class="modal fade" id="cadastro" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</button>
        <h4 class="modal-title" id="myModalLabel"><span class="glyphicon glyphicon-user"></span> Cadastrando um novo Cliente</h4>

        <div class="status"></div>
      </div>
      <div class="modal-body">

        <?php $this->load->view('content/form') ?>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success" onclick="cadastrar()">Salvar Cliente</button>
      </div>
    </div>
  </div>
</div>