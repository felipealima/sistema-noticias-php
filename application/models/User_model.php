<?php

if (!defined('BASEPATH')) exit('No direct script access allowed');

class user_model extends CI_Model 
{
    public function __construct() {
        parent::__construct();
    }

    public function get_user($email, $pwd) {
        $this->db->where('email', $email);
        $this->db->where('password', md5($pwd));
        $query = $this->db->get('users');
        return $query->result();
    }

    public function get_user_by_id($id) {
        $this->db->where('id', $id);
        $query = $this->db->get('users');
        return $query->result();
    }

    public function insert_user($data) {
        return $this->db->insert('users', $data);
    }

}
