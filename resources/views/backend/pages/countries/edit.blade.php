@extends('backend.master')

@section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">

    <!-- BEGIN CONTENT -->
    <hr>
    <h1 class="page-title" style="text-transform: capitalize; text-align: center;">Edit Country</h1>
    <hr>

    <div class="clearfix"></div>

    @include('backend.partials.flash')
    @include('backend.partials.errors')

    <form id="operator-create-ajax" action="{{route('countries.update', $country)}}" method="post">
        {{ csrf_field() }}
        {{ method_field('PUT') }}

        <div class="row">
            <div class="col-md-6">
                <div class="form-group field-operatorform-name required">
                    <label class="control-label" for="operatorform-name">Name</label>
                    <input value="{{$country->name}}" id="operatorform-name" class="form-control input-field" name="name" required type="text">

                    <div class="help-block"></div>
                </div>
            </div>

            <div class="col-md-6">
                <div class="form-group field-operatorform-ahort-name required">
                    <label class="control-label" for="operatorform-ahort-name">Short Name</label>
                    <input value="{{$country->short_name}}" id="operatorform-ahort-name" class="form-control input-field" name="short_name" required type="text">

                    <div class="help-block"></div>
                </div>
            </div>

            <div class="col-md-6 modal-select2">
                <div class="form-group field-operatorform-continet required">
                    <label class="control-label" for="operatorform-continet">Continent</label>
                    <select id="operatorform-continet" class="form-control input-field" name="continent_id" required>
                        <option value="">Select</option>
                         @foreach($continents as $continent)
                         <option value="{{$continent->id}}" {{$country->continent_id == $continent->id ? "selected":""}}>{{$continent->name}}</option>
                         @endforeach                  
                     </select>

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
