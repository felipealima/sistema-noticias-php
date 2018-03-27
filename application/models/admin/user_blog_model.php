<?php

class User_blog_model extends CI_Model
{

public function getblogs($limit ,$offset)
{
$user = $this->session->userdata('id');
$q =  $this->db->select(array('title','body','id'))->from('articales')->where(array('user_id'=>$user))->limit($limit ,$offset)->get();
return $q->result_array();


}

public function tot_num_rows()
{
$user = $this->session->userdata('id');
$q =  $this->db->select(array('title','body','id'))->from('articales')->where(array('user_id'=>$user))->get();
return $q->num_rows();

}


public function saveblogs($myarray)
{
$user = $this->session->userdata('id');
return $this->db->insert('articales',$myarray);

}


public function get_record($id)
{
$user = $this->session->userdata('id');
$q= $this->db->select(['id','title','body'])->from('articales')->where(["id"=>$id,"user_id"=>$user])->get();
return $q->row();
}

public function edit_record($bid,$myarray)
{
return $this->db->where("id",$bid)->update('articales',$myarray);
}

public function delete_record($bid)
{
	$user = $this->session->userdata('id');
return $this->db->where(["id"=>$bid,"user_id" => $user])->delete('articales');
}


}