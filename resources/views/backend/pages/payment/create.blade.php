@extends('backend.master') @section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <ul class="breadcrumb">
        <li><a href="">Home</a></li>
        <li class="active">Step 1</li>
        <li class="active">Step 2</li>
    </ul>

    
    <div class="form-wizard">
        <div class="form-body">
            <ul class="nav nav-pills nav-justified steps pod-steps">

                <li class="inactive">
                    <a class="step>
                        <span class="number"> 1 </span>
                        <span class="desc">
                    <i class="fa fa-check"></i> Flight Info                </span>
                    </a>
                </li>

                <li class="active" style="cursor: default;">
                    <a class="step inactive" style="cursor: default;">
                        <span class="number"> 2 </span>
                        <span class="desc">
                    <i class="fa fa-check"></i> Payment                </span>
                    </a>
                </li>

                <li class="inactive">
                    <a class="step inactive" style="cursor: default;">
                        <span class="number"> 3 </span>
                        <span class="desc">
                    <i class="fa fa-check"></i> Complete                </span>
                    </a>
                </li>

            </ul>
            <div id="1bar" class="progress progress-striped active" role="progressbar">
                <div class="progress-bar progress-bar-success" style="width:66%"></div>
            </div>

            <h1 class="page-title" style="text-align: center; font-size: 30px; color: #1bbc9b;">Payment Info For OverFly Reauest</h1>

            <div>
                <form action="{{url('dashboard/pay')}}" method="post">
                    {{ csrf_field() }}
                    
                    <div class="row">
                        <div class="col-md-12">
                            <div class="portlet light bordered">
                                <div class="portlet-body">
                                    <div class="form-horizontal">
                                        <div class="form-group required">
                                            <div class="col-md-3 pod-label-text-right">
                                                <label class="control-label" for="total_amount">Total Amount</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="number" id="total_amount" class="form-control" name="total_amount" required readonly value="215">
                                            </div>
                                        </div>

                                        <div class="form-group required">
                                            <div class="col-md-3 pod-label-text-right">
                                                <label class="control-label" for="currency">Currency</label>
                                            </div>
                                            <div class="col-md-7">
                                                <input type="text" id="currency" class="form-control" name="currency" required readonly value="USD">
                                            </div>
                                        </div>

                                        <div class="form-group required">
                                            <div class="col-md-3 pod-label-text-right">
                                                <input type="checkbox" required>
                                            </div>
                                            <div class="col-md-7">
                                                <a target="_blank" href="{{route('terms-and-conditions')}}">I AGREE TERMS AND CONDITIONS</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success" style="margin-left: 45%">Make a Payment</button>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTENT BODY -->

@endsection