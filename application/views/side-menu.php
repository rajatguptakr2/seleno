<!-- sidebar menu: : style can be found in sidebar.less -->
 <!-- Left side column. contains the logo and sidebar -->
        <aside class="main-sidebar">
            <!-- sidebar: style can be found in sidebar.less -->
            <section class="sidebar">
                <!-- Sidebar user panel -->
                <div class="user-panel">
                    <div class="pull-left image">
                        <img src="<?= base_url(); ?>assets/admin/dist/img/user2-160x160.jpg" class="img-circle" alt="User Image">
                    </div>
                    <div class="pull-left info">
                        <p><?php echo currentuserinfo()->fname.' '.currentuserinfo()->lname;?></p>
                        <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
                    </div>
                </div>
               

<ul class="sidebar-menu">
    <li class="header">MAIN NAVIGATION</li>
    <?php 
    if($this->session->userdata('userinfo')->user_type == 3):
    ?>
    <li class="treeview <?php if($this->uri->segment(1) == 'dashboard'){echo 'l';}?>">
        <a href="#">
            <i class="fa fa-files-o"></i>
            <span>User Master</span>
            <span class="pull-right-container">
                <span class="label label-primary pull-right"></span>
            </span>
        </a>
        <ul class="treeview-menu">
            <li class="<?php if($this->uri->segment(1) == 'dashboard' && $this->uri->segment(2) == 'add'){echo 'active';} ?>"><a href="<?= base_url('dashboard/add'); ?>"><i class="fa fa-circle-o"></i>Add</a></li>
            <li class="<?php if($this->uri->segment(1) == 'dashboard' && $this->uri->segment(2) == 'listing'){echo 'active';} ?>"><a href="<?= base_url('dashboard/listing'); ?>"><i class="fa fa-circle-o"></i>List</a></li>
            
        </ul>
    </li>
    <li  class="treeview <?php if($this->uri->segment(1) == 'menu' || $this->uri->segment(1) == 'submenu'){echo 'active';}?>">
        <a href="<?= base_url(); ?>#">
            <i class="fa fa-th"></i> <span>Menu</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li  class="treeview <?php if($this->uri->segment(1) == 'menu'){echo 'active';}?>">
                <a href="<?= base_url(); ?>#"><i class="fa fa-circle-o"></i> Catergory
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if($this->uri->segment(1) == 'menu' && $this->uri->segment(2) == 'add'){echo 'active';} ?>"><a href="<?= base_url(); ?>menu/add"><i class="fa fa-circle-o"></i> Add</a></li>
                    <li class=" <?php if($this->uri->segment(1) == 'menu' && $this->uri->segment(2) == 'listing'){echo 'active';} ?>"><a href="<?= base_url(); ?>menu/listing"><i class="fa fa-circle-o"></i> List</a></li>
                    
                </ul>
            </li>
            <li class="treeview <?php if($this->uri->segment(1) == 'submenu'){echo 'active';}?>">
                <a href="<?= base_url(); ?>#"><i class="fa fa-circle-o"></i> Sub-Catergory
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
               <ul class="treeview-menu">
                    <li class="<?php if($this->uri->segment(1) == 'submenu' && $this->uri->segment(2) == 'add'){echo 'active';} ?>"><a href="<?= base_url(); ?>submenu/add"><i class="fa fa-circle-o"></i> Add</a></li>
                    <li class="<?php if($this->uri->segment(1) == 'submenu' && $this->uri->segment(2) == 'listing'){echo 'active';} ?>"><a href="<?= base_url(); ?>submenu/listing"><i class="fa fa-circle-o"></i> List</a></li>
                    
                </ul>
            </li>
           
        </ul>
    </li>
    <li  class="treeview <?php if($this->uri->segment(1) == 'question' || $this->uri->segment(1) == 'sets'){echo 'active';}?>">
        <a href="<?= base_url(); ?>#">
            <i class="fa fa-th"></i> <span>Questions</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
                        <li  class="treeview <?php if($this->uri->segment(1) == 'sets'){echo 'active';}?>">
                <a href="<?= base_url(); ?>#"><i class="fa fa-circle-o"></i> Sets
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if($this->uri->segment(1) == 'sets' && $this->uri->segment(2) == 'add'){echo 'active';} ?>"><a href="<?= base_url(); ?>sets/add"><i class="fa fa-circle-o"></i> Add</a></li>
                    <li class=" <?php if($this->uri->segment(1) == 'sets' && $this->uri->segment(2) == 'listing'){echo 'active';} ?>"><a href="<?= base_url(); ?>sets/listing"><i class="fa fa-circle-o"></i> List</a></li>
                    
                </ul>
            </li>
            <li  class="treeview <?php if($this->uri->segment(1) == 'question'){echo 'active';}?>">
                <a href="<?= base_url(); ?>#"><i class="fa fa-circle-o"></i> Questions
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li class="<?php if($this->uri->segment(1) == 'question' && $this->uri->segment(2) == 'add'){echo 'active';} ?>"><a href="<?= base_url(); ?>question/add"><i class="fa fa-circle-o"></i> Add</a></li>
                    <li class=" <?php if($this->uri->segment(1) == 'question' && $this->uri->segment(2) == 'listing'){echo 'active';} ?>"><a href="<?= base_url(); ?>question/listing"><i class="fa fa-circle-o"></i> List</a></li>
                    
                </ul>
            </li>
            
                      
        </ul>
    </li>
    <li class="treeview">
        <a href="<?= base_url(); ?>#">
            <i class="fa fa-pie-chart"></i>
            <span>Charts</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?= base_url(); ?>pages/charts/chartjs.html"><i class="fa fa-circle-o"></i> ChartJS</a></li>
            <li><a href="<?= base_url(); ?>pages/charts/morris.html"><i class="fa fa-circle-o"></i> Morris</a></li>
            <li><a href="<?= base_url(); ?>pages/charts/flot.html"><i class="fa fa-circle-o"></i> Flot</a></li>
            <li><a href="<?= base_url(); ?>pages/charts/inline.html"><i class="fa fa-circle-o"></i> Inline charts</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="<?= base_url(); ?>#">
            <i class="fa fa-laptop"></i>
            <span>UI Elements</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?= base_url(); ?>pages/UI/general.html"><i class="fa fa-circle-o"></i> General</a></li>
            <li><a href="<?= base_url(); ?>pages/UI/icons.html"><i class="fa fa-circle-o"></i> Icons</a></li>
            <li><a href="<?= base_url(); ?>pages/UI/buttons.html"><i class="fa fa-circle-o"></i> Buttons</a></li>
            <li><a href="<?= base_url(); ?>pages/UI/sliders.html"><i class="fa fa-circle-o"></i> Sliders</a></li>
            <li><a href="<?= base_url(); ?>pages/UI/timeline.html"><i class="fa fa-circle-o"></i> Timeline</a></li>
            <li><a href="<?= base_url(); ?>pages/UI/modals.html"><i class="fa fa-circle-o"></i> Modals</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="<?= base_url(); ?>#">
            <i class="fa fa-edit"></i> <span>Forms</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="pages/forms/general.html"><i class="fa fa-circle-o"></i> General Elements</a></li>
            <li><a href="<?= base_url(); ?>pages/forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
            <li><a href="<?= base_url(); ?>pages/forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="<?= base_url(); ?>#">
            <i class="fa fa-table"></i> <span>Tables</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?= base_url(); ?>pages/tables/simple.html"><i class="fa fa-circle-o"></i> Simple tables</a></li>
            <li><a href="<?= base_url(); ?>pages/tables/data.html"><i class="fa fa-circle-o"></i> Data tables</a></li>
        </ul>
    </li>
    <li>
        <a href="<?= base_url(); ?>pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Calendar</span>
            <span class="pull-right-container">
                <small class="label pull-right bg-red">3</small>
                <small class="label pull-right bg-blue">17</small>
            </span>
        </a>
    </li>
    <li>
        <a href="<?= base_url(); ?>pages/mailbox/mailbox.html">
            <i class="fa fa-envelope"></i> <span>Mailbox</span>
            <span class="pull-right-container">
                <small class="label pull-right bg-yellow">12</small>
                <small class="label pull-right bg-green">16</small>
                <small class="label pull-right bg-red">5</small>
            </span>
        </a>
    </li>
    <li class="treeview">
        <a href="<?= base_url(); ?>#">
            <i class="fa fa-folder"></i> <span>Examples</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?= base_url(); ?>pages/examples/invoice.html"><i class="fa fa-circle-o"></i> Invoice</a></li>
            <li><a href="<?= base_url(); ?>pages/examples/profile.html"><i class="fa fa-circle-o"></i> Profile</a></li>
            <li><a href="<?= base_url(); ?>pages/examples/login.html"><i class="fa fa-circle-o"></i> Login</a></li>
            <li><a href="<?= base_url(); ?>pages/examples/register.html"><i class="fa fa-circle-o"></i> Register</a></li>
            <li><a href="<?= base_url(); ?>pages/examples/lockscreen.html"><i class="fa fa-circle-o"></i> Lockscreen</a></li>
            <li><a href="<?= base_url(); ?>pages/examples/404.html"><i class="fa fa-circle-o"></i> 404 Error</a></li>
            <li><a href="<?= base_url(); ?>pages/examples/500.html"><i class="fa fa-circle-o"></i> 500 Error</a></li>
            <li><a href="<?= base_url(); ?>pages/examples/blank.html"><i class="fa fa-circle-o"></i> Blank Page</a></li>
            <li><a href="<?= base_url(); ?>pages/examples/pace.html"><i class="fa fa-circle-o"></i> Pace Page</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="<?= base_url(); ?>#">
            <i class="fa fa-share"></i> <span>Multilevel</span>
            <span class="pull-right-container">
                <i class="fa fa-angle-left pull-right"></i>
            </span>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?= base_url(); ?>#"><i class="fa fa-circle-o"></i> Level One</a></li>
            <li>
                <a href="<?= base_url(); ?>#"><i class="fa fa-circle-o"></i> Level One
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="<?= base_url(); ?>#"><i class="fa fa-circle-o"></i> Level Two</a></li>
                    <li>
                        <a href="<?= base_url(); ?>#"><i class="fa fa-circle-o"></i> Level Two
                            <span class="pull-right-container">
                                <i class="fa fa-angle-left pull-right"></i>
                            </span>
                        </a>
                        <ul class="treeview-menu">
                            <li><a href="<?= base_url(); ?>#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                            <li><a href="<?= base_url(); ?>#"><i class="fa fa-circle-o"></i> Level Three</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li><a href="<?= base_url(); ?>#"><i class="fa fa-circle-o"></i> Level One</a></li>
        </ul>
    </li>
    <li><a href="<?= base_url(); ?>documentation/index.html"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
    <li class="header">LABELS</li>
    <li><a href="<?= base_url(); ?>#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
    <li><a href="<?= base_url(); ?>#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
    <li><a href="<?= base_url(); ?>#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
</ul>
<?php endif;?>
</section>
<!-- /.sidebar -->
</aside>
