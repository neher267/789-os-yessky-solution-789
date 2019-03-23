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

    <form id="operator-create-ajax" action="{{route('operators.update', $operator)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group field-operatorform-name required">
                    <label class="control-label" for="operatorform-name">Name</label>
                    <input value="{{$operator->name}}" id="operatorform-name" class="form-control input-field" name="name" required type="text">

                    <div class="help-block"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group field-operatorform-address_line_1 required">
                    <label class="control-label" for="operatorform-address_line_1">Billing Address</label>
                    <input id="operatorform-address_line_1" class="form-control input-field" name="address_line_1" type="text" value="{{$operator->address_line_1}}">

                    <div class="help-block"></div>
                </div>
            </div>
        </div>
        

        <div class="row">
            <div class="col-md-6 modal-select2">
                <div class="form-group field-operatorform-operator required">
                    <label class="control-label" for="operatorform-operator">Country</label>
                    <select id="operatorform-operator" class="form-control input-field" name="country_id">
                        <option value="">Select</option>
                        @foreach($options as $option)
                        <option value="{{$option->id}}" {{$option->id == $operator->country_id ? "selected":""}}>{{$option->name}}</option>
                        @endforeach 

                    </select>
                    <div class="help-block"></div>
                </div>
            </div>
            <div class="col-md-6 modal-select2">
                <div class="form-group field-operatorform-city">
                    <label class="control-label" for="icao">ICAO</label>
                    <input id="icao" class="form-control input-field" name="icao" type="text" value="{{$operator->icao}}">

                    <div class="help-block"></div>
                </div>

            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group field-operatorform-business_phone_extension ">
                    <label class="control-label" for="operatorform-callsign">Callsign</label>
                    <input id="operatorform-callsign" class="form-control input-field" name="callsign" type="text" value="{{$operator->callsign}}">

                    <div class="help-block"></div>
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
