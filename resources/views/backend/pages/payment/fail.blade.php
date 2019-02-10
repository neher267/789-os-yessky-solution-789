@extends('backend.master') @section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <div class="form-wizard">
        <div class="form-body">
        	<h1 class="page-title" style="text-align: center; font-size: 30px; color: red;">Payment Failed!</h1>
        	<div>
        		{{$errorDes}}
        	</div>
        </div>
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTENT BODY -->

@endsection