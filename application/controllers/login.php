<?php

class Login extends CI_Controller
{

public function index()
{

$this->_check_login();
$this->load->helper('form');
$this->load->view('login_view');

}

public function admin_login()
{
$this->_check_login();
$this->load->library('form_validation');
$this->form_validation->set_rules('email','E-mail','trim|required|alpha',array("alpha"=>"Insira o seu E-mail","required"=>"Obrigatório"));
$this->form_validation->set_rules('password','Senha','required',array("required"=>"Obrigatório"));
$this->form_validation->set_error_delimiters("<span class='text-danger'>","</span>");
if($this->form_validation->run())
{
 $email = $this->input->post("email");
 $password = $this->input->post("password");
 
 $this->load->model('login_model');
 if($this->login_model->login_validate($email,$password))
 {
  //echo "Login Successfully";
  
  return redirect("admin/blog");
  
 }else
 {
 $this->session->set_flashdata('loginfail','<div class="alert alert-danger"><a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
  <strong>Erro!</strong> E-mail inválido ou Senha!</div>');
 return redirect("login");
 
 }
 
}else
{
$this->load->view('login_view');
}
}

public function logout()
{
$this->session->unset_userdata("id");
$this->session->unset_userdata("email");
return redirect("login");
}


private function _check_login()
{
   if($this->session->has_userdata("id"))
    return redirect("admin/blog");

}




}