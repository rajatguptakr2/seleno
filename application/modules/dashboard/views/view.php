    <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?= $this->load->view('head-menu'); ?>
        <!-- Side Menu all -->
        <?= $this->load->view('side-menu'); ?>
        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <section class="content-header">
                <h1><?= @$page_title; ?> : <?= @$page_name; ?></h1>
                <ol class="breadcrumb">
                    <li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Home</a></li>
                    <li><a href="<?= base_url(strtolower($page_title)) ?>"><?= @$page_title; ?></a></li>
                    <li class="active"><?= @$page_name; ?></li>
                </ol>
            </section>
            <section class="content">
                <!-- Default box -->
                <div class="box">

                    <div class="container admin_form_body">
                        <h1 class="well"><?= @$page_name; ?> <?php echo $this->session->flashdata("message"); ?></h1>
                        <div class="col-lg-12 well">
                            <div class="row"> 
                                     <?php foreach ($user as $view): ?>
                                <form method="POST" action="<?php $uri = uri_segment(3); echo base_url("dashboard/update/{$uri}")?>" class="loginSubmit">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>First Name<span class="star_red">*</span></label>
                                                <input type="text" name="fname" value="<?php echo $view->fname; ?>" placeholder="Enter First Name Here.." class="form-control">
                                                <span class="form_error"> <b><?php echo strip_tags(form_error("fname")); ?></b></span>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Last Name<span class="star_red">*</span></label>
                                                <input type="text" name="lname" value="<?php echo $view->lname; ?>" placeholder="Enter Last Name Here.." class="form-control">
                                                <span class="form_error"> <b><?php echo strip_tags(form_error("lname")); ?></b></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" name="contactno" value="<?php echo $view->contactno; ?>" placeholder="Enter Phone Number Here.." class="form-control">
                                            <span class="form_error"> <b><?php echo strip_tags(form_error("contactno")); ?></b></span>
                                        </div>		
                                        <div class="form-group">
                                            <label>Email Address<span class="star_red">*</span></label>
                                            <input type="text" name="email" value="<?php echo $view->email; ?>" placeholder="Enter Email Address Here.." class="form-control">
                                            <span class="form_error"> <b><?php echo strip_tags(form_error("email")); ?></b></span>
                                        </div>	
                                        <div class="form-group">
                                            <label>User Type<span class="star_red">*</span></label>
                                            <div >
                                             
                                                
                                            <select class="form-control" name="user_type">
                                                <option value="1" <?php if($view->user_type == '1'){ echo 'selected';}?>>User</option>
                                                <option value="2" <?php if($view->user_type == '2'){ echo 'selected';}?>>Sub User</option>
                                                <option value="3" <?php if($view->user_type == '3'){ echo 'selected';}?>>Admin</option>
                                                <option value="4" <?php if($view->user_type == '4'){ echo 'selected';}?>>Super Admin</option>
                                                
                                            </select>
                                                
                                            </div>
                                        </div>
                                         <div class="form-group">
                                            <label>User Type<span class="star_red">*</span></label>
                                            <div>
                                            <select class="form-control" name="user_status">
                                                <option value="active" <?php if($view->status == 'active'){ echo 'selected';}?>>Active</option>
                                                <option value="inactive" <?php if($view->status == 'inactive'){ echo 'selected';}?>>Inactive</option>
                                               
                                                
                                            </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-info">Submit</button>					
                                    </div>
                                    <?php endforeach;?>
                                </form> 
                            </div>
                        </div>
                    </div>
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>
    </div>
