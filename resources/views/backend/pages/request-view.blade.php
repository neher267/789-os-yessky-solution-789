@extends('backend.master') @section('content')
<!-- BEGIN CONTENT BODY -->
<style type="text/css">
	.details{
		margin-top: 10px;
		width: 100%;

	}

	.title-head{
		width: 300px;
		font-weight: bold;
		font-size: 16px;
	}
</style>
<div class="page-content">

    <!-- BEGIN CONTENT -->
    <div class="log-payment-index">

        <hr>
        <h1 class="page-title" style="text-align: center; font-weight: bold;">Permit Request Details</h1>
        <hr>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="w0" class="grid-view">
                	<table class="table table-striped table-bordered">
                		<tbody>
                			<tr> <td class="title-head">Name of Operator</td><td>{{$request->operator}}</td></tr> 
							<tr> <td class="title-head">Billing Address </td><td>{{$request->billing_add}}</td></tr>
							<tr> <td class="title-head">Aircraft Registration </td><td>{{$request->aircraft_reg}}</td></tr>
							<tr> <td class="title-head">Call Sign </td><td>{{$request->call_sign}}</td></tr>
							<tr> <td class="title-head">Trip Reference No. </td><td>{{$request->trip_ref_no}}</td></tr>
							<tr> <td class="title-head">Type of Aircraft </td><td>{{$request->aircraft_type}}</td></tr>
							<tr> <td class="title-head">Maximum All up weight</td><td>{{$request->max_weight}} {{$request->max_weight_unit}}</td></tr>
							<tr> <td class="title-head">Flight Rules </td><td>{{$request->flight_rules}}</td></tr>
							<tr> <td class="title-head">Sector </td><td>{{$request->sector}}</td></tr>
							<tr> <td class="title-head">Flight Level </td><td>{{$request->flight_level}}</td></tr>

							<tr> <td class="title-head">Crew Count </td><td>{{$request->crew_count}}</td></tr>
							<tr> <td class="title-head">PAX Count </td><td>{{$request->pax_count}}</td></tr>
							<tr> <td class="title-head">Purpose of Flight </td><td>{{$request->purpose}}</td></tr>
							<tr> <td class="title-head">Notes </td><td>{{$request->notes}}</td></tr>
							<tr> <td class="title-head">Departure Date </td><td>{{$request->depar_date}}</td></tr>
							<tr> <td class="title-head">ETD UTC </td><td>{{$request->etd_utc}}</td></tr>
							<tr> <td class="title-head">Aerodrome of Departure</td><td>{{$request->aerodrome_of_departure}}</td></tr>
							<tr> <td class="title-head">Arrival Date </td><td>{{$request->arri_date}}</td></tr>
							<tr> <td class="title-head">ETA UTC </td><td>{{$request->eta_utc}}</td></tr>
							<tr> <td class="title-head">Aerodrome of Destination</td><td>{{$request->aerodrome_of_estination}}</td></tr>
							<tr> <td class="title-head">FIR In</td><td>{{$request->fir_in}}</td></tr>
							<tr> <td class="title-head">FIR Out </td><td>{{$request->fir_out}}</td></tr>  
                		</tbody>
                	</table>            
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->

</div>
<!-- END CONTENT BODY -->
@endsection
