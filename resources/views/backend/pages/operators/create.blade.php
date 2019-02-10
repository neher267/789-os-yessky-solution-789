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
                <div class="form-group field-operatorform-email">
                    <label class="control-label" for="operatorform-email">Email</label>
                    <input id="operatorform-email" class="form-control input-field" name="email" maxlength="" type="email">

                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group field-operatorform-address_line_1 required">
                    <label class="control-label" for="operatorform-address_line_1">Billing Address Line 1</label>
                    <input id="operatorform-address_line_1" class="form-control input-field" name="address_line_1" type="text">

                    <div class="help-block"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group field-operatorform-address_line_2">
                    <label class="control-label" for="operatorform-address_line_2">Billing Address Line 2</label>
                    <input id="operatorform-address_line_2" class="form-control input-field" name="address_line_2" type="text">

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
                    <label class="control-label" for="operatorform-city">City</label>
                    <input id="operatorform-business_phone" class="form-control input-field" name="city_id" type="text">

                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group field-operatorform-business_phone">
                    <label class="control-label" for="operatorform-business_phone">Contact</label>
                    <input id="operatorform-business_phone" class="form-control input-field" name="business_phone" type="text">

                    <div class="help-block"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group field-operatorform-business_phone_extension ">
                    <label class="control-label" for="operatorform-business_phone_extension">Extension</label>
                    <input id="operatorform-business_phone_extension" class="form-control input-field" name="business_phone_extension" type="text">

                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-6">
                <div class="form-group field-operatorform-postal_code">
                    <label class="control-label" for="operatorform-postal_code">Postal Code</label>
                    <input id="operatorform-postal_code" class="form-control input-field" name="postal_code" type="text">

                    <div class="help-block"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-group field-operatorform-fax_number">
                    <label class="control-label" for="operatorform-fax_number">Fax Number</label>
                    <input id="operatorform-fax_number" class="form-control input-field" name="fax_number" type="text">

                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <!-- <div class="row">
            <div class="col-md-6 modal-select2">
                <div class="form-group field-operatorform-icao">
                    <label class="control-label" for="operatorform-icao">Nearest Operating Airport (ICAO)</label>
                    <select id="operatorform-icao" class="form-control input-field" name="icao">

                    </select>

                    <div class="help-block"></div>
                </div>
            </div>          

        </div> -->

        <div class="row">

            <div class="col-md-6">
                <div class="form-group field-operatorform-comment">
                    <label class="control-label" for="operatorform-comment">Additional Notes</label>
                    <input id="operatorform-comment" class="form-control input-field" name="comment" type="text">

                    <div class="help-block"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group field-operatorform-website">
                    <label class="control-label" for="operatorform-website">Website</label>
                    <input id="operatorform-website" class="form-control input-field" name="website" type="text">

                    <div class="help-block"></div>
                </div>
            </div>
        </div>

        <div class="error-block">

        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success">Add new</button>
        </div>
    </form>
<!-- END CONTENT -->
</div>
<!-- END CONTENT BODY -->
@endsection
