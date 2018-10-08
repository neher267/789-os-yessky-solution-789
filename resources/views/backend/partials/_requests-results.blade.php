<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <span class="caption-subject font-dark2 bold uppercase">Last {{$results->count()}} Requests</span>
        </div>
        <!-- <div class="pull-right">
            <a class="btn btn-primary" href="permit/pending">View All</a>
        </div> -->
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
                        <th>&nbsp;</th>
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
                            <span class='label label-sm' style='color: #ffffff; background-color: #636342' data-type='1'> Review on {{$result->status}} </span>
                        </td>
                        <td>
                            <a href="https://caab.pod.aero/auth/site/1342?tg=562-1018" class="btn btn-sm btn-outline grey-salsa">
                                <i class="fa fa-search"></i> View
                            </a>
                        </td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

    </div>
</div>