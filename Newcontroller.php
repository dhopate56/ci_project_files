<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Newcontroller extends CI_Controller {

	
public function index()
	{
		$postdata=$this->input->post();
		// print_r($postdata);
		$this->load->model('Newmodel');
		$this->Newmodel->queries($postdata);


	}

	public function myf()
	{
	// $postdata=$this->input->post();
    //    // print_r($postdata);
    //    		$this->load->model('samplemodel');
    //    $this->samplemodel->insert($postdata);
$this->load->helper('form');
		$this->load->view('Newfile');
       		// $this->load->model('Newmodel');
       		// echo $this->Newmodel->queries();

	}
}
?>