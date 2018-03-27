<?php

class Blog extends CI_Controller
{

public function index()
{
$this->load->view('admin/dashboard');
}

public function listblog()
{

$this->load->library("pagination");


 

$config = [
"base_url" => base_url("admin/blog/listblog"),
"per_page" => 10,
"total_rows" => $this->ubm->tot_num_rows(),
"full_tag_open" => "<ul class='pagination'>",
"full_tag_close" => "</ul>",
"first_tag_open" => "<li>",
"first_tag_close" => "</li>",
"last_tag_open" => "<li>",
"last_tag_close" => "</li>",
"first_link" => "<<",
"last_link" => ">>",
"next_tag_open" => "<li>",
"next_tag_close" => "</li>",
"prev_tag_open" => "<li>",
"prev_tag_close" => "</li>",
"num_tag_open" => "<li>",
"num_tag_close" => "</li>",
"cur_tag_open" => "<li class='active'><a>",
"cur_tag_close" => "</a></li>",
"use_page_numbers" => TRUE

];

$this->pagination->initialize($config);

$data['blogs'] = $this->ubm->getblogs($config['per_page'],$this->uri->segment(4));
$this->load->view('admin/user_blog',$data);

}



public function deleteblog($id="")
{

   if($id=="")
   	return redirect("admin/blog/listblog");
    return $this->_myflashmsg($this->ubm->delete_record($id),'Blog delete Successully.','Something Goes Wrong Please try again.');
}

public function editblog($id="")
{
   if($id=="")
   	return redirect("admin/blog/listblog");   
   $articales = $this->ubm->get_record($id);
  if(count($articales))
   $this->load->view("admin/edit_blog",["articales" => $articales]);
   else
   return redirect("admin/blog/listblog");
}

public function addblog()
{
 $this->load->view("admin/add_blog");
}

public function save_blog()
{
    $this->load->library('form_validation');
    $this->form_validation->set_error_delimiters("<span class='text-danger'>","</span>");
    if($this->form_validation->run('articales'))
    {   
	   
        $post = $this->input->post();
		unset($post['submit']);
		$post['user_id']=$this->session->userdata('id');
		$post['created_datetime'] = date("Y-m-d H:i:s");
		return $this->_myflashmsg($this->ubm->saveblogs($post),' Blog Add Successully.','Something Goes Wrong Please try again.');
		

    }else
    {
      $this->load->view("admin/add_blog");
    }
	
}

public function updateblog()
{
  $this->load->library('form_validation');
     $this->form_validation->set_error_delimiters("<span class='text-danger'>","</span>");
    if($this->form_validation->run('articales'))
    {   	    
        $post = $this->input->post();
        $blogid = $post['artical_id'];
		unset($post['submit'],$post['artical_id']);
		return $this->_myflashmsg($this->ubm->edit_record($blogid,$post),'Blog update Successully.','Something Goes Wrong Please try again.');
		
    }else
    {
      $this->load->view("admin/add_blog");
    }
}

public function __construct()
{
parent::__construct();
if(!$this->session->has_userdata("id"))
return redirect("login");
$this->load->model('admin/user_blog_model','ubm');


}

private function _myflashmsg($condition,$succ_msg,$fail_msg)
{
   if($condition)
		{
		$this->session->set_flashdata('blogerror','<div class="alert alert-success"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Success !</strong>'.$succ_msg.' </div>');
		
		}else
		{
		$this->session->set_flashdata('blogerror','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Danger !</strong>'.$fail_msg.' </div>');
	
		}
		redirect("admin/blog/listblog");

}

}