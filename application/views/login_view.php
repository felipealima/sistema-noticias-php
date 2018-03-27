<?php 
$this->load->view('common/header');

/*
or
include('common/header.php');
*/
 ?>
<!--------LOGIN-------->
<div class="row">
<div class="col-md-2">
&nbsp;
</div>
<div class="col-md-8">

<?php 
if($error=$this->session->flashdata('loginfail'))
{
echo $error;
}
?>
<div class="myform">



<?php
echo form_open('login/admin_login',['class'=>'form-horizontal','role'=>'form']);
?>
<fieldset>
<legend>Login </legend>

  <div class="form-group">
    <label class="control-label col-sm-2" for="email">E-mail:</label>
    <div class="col-sm-10">
     
	  <?php echo form_input(["class"=>"form-control", "name"=>"email", "id"=>"email", "placeholder"=>"Insira seu E-mail","value"=>set_value('email')]) , form_error("email");?>
    </div>
  </div>
  <div class="form-group">
    <label class="control-label col-sm-2" for="pwd">Senha:</label>
    <div class="col-sm-10"> 
      
	   <?php echo form_password(["class"=>"form-control", "name"=>"password", "id"=>"password", "placeholder"=>"Insira a sua senha"]) ,  form_error("password");?>
    </div>
  </div>

  <div class="form-group"> 
    <div class="col-sm-offset-2 col-sm-10">
   
	  <?php echo form_reset(["class"=>"btn btn-info", "name"=>"reset", "id"=>"reset", "value"=>"Limpar"]) , form_submit(["class"=>"btn btn-danger", "name"=>"submit", "id"=>"submit", "value"=>"Login"]);?>
	 
    </div>
  </div>
</form>
</fieldset>
</div>


</div>
<div class="col-md-2">
&nbsp;
</div>
</div>
<!---END OF LOGIN------->

<?php $this->load->view('common/footer');?>