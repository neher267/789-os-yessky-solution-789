<!DOCTYPE html>
<html lang="en-US">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="base-url" content="frontend/auth/">
    <title>{{config('app.name')}} | Login</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet">

    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/select2/css/select2.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/select2/css/select2-bootstrap.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/css/components-rounded.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/css/plugins.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/pages/css/login-5.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/pages/css/login-4.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/layouts/layout/css/layout.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/layouts/layout/css/themes/default.min.css" rel="stylesheet">

    <link href="frontend/auth/assets/ed36dc48/css/bootstrap.css" rel="stylesheet">

    <link href="frontend/auth/css/custom.css?v=1.42a" rel="stylesheet">
</head>

<body class=" login login-body">
    <!-- BEGIN : LOGIN PAGE 5-1 -->
    <div class="user-login-5">
        <div class="row bs-reset">
            <div class="col-md-6 bs-reset mt-login-5-bsfix">
                <div class="login-bg">
                    <div style="padding: 20px; background2: rgba(0,0,0,.4);">

                        <a href="frontend/auth/">
                            <img src="https://caab.pod.aero/shared/images/logo/pod_logo_white.svg" alt="logo" class="logo-default login-logo" style="" />
                        </a>
                        <div style="clear: both"></div>
                    </div>
                </div>                
            </div>

            <div class="col-md-6 login-container bs-reset mt-login-5-bsfix">

                <div class="login-content" style="margin-bottom: 360px">

                    <!-- BEGIN LOGO -->
                    <div class="logo text-center">
                        <a href="http://caab.gov.bd" target="_blank">
                            <img src="https://caab.pod.aero/shared/images/logo/caab_logo.svg" alt="CAAB Logo" class="logo-default " style="width: 275px; margin-bottom: 20px;" />
                        </a>
                    </div>
                    <!-- END LOGO -->

                    <div class="container2">
                        <div class="row2">
                            <h3 class="Login-sub-title">
                            <a href="http://caab.gov.bd" target="_blank">
                                Civil Aviation Authority of Bangladesh
                            </a>
                        </h3>
                            <div class="Login-sub-title">
                                Non Schedule Flight Permits
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div class="container2">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <div id="errorContainer">
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-xs-12">
                            <h3 class="form-title custom-title">Login to your account</h3>
                        </div>
                    </div>

                    <form id="w0" class="login-form" action="frontend/auth/" method="post">
                        <input type="hidden" name="_csrf-auth" value="MJM1xMhSubjqssDMfJrLEGqg_mln_ocrVOZd5egzM2ZKymChojvWjYb8j4A2zLIoPOKuUC2m5GAZsjGBvAtbKw==">

                        <div class="row">
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
                                    <label class="control-label visible-ie8 visible-ie9">Username</label>
                                    <div class="input-icon">
                                        <!--                <i class="fa fa-user"></i>-->
                                        <input type="email" id="loginform-username" class="form-control placeholder-no-fix listen-enter trans-background" name="LoginForm[username]" placeholder="Email" required autofocus> </div>
                                    <div class="help-block help-block-error">
                                        <!--                -->
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6">
                                <div class="form-group">
                                    <label class="control-label visible-ie8 visible-ie9">Password</label>
                                    <div class="input-icon">
                                        <!--                <i class="fa fa-lock"></i>-->
                                        <input type="password" id="loginform-password" class="form-control placeholder-no-fix listen-enter trans-background" name="LoginForm[password]" placeholder="Password" required> </div>
                                    <div class="help-block help-block-error">
                                        <!--                -->
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="col-sm-4"></div>
                                <div class="col-sm-8 text-right" style="display: inline-block">
                                    <div class="forgot-password" style="margin-top: 8px">
                                        <a class="forget-password" href="frontend/auth/forgot-password">Forgot Password?</a> </div>
                                    <button type="submit" class="btn green pull-right" name="login-button">Login</button>
                                </div>
                            </div>
                        </div>                        
                    </form>
                    
                </div>
                <div class="login-footer">
                    <div class="row bs-reset">
                        <div class="col-xs-5 bs-reset">

                        </div>
                        <div class="col-xs-7 bs-reset">
                            <div class="login-copyright text-right ">
                                2018 &copy; Aerogon PTE Ltd. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="frontend/auth/assets/7bbf23c/jquery.js"></script>
    <script src="frontend/auth/assets/ed36dc48/js/bootstrap.js"></script>
    <script src="frontend/auth/assets/f6ed14de/yii.js"></script>
    <script src="frontend/auth/assets/f6ed14de/yii.activeForm.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/respond.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/excanvas.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/ie8.fix.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/js.cookie.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/jquery.blockui.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/jquery-validation/js/jquery.validate.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/jquery-validation/js/additional-methods.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/select2/js/select2.full.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/backstretch/jquery.backstretch.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/scripts/app.min.js"></script>
    <script src="frontend/auth/js/login-5v2.js"></script>
    <script src="https://caab.pod.aero/shared/js/common.js?v=1.42a"></script>
    <script>
        jQuery(function($) {
            jQuery('#w0').yiiActiveForm([], []);
        });
    </script>
    <script>
        $(document).ready(function() {
            $('#loginBoxContainer').fadeIn();
        });
    </script>

    <script src="app.js"></script>

</body>

</html>