<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Signup extends CI_Controller 
{
    public function __construct() {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library(array('session', 'form_validation'));
        $this->load->database();
        $this->load->model('user_model');
    }

    public function index() {
        $this->load->view('common/header');
        
        $this->form_validation->set_rules(
                'email', 'Email', 
                'trim|required|valid_email|is_unique[users.email]',
                array('required'  => 'O campo Email é Obrigatório',
                      'is_unique' => 'Esse email já esta cadastrado em nossa base de dados.'));
        $this->form_validation->set_rules(
                'uname', 'Nome de Usuário', 
                'trim|required|alpha|min_length[3]|max_length[30]',
                array('required' => 'O campo Nome de Usuário é Obrigatório'));
        
        $this->form_validation->set_rules(
                'password', 'Senha', 'trim|required|md5|min_length[6]',
                array('required'  => 'O campo Senha é Obrigatório'));
        $this->form_validation->set_rules(
                'confirmPassword', 'Confirme sua Senha','trim|required|md5|matches[password]',
                array('required'  => 'Digite sua Senha Novamente'));
      $this->form_validation->set_rules(
                'fname', 'Nome', 
                'trim|required|alpha|min_length[3]|max_length[30]',
                array('required' => 'O campo Nome é Obrigatório'));
        $this->form_validation->set_rules(
                'lname', 'Sobrenome', 
                'trim|required|alpha|min_length[3]|max_length[30]',
                array('required' => 'O campo Sobrenome é Obrigatório'));
        if ($this->form_validation->run() == FALSE) {
            $this->load->view('signup_view');
        } else {
            $data = array(
                'email' => $this->input->post('email'),
                'uname' => $this->input->post('uname'),
                'password' => $this->input->post('password'),
                'fname' => $this->input->post('fname'),
                'lname' => $this->input->post('lname')
            );

            if ($this->user_model->insert_user($data)) {
                $this->session->set_flashdata('msg', '<div class="alert alert-success text-center">Usuario Registrado com Sucesso! Faça seu Login para acessar o sistema!</div>');
                redirect('signup/index');
            } else {
                // error
                $this->session->set_flashdata('msg', '<div class="alert alert-danger text-center">Erro ao cadastrar.Por Favor tente novamente!</div>');
                redirect('signup/index');
            }
        }
        $this->load->view('common/footer');
    }

}
