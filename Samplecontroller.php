<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Samplecontroller extends CI_Controller {

	
public function index()
	{
		$this->load->helper('form');
		$this->load->view('theview');

	}

	public function myf()
	{
	$postdata=$this->input->post();
       // print_r($postdata);
       		$this->load->model('samplemodel');
       $this->samplemodel->insert($postdata);


	}
}
