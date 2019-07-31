@extends('backend.master') @section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <form action="{{url('dashboard/pay')}}" method="post">
        {{ csrf_field() }}

        <div class="row">
            <div class="col-md-12">
                <div class="portlet light bordered">
                    <div class="portlet-body">
                        <div class="form-horizontal">
                            <div class="form-group required">
                                <div class="col-md-3 pod-label-text-right">
                                    <label class="control-label" for="total_amount">Total Amount</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="number" id="total_amount" class="form-control" name="total_amount" required placeholder="Amount">
                                </div>
                            </div>

                            <div class="form-group required">
                                <div class="col-md-3 pod-label-text-right">
                                    <label class="control-label" for="currency">Currency</label>
                                </div>
                                <div class="col-md-7">
                                    <input type="text" id="currency" class="form-control" name="currency" required readonly value="USD">
                                </div>
                            </div>

                            <div class="form-group required">
                                <div class="col-md-3 pod-label-text-right">
                                    <input type="checkbox" required>
                                </div>
                                <div class="col-md-7">
                                    <a target="_blank" href="{{route('terms-and-conditions')}}">I AGREE TERMS AND CONDITIONS</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-success" style="margin-left: 45%">Make a Payment</button>
        </div>
    </form>
</div>
<!-- END CONTENT BODY -->

@endsection