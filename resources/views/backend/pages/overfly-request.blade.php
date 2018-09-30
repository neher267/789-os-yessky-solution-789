@extends('backend.master') @section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">

    @include('backend.partials._search')
    <!-- BEGIN CONTENT -->
    <!-- BEGIN CONTENT BODY -->
    <h1 class="page-title">Permit Request for Overfly</h1>
    <br>

    <div class="form-wizard">
        <div class="form-body">

            <ul class="nav nav-pills nav-justified steps pod-steps">

                <li class="active">
                    <a class="step active" style="cursor: default;">
                        <span class="number"> 1 </span>
                        <span class="desc">
                    <i class="fa fa-check"></i> Flight Info                </span>
                    </a>
                </li>

                <li class="inactive">
                    <a class="step inactive" style="cursor: default;">
                        <span class="number"> 2 </span>
                        <span class="desc">
                    <i class="fa fa-check"></i> Payment                </span>
                    </a>
                </li>

                <li class="inactive">
                    <a class="step inactive" style="cursor: default;">
                        <span class="number"> 3 </span>
                        <span class="desc">
                    <i class="fa fa-check"></i> Complete                </span>
                    </a>
                </li>

            </ul>

            <div id="bar" class="progress progress-striped active" role="progressbar">

                <div class="progress-bar progress-bar-warning" style="width:33%"> </div>

            </div>

            <div>
                <form id="req-step-1-form" action="overfly/request" method="post">
                    <input type="hidden" name="_csrf-client" value="33uRiiq7QqPnTFM8BCeQcA9GvlyMaZTOrbhRaVlojCKzDdnpGPgG644hFW5rdeUYVxD2NLkz47vh4QQBD126Vg==">

                    <!--<a id="step-1"></a>-->
                    <div class="row">
                        <div class="col-md-6">
                            <div class="portlet light bordered">
                                <div class="portlet-body">
                                    <div class="form-horizontal">
                                        <div class="form-group field-overflyformstep1-operatorname required">
                                            <div class="col-md-4 pod-label-text-right">
                                                <label class="control-label" for="overflyformstep1-operatorname">Name of Operator</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="overflyformstep1-operatorname" class="form-control operator-name-ajax-trigger" name="OverflyFormStep1[operatorName]" autocomplete="off" aria-required="true">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <input type="hidden" id="overflyformstep1-operatorid" class="operator-id" name="OverflyFormStep1[operatorId]">

                                        <div id="operator-list-table-area" style="display: block">
                                            <div class="row">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-8">
                                                    <table class="table table-striped table-bordered" id="operator-list-table" style="display: none">
                                                        <thead>
                                                            <tr>
                                                                <th>Name</th>
                                                                <th>Address</th>
                                                                <th class="text-right" style="width:5%">
                                                                </th>
                                                            </tr>
                                                        </thead>
                                                        <tbody>

                                                        </tbody>
                                                    </table>
                                                    <div id="operator-list-message"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <table id="operator-tr" style="display: none">
                                            <tbody>
                                                <tr>
                                                    <td>[NAME]</td>
                                                    <td>[ADDRESS]</td>
                                                    <td class="text-right">
                                                        <button type="button" class="btn btn-xs blue-madison select-org" value="ajax/organization/create-operator" title="Select [NAME] as Operator" data-id="[ID]" data-name="[NAME]"><i class="fa fa-mouse-pointer" aria-hidden="true"></i> Select</button>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>

                                        <div class="form-group field-overflyformstep1-billingaddress required">
                                            <div class="col-md-4 pod-label-text-right">
                                                <label class="control-label" for="overflyformstep1-billingaddress">Billing Address</label>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea id="overflyformstep1-billingaddress" class="form-control" name="OverflyFormStep1[billingAddress]" rows="3" aria-required="true"></textarea>
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="form-group field-overflyformstep1-aircraftregistration required">
                                            <div class="col-md-4 pod-label-text-right">
                                                <label class="control-label" for="overflyformstep1-aircraftregistration">Aircraft Registration</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="overflyformstep1-aircraftregistration" class="form-control aircraft-registration-field" name="OverflyFormStep1[aircraftRegistration]" maxlength="10" aria-required="true">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="text-checkbox-group">
                                            <div class="form-group field-overflyformstep1-callsign required">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="overflyformstep1-callsign">Call Sign</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="overflyformstep1-callsign" class="form-control callsign-field" name="OverflyFormStep1[callsign]" aria-required="true">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group field-overflyformstep1-callsigncheckbox">
                                                <div class="col-md-4 pod-label-text-right"></div>
                                                <div class="col-md-8">
                                                    <input type="hidden" name="OverflyFormStep1[callsignCheckbox]" value="0">
                                                    <label>
                                                        <input type="checkbox" id="overflyformstep1-callsigncheckbox" class="callsign-checkbox" name="OverflyFormStep1[callsignCheckbox]" value="1"> Same as Aircraft Registration</label>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="text-checkbox-group">
                                            <div class="form-group field-overflyformstep1-tripreferenceno">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="overflyformstep1-tripreferenceno">Trip Reference No.</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="overflyformstep1-tripreferenceno" class="form-control trip-ref-text" name="OverflyFormStep1[tripReferenceNo]">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group field-overflyformstep1-triprefcheckbox">
                                                <div class="col-md-4 pod-label-text-right"></div>
                                                <div class="col-md-8">
                                                    <input type="hidden" name="OverflyFormStep1[tripRefCheckbox]" value="0">
                                                    <label>
                                                        <input type="checkbox" id="overflyformstep1-triprefcheckbox" class="trip-ref-checkbox" name="OverflyFormStep1[tripRefCheckbox]" value="1"> Same as Call Sign</label>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group field-overflyformstep1-aircrafttype required">
                                            <div class="col-md-4 pod-label-text-right">
                                                <label class="control-label" for="overflyformstep1-aircrafttype">Type of Aircraft</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="overflyformstep1-aircrafttype" class="form-control aircraft-type-field" name="OverflyFormStep1[aircraftType]" aria-required="true">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>

                                        <div class="inline-form-group form-group" style="overflow: hidden;">
                                            <div class="col-md-4 pod-label-text-right">
                                                <div class="form-group field-overflyformstep1-mtow required">
                                                    <label class="control-label" for="overflyformstep1-mtow">Maximum All up weight</label>
                                                </div>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="form-group field-overflyformstep1-mtow required">
                                                    <input type="number" id="overflyformstep1-mtow" class="form-control mtow-field" name="OverflyFormStep1[mtow]" aria-required="true">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <div class="mtow-unit-field-div">
                                                    <div class="form-group field-overflyformstep1-mtowunit required">
                                                        <select id="overflyformstep1-mtowunit" class="form-control mtow-unit-field" name="OverflyFormStep1[mtowUnit]" aria-required="true">
                                                            <option value="lbs">lbs</option>
                                                            <option value="kgs">kgs</option>
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <div class="mtow-unit-placeholder-field-div" style="display:none;">
                                                    <div class="form-group field-overflyformstep1-mtowunitplaceholder">
                                                        <select id="overflyformstep1-mtowunitplaceholder" class="form-control mtow-unit-placeholder-field" name="OverflyFormStep1[mtowUnitPlaceholder]">
                                                            <option value="lbs">lbs</option>
                                                            <option value="kgs">kgs</option>
                                                        </select>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="portlet light bordered">
                                <div class="portlet-body">
                                    <div class="form-horizontal">

                                        <div class="form-group field-overflyformstep1-flightrules required">
                                            <div class="col-md-4 pod-label-text-right">
                                                <label class="control-label" for="overflyformstep1-flightrules">Flight Rules</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select id="overflyformstep1-flightrules" class="form-control" name="OverflyFormStep1[flightRules]" aria-required="true">
                                                    <option value="">Select...</option>
                                                    <option value="IFR">IFR</option>
                                                    <option value="VFR">VFR</option>
                                                </select>
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="form-group field-overflyformstep1-flightroute">
                                            <div class="col-md-4 pod-label-text-right">
                                                <label class="control-label" for="overflyformstep1-flightroute">Sector</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="overflyformstep1-flightroute" class="form-control" name="OverflyFormStep1[flightRoute]">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="form-group field-overflyformstep1-flightlevel">
                                            <div class="col-md-4 pod-label-text-right">
                                                <label class="control-label" for="overflyformstep1-flightlevel">Flight Level</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="text" id="overflyformstep1-flightlevel" class="form-control" name="OverflyFormStep1[flightLevel]">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="form-group field-overflyformstep1-crewcount required">
                                            <div class="col-md-4 pod-label-text-right">
                                                <label class="control-label" for="overflyformstep1-crewcount">Crew Count</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" id="overflyformstep1-crewcount" class="form-control" name="OverflyFormStep1[crewCount]" aria-required="true">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="form-group field-overflyformstep1-paxcount required">
                                            <div class="col-md-4 pod-label-text-right">
                                                <label class="control-label" for="overflyformstep1-paxcount">PAX Count</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="number" id="overflyformstep1-paxcount" class="form-control" name="OverflyFormStep1[paxCount]" aria-required="true">
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6">
                            <div class="portlet light bordered">
                                <div class="portlet-body">
                                    <div class="form-horizontal">
                                        <div class="form-group field-overflyformstep1-flightcategory required">
                                            <div class="col-md-4 pod-label-text-right">
                                                <label class="control-label" for="overflyformstep1-flightcategory">Purpose of Flight</label>
                                            </div>
                                            <div class="col-md-8">
                                                <select id="overflyformstep1-flightcategory" class="form-control flight-category-field emergency-calc_0" name="OverflyFormStep1[flightCategory]" aria-required="true">
                                                    <option value="">Select...</option>
                                                    <option value="1">Business Flight</option>
                                                    <option value="7">Cargo Flight</option>
                                                    <option value="14">Ferry Flight</option>
                                                    <option value="6">Medevac Flight</option>
                                                    <option value="9">Military/Airforce Flight</option>
                                                    <option value="25">Private - Non Revenue Flight</option>
                                                    <option value="22">Private Pax Flight</option>
                                                    <option value="8">Technical Flight</option>
                                                    <option value="13">Tourist Flight</option>
                                                    <option value="26">UN Chartered</option>
                                                    <option value="4">VVIP/VIP Flight</option>
                                                </select>
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="col-md-4"></div>
                                            <div class="col-md-8">
                                                <div>
                                                    <div class="permit_type_description_box" id="permit_type_description_box_1" style="display:none;">
                                                        Note: Business flight category in aviation industry means, transporting a small groups of people. It also includes the evacuation of casualties or express parcel deliveries used by public bodies, government officials or the armed forces. </div>
                                                    <div class="permit_type_description_box" id="permit_type_description_box_7" style="display:none;">
                                                        Note: A Cargo flight is designed or converted for the carriage of cargo rather than passengers. </div>
                                                    <div class="permit_type_description_box" id="permit_type_description_box_14" style="display:none;">
                                                        Note: Ferry flying refers to delivery flights for the purpose of returning an aircraft to base. </div>
                                                    <div class="permit_type_description_box" id="permit_type_description_box_6" style="display:none;">
                                                        Note: Medical evacuation is the timely and efficient movement and en route care provided by medical personnel to wounded being evacuated from a battlefield, to injured patients being evacuated from the scene of an accident to receiving medical facilities, or to patients at a rural hospital requiring urgent care at a better-equipped facility using medically equipped aircraft (air ambulances). </div>
                                                    <div class="permit_type_description_box" id="permit_type_description_box_9" style="display:none;">
                                                        Note: A flight is a military unit in an air force, naval air service, or army air operated by a legal or insurrectionary armed service of any type. </div>
                                                    <div class="permit_type_description_box" id="permit_type_description_box_25" style="display:none;">
                                                        Note: Private - Non Revenue Flight </div>
                                                    <div class="permit_type_description_box" id="permit_type_description_box_22" style="display:none;">
                                                        Note: Private Pax Flight </div>
                                                    <div class="permit_type_description_box" id="permit_type_description_box_8" style="display:none;">
                                                        Note: Technical flight stands for refueling and crew rest or may one of this. </div>
                                                    <div class="permit_type_description_box" id="permit_type_description_box_13" style="display:none;">
                                                        Note: Traveling or visiting a place for pleasure. </div>
                                                    <div class="permit_type_description_box" id="permit_type_description_box_26" style="display:none;">
                                                        Note: UN Chartered Flight </div>
                                                    <div class="permit_type_description_box" id="permit_type_description_box_4" style="display:none;">
                                                        Note: VIP or VVIP flight considers the lead pax is a person who is accorded special privileges due to their status or importance. </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group field-overflyformstep1-dangergoods required">
                                            <div class="col-md-4 pod-label-text-right">
                                                <label class="control-label">Danger Goods</label>
                                            </div>
                                            <div class="col-md-8">
                                                <input type="hidden" name="OverflyFormStep1[dangerGoods]" value="">
                                                <div id="overflyformstep1-dangergoods" class="danger-goods-radio-list inline-list2" style="margin-top:6px;" aria-required="true">
                                                    <label>
                                                        <input type="radio" name="OverflyFormStep1[dangerGoods]" value="1"> Yes</label>
                                                    <label>
                                                        <input type="radio" name="OverflyFormStep1[dangerGoods]" value="0"> No</label>
                                                </div>
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="dg-field-area" style="display: none;">
                                            <div class="row">
                                                <div class="col-md-4"></div>
                                                <div class="col-md-8">
                                                    <div class="denger-good-notification-box" id="denger-good-notification-box" style2="display:none;color: #ce1613">
                                                        <p>
                                                            DG &#8203;permit &#8203;&#8203;request &#8203;optimizes certain functions &#8203;which &#8203;relate&#8203;s&#8203; to preparation and acceptance of dangerous goods declarations to process and ensure the safe and compliant shipment of dangerous goods. &#8203;Please provide related permission or document to below address to continue with the permit application. &#8203;
                                                        </p>
                                                        <p>
                                                            Email Address: dg@caab.gov.bd
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group field-overflyformstep1-dgunno required">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="overflyformstep1-dgunno">DG UN Number</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="overflyformstep1-dgunno" class="form-control dg-field" name="OverflyFormStep1[dgUnNo]" aria-required="true">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group field-overflyformstep1-dgtype required">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="overflyformstep1-dgtype">Type of DG</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="overflyformstep1-dgtype" class="form-control dg-field" name="OverflyFormStep1[dgType]" aria-required="true">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group field-overflyformstep1-dgdescription required">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="overflyformstep1-dgdescription">DG Description</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <textarea id="overflyformstep1-dgdescription" class="form-control dg-field" name="OverflyFormStep1[dgDescription]" aria-required="true"></textarea>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-group field-overflyformstep1-notes">
                                            <div class="col-md-4 pod-label-text-right">
                                                <label class="control-label" for="overflyformstep1-notes">Notes</label>
                                            </div>
                                            <div class="col-md-8">
                                                <textarea id="overflyformstep1-notes" class="form-control" name="OverflyFormStep1[notes]" maxlength="500" rows="2"></textarea>
                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="portlet light bordered">
                                <div class="portlet-body pod-label-text-center caps-label2 small-label2">
                                    <!--                <div id="op-time-diff"></div>-->

                                    <div class="op-time-diff">
                                        <div class="info"> </div>
                                        <hr>
                                        <div class="info2">Remaining time prior to operation</div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group field-overflyformstep1-depdate required">
                                                <label class="control-label" for="overflyformstep1-depdate">Departure Date</label>
                                                <input type="text" id="overflyformstep1-depdate" class="text-center dep-date_0 emergency-calc_0 form-control krajee-datepicker" name="OverflyFormStep1[depDate]" readonly="" placeholder="" aria-required="true" data-datepicker-source="overflyformstep1-depdate" data-datepicker-type="1" data-krajee-kvdatepicker="kvDatepicker_4dfc6c32">

                                                <div class="help-block"></div>
                                            </div>
                                        </div>

                                        <div class="col-md-6">
                                            <div class="form-group field-overflyformstep1-etdutc required">
                                                <label class="control-label" for="overflyformstep1-etdutc">ETD UTC</label>
                                                <input type="text" id="overflyformstep1-etdutc" class="form-control timepicker text-center dep-time_0 emergency-calc_0 disabled-input2" name="OverflyFormStep1[etdUtc]" readonly="" aria-required="true">

                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 custom-placeholder">
                                            <div class="form-group field-overflyformstep1-depfrom required">
                                                <label class="control-label" for="overflyformstep1-depfrom">Aerodrome of Departure</label>
                                                <div class="kv-plugin-loading loading-overflyformstep1-depfrom">&nbsp;</div>
                                                <select id="overflyformstep1-depfrom" class="form-control" name="OverflyFormStep1[depFrom]" placeholder="ICAO" aria-required="true" data-s2-options="s2options_d6851687" data-krajee-select2="select2_17e929ae" style="display:none">
                                                    <option value="">Search By ICAO/ Country/ City</option>
                                                    <optgroup label="">

                                                    </optgroup>
                                                </select>

                                                <div class="help-block"></div>
                                            </div>
                                        </div>

                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group field-overflyformstep1-arrdate required">
                                                <label class="control-label" for="overflyformstep1-arrdate">Arrival Date</label>
                                                <input type="text" id="overflyformstep1-arrdate" class="text-center form-control krajee-datepicker" name="OverflyFormStep1[arrDate]" readonly="" placeholder="" aria-required="true" data-datepicker-source="overflyformstep1-arrdate" data-datepicker-type="1" data-krajee-kvdatepicker="kvDatepicker_4dfc6c32">

                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group field-overflyformstep1-etautc required">
                                                <label class="control-label" for="overflyformstep1-etautc">ETA UTC</label>
                                                <input type="text" id="overflyformstep1-etautc" class="form-control timepicker text-center" name="OverflyFormStep1[etaUtc]" readonly="" aria-required="true">

                                                <div class="help-block"></div>
                                            </div>

                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 custom-placeholder">
                                            <div class="form-group field-overflyformstep1-arrto required">
                                                <label class="control-label" for="overflyformstep1-arrto">Aerodrome of Destination</label>
                                                <div class="kv-plugin-loading loading-overflyformstep1-arrto">&nbsp;</div>
                                                <select id="overflyformstep1-arrto" class="form-control" name="OverflyFormStep1[arrTo]" placeholder="ICAO" aria-required="true" data-s2-options="s2options_d6851687" data-krajee-select2="select2_17e929ae" style="display:none">
                                                    <option value="">Search By ICAO/ Country/ City</option>
                                                    <option value=""></option>
                                                </select>

                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group field-overflyformstep1-firin required">
                                                <label class="control-label" for="overflyformstep1-firin">FIR In</label>
                                                <div class="kv-plugin-loading loading-overflyformstep1-firin">&nbsp;</div>
                                                <select id="overflyformstep1-firin" class="form-control" name="OverflyFormStep1[firIn]" aria-required="true" data-s2-options="s2options_d6851687" data-krajee-select2="select2_6a9c1510" style="display:none">
                                                    <option value=""></option>
                                                    <option value="AGODA(R472)">AGODA(R472)</option>
                                                    <option value="APAGO(B465)">APAGO(B465)</option>
                                                    <option value="ATOGA(R472)">ATOGA(R472)</option>
                                                    <option value="AVLED(G463)">AVLED(G463)</option>
                                                    <option value="AVPOP(L507)">AVPOP(L507)</option>
                                                    <option value="BEMAK(A462)">BEMAK(A462)</option>
                                                    <option value="CHILA(A599)">CHILA(A599)</option>
                                                    <option value="ESDOT(L507)">ESDOT(L507)</option>
                                                    <option value="IBAPA(B593)">IBAPA(B593)</option>
                                                    <option value="MIGOP(R598)">MIGOP(R598)</option>
                                                    <option value="NOKAT(B593)">NOKAT(B593)</option>
                                                    <option value="REDAP(R344)">REDAP(R344)</option>
                                                    <option value="SUMAG(B465)">SUMAG(B465)</option>
                                                    <option value="TEBID(G463)">TEBID(G463)</option>
                                                    <option value="VANTU(R598)">VANTU(R598)</option>
                                                    <option value="VINAD(R598)">VINAD(R598)</option>
                                                    <option value="AAT(A201)">AAT(A201)</option>
                                                    <option value="CML(B593)">CML(B593)</option>
                                                </select>

                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group field-overflyformstep1-firout required">
                                                <label class="control-label" for="overflyformstep1-firout">FIR Out</label>
                                                <div class="kv-plugin-loading loading-overflyformstep1-firout">&nbsp;</div>
                                                <select id="overflyformstep1-firout" class="form-control" name="OverflyFormStep1[firOut]" aria-required="true" data-s2-options="s2options_d6851687" data-krajee-select2="select2_6a9c1510" style="display:none">
                                                    <option value=""></option>
                                                    <option value="AGODA(R472)">AGODA(R472)</option>
                                                    <option value="APAGO(B465)">APAGO(B465)</option>
                                                    <option value="ATOGA(R472)">ATOGA(R472)</option>
                                                    <option value="AVLED(G463)">AVLED(G463)</option>
                                                    <option value="AVPOP(L507)">AVPOP(L507)</option>
                                                    <option value="BEMAK(A462)">BEMAK(A462)</option>
                                                    <option value="CHILA(A599)">CHILA(A599)</option>
                                                    <option value="ESDOT(L507)">ESDOT(L507)</option>
                                                    <option value="IBAPA(B593)">IBAPA(B593)</option>
                                                    <option value="MIGOP(R598)">MIGOP(R598)</option>
                                                    <option value="NOKAT(B593)">NOKAT(B593)</option>
                                                    <option value="REDAP(R344)">REDAP(R344)</option>
                                                    <option value="SUMAG(B465)">SUMAG(B465)</option>
                                                    <option value="TEBID(G463)">TEBID(G463)</option>
                                                    <option value="VANTU(R598)">VANTU(R598)</option>
                                                    <option value="VINAD(R598)">VINAD(R598)</option>
                                                    <option value="AAT(A201)">AAT(A201)</option>
                                                    <option value="CML(B593)">CML(B593)</option>
                                                </select>

                                                <div class="help-block"></div>
                                            </div>
                                        </div>
                                    </div>

                                    <input type="hidden" id="overflyformstep1-emergency_hours" class="emergency-hours" name="OverflyFormStep1[emergency_hours]">

                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-success emergency-req-check">Continue</button>
                    </div>
                    <label id="is-copy" hidden="">0</label>

                </form>
            </div>

        </div>
    </div>
    <!-- END CONTENT -->

</div>
<!-- END CONTENT BODY -->
@endsection