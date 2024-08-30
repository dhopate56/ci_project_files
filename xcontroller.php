<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<?php
class xcontroller extends CI_Controller {
public function index(){
	$this->load->helper('form');
	$this->load->view('gameview');
}
public function passmedata(){
$data=$this->input->post();
$this->load->model('gmodel');
$this->gmodel->modelfunction($data);
}

}
?>