<!DOCTYPE html>
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

    <style type="text/css">
        .page-sidebar, .page-sidebar-closed.page-sidebar-fixed .page-sidebar:hover {
            background-color: #0e4060;
        }

        .form-wizard .steps>li.active>a.step .number {
            background-color: #f36a5a;
            color: #fff;
        }
    </style>
</head>


<body class="page-header-fixed page-sidebar-closed-hide-logo page-content-white" style="background-color: #0e4060;">
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
    <script src="{{asset('backend/clint/js/danger-goods-alert.js')}}"></script>

    <script src="{{asset('frontend/app.js')}}"></script>
    <script src="https://unpkg.com/axios/dist/axios.min.js"></script>

    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>


    <!-- neher -->
    <script type="text/javascript">



        $(document).ready(function() {
            $('#operatorname').keyup(function(){   
                var value = this.value;
                var body = $("#t-body");
                if (value.length > 1) {
                    axios.post('<?php echo url('get-operators') ?>', {
                        operator: value,
                    })
                    .then(function (response) {                        
                        var aaa = ''
                        body.html(aaa);
                        
                        if (response.data.length>0) {
                            for (var i = 0; i < response.data.length; i++) {
                                var id = response.data[i].id+'uniqueid';
                                aaa+= '<tr> <td id="'+id+'name">'+response.data[i].name+'</td><td id="'+id+'address">'+response.data[i].address_line_1+'</td><td> <button id="'+id+'" class="btn btn-primary btn-xs" type="button" onclick="operator_autocom(id, '+response.data[i].id+')">Ok</button> </td></tr>';
                            }
                        } else{
                            aaa+= '<tr><td colspan="3"><button id="'+id+'" class="btn btn-primary btn-xs" type="button" data-toggle="modal" data-target="#operator-create-modal">Add New Operator</button></td></tr>';
                        }

                        $("#operator-list").css({"display":"block"});
                        body.html(aaa);
                        //console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }                
            });


            $('#depFrom').keyup(function(){   
                var value = this.value;
                var body = $("#airport-list");
                if (value.length > 1) {
                    axios.post('<?php echo url('get-airports') ?>', {
                        name: value,
                    })
                    .then(function (response) {                        
                        var aaa = ''
                        body.html(aaa);
                        
                        if (response.data.length>0) {
                            for (var i = 0; i < response.data.length; i++) {
                                var id = response.data[i].id+'uniqueid';                               

                                aaa+= '<option value="'+id+'">'+response.data[i].name+'</option>';
                            }
                            
                            body.html(aaa);
                            $("#airport-list").css({"display":"block"});
                            $("#add-airport").css({"display":"none"});
                        } else{   
                            $("#airport-list").css({"display":"none"});
                            $("#add-airport").css({"display":"block"});                      
                        }                        
                        //console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }                
            });

            $('#goingDepFrom').keyup(function(){   
                var value = this.value;
                var body = $("#airport-list3");
                if (value.length > 1) {
                    axios.post('<?php echo url('get-airports') ?>', {
                        name: value,
                    })
                    .then(function (response) {                        
                        var aaa = ''
                        body.html(aaa);
                        
                        if (response.data.length>0) {
                            for (var i = 0; i < response.data.length; i++) {
                                var id = response.data[i].id+'uniqueid';                               

                                aaa+= '<option value="'+id+'">'+response.data[i].name+'</option>';
                            }
                            
                            body.html(aaa);
                            $("#airport-list3").css({"display":"block"});
                            $("#add-airport3").css({"display":"none"});
                        } else{   
                            $("#airport-list3").css({"display":"none"});
                            $("#add-airport3").css({"display":"block"});                      
                        }                        
                        //console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }                
            });

            $('#arrTo').keyup(function(){   
                var value = this.value;
                var body = $("#airport-list2");
                if (value.length > 1) {
                    axios.post('<?php echo url('get-airports') ?>', {
                        name: value,
                    })
                    .then(function (response) {                        
                        var aaa = ''
                        body.html(aaa);
                        
                        if (response.data.length>0) {
                            for (var i = 0; i < response.data.length; i++) {
                                var id = response.data[i].id+'uniqueid';                               

                                aaa+= '<option value="'+id+'">'+response.data[i].name+'</option>';
                            }
                            
                            body.html(aaa);
                            $("#airport-list2").css({"display":"block"});
                            $("#add-airport2").css({"display":"none"});
                        } else{   
                            $("#airport-list2").css({"display":"none"});
                            $("#add-airport2").css({"display":"block"});                      
                        }                        
                        //console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }                
            });

            $('#goingArrTo').keyup(function(){   
                var value = this.value;
                var body = $("#airport-list4");
                if (value.length > 1) {
                    axios.post('<?php echo url('get-airports') ?>', {
                        name: value,
                    })
                    .then(function (response) {                        
                        var aaa = ''
                        body.html(aaa);
                        
                        if (response.data.length>0) {
                            for (var i = 0; i < response.data.length; i++) {
                                var id = response.data[i].id+'uniqueid';                               

                                aaa+= '<option value="'+id+'">'+response.data[i].name+'</option>';
                            }
                            
                            body.html(aaa);
                            $("#airport-list4").css({"display":"block"});
                            $("#add-airport4").css({"display":"none"});
                        } else{   
                            $("#airport-list4").css({"display":"none"});
                            $("#add-airport4").css({"display":"block"});                      
                        }                        
                        //console.log(response);
                    })
                    .catch(function (error) {
                        console.log(error);
                    });
                }                
            });

        });

    </script>    

    <script type="text/javascript">
        
        function operator_autocom(id, oppid)
        {
            $('#operatorname').val($('#'+id+'name').html());
            $('#billingaddress').html($('#'+id+'address').html());
            $("#operator-list").css({"display":"none"});            
        }        
    </script>


    <script type="text/javascript">
        $(document).ready(function() {
            $('.flash').delay(7000).fadeOut(1000);

            $(".change-status").change(function(){
                result = confirm('Are you sure want to change status?');
                if (result) { $('#status-form').submit(); }
            });
        } );
    </script>

    <!-- end neher -->

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

    var date = new Date();
    var utc = new Date(Date.UTC(date.getUTCFullYear(), date.getUTCMonth(), date.getUTCDate(),
                        date.getUTCHours(), date.getUTCMinutes(), date.getUTCSeconds()));
    
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