<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Controller extends CI_Controller {

	public function index(){
// $city['name']=array(45, 'kolkata');
// $this->load->view('Cityview',$city);
		$this->load->helper('form');
		$this->load->view('Newview');
	}
	public function tasking(){
$info=$this->input->post();
print_r($info);
$this->load->model('Nmodel');
$this->Nmodel->saveit($info);

	}
}