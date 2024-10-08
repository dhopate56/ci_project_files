<!-- <?php
if($this->session->userdata('pro_id')!=''){
$pro_id = $this->session->userdata('pro_id');
}else{
$this->session->set_userdata('pro_id', mt_rand(11111,99999));
}
?> -->
<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

<!doctype html>

<html lang="en">

    
<!-- Mirrored from themesdesign.in/tocly/layouts/5.3.1/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 24 Nov 2023 08:52:23 GMT -->
<head>
        
        <meta charset="utf-8" />
        <title>Dashboard | Tocly - Admin & Dashboard Template</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
        <meta content="Themesdesign" name="author" />
        <!-- App favicon -->
        <base href="<?=base_url(); ?>">
      <?php $this->load->view('links');?>



    </head>

         <?php $this->load->view('header');?>

            <!-- Left Sidebar End -->

            

            <!-- ============================================================== -->
            <!-- Start right Content here -->
            <!-- ============================================================== -->
            <div class="main-content">

                <div class="page-content">
                    <div class="container-fluid">
                       <?php
                       if($this->session->flashdata('succmsg')){
                       ?> 
<div class="alert alert-success">
    <?=$this->session->flashdata('succmsg') ?>

</div>
                        
<?php } ?>
               <?php
                       if($this->session->flashdata('errormsg')){
                       ?> 
<div class="alert alert-success">
    <?=$this->session->flashdata('errormsg') ?>

</div>
                        
<?php } ?>
                            <div class="row">

                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header border-0 align-items-center d-flex pb-0">
                                                <h4 class="card-title mb-0 flex-grow-1">pincode</h4>
                                                
                                                        </div>
                                                    
                                                     <div class="card-body">
                                        <h5 class="card-title">Floating labels</h5>
                                        <p class="card-title-desc">Create beautifully simple form labels that float over your input fields.</p>

<?=form_open_multipart()?>
                                            <div class="row">
                                                 <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="" value="<?=set_value('pro_id',$pro_id)?>" readonly name="pro_id" placeholder="Enter Your pro_id">
                                                        <label for="floatingFirstnameInput">pro_id </label>
                                                    </div>
                                                    <?=form_error('pro_id') ?>
                                                </div>
                                                
                                               <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                    <select class="form-select" onchange="get_categories(this.value)" id="floatingSelectGrid" name="category">
                                                            <option value="" selected>select</option>
                                                             <?php foreach ($categories as $cat) {?>
                                                              <option value="<?=$cat->cate_id?> " ><?=$cat->cate_name?> </option> 
                                                          <?php  }?>                                                        </select>
                                                        <label for="floatingSelectGrid">category</label>
                                                    </div>
                                                                                                    <?=form_error('status') ?>
    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select subcat" id="floatingSelectGrid" name="sub_category">
                                                            <option value="" selected>select</option>
                                                                                                                  </select>
                                                        <label for="floatingSelectGrid">sub category</label>
                                                    </div>
                                                                                                    <?=form_error('status') ?>
    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="" name="pro_name" placeholder="pro_name">
                                                        <label for="floatingFirstnameInput">pro_name </label>
                                                    </div>
                                                    <?=form_error('pro_name') ?>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="" name="brand" placeholder="brand">
                                                        <label for="floatingFirstnameInput">brand </label>
                                                    </div>
                                                    <?=form_error('brand') ?>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="file" class="form-control" id="" name="bann_image" placeholder="Enter Your First Name">
                                                        <label for="floatingFirstnameInput">bann_image </label>
                                                    </div>
                                                    <?=form_error('bann_image') ?>
                                                </div>

                                            
                                                 <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelectGrid" name="status">
                                                            <option value="" selected>select</option>
                                                            <option value="1">active</option>
                                                            <option value="0">deactive</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">status</label>
                                                    </div>
                                                                                                    <?=form_error('status') ?>
    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelectGrid" name="featured">
                                                            <option value="" selected>select</option>
                                                            <option value="1">deal of the month</option>
                                                            <option value="0">new arrivals</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">featured</label>
                                                    </div>
                                                                                                    <?=form_error('status') ?>
    
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-select" id="floatingSelectGrid" name="highlights">
                                                            
                                                        </textarea>
                                                        <label for="floatingSelectGrid">highlights</label>
                                                    </div>
                                                                                                    <?=form_error('status') ?>
    
                                                </div>
                                                  <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <textarea class="form-select" id="floatingSelectGrid" name="description">
                                                            
                                                        </textarea>
                                                        <label for="floatingSelectGrid">description</label>
                                                    </div>
                                                                                                    <?=form_error('status') ?>
    
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="" name="meta_title" placeholder="meta_title">
                                                        <label for="floatingFirstnameInput">meta_title </label>
                                                    </div>
                                                    <?=form_error('meta_title') ?>
                                                </div> <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="" name="meta_keywords" placeholder="meta_keywords">
                                                        <label for="floatingFirstnameInput">meta_keywords </label>
                                                    </div>
                                                    <?=form_error('meta_keywords') ?>
                                                </div> <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="" name="meta_desc" placeholder="meta_desc">
                                                        <label for="floatingFirstnameInput">meta_desc </label>
                                                    </div>
                                                    <?=form_error('meta_desc') ?>
                                                </div>
                                                  <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="" name="pro_stock" placeholder="pro_stock">
                                                        <label for="floatingFirstnameInput">pro_stock </label>
                                                    </div>
                                                    <?=form_error('pro_stock') ?>
                                                </div>
                                                  <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="" name="pro_mrp" placeholder="pro_mrp">
                                                        <label for="floatingFirstnameInput">pro_mrp </label>
                                                    </div>
                                                    <?=form_error('pro_mrp') ?>
                                                </div>
                                                 
                                                 <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="" name="pro_sellingprice" placeholder="pro_sellingprice">
                                                        <label for="floatingFirstnameInput">pro_sellingprice </label>
                                                    </div>
                                                    <?=form_error('pro_sellingprice') ?>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="file" class="form-control" id="" name="pro_main_image" placeholder="Enter Your pro_main_image">
                                                        <label for="floatingFirstnameInput">pro_main_image </label>
                                                    </div>
                                                    <?=form_error('pro_main_image') ?>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="file" class="form-control" id="" name="gallery_image" placeholder="Enter Your gallery_image">
                                                        <label for="floatingFirstnameInput">gallery_image </label>
                                                    </div>
                                                    <?=form_error('gallery_image') ?>
                                                </div>
                                            
                                            <div>
                                                <button type="submit" class="btn btn-primary w-md">Submit</button>
                                            </div>
<?=form_open()?>
                                    </div>
                                                </div>
                

                       </div>
                        </div>
                         <!-- END ROW -->

                    </div>
                    <!-- container-fluid -->
                </div>
            </div>
                <!-- End Page-content -->
               
                  <?php $this->load->view('footer');?>
  