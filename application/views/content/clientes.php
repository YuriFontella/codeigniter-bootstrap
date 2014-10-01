<div class="col-md-12" style="margin-bottom: 20px">
  <button class="btn btn-primary" data-toggle="modal" data-target="#cadastro">Cadastrar Cliente</button>
</div>

<div class="col-md-12">

  <table class="table table-striped" width="100%">
    <tr>
      <th>ID</th>
      <th>NOME</th>
      <th>E-MAIL</th>
      <th>CIDADE</th>
      <th>DATA</th>
      <th>OPÇÕES</th>
    </tr>
    <?php if(count($clientes) > 0): ?>
 
    <!-- Resultado dos dados com a classe Parser -->

    {clientes}
    <tr>
      <td>#{id}</td>
      <td>{nome}</td>
      <td>{email}</td>
      <td>{localidade}</td>
      <td>{created_at}</td>
      <td>
        <p>
          <a href="<?php echo base_url() ?>editar/{id}/{slug}"><span class="glyphicon glyphicon-cog"></span> Editar</a> &nbsp;&nbsp;
          <a href="clientes/deletar/{id}" onclick="return confirm('Deseja realmente excluir esse cliente?')">
            <span class="glyphicon glyphicon-trash"></span> Excluir
          </a>
        </p>
      </td>
    </tr>
    {/clientes}
    <?php else: ?>

    <tr><td colspan="6"><p>Nenhum cliente cadastrado no momento!</p></td></tr>

    <?php endif ?> 
  </table>

</div>