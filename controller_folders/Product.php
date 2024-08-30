<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Product extends CI_Controller {


    public function __construct() {
        parent::__construct();
        $this->load->model('CategoryModel');
        $this->load->model('productmodel');
    }
	 
public function index()
	{
		$this->form_validation->set_rules('status','status', 'required|trim');

				if($this->form_validation->run()){

					$post=$this->input->post();
$config['upload_path'] = './uploads/';
$config['allowed_types'] = '*';
$this->load->library('upload', $config);
$this->upload->do_upload('pro_main_image');
$data = $this->upload->data();
$post['pro_main_image'] = $data['raw_name'].$data['file_ext'];
$check=$this->productmodel->addproduct($post);
if($check){
	$this->session->set_flashdata("succmsg","product inserted successfully");
	redirect('product');
}else{
	$this->session->set_flashdata("errormsg","product not inserted successfully");
	redirect('product');
}
					

}else{
	if($this->session->userdata('pro_id')!=''){
$pro_id = $this->session->userdata('pro_id');
}else{
$this->session->set_userdata('pro_id', mt_rand(11111,99999));
}
				$data['categories']=$this->CategoryModel->allcategory();
$data['pro_id']=$pro_id;
	$this->load->view('product',$data);
 	}
}
}
?>