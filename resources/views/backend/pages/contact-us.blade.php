@extends('backend.master') @section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">

    @include('backend.partials._search')
    <!-- BEGIN CONTENT -->
    <div class="page-content-wrapper">
    <div class="page-content2 no-sidebar2">
        <div class="ticket-form">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">

                    <h1 class="page-title text-center2">Contact Us</h1>

                    <form id="w0" action="contact-us" method="post">
                        <input type="hidden" name="_csrf-client" value="JLabD_D8qFpjql9daDj8QtckkS-L0CYDRuW0xTj2c4xIwNNswr_sEgrHGQ8Haokqj3LZR76KUXYKvOGtbsNF-A==">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group field-ticket-email required validating">
                                    <label class="control-label" for="ticket-email">Email</label>
                                    <input type="text" id="ticket-email" class="form-control" name="Ticket[email]" value="permit@skysolutionbd.com" readonly="" maxlength="150" aria-required="true">

                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group field-ticket-type required validating">
                                    <label class="control-label" for="ticket-type">Type</label>
                                    <select id="ticket-type" class="form-control" name="Ticket[type]" aria-required="true">
                                        <option value=""></option>
                                        <option value="FIN">Financial</option>
                                        <option value="TCH">Technical</option>
                                        <option value="ADM">Administrative</option>
                                        <option value="OTHR">Other</option>
                                    </select>

                                    <div class="help-block"></div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group field-ticket-tg">
                                    <label class="control-label" for="ticket-tg">TG No. (if any)</label>
                                    <input type="text" id="ticket-tg" class="form-control" name="Ticket[tg]">

                                    <div class="help-block"></div>
                                </div>
                            </div>
                        </div>

                        <div class="form-group field-ticket-subject required validating">
                            <label class="control-label" for="ticket-subject">Subject</label>
                            <input type="text" id="ticket-subject" class="form-control" name="Ticket[subject]" maxlength="1024" aria-required="true">

                            <div class="help-block"></div>
                        </div>
                        <div class="form-group field-ticket-message required validating">
                            <label class="control-label" for="ticket-message">Message</label>
                            <textarea id="ticket-message" class="form-control" name="Ticket[message]" rows="6" aria-required="true"></textarea>

                            <div class="help-block"></div>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <!-- END CONTENT -->

</div>
<!-- END CONTENT BODY -->
@endsection