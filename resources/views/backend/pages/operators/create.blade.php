@extends('backend.master')

@section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">

    <!-- BEGIN CONTENT -->
    <hr>
    <h1 class="page-title" style="text-transform: capitalize; text-align: center; font-weight: bold;">{{$page_title}}</h1>

    <div class="clearfix"></div>

    @include('backend.partials.flash')
    @include('backend.partials.errors')

    <form id="operator-create-ajax" action="{{route('operators.store')}}" method="post">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group field-operatorform-name required">
                    <label class="control-label" for="operatorform-name">Name</label>
                    <input id="operatorform-name" class="form-control input-field" name="name" required type="text">

                    <div class="help-block"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group field-operatorform-address_line_1 required">
                    <label class="control-label" for="operatorform-address_line_1">Billing Address</label>
                    <input id="operatorform-address_line_1" class="form-control input-field" name="address_line_1" type="text">

                    <div class="help-block"></div>
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
                        <option value="{{$option->id}}">{{$option->name}}</option>
                        @endforeach 

                    </select>
                    <div class="help-block"></div>
                </div>
            </div>
            <div class="col-md-6 modal-select2">
                <div class="form-group field-operatorform-city">
                    <label class="control-label" for="icao">ICAO</label>
                    <input id="icao" class="form-control input-field" name="icao" type="text">

                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="row">            
            <div class="col-md-6">
                <div class="form-group field-operatorform-business_phone_extension ">
                    <label class="control-label" for="operatorform-callsign">Callsign</label>
                    <input id="operatorform-callsign" class="form-control input-field" name="callsign" type="text">

                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Add New</button>
        </div>
    </form>
<!-- END CONTENT -->
</div>
<!-- END CONTENT BODY -->
@endsection
