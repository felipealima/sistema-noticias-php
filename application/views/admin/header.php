<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Sistema de Notícias</title>
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
	  
      <a class="navbar-brand mylogotitle" href="<?= URL_ROOT.'admin/blog'?>">Painel de Notícias</a>
    </div>
     <div class="collapse navbar-collapse" id="myNavbar">
	
	
	
    <ul class="nav navbar-nav navbar-right">
      
      <li ><a href="<?= URL_ROOT.'login/logout'?>"> Logout</a></li>
    </ul>
	</div>
	
  </div>
</nav>

<!--------end of header-------->