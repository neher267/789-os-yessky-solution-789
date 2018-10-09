'<!DOCTYPE html>
<html lang="en-US">

<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-param" content="_csrf-client">
    <title>SKY | Dashboard</title>   

    <script>
        var baseUrl = "";
    </script>

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&amp;subset=all" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/font-awesome/css/font-awesome.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/css/components-rounded.min.css" rel="stylesheet">

    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/css/plugins.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/layouts/layout/css/layout.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/layouts/layout/css/themes/default.min.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/bootstrap-sweetalert/sweetalert.css" rel="stylesheet">
    <link href="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/bootstrap-timepicker/css/bootstrap-timepicker.css" rel="stylesheet">

    <!-- datepcker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <!-- end datepicker -->

    <!-- datatable -->
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/dataTables.bootstrap.min.css">
    <!-- end datatable -->

    <link href="{{asset('backend/clint/css/custom.css?v=1.42a')}}" rel="stylesheet">
    <link href="{{asset('backend/clint/assets/4a47db2a/css/common.css')}}" rel="stylesheet">
</head>

<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white">
    <div class="page-wrapper">

        @include('backend.partials._header')
        <div class="clearfix"> </div>
        <div class="page-container">

            @include('backend.partials._sidebar')
            <div class="page-content-wrapper">
                @yield('content')''
            </div>
        </div>
        @include('backend.partials._lisence-modal')

        <div class="page-footer">
            <div class="page-footer-inner">
                2018 &copy; {{config('app.name')}} (Pvt.) Co. Ltd </div>
            <div class="scroll-to-top">
                <i class="icon-arrow-up"></i>
            </div>
        </div>
    </div>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/jquery-slimscroll/jquery.slimscroll.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/jquery.blockui.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/scripts/app.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/layouts/layout/scripts/layout.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/layouts/global/scripts/quick-sidebar.min.js"></script>

    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/bootstrap-sweetalert/sweetalert.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/pages/scripts/ui-sweetalert.min.js"></script>
    <script src="https://s3-ap-southeast-1.amazonaws.com/a1.pod/theme/v4.7.5/assets/global/plugins/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>

    <script src="{{asset('backend/clint/assets/4a47db2a/js/main.js')}}"></script>
    
    <script src="{{asset('frontend/app.js')}}"></script>

    <script type="text/javascript">
        $(document).ready(function() {
            $('.flash').delay(7000).fadeOut(1000);

            $(".change-status").change(function(){
                result = confirm('Are you sure want to change status?');
                if (result) { $('#status-form').submit(); }
            });
        } );
    </script>

    <!-- datepcker -->
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script>
    $(function() {
        $( ".datepicker" ).datepicker();
    } );
    </script>
    <!-- end datepicker --> 

    <!-- datatable -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.19/js/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.datatable').DataTable( {
                "ordering": false,
            } );
        });
    </script>
    <!-- end datatable -->

    <script>
    var separator = '<span class="pod-time-separator"></span>';

    var utc = new Date(Date.UTC(2018,10,8,4,10,30));
    
    var bst = utc;
    bst.setHours(bst.getUTCHours() + 6);

    setInterval(function() {
        $('.timer-separator').show();
        utc.setUTCSeconds(utc.getUTCSeconds() + 1);
        utcHour = utc.getUTCHours();
        utcMinute = utc.getUTCMinutes();
        utcSecond = utc.getUTCSeconds();
        if(utcHour < 10) utcHour = '0' + utcHour;
        if(utcMinute < 10) utcMinute = '0' + utcMinute;
        if(utcSecond < 10) utcSecond = '0' + utcSecond;

        $('.utc-hour').text(utcHour);
        $('.utc-minute').text(utcMinute);
        $('.utc-second').text(utcSecond);


//        bst.setSeconds(bst.getSeconds() + 1);
        bstHour = bst.getHours();
        bstMinute = bst.getMinutes();
        bstSecond = bst.getSeconds();
        if(bstHour < 10) bstHour = '0' + bstHour;
        if(bstMinute < 10) bstMinute = '0' + bstMinute;
        if(bstSecond < 10) bstSecond = '0' + bstSecond;

        $('.bst-hour').text(bstHour);
        $('.bst-minute').text(bstMinute);
        $('.bst-second').text(bstSecond);
    }, 1000);
</script>

</body>
</html>