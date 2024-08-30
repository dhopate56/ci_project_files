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
                            <div class="row">

                                    <div class="col-xl-12">
                                        <div class="card">
                                            <div class="card-header border-0 align-items-center d-flex pb-0">
                                                <h4 class="card-title mb-0 flex-grow-1">category</h4>
                                                
                                                        </div>
                                                    
                                                     <div class="card-body">
                                        <h5 class="card-title">Floating labels</h5>
                                        <p class="card-title-desc">Create beautifully simple form labels that float over your input fields.</p>

<?=form_open()?>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelectGrid" name="parent_id" >
                                                            <option value="null" selected>select </option>
                                                            <?php foreach ($categories as $cat) {?>
                                                              <option value="<?=$cat->cate_id?> " selected><?=$cat->cate_name?> </option> 
                                                          <?php  }?>
                                                        </select>
                                                        <label for="floatingSelectGrid">parent category</label>
                                                    </div>
                                                </div>
                                            
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="" name="cate_name" placeholder="Enter Your First Name">
                                                        <label for="floatingFirstnameInput">category name</label>
                                                    </div>
                                                    <?=form_error('cate_name') ?>
                                                </div>
                                                 <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <select class="form-select" id="floatingSelectGrid" name="status">
                                                            <option value="" selected>select</option>
                                                            <option value="1">active</option>
                                                            <option value="0">deactive</option>
                                                            <option value="3">Three</option>
                                                        </select>
                                                        <label for="floatingSelectGrid">status</label>
                                                    </div>
                                                                                                    <?=form_error('status') ?>
    
                                                </div>
                                            
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="text" class="form-control" id="floatingLastnameInput" placeholder="Enter Your Last Name">
                                                        <label for="floatingLastnameInput">Last Name</label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3">
                                                        <input type="email" class="form-control" id="floatingemailInput" placeholder="Enter Email address">
                                                        <label for="floatingemailInput">Email address</label>
                                                    </div>
                                                </div>
                                                </div>

                                            <div class="mb-3">
                                                
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="floatingCheck">
                                                    <label class="form-check-label" for="floatingCheck">
                                                      Check me out
                                                    </label>
                                                </div>
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
  