@extends('backend.master') @section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">

    @include('backend.partials._search')
    <!-- BEGIN CONTENT -->
    <div class="log-payment-index">

        <hr>
        <h1 class="page-title" style="text-align: center;">Payment History</h1>
        <hr>

        <div class="row">
            <div class="col-md-10 col-md-offset-1">
                <div id="w0" class="grid-view">
                    <table class="table table-striped table-bordered datatable">
                        <thead>
                            <tr style="background-color: yellow">
                                <th>Sr.No</th>
                                <th>TG No.</th>
                                <th>Transaction ID</th>
                                <th>Status</th>
                                <th></th>
                            </tr>
                            <!-- <tr id="w0-filters" class="filters">
                                <td>&nbsp;</td>
                                <td>
                                    <input type="text" class="form-control" name="LogPayment[permit_request_id]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="LogPayment[invoice_transaction_id]">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="LogPayment[status]">
                                </td>
                                <td>&nbsp;</td>
                            </tr> -->
                        </thead>
                        <tbody>
                            <tr data-key="3">
                                <td>1</td>
                                <td>03-0818</td>
                                <td>f18b383bb25425e7083247fccce0b341</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/3" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>

                            <tr data-key="3">
                                <td>2</td>
                                <td>03-0818</td>
                                <td>f18b383bb25425e7083247fccce0b341</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/3" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>

                            <tr data-key="3">
                                <td>3</td>
                                <td>03-0818</td>
                                <td>f18b383bb25425e7083247fccce0b341</td>
                                <td>Success</td>
                                <td><a href="payment-history/pdf/3" title="Invoice" target="_blank"><i class="fa fa-file-pdf-o"></i></a></td>
                            </tr>
                            
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