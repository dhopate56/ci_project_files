<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

  public function __construct() {
        parent::__construct();
        $this->load->model('homemodel');
        $this->load->model('productmodel');
    }

public function index(){

$data['banner']=$this->homemodel->get_banner();

$this->load->view('front/index',$data);
}

}
?>
