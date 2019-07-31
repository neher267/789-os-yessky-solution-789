@extends('backend.master') @section('content')
<!-- BEGIN CONTENT BODY -->
<style type="text/css">
    .formi{
        margin-top: 20px;
    }
</style>
<div class="page-content">
    <div class="form-wizard">
        <div class="form-body">
            <h1 class="page-title" style="text-align: center; font-size: 30px; color: #1bbc9b;">E-Payment</h1>
            <form action="{{url('dashboard/e-payment')}}" method="post">
                {{ csrf_field() }}                
                <div class="row">
                    <div class="col-md-offset-2 col-md-8">
                        <div class="portlet light bordered">
                            <div class="portlet-body">
                                <p>
                                    Please fill out and submit the E-Payment Form with your relevant information. We will contact you should further information be required to process your e-payment.
                                </p>
                                <div class="form-horizontal">
                                    <div class="formh">A -Basic information</div>
                                    <div class="formi">
                                        <input type="text" name="company_name" class="form-control" data-bvalidator="required" value="" placeholder="Company Name" required>
                                    </div>
                                    <div class="clear"></div>

                                    <div class="formi">
                                        <input type="text" name="contact_person" class="form-control" data-bvalidator="required" value="" placeholder="Contact Person" required>
                                    </div>
                                    <div class="clear"></div>

                                    <div class="formi">
                                        <input type="text" name="address" class="form-control" data-bvalidator="" value="" placeholder="Address" required>
                                    </div>
                                    <div class="clear"></div>

                                    <div class="formi">
                                        <input type="text" name="city" class="form-control" data-bvalidator="required" value="" placeholder="City" required>
                                    </div>
                                    <div class="clear"></div>

                                    <div class="formi">
                                        <input type="text" name="province_State" class="form-control" data-bvalidator="" value="" placeholder="Province/State">
                                    </div>
                                    <div class="clear"></div>

                                    <div class="formi">
                                        <input type="text" name="country" class="form-control" data-bvalidator="required" value="" placeholder="Country" required>
                                    </div>
                                    <div class="clear"></div>

                                    <div class="formi">
                                        <input type="text" name="postal_zip_code" class="form-control" data-bvalidator="" value="" placeholder="Postal/Zip code" required>
                                    </div>
                                    <div class="clear"></div>

                                    <div class="formi">
                                        <input type="text" name="email" class="form-control" data-bvalidator="email,required" value="" placeholder="Email" required>
                                    </div>
                                    <div class="clear"></div>

                                    <div class="formi">
                                        <input type="text" name="phone" class="form-control" data-bvalidator="required" value="" placeholder="Phone" required>
                                    </div>
                                    <div class="clear"></div>

                                    <div class="formi">
                                        <input type="text" name="vpc_MerchTxnRef" class="form-control" data-bvalidator="required" value="" placeholder="Invoice #" required>
                                    </div>
                                    <div class="clear"></div>

                                    <!-- <div class="formi">
                                        <input type="text" name="vpc_amount" class="form-control" data-bvalidator="required" value="" placeholder="Payment in $ only">
                                        <div style="color:#ac0000; font-weight: bold; margin: 10px 0 5px 0;">Please note that a 5% UAS online payment processing fee will be applied</div>
                                    </div> -->

                                    <div class="clear"></div>

                                    <div class="formi">
                                        <textarea name="comments" class="form-control" data-bvalidator="" placeholder="Comments"></textarea>
                                    </div>
                                    <div class="clear"></div>
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
    </div>
    <!-- END CONTENT -->
</div>
<!-- END CONTENT BODY -->

@endsection