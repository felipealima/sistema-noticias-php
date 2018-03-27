<?php

class Login_model extends CI_Model
{

public function login_validate($email,$password)
{

  $q=$this->db->get_where('users',array('uname'=>$email,'password'=>md5($password)));
   if($q->num_rows())
   {
   $uid = $q->row()->id;
   $email = $q->row()->uname;
   
   $this->session->set_userdata("id",$uid);
   $this->session->set_userdata("email",$email);
    return 1;
   }
   else
   {
   return 0;
   
   }


}

}