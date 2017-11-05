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
                                            <div class="col-sm-12 form-group">
                                                <label>Menu Name<span class="star_red">*</span></label>
                                                <select class="form-control" name="menu_id" required="required">
                                                    <!--<option>Please Select</option>-->
                                                    <?php foreach ($menu as $men): ?>
                                                        <option value="<?= $men->menu_id ?>"><?= $men->menu_name ?></option>
                                                    <?php endforeach; ?>



                                                </select>
                                                <span class="form_error"> <b><?php echo strip_tags(form_error("menu_id")); ?></b></span>
                                            </div>
                                            <div class="col-sm-12 form-group">
                                                <label>Sub Menu Name<span class="star_red">*</span></label>
                                                <input type="text" name="submenu_name" value="<?php echo set_value("submenu_name"); ?>" placeholder="Sub Menu name.." class="form-control">
                                                <span class="form_error"> <b><?php echo strip_tags(form_error("submenu_name")); ?></b></span>
                                            </div>
                                            <div class="col-sm-12 form-group">
                                                <label>Status<span class="star_red">*</span></label>
                                                <select class="form-control" name="submenu_status">
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
