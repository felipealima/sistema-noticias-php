<?php
class Home extends CI_Controller
{
public function index()
{
$this->load->model("blog_model");
$this->load->library("pagination");
$config = [
"base_url" => base_url("home/index"),
"per_page" => 10,
"total_rows" => $this->blog_model->num_rows(),
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

$data['blogs'] = $this->blog_model->getblogs($config['per_page'],$this->uri->segment(3));
$this->load->view('home_view',$data);
}


public function search()
{

$this->load->library('form_validation');
$this->form_validation->set_rules('query','Search Box' ,'trim|required');
$this->load->model("blog_model");
$this->load->library("pagination");

if($this->form_validation->run())
{
$q = $this->input->post("query");
$config = [
"base_url" => base_url("home/index"),
"per_page" => 3,
"total_rows" => $this->blog_model->num_rows_search($q),
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
"cur_tag_close" => "</a></li>"
];
$this->pagination->initialize($config);

$data['blogs'] = $this->blog_model->search_blog($config['per_page'],$this->uri->segment(3),$q);
$this->load->view('search_result',$data);
}else
{
  $this->index(); 

}



}



public function view($id="")
{
if($id=="")
return  redirect("home");

$this->load->model("blog_model");
$blog = $this->blog_model->get_blog($id);
if(count($blog)>0)
  $this->load->view("blogdetail",["blog"=>$blog]);
 else
return redirect("home");

}





}
?>