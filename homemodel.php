<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class homemodel extends CI_Model{
	
	public function get_banner(){
$q = $this->db->where('status', '1')->order_by('id', 'desc')->get('ec_banner');
if($q->num_rows()){
return $q->result();
}else{
return false;
}
}

}
?>