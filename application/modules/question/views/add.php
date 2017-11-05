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

                            <form method="POST" action="" class="loginSubmit">

                                <div class="row">
                                    <div class="col-sm-6 form-group">
                                        <label>Set Color<span class="star_red">*</span></label>
                                        <input type="text" name="set_color" value="<?php echo set_value("set_color"); ?>" placeholder="Set Color.." class="form-control">
                                        <span class="form_error"> <b><?php echo strip_tags(form_error("set_color")); ?></b></span>
                                    </div>
                                    <div class="col-sm-6 form-group">
                                        <label>Set Type<span class="star_red">*</span></label>
                                        <input type="text" name="set_type" value="<?php echo set_value("set_type"); ?>" placeholder="Set Type.." class="form-control">
                                        <span class="form_error"> <b><?php echo strip_tags(form_error("set_type")); ?></b></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Question Title<span class="star_red">*</span></label>
                                    <input type="text" name="ques_title" value="<?php echo set_value("ques_title"); ?>" placeholder="Question Title.." class="form-control">
                                    <span class="form_error"> <b><?php echo strip_tags(form_error("ques_title")); ?></b></span>
                                </div>
                                <div class="row">
                                    <div class="col-sm-3 form-group">
                                        <label>Options A<span class="star_red">*</span></label>
                                        <input type="text" name="options_a" value="<?php echo set_value("options_a"); ?>" placeholder="Options A.." class="form-control">
                                        <span class="form_error"> <b><?php echo strip_tags(form_error("options_a")); ?></b></span>
                                    </div>
                                    <div class="col-sm-3 form-group">
                                        <label>Options B<span class="star_red">*</span></label>
                                        <input type="text" name="options_b" value="<?php echo set_value("options_b"); ?>" placeholder="Options B.." class="form-control">
                                        <span class="form_error"> <b><?php echo strip_tags(form_error("options_b")); ?></b></span>
                                    </div>
                                    <div class="col-sm-3 form-group">
                                        <label>Options C<span class="star_red">*</span></label>
                                        <input type="text" name="options_c" value="<?php echo set_value("options_c"); ?>" placeholder="Options C.." class="form-control">
                                        <span class="form_error"> <b><?php echo strip_tags(form_error("options_c")); ?></b></span>
                                    </div>
                                    <div class="col-sm-3 form-group">
                                        <label>Options D<span class="star_red">*</span></label>
                                        <input type="text" name="options_d" value="<?php echo set_value("options_d"); ?>" placeholder="Options D.." class="form-control">
                                        <span class="form_error"> <b><?php echo strip_tags(form_error("options_d")); ?></b></span>
                                    </div>
                                </div>
                                 <label>Answer<span class="star_red">*</span></label>
                                <textarea name="answer" id="editor1">
                                Answer
                                </textarea>
                                <div class="row">
                                    <div class="col-sm-12 form-group">
                                        <label>Status<span class="star_red">*</span></label>
                                        <select class="form-control" name="set_status">
                                            <option value="active">Active</option>
                                            <option value="inactive">Inactive</option>


                                        </select>
                                    </div>
                                </div>

                                <button type="submit" class="btn btn-lg btn-info">Submit</button>					

                            </form> 

                        </div>
                    </div>
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
        </div>
    </div>
