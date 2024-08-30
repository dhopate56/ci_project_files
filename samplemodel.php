<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class samplemodel extends CI_Model{
	public function queries()
	{
		// $q=$this->db->query('select * from data where uid ="77"');
		return $this->db->select('uname')->where('uid',77)->get('data')->result();
		// return $this->db->select('count(uname)')->get('data')->result();

		// return $q->result_array();
	}
	public function insert($postdata){
		$postdata['uid']=mt_rand(1111,9999);
print_r($postdata);
$this->db->insert('data',$postdata);
	}
}
?>