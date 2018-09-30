@extends('backend.master')

@section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">

    @include('backend.partials._search')
    <!-- BEGIN CONTENT -->
    <h1 class="page-title">Customer Portal</h1>
    <br>
    
    @include('backend.partials._requests')

    <div id="permit-overfly-selection-area" style="display:none;">
        <div class="pod-dash-button-area">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 blue2 btn blue-madison" href="permit/request-overfly">
                        <div class="visual"></div>
                        <div class="details pull-left">
                            <div class="number">
                                Regular
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 blue2 btn blue-madison" href="permit/request-overfly?emergency=1">
                        <div class="visual"></div>
                        <div class="details pull-left">
                            <div class="number">
                                Emergency
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div id="permit-landing-selection-area" style="display:none;">
        <div class="pod-dash-button-area">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 green2 btn green-meadow" href="permit/request-landing">
                        <div class="visual"></div>
                        <div class="details pull-left">
                            <div class="number">
                                Regular
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                    <a class="dashboard-stat dashboard-stat-v2 green2 btn green-meadow" href="permit/request-landing?emergency=1">
                        <div class="visual"></div>
                        <div class="details pull-left">
                            <div class="number">
                                Emergency
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>

    @include('backend.partials._requests-results')
    <!-- END CONTENT -->

</div>
<!-- END CONTENT BODY -->
@endsection