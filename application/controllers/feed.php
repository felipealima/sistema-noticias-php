<?php

	class Feed extends CI_Controller {
       
      function __construct(){

        parent::__construct();
                 
        $this->load->helper('xml');
        $this->load->helper('text');
        $this->load->model('feed_model', 'articales');
      }

      function index(){
	      $data['feed_name'] = 'Sistema de Notícias'; 
	      $data['encoding'] = 'utf-8'; 
	      $data['feed_url'] = 'http://localhost/teste/feed'; 
	      $data['page_description'] = 'Sistema de Notícias'; 
	      $data['page_language'] = 'pt-br'; 
	      $data['creator_email'] = 'felipe.alima@gmail.com'; 
	      $data['articales'] = $this->articales->getPosts(10);  
	      header("Content-Type: application/rss+xml"); 

	      $this->load->view('rss', $data);
	  }

	}

