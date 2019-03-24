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
                        <th>Sr No</th>                        
                        <th style="text-align: left;">Operator</th>                        
                        <th style="text-align: left;">Clint Details</th>                        
                        <th>Request Type</th>
                        <th>Arrival Date</th>                        
                        <th>Aircraft Type</th>
                        <th>Aircraft Reg</th>
                        <th>Callsign</th>
                        <th style="width: 200px">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i=0; ?>
                    @foreach($results as $result)
                    <tr>
                        <td>
                            {{++$i}}
                        </td>
                        <td style="text-align: left;">
                            {{$result->operator}}
                        </td>

                        <td style="text-align: left;">
                            <?php
                                $user = $result->user;
                            ?>
                            @if($user)
                            <li>{{$user->name}}</li>
                            <li>{{$user->primary_contact}}</li>
                            <li>{{$user->email}}</li>
                            <li>{{$user->country->name}}</li>
                            @endif
                        </td>

                        <td>
                            <span class="nowrap">{{$result->type}}</span>
                        </td>
                        <td class="pod-formatted-date-show2">
                            {{$result->arri_date}}
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