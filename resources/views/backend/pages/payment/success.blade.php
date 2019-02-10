@extends('backend.master') @section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <ul class="breadcrumb">
        <li><a href="">Home</a></li>
        <li class="active">Step 1</li>
        <li class="active">Step 2</li>
        <li class="active">Step 3</li>
    </ul>

    
    <div class="form-wizard">
        <div class="form-body">
            <ul class="nav nav-pills nav-justified steps pod-steps">

                <li class="inactive">
                    <a class="">
                        <span class="number"> 1 </span>
                        <span class="desc">
                    <i class="fa fa-check"></i> Flight Info                </span>
                    </a>
                </li>

                <li class="inactive">
                    <a class="">
                        <span class="number"> 2 </span>
                        <span class="desc">
                    <i class="fa fa-check"></i> Payment                </span>
                    </a>
                </li>

                <li class="active">
                    <a class="step active" style="cursor: default;">
                        <span class="number"> 3 </span>
                        <span class="desc">
                    <i class="fa fa-check"></i> Complete                </span>
                    </a>
                </li>

            </ul>
            <div id="1bar" class="progress progress-striped active" role="progressbar">
                <div class="progress-bar progress-bar-success" style="width:100%"></div>
            </div>

            <h1 class="page-title" style="text-align: center; font-size: 30px; color: #1bbc9b;">Final Step</h1>

            <div>
                <form action="#" method="post">
                    {{ csrf_field() }}
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-body">
                                    <div class="form-horizontal">
                                        //
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" style="margin-left: 45%">Complete</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTENT BODY -->

@endsection