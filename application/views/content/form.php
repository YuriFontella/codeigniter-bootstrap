      <!-- Formulário de cadastro -->
  
      <form role="form" method="post" action="javascript:func()">
        <div class="form-group">
          <label for="nome">Nome:</label>
          <input type="text" class="form-control" id="nome" value="<?php if(isset($editar)) foreach($editar as $row) echo $row->nome ?>" placeholder="Nome do cliente">
        </div>
        <div class="form-group">
          <label for="email">E-mail:</label>
          <input type="text" class="form-control" id="email" value="<?php if(isset($editar)) foreach($editar as $row) echo $row->email ?>" placeholder="E-mail...">
        </div>
        <div class="form-group">
          <label for="cidade">Localidade:</label>
          <textarea class="form-control" id="localidade" placeholder="Defina uma localidade..."><?php if(isset($editar)) foreach($editar as $row) echo $row->localidade ?></textarea>
          <p class="help-block">Você pode definir a sua cidade, estado e país.</p>
        </div>
      </form>