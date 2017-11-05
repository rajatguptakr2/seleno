<body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
        <?= $this->load->view('side-menu'); ?>
        <?= $this->load->view('head-menu'); ?>
        <!-- Side Menu all -->
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
                        <h1 class="well"><?= @$page_name; ?></h1><div class="row"><div class="col-md-12"> <?php echo get_flashdata(); ?> </div></div>
                        <div class="col-lg-12 well">
                            <div class="row"> 
                                <form method="POST" action="" class="loginSubmit">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-6 form-group">
                                                <label>First Name<span class="star_red">*</span></label>
                                                <input type="text" name="fname" value="<?php echo set_value("fname"); ?>" placeholder="Enter First Name Here.." class="form-control">
                                                <span class="form_error"> <b><?php echo strip_tags(form_error("fname")); ?></b></span>
                                            </div>
                                            <div class="col-sm-6 form-group">
                                                <label>Last Name<span class="star_red">*</span></label>
                                                <input type="text" name="lname" value="<?php echo set_value("lname"); ?>" placeholder="Enter Last Name Here.." class="form-control">
                                                <span class="form_error"> <b><?php echo strip_tags(form_error("lname")); ?></b></span>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>Phone Number</label>
                                            <input type="text" name="contactno" value="<?php echo set_value("contactno"); ?>" placeholder="Enter Phone Number Here.." class="form-control">
                                            <span class="form_error"> <b><?php echo strip_tags(form_error("contactno")); ?></b></span>
                                        </div>		
                                        <div class="form-group">
                                            <label>Email Address<span class="star_red">*</span></label>
                                            <input type="text" name="email" value="<?php echo set_value("email"); ?>" placeholder="Enter Email Address Here.." class="form-control">
                                            <span class="form_error"> <b><?php echo strip_tags(form_error("email")); ?></b></span>
                                        </div>	
                                        <div class="form-group">
                                            <label>User Type<span class="star_red">*</span></label>
                                            <div >
                                                <select class="form-control" name="user_type">
                                                    <option value="1">User</option>
                                                    <option value="2">Sub User</option>
                                                    <option value="3">Admin</option>
                                                    <option value="4">Super Admin</option>

                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label>User Type<span class="star_red">*</span></label>
                                            <div>
                                                <select class="form-control" name="user_status">
                                                    <option value="active">Active</option>
                                                    <option value="inactive">Inactive</option>


                                                </select>
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-lg btn-info">Submit</button>					
                                    </div>
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
