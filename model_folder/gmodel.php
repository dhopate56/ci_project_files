<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
class gmodel extends CI_Model {
	public function modelfunction($data){
		$data['uid']=mt_rand(1,9);

if($this->db->insert('data',$data)){
	$this->load->view('success');
}

	}
}
?>