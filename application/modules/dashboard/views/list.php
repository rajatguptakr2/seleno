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
                            <table id="myTable" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                <thead>
                                    <tr>
                                        <th>S No.</th>
                                        <th>Full Name</th>
                                        <!--<th>Last name</th>-->
                                        <th>Email</th>
                                        <th>Status</th>
                                        <th>Contact</th>
                                        
                                        <th>Last Login</th>
                                        <th>Created On</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(count($total_result)): 
                                        $count = $this->uri->segment(3, 0);
                                        ?>
                                    
                                    <?php foreach($total_result as $total_results):?>
                                    <tr>
                                        
                                        
                                        <td><?= ++$count ?></td>
                                        <td><?= ucfirst($total_results->fname);?> <?= ucfirst($total_results->lname);?></td>
                                        <td><?= $total_results->email;?></td>
                                        <td><span class=""><?= ucfirst($total_results->status);?></span></td>
                                        <td><?= $total_results->contactno;?></td>
                                        <td><?= $total_results->last_login;?></td>
                                        <td><?= $total_results->created_on;?></td>
                                         <td>  <?php $id = ID_encode($total_results->id);echo anchor("dashboard/view_listing/{$id}", 'View', ['class' => 'btn btn-info']) ?>
                                           <?php $id = ID_encode($total_results->id); echo anchor("dashboard/delete/{$id}", 'Delete    ', ['class' => 'btn btn-danger']) ?>
                                         
                                         
                                         </td>   
                                        
                                    </tr>
                                    
                                   <?php endforeach;?>
                                    <?php endif;?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                <!-- /.box -->

            </section>
            <!-- /.content -->
            
            
        </div>
    </div>

