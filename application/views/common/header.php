<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Cadastro de Notícias</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="<?= URL_CSS.'bootstrap.min.css' ?>">
  <link rel="stylesheet" href="<?= URL_CSS.'style.css' ?>">
  <script src="<?= URL_JS.'jquery.min.js' ?>"></script>
  <script src="<?= URL_JS.'bootstrap.min.js' ?>"></script>
</head>
<body>


 
<div class="container">

<!---header------>

 <nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
	
	 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
	  
      <a class="navbar-brand mylogotitle" href="<?= base_url();?>">Cadastro de Notícias</a>
    </div>
     <div class="collapse navbar-collapse" id="myNavbar">
	<ul class="nav navbar-nav">
      <li class="active "> 
      
	  
  <div class="form-group">
    
  </div>
  
  
  </form>
  </li>
      
      
    </ul>
	
	
    <ul class="nav navbar-nav navbar-right">
      
      <li > 
	  
	  <?php if ($this->session->userdata('login')) { ?>
                            <li><p class="navbar-text">Bem-Vindo(a) <?php echo $this->session->userdata('uname'); ?></p></li>
                            <li><a href="<?php echo base_url(); ?>home/logout">Log Out</a></li>
                        <?php } else { ?>
                            <li><a href="<?php echo base_url(); ?>login"><span id="menu">Login</span></a></li>
                            <li><a href="<?php echo base_url(); ?>signup"><span id="menu">Registro</span></a></li>
                            <?php } ?>
	 </li>
    </ul>
	</div>
	
  </div>
</nav>

<!--------end of header-------->