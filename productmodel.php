<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class productmodel extends CI_Model{
	
	public function addproduct($post){
		$post['added_on']=date('Y-m-d');
 $post['slug']=$this->slug($post['pro_name']);
		$q=$this->db->insert('ec-product',$post);
		if($q){
			$this->session->unset_userdata('pro_id');
			return true;
		}	else{

			return false;
		}
	}
function slug($string){
$slug = strtolower(trim(preg_replace('/[^A-Za-z0-9-]+/', '', $string)));
return $slug;
}

}
?>