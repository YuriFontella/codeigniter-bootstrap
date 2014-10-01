<!-- Condição para mostrar mensagens flashdatas em sessions quando existir, o mesmo para flashdata 'error' and 'success' -->

<?php if($this->session->flashdata('success')): ?>
<div class="alert alert-success" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</button>
  <p class="text-success"><?php echo $this->session->flashdata('success') ?></p>
</div>
<?php endif ?>

<!-- Flashdata 'error' -->

<?php if($this->session->flashdata('error')): ?>
<div class="alert alert-danger" role="alert">
  <button type="button" class="close" data-dismiss="alert"><span aria-hidden="true">&times;</button>
  <p class="text-danger"><?php echo $this->session->flashdata('error') ?></p>
</div>
<?php endif ?>