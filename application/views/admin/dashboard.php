<?php $this->load->view('admin/header'); ?>

<div class="row">
<div class="col-md-3">
<div class="list-group">
  <a href=""  class="list-group-item active">
    Principal
  </a>
  <a href="<?= URL_ROOT_ACTION.'blog/addblog' ?>" class="list-group-item">Adicionar Notícia
  </a>
  <a href="<?= URL_ROOT_ACTION.'blog/listblog' ?>" class="list-group-item">Listar Minhas Notícias
  </a>
</div>
</div>
<div class="col-md-9">
  <div class="jumbotron">
    <h1>Bem vindo a sua Área</h1> 
    <p>Olá <?= $this->session->email; ?>! </p> 
  </div>
</div>
</div>



<?php $this->load->view('admin/footer');?>