@extends('backend.master')

@section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">

    <!-- BEGIN CONTENT -->
    <hr>
    <h1 class="page-title" style="text-transform: capitalize; text-align: center;">{{$page_title}}</h1>

    <div class="clearfix"></div>

    @include('backend.partials.flash')
    @include('backend.partials.errors')

    <form id="operator-create-ajax" action="{{route('airports.update', $airport)}}" method="post">
        {{ method_field('PUT') }}
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group field-operatorform-name required">
                    <label class="control-label" for="operatorform-name">Name</label>
                    <input id="operatorform-name" class="form-control input-field" name="name" required type="text" value="{{$airport->name}}">
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group field-operatorform-address_line_1 required">
                    <label class="control-label" for="operatorform-address_line_1">Address</label>
                    <input id="operatorform-address_line_1" class="form-control input-field" name="address" type="text" value="{{$airport->address}}">
                </div>
            </div>
        </div>

        

        <div class="row">
            <div class="col-md-6 modal-select2">
                <div class="form-group field-operatorform-country required">
                    <label class="control-label" for="operatorform-country">Country</label>
                    <select id="operatorform-country" class="form-control input-field" name="country_id">
                        <option value="">Select</option>
                        @foreach($options as $option)
                        <option value="{{$option->id}}" {{$airport->country_id == $option->id ? 'selected':''}}>{{$option->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-md-6 modal-select2">
                <div class="form-group field-operatorform-city">
                    <label class="control-label" for="operatorform-city">City</label>
                    <input id="operatorform-business_phone" class="form-control input-field" name="city" type="text"  value="{{$airport->city}}">
                </div>
            </div>
        </div>       

        

        <div class="row">
            <div class="col-md-12">
                <div class="form-group field-operatorform-comment">
                    <label class="control-label" for="operatorform-comment">Additional Notes</label>
                    <textarea  id="operatorform-comment" class="form-control input-field" name="info">{{$airport->info}}</textarea>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Update</button>
        </div>
    </form>
<!-- END CONTENT -->
</div>
<!-- END CONTENT BODY -->
@endsection
