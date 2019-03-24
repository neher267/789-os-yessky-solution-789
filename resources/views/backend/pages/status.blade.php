@extends('backend.master')

@section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN CONTENT -->
    <hr>
    <h1 class="page-title" style="text-transform: capitalize; text-align: center; font-weight: bold;"><span style="color: #e7505a">{{$status}}</span> Permit Requests</h1>
    
    <div class="clearfix"></div>

    @include('backend.partials._requests-results')
    <!-- END CONTENT -->
</div>
<!-- END CONTENT BODY -->
@endsection