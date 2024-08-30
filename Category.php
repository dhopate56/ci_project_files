<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('CategoryModel');
    }
	 
public function index()
	{
		$this->form_validation->set_rules('cate_name','category name', 'required|trim');
		$this->form_validation->set_rules('status','status', 'required|trim');
		if($this->form_validation->run()){
$post=$this->input->post();
$check=$this->CategoryModel->addcategory($post);
if($check){
	$this->session->set_flashdata("succmsg","data inserted successfully");
	redirect('category');
}
		}else{
			$data['categories']=$this->CategoryModel->allcategory();
		$this->load->view('category',$data);
}
	}
	public function get_sub_cate(){
		$cate_id=$this->input->post('cate_id');
		echo $this->CategoryModel->get_sub_cate($cate_id);
	}
}
?>