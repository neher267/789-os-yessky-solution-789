@extends('backend.master')

@section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">

    <!-- BEGIN CONTENT -->
    @if(Auth::user()->role != 'moderator')
        @include('backend.partials._requests')
        <div class="clearfix"></div>
    @else
        @include('backend.partials.home._moderator')
    @endif
    <!-- END CONTENT -->

</div>
<!-- END CONTENT BODY -->
@endsection