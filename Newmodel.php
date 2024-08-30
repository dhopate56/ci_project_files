<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newmodel extends CI_Model{
public function queries($postdata)
	{
		$postdata['uid']=mt_rand(111,333);
		$this->db->insert('data',$postdata);
	}





}