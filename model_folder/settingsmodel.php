<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class settingsmodel extends CI_Model{
	
	public function addpincode($post){
		$q=$this->db->insert('ec_pincode',$post);	
if($q)
{
	return true;
}else{
	return false;
}	}

	public function addbanner($post){
		$post['bann_id']=mt_rand(11,99);
		$post['added_on']=date('Y-m-d');
		$q=$this->db->insert('ec_banner',$post);	
if($q)
{
	return true;
}else{
	return false;
}	}
	

}
?>