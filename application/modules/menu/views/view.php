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
                                <form method="POST" action="<?php $uri = uri_segment(3); echo base_url("menu/update/{$uri}")?>" class="loginSubmit">
                                    <div class="col-sm-12">
                                        <div class="row">
                                            <div class="col-sm-12 form-group">
                                                <label>Menu Name<span class="star_red">*</span></label>
                                                <input type="text" name="menu_name" value="<?php echo $view->menu_name; ?>" placeholder="Enter Menu Name Here.." class="form-control">
                                                <span class="form_error"> <b><?php echo strip_tags(form_error("menu_name")); ?></b></span>
                                            </div>
                                            <div class="col-sm-12 form-group">
                                                                                                                                 <div class="form-group">
                                            <label>User Type<span class="star_red">*</span></label>
                                            <div>
                                            <select class="form-control" name="menu_status">
                                                <option value="active" <?php if($view->menu_status == 'active'){ echo 'selected';}?>>Active</option>
                                                <option value="inactive" <?php if($view->menu_status == 'inactive'){ echo 'selected';}?>>Inactive</option>
                                               
                                                
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
