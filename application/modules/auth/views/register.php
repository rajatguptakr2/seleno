<?php $this->load->view('header', $title); ?>

<body class="hold-transition register-page">
    <div class="container" style=" max-width: 360px; ">
        <div class="row">
            <div class="register_panel panel-primary">
                <div class="panel-body">
                    <?php echo $this->session->flashdata("message"); ?>
                    <form method="POST" action="" class="signupSubmit">
                        <div class="form-group">
                            <h2><?php echo @$page_title; ?></h2>
                        </div>


                        <div class="row">
                            <div class="col-sm-6 form-group">
                                <label for="fname">First Name<span class="star_red">*</span></label>
                                <input type="text" id="fname" name="fname" value="<?php echo set_value("fname"); ?>" placeholder="First Name" class="form-control">
                                <span class="form_error"> <b><?php echo strip_tags(form_error("fname")); ?></b></span>
                            </div>
                            <div class="col-sm-6 form-group">
                                <label for="lname">Last Name<span class="star_red">*</span></label>
                                <input type="text" id="lname" name="lname" value="<?php echo set_value("lname"); ?>" placeholder="Last Name" class="form-control">
                                <span class="form_error"> <b><?php echo strip_tags(form_error("lname")); ?></b></span>
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="signupEmail">Email<span class="star_red">*</span></label>
                            <input id="signupEmail" placeholder="Email" value="<?php echo set_value("email"); ?>" name="email" type="text" maxlength="50" class="form-control">
                            <span class="form_error"> <b><?php echo strip_tags(form_error("email")); ?></b></span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="signupEmailagain">Contact Number<span class="star_red">*</span></label>
                            <input id="signupEmailagain" type="text" value="<?php echo set_value("contactno"); ?>" name="contactno" placeholder="Contact Number" maxlength="50" class="form-control">
                            <span class="form_error"> <b><?php echo strip_tags(form_error("contactno")); ?></b></span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="signupPassword">Password<span class="star_red">*</span></label>
                            <input id="signupPassword" type="password" name="password" maxlength="25" class="form-control" placeholder="At least 6 characters" length="40">
                            <span class="form_error"> <b><?php echo strip_tags(form_error("password")); ?></b></span>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="signupPasswordagain">Confirm Password<span class="star_red">*</span></label>
                            <input id="signupPasswordagain" type="password" name="cpassword" maxlength="25" placeholder="Enter password again" class="form-control">
                            <span class="form_error"> <b><?php echo strip_tags(form_error("cpassword")); ?></b></span>
                        </div>
                        <div class="form-group">
                            <button id="signupSubmit" type="submit" class="btn btn-info btn-block">Create your account</button>
                        </div>
                        <p></p>Already have an account? <a href="<?= base_url('auth/login') ?>">Sign in</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?= $this->load->view('footer') ?>
    <script>
        $('.signupSubmit').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'form_error', // default input error message class
            focusInvalid: false, // do not focus the last invalid input
            rules: {
                email: {
                    required: true,
                    email: true
                }
            },

            messages: {
                email: {
                    required: "Email is required."
                }
            },

            submitHandler: function (form) {
                form.submit();
            }
        });
    </script>
