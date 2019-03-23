<div class="portlet light bordered">
    <div class="portlet-title">
        <div style="width: 100%; text-align: center;">
            @if (session('success'))
                <div class="alert alert-success flash" style="color: white; text-transform: capitalize;">
                    {{ session('success') }}
                </div>
            @endif
        </div>
        <div class="caption">
            <span class="caption-subject font-dark2 bold uppercase">Last {{$results->count()}} Requests</span>
        </div>
    </div>
    <div class="portlet-body">
        <div class="permit-list-table table-responsive">
            <table class="datatable table table-striped table-bordered table-hover text-center">
                <thead>
                    <tr class="double-border">
                        <th>OPS Date</th>
                        <th>TG No.</th>
                        <!--                        <th class="note-field">Notes</th>-->
                        <th>Operator Ref. No.</th>
                        <th>Name of Operator</th>
                        <th>Request Type</th>
                        <th>Type of Aircraft</th>
                        <th>Aircraft Registration</th>

                        <th>Callsign</th>
                        <!--                        <th>Progress</th>-->
                        <th>Status</th>
                        <th style="width: 200px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($results as $result)
                    <tr class="">
                        <td class="pod-formatted-date-show2">
                            9th Oct 2018 </td>
                        <td>
                            <span class="nowrap">562-1018</span>
                        </td>
                        <td>
                        </td>
                        <td>
                            {{$result->operator}}
                        </td>
                        <td style="text-transform: capitalize;">                            
                            {{$result->trip_ref_no}}
                        </td>
                        <td>
                            {{$result->aircraft_type}}
                        </td>
                        <td>
                            {{$result->aircraft_reg}}    
                        </td>
                        <td>
                            {{$result->call_sign}}    
                        </td>
                        <td>
                            @if($result->status == 'pending')
                            <span class='label label-sm' style='text-transform: capitalize; color: #ffffff; background-color: #636342' data-type='1'>{{$result->status}} 
                            </span>
                            @elseif($result->status == 'approved')
                            <span class='label label-sm' style='text-transform: capitalize; color: #ffffff; background-color: green' data-type='1'>{{$result->status}} 
                            </span>
                            @elseif($result->status == 'cancelled')
                            <span class='label label-sm' style='text-transform: capitalize; color: #ffffff; background-color: red' data-type='1'>{{$result->status}} 
                            </span>
                            @endif
                        </td>
                        <td>
                            <a href="{{route('permit.request.show',$result)}}" class="btn btn-sm btn-default" style="margin-right: 0px;" target="_blank">
                                <i class="fa fa-search"></i> View
                            </a>
                            @if(Auth::user()->role == 'admen')

                            <form id="status-form" style="display: inline;" action="{{route('landing-requests.update', $result)}}" method="post">
                                {{ csrf_field() }}    
                                {{ method_field('PUT') }}    

                                <select name="status" class="form-control change-status" style="width: 116px; height: 30px" required>
                                    <option value="">Edit Status</option>
                                    <option value="approved">Approve</option>
                                    <option value="cancelled">Cancel</option>                                    
                                </select>
                            </form>
                            @endif
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</div>