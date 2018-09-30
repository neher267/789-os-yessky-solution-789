<!DOCTYPE html>
<html lang="en-US">

<head>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/pace/pace.min.js" type="text/javascript"></script>
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/pace/themes/pace-theme-flash.css" rel="stylesheet" type="text/css" />

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf-client">
    <meta name="csrf-token" content="QztoNbUEi-ygaEnpyXUPAQwI7nS_tvOSsKXTUR-fgG0vTSBWh0fPpMkFD7umJ3ppVF6mHIrshOf8_IY5Saq2GQ==">
    <title>POD | Dashboard</title>

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <link rel="shortcut icon" href="favicons/favicon.ico?v=1.02">
    
    <meta name="msapplication-TileColor" content="#FFFFFF">
    <meta name="msapplication-TileImage" content="favicons/favicon-144.png?v=1.02">
    <meta name="msapplication-config" content="favicons/browserconfig.xml">

    <script>
        var baseUrl = "";
        var currentZone = "client";
        //                var sessionTimeout = 180;
        var sessionTimeout = 900;
    </script>

    <link rel="manifest" href="/manifest.json">

    <link href="{{asset('backend/clint/assets/ed36dc48/css/bootstrap.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/simple-line-icons/simple-line-icons.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/bootstrap-switch/css/bootstrap-switch.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/css/components-rounded.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/css/plugins.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/layouts/layout/css/layout.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/layouts/layout/css/themes/default.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet">
    <link href="{{asset('backend/clint/css/custom.css?v=1.42a')}}" rel="stylesheet">
    <link href="{{asset('backend/clint/assets/4a47db2a/css/common.css')}}" rel="stylesheet">
</head>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    <div class="page-wrapper">

        <!-- BEGIN HEADER -->
        @include('backend.partials._header')
        <!-- END HEADER -->

        <!-- BEGIN HEADER & CONTENT DIVIDER -->
        <div class="clearfix"> </div>
        <!-- END HEADER & CONTENT DIVIDER -->
        <!-- BEGIN CONTAINER -->

        <div class="page-container">

            <!-- BEGIN SIDEBAR -->
            @include('backend.partials._sidebar')
            <!-- END SIDEBAR -->
            <!-- BEGIN CONTENT -->
            <div class="page-content-wrapper">
                @yield('content')''
            </div>
            <!-- END CONTENT -->
        </div>
        <!-- END CONTAINER -->

        @include('backend.partials._lisence-modal')

        <script>
            var isUserSignedEULA = false;
            var isEnabledEULA = false;
            var showPopup = false;
            if (isEnabledEULA == true) {
                if (isUserSignedEULA == false) {
                    showPopup = true;
                }
            }
        </script>

        <!-- BEGIN FOOTER -->
        <div class="page-footer">
            <div class="page-footer-inner">
                2018 &copy; Aerogon PTE Ltd. </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
        <!-- END FOOTER -->
    </div>

    <script src="{{asset('backend/clint/assets/7bbf23c/jquery.js')}}"></script>
    <script src="{{asset('backend/clint/assets/ed36dc48/js/bootstrap.js')}}"></script>
    <script src="{{asset('backend/clint/assets/f6ed14de/yii.js')}}"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/js.cookie.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/jquery.blockui.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/scripts/app.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/layouts/layout/scripts/layout.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/layouts/layout/scripts/demo.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/layouts/global/scripts/quick-sidebar.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/layouts/global/scripts/quick-nav.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/pages/scripts/ui-sweetalert.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
    <script src="https://caab.pod.aero/shared/js/session-timeout.js?v=1.42a"></script>
    <script src="{{asset('backend/clint/js/main.js?v=1.42a')}}"></script>
    <script src="https://caab.pod.aero/shared/js/common.js?v=1.42a"></script>
    <script src="{{asset('backend/clint/assets/4a47db2a/js/main.js')}}"></script>
    <script src="{{asset('backend/clint/assets/f6ed14de/yii.activeForm.js')}}"></script>
    <script src="{{asset('backend/clint/assets/48458762/js/eula-confirmation.js')}}"></script>
    <script>
        var separator = '<span class="pod-time-separator"></span>';
        var utc = new Date(Date.UTC(2018, 9, 28, 7, 5, 30));

        var bst = utc;
        bst.setHours(bst.getUTCHours() + 6);

        setInterval(function() {
            $('.timer-separator').show();
            utc.setUTCSeconds(utc.getUTCSeconds() + 1);
            utcHour = utc.getUTCHours();
            utcMinute = utc.getUTCMinutes();
            utcSecond = utc.getUTCSeconds();
            if (utcHour < 10) utcHour = '0' + utcHour;
            if (utcMinute < 10) utcMinute = '0' + utcMinute;
            if (utcSecond < 10) utcSecond = '0' + utcSecond;

            $('.utc-hour').text(utcHour);
            $('.utc-minute').text(utcMinute);
            $('.utc-second').text(utcSecond);

            //        bst.setSeconds(bst.getSeconds() + 1);
            bstHour = bst.getHours();
            bstMinute = bst.getMinutes();
            bstSecond = bst.getSeconds();
            if (bstHour < 10) bstHour = '0' + bstHour;
            if (bstMinute < 10) bstMinute = '0' + bstMinute;
            if (bstSecond < 10) bstSecond = '0' + bstSecond;

            $('.bst-hour').text(bstHour);
            $('.bst-minute').text(bstMinute);
            $('.bst-second').text(bstSecond);
        }, 1000);
    </script>
    <script>
        jQuery(function($) {
            jQuery('#w0').yiiActiveForm([], []);
        });
    </script>
    <script src="{{asset('frontend/app.js')}}"></script>
</body>

</html>