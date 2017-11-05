<?php $this->load->view('header', $title); ?>

<body class="hold-transition register-page">
    <div class="container" style=" max-width: 360px; ">
        <div class="row">
            <div class="login_panel panel-primary">
                <div class="panel-body">
                    <div class="row"><div class="col-md-12"> <?php echo get_flashdata(); ?> </div></div>
                    <form method="POST" action="" class="loginSubmit">
                        <div class="form-group">
                            <h2><?php echo @$page_title; ?></h2>
                        </div>
                        <div class="form-group">
                            <label class="control-label" for="signupEmail">Email<span class="star_red">*</span></label>
                            <input id="signupEmail" placeholder="Email" value="<?php echo set_value("email"); ?>" name="email" type="text" maxlength="50" class="form-control">
                            <span class="form_error"> <b><?php echo strip_tags(form_error("email")); ?></b></span>
                        </div>

                        <div class="form-group">
                            <label class="control-label" for="signupPassword">Password<span class="star_red">*</span></label>
                            <input id="signupPassword" type="password" name="password" maxlength="25" class="form-control" placeholder="At least 6 characters" length="40">
                            <span class="form_error"> <b><?php echo strip_tags(form_error("password")); ?></b></span>
                        </div>
                        <div class="form-group">
                            <button id="signupSubmit" type="submit" class="btn btn-info btn-block">Login</button>
                        </div>
                        <hr>
                        <a class="btn btn-block btn-social btn-google">
                            <span class="fa fa-google"></span> Sign in with Google
                        </a>
                         <a class="btn btn-block btn-social btn-facebook">
                            <span class="fa fa-facebook"></span> Sign in with Facebook
                        </a>
                        <p></p>Register with Us? <a href="<?= base_url('auth/register') ?>">Register</a></p>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <?= $this->load->view('footer') ?>
    <script>
        $('.loginSubmit').validate({
            errorElement: 'span', //default input error message container
            errorClass: 'form_error', // default input error message class
            // do not focus the last invalid input
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: {

                    required: true
                }
            },

            messages: {
                email: {
                    required: "Email is required."
                },
                password: {

                    required: "Password is required."
                }
            },

            submitHandler: function (form) {
                form.submit();
            }
        });
    </script>
