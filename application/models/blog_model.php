<?php

class Blog_model extends CI_Model
{

public function getblogs($limit,$offset)
{
$q =  $this->db->select(array('title','fname','articales.id'))->from(array('articales','users'))->where("users.id =articales.user_id")->limit($limit,$offset)->get();
return $q->result_array();


}


public function num_rows()
{
$q =  $this->db->select(array('title','fname','articales.id'))->from(array('articales','users'))->where("users.id =articales.user_id")->get();
return $q->num_rows();
}


public function search_blog($limit,$offset,$search)
{
$q =  $this->db->select(array('title','fname','articales.id'))->from(array('articales','users'))->where("users.id =articales.user_id and (title like 
	'%$search%' or body like '%$search%' )")->limit($limit,$offset)->get();
return $q->result_array();
}


public function num_rows_search($search)
{
$q =  $this->db->select(array('title','fname','articales.id'))->from(array('articales','users'))->where("users.id =articales.user_id and (title like 
	'%$search%' or body like '%$search%' )")->get();
return $q->num_rows();
}



public function get_blog($bid)
{

  $q = $this->db->select(array('title','fname','body','created_datetime'))->from(array('articales','users'))->where("users.id = articales.user_id and articales.id='$bid'")->get();
   return $q->row();

}


}