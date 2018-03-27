<?php $this->load->view('admin/header'); ?>

<div class="row">
<div class="col-md-3">
<div class="list-group">
  <a href="<?= URL_ROOT_ACTION.'admin' ?>"  class="list-group-item active">
    Principal
  </a>
  <a href="<?= URL_ROOT_ACTION.'blog/addblog' ?>" class="list-group-item">Adicionar Notícia
  </a>
  <a href="<?= URL_ROOT_ACTION.'blog/listblog' ?>" class="list-group-item">Listar Minhas Notícias
  </a>
</div>
</div>

<div class="col-md-9">
  <?php
if($error = $this->session->flashdata('blogerror'))
echo $error;

 echo form_open("admin/blog/save_blog",["class"=>"form-horizontal","role"=>"form"]); ?>
  <fieldset>
    <legend>Adicionar Notícia</legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">Título</label>
      <div class="col-lg-10">
      <?php echo form_input(["type"=>"text", "class"=>"form-control" ,"id"=>"title", "placeholder"=>"Título","name"=>"title","value"=>set_value('title')]) ,form_error("title") ;?>
        
      </div>
    </div>
  
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Notícia</label>
      <div class="col-lg-10">
      <?php echo form_textarea(["class"=>"form-control" ,"id"=>"body", "placeholder"=>"Insira aqui a sua Notícia","name"=>"body",
      "row"=>"3","value"=>set_value('body')]) , form_error("body") ;?>
       
        <span class="help-block"></span>
      </div>
    </div>
      


    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
      <?php echo form_reset(["class"=>"btn btn-default","value"=>"Cancelar"]) , form_submit(["class"=>"btn btn-primary","value"=>"Inserir"]) ;?>
       
      </div>
    </div>
  </fieldset>
</form>


</div>
</div>



<?php $this->load->view('admin/footer');?>