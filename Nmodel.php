<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Nmodel extends CI_Model{

	public function saveit($data){
		$data['uid']=mt_rand(10,30);
$this->db->insert('data',$data);

	}
}