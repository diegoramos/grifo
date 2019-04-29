<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width initial-scale=1.0">
    <title>Creativo | Login</title>
    <!-- GLOBAL MAINLY STYLES-->
    <link href="<?php echo base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/vendors/themify-icons/css/themify-icons.css" rel="stylesheet" />
    <!-- THEME STYLES-->
    <link href="<?php echo base_url()?>assets/css/main.css" rel="stylesheet" />
    <!-- PAGE LEVEL STYLES-->
    <link href="<?php echo base_url()?>assets/css/pages/auth-light.css" rel="stylesheet" />
</head>

<body class="bg-silver-300">
    <div class="content">
        <button id="error" class="btn btn-danger btn-block"></button>
        <button id="redirect" class="btn btn-success btn-block "><i class="fa fa-check"></i> Login Successful. Redirecting ....</button>
        <?php
        $msg=$this->session->userdata('message');
        if($msg){
            echo "<button id='flash' class='btn btn-info btn-block'><i class='fa fa-thumbs-up'></i> ".$msg."</button>";
            $this->session->unset_userdata('message');
        }
        ?>
        <div class="brand">
            <a class="link" href="<?php echo base_url() ?>login">GRIFOS DIANA SAC</a>
        </div>
        <form id="login" action="javascript:;" method="post">
            <h2 class="login-title">Ingresar</h2>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-user"></i></div>
                    <input class="form-control" type="text" name="username" placeholder="Usuario" autocomplete="off">
                </div>
            </div>
            <div class="form-group">
                <div class="input-group-icon right">
                    <div class="input-icon"><i class="fa fa-lock font-16"></i></div>
                    <input class="form-control" type="password" name="password" placeholder="Password">
                </div>
            </div>
            <div class="form-group d-flex justify-content-between">
                <label class="ui-checkbox ui-checkbox-info">
                    <input type="checkbox">
                    <span class="input-span"></span>Remember me</label>
                <a href="<?php echo base_url() ?>login/forgot_password">Forgot password?</a>
            </div>
            <div class="form-group">
                <button id="sign" type="submit" class="btn btn-info btn-block">Login</button>
                <button id="auth" class="btn btn-info btn-block">Authenticating <i class='fa fa-spinner'></i></button>
            </div>
            <div class="social-auth-hr">
                <span>Or login with</span>
            </div>
            <div class="text-center social-auth m-b-20">
                <a class="btn btn-social-icon btn-twitter m-r-5" href="javascript:;"><i class="fa fa-twitter"></i></a>
                <a class="btn btn-social-icon btn-facebook m-r-5" href="javascript:;"><i class="fa fa-facebook"></i></a>
                <a class="btn btn-social-icon btn-google m-r-5" href="javascript:;"><i class="fa fa-google-plus"></i></a>
                <a class="btn btn-social-icon btn-linkedin m-r-5" href="javascript:;"><i class="fa fa-linkedin"></i></a>
                <a class="btn btn-social-icon btn-vk" href="javascript:;"><i class="fa fa-vk"></i></a>
            </div>
        </form>
    </div>
    <!-- BEGIN PAGA BACKDROPS-->
    <div class="sidenav-backdrop backdrop"></div>
    <div class="preloader-backdrop">
        <div class="page-preloader">Loading</div>
    </div>
    <!-- END PAGA BACKDROPS-->
    <!-- CORE PLUGINS -->
    <script src="<?php echo base_url()?>assets/vendors/jquery/dist/jquery.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/vendors/popper.js/dist/umd/popper.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/vendors/bootstrap/dist/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- PAGE LEVEL PLUGINS -->
    <script src="<?php echo base_url()?>assets/vendors/jquery-validation/dist/jquery.validate.min.js" type="text/javascript"></script>
    <!-- CORE SCRIPTS-->
    <script src="<?php echo base_url()?>assets/js/app.js" type="text/javascript"></script>
    <script src="<?php echo base_url()?>assets/js/login.js" type="text/javascript"></script>
    <!-- PAGE LEVEL SCRIPTS-->
    <script type="text/javascript">

        var base_url = '<?php echo base_url(); ?>';

        $(function() {
            $('#login-form').validate({
                errorClass: "help-block",
                rules: {
                    username: {
                        required: true
                    },
                    password: {
                        required: true
                    }
                },
                highlight: function(e) {
                    $(e).closest(".form-group").addClass("has-error")
                },
                unhighlight: function(e) {
                    $(e).closest(".form-group").removeClass("has-error")
                },
            });
        });
    </script>
</body>

</html>