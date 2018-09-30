@extends('backend.master') @section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">

    @include('backend.partials._search')
    <!-- BEGIN CONTENT -->
    <!-- BEGIN CONTENT BODY -->
    <ul class="breadcrumb">
        <li><a href="">Home</a></li>
        <li class="active">Step 1</li>
    </ul>

    <div class="landing-create-step-1">
        <h1 class="page-title">Permit Request for Landing</h1>

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
                    <i class="fa fa-check"></i> Crew/PAX Info                </span>
                        </a>
                    </li>

                    <li class="inactive">
                        <a class="step inactive" style="cursor: default;">
                            <span class="number"> 3 </span>
                            <span class="desc">
                    <i class="fa fa-check"></i> Documents                </span>
                        </a>
                    </li>

                    <li class="inactive">
                        <a class="step inactive" style="cursor: default;">
                            <span class="number"> 4 </span>
                            <span class="desc">
                    <i class="fa fa-check"></i> Payment                </span>
                        </a>
                    </li>

                    <li class="inactive">
                        <a class="step inactive" style="cursor: default;">
                            <span class="number"> 5 </span>
                            <span class="desc">
                    <i class="fa fa-check"></i> Complete                </span>
                        </a>
                    </li>

                </ul>

                <div id="bar" class="progress progress-striped active" role="progressbar">

                    <div class="progress-bar progress-bar-warning" style="width:20%"> </div>

                </div>

                <div>
                    <form id="req-step-1-form" action="landing/request" method="post" enctype="multipart/form-data">
                        <input type="hidden" name="_csrf-client" value="SuzVz8Adnfw5uP-Xdpkq7NQ3cKkwv0eVdYcpvZpnTzMmmp2s8l7ZtFDVucUZy1-EjGE4wQXlMOA53nzVzFJ5Rw==">

                        <div class="row">
                            <div class="col-md-6">
                                <div class="portlet light bordered">
                                    <div class="portlet-body">
                                        <div class="form-horizontal">
                                            <div class="form-group field-landingformstep1-operatorname required">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-operatorname">Operator Name</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="landingformstep1-operatorname" class="form-control operator-name-ajax-trigger" name="LandingFormStep1[operatorName]" autocomplete="off" aria-required="true">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <input type="hidden" id="landingformstep1-operatorid" class="operator-id" name="LandingFormStep1[operatorId]">
                                            <div id="operator-list-table-area">
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

                                                            <tbody></tbody>
                                                        </table>
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

                                            <div class="form-group field-landingformstep1-billingaddress required">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-billingaddress">Billing Address</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <textarea id="landingformstep1-billingaddress" class="form-control" name="LandingFormStep1[billingAddress]" rows="3" aria-required="true"></textarea>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>

                                            <div class="form-group field-landingformstep1-aircraftregistration required">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-aircraftregistration">Aircraft Registration</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="landingformstep1-aircraftregistration" class="form-control aircraft-registration-field" name="LandingFormStep1[aircraftRegistration]" maxlength="10" aria-required="true">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="text-checkbox-group">
                                                <div class="form-group field-landingformstep1-callsign required">
                                                    <div class="col-md-4 pod-label-text-right">
                                                        <label class="control-label" for="landingformstep1-callsign">Callsign</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" id="landingformstep1-callsign" class="form-control callsign-field" name="LandingFormStep1[callsign]" aria-required="true">
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group field-landingformstep1-callsigncheckbox">
                                                    <div class="col-md-4 pod-label-text-right"></div>
                                                    <div class="col-md-8">
                                                        <input type="hidden" name="LandingFormStep1[callsignCheckbox]" value="0">
                                                        <label>
                                                            <input type="checkbox" id="landingformstep1-callsigncheckbox" class="callsign-checkbox" name="LandingFormStep1[callsignCheckbox]" value="1"> Same as Aircraft Registration</label>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="text-checkbox-group">
                                                <div class="form-group field-landingformstep1-tripreferenceno">
                                                    <div class="col-md-4 pod-label-text-right">
                                                        <label class="control-label" for="landingformstep1-tripreferenceno">Trip Reference No.</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" id="landingformstep1-tripreferenceno" class="form-control trip-ref-text" name="LandingFormStep1[tripReferenceNo]">
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group field-landingformstep1-triprefcheckbox">
                                                    <div class="col-md-4 pod-label-text-right"></div>
                                                    <div class="col-md-8">
                                                        <input type="hidden" name="LandingFormStep1[tripRefCheckbox]" value="0">
                                                        <label>
                                                            <input type="checkbox" id="landingformstep1-triprefcheckbox" class="trip-ref-checkbox" name="LandingFormStep1[tripRefCheckbox]" value="1"> Same as Callsign</label>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group field-landingformstep1-aircrafttype required">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-aircrafttype">Aircraft Type</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="landingformstep1-aircrafttype" class="form-control aircraft-type-field" name="LandingFormStep1[aircraftType]" aria-required="true">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>

                                            <div class="inline-form-group form-group" style="overflow: hidden;">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <div class="form-group field-landingformstep1-mtow required">
                                                        <label class="control-label" for="landingformstep1-mtow">Maximum All up weight</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-5">
                                                    <div class="form-group field-landingformstep1-mtow required">
                                                        <input type="number" id="landingformstep1-mtow" class="form-control mtow-field" name="LandingFormStep1[mtow]" aria-required="true">
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-3">
                                                    <div class="mtow-unit-field-div">
                                                        <div class="form-group field-landingformstep1-mtowunit required">
                                                            <select id="landingformstep1-mtowunit" class="form-control mtow-unit-field" name="LandingFormStep1[mtowUnit]" aria-required="true">
                                                                <option value="lbs">lbs</option>
                                                                <option value="kgs">kgs</option>
                                                            </select>
                                                            <div class="help-block"></div>
                                                        </div>
                                                    </div>
                                                    <div class="mtow-unit-placeholder-field-div" style="display:none;">
                                                        <div class="form-group field-landingformstep1-mtowunitplaceholder">
                                                            <select id="landingformstep1-mtowunitplaceholder" class="form-control mtow-unit-placeholder-field" name="LandingFormStep1[mtowUnitPlaceholder]">
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
                                            <div class="form-group field-landingformstep1-flightrules required">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-flightrules">Flight Rules</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <select id="landingformstep1-flightrules" class="form-control" name="LandingFormStep1[flightRules]" aria-required="true">
                                                        <option value="">Select...</option>
                                                        <option value="IFR">IFR</option>
                                                        <option value="VFR">VFR</option>
                                                    </select>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group field-landingformstep1-flightroute required">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-flightroute">Sector</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="landingformstep1-flightroute" class="form-control" name="LandingFormStep1[flightRoute]" aria-required="true">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group field-landingformstep1-flightlevel required">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-flightlevel">Flight Level</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="landingformstep1-flightlevel" class="form-control" name="LandingFormStep1[flightLevel]" aria-required="true">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group field-landingformstep1-crewcount required">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-crewcount">Crew Count</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="number" id="landingformstep1-crewcount" class="form-control" name="LandingFormStep1[crewCount]" aria-required="true">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group field-landingformstep1-paxcount required">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-paxcount">PAX Count</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="number" id="landingformstep1-paxcount" class="form-control" name="LandingFormStep1[paxCount]" aria-required="true">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="portlet light bordered">
                                    <div class="portlet-body">
                                        <div class="form-horizontal">
                                            <div class="form-group field-landingformstep1-flightplan">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-flightplan">Flight Plan</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="hidden" name="LandingFormStep1[flightPlan]" value="">
                                                    <input type="file" id="landingformstep1-flightplan" name="LandingFormStep1[flightPlan]">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group field-landingformstep1-ospagent required">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-ospagent">OSP Agent</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <select id="landingformstep1-ospagent" class="form-control" name="LandingFormStep1[ospAgent]" aria-required="true">
                                                        <option value="">Select...</option>
                                                        <option value="1"># 1. Aviation Support Limited (ASL) </option>
                                                        <option value="269"># 10. Advance Aviation Management Ltd</option>
                                                        <option value="267"># 11. Galaxy Aviation Services LTD</option>
                                                        <option value="421"># 12. Apollo Aviation Services Ltd</option>
                                                        <option value="191"># 2. Sky Solution (Pvt.) Co. Ltd</option>
                                                        <option value="192"># 3. Exclusive Trading International Limited</option>
                                                        <option value="193"># 4. Shafayet Aviation Management Limited</option>
                                                        <option value="194"># 5. Voyager Aviation Services Ltd.</option>
                                                        <option value="195"># 6. Rupsha Air Services (Pvt.) Ltd</option>
                                                        <option value="196"># 7. BAN Air Ltd.</option>
                                                        <option value="197"># 8. Airlink International Private Ltd.</option>
                                                        <option value="198"># 9. Air Services &amp; Aviation Procurement Ltd.</option>
                                                    </select>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="portlet light bordered">
                                    <div class="portlet-body">
                                        <div class="form-horizontal">
                                            <div class="form-group field-landingformstep1-aocvalidity">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-aocvalidity">AOC Valid Upto</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="landingformstep1-aocvalidity" class="form-control js-datepicker-validity-field" name="LandingFormStep1[aocValidity]" readonly="">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group field-landingformstep1-corvalidity">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-corvalidity">COR Valid Upto</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="landingformstep1-corvalidity" class="form-control js-datepicker-validity-field" name="LandingFormStep1[corValidity]" readonly="">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group field-landingformstep1-coavalidity">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-coavalidity">COA Valid Upto</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="landingformstep1-coavalidity" class="form-control js-datepicker-validity-field" name="LandingFormStep1[coaValidity]" readonly="">
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div class="form-group field-landingformstep1-insurancevalidity">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-insurancevalidity">Insurance Valid Upto</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="text" id="landingformstep1-insurancevalidity" class="form-control js-datepicker-validity-field" name="LandingFormStep1[insuranceValidity]" readonly="">
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
                                            <div class="form-group field-landingformstep1-flightcategory required">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-flightcategory">Purpose of Flight</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <select id="landingformstep1-flightcategory" class="form-control flight-category-field emergency-calc_0" name="LandingFormStep1[flightCategory]" aria-required="true">
                                                        <option value="">Select...</option>
                                                        <option value="2">Business Flight</option>
                                                        <option value="15">Cargo Flight</option>
                                                        <option value="21">Delivery Flight</option>
                                                        <option value="16">Ferry Flight</option>
                                                        <option value="3">Medevac Flight</option>
                                                        <option value="17">Military/Airforce Flight</option>
                                                        <option value="20">Static Display Flight</option>
                                                        <option value="18">Technical Flight For Refuelling </option>
                                                        <option value="23">Technical Landing Flight For Crew Rest</option>
                                                        <option value="24">Touch Down &amp; Go Flight</option>
                                                        <option value="19">Tourism Flight</option>
                                                        <option value="27">UN Chartered</option>
                                                        <option value="5">VIP/VVIP Flight</option>
                                                    </select>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                            <div>
                                                <div class="col-md-4"></div>
                                                <div class="col-md-8">
                                                    <div>
                                                        <div class="permit_type_description_box" id="permit_type_description_box_2" style="display:none;">
                                                            Note: Business flight category in aviation industry means, transporting a small groups of people. It also includes the evacuation of casualties or express parcel deliveries used by public bodies, government officials or the armed forces. </div>
                                                        <div class="permit_type_description_box" id="permit_type_description_box_15" style="display:none;">
                                                            Note: A Cargo flight is designed or converted for the carriage of cargo rather than passengers. </div>
                                                        <div class="permit_type_description_box" id="permit_type_description_box_21" style="display:none;">
                                                            Note: Ferry flying refers to delivery flights for the purpose of returning an aircraft to base, delivering a new aircraft from its place of manufacture to its customer, moving an aircraft from one base of operations to another or moving an aircraft to or from a maintenance facility for repairs, overhaul or other work. </div>
                                                        <div class="permit_type_description_box" id="permit_type_description_box_16" style="display:none;">
                                                            Note: Ferry flying refers to delivery flights for the purpose of returning an aircraft to base, delivering a new aircraft from its place of manufacture to its customer, moving an aircraft from one base of operations to another or moving an aircraft to or from a maintenance facility for repairs, overhaul or other work. </div>
                                                        <div class="permit_type_description_box" id="permit_type_description_box_3" style="display:none;">
                                                            Note: Medical evacuation is the timely and efficient movement and en route care provided by medical personnel to wounded being evacuated from a battlefield, to injured patients being evacuated from the scene of an accident to receiving medical facilities, or to patients at a rural hospital requiring urgent care at a better-equipped facility using medically equipped aircraft (air ambulances). </div>
                                                        <div class="permit_type_description_box" id="permit_type_description_box_17" style="display:none;">
                                                            Note: A flight is a military unit in an air force, naval air service, or army air operated by a legal or insurrectionary armed service of any type. </div>
                                                        <div class="permit_type_description_box" id="permit_type_description_box_20" style="display:none;">
                                                            Note: A static display is when the aircraft are on the ground for viewing. There is usually static displays at airshows and aviation related trade shows. </div>
                                                        <div class="permit_type_description_box" id="permit_type_description_box_18" style="display:none;">
                                                            Note: Technical flight stands for refueling and crew rest or may one of this. </div>
                                                        <div class="permit_type_description_box" id="permit_type_description_box_23" style="display:none;">
                                                            Note: Technical Landing Flight For Crew Rest </div>
                                                        <div class="permit_type_description_box" id="permit_type_description_box_24" style="display:none;">
                                                            Note: Touch Down &amp; Go Flight </div>
                                                        <div class="permit_type_description_box" id="permit_type_description_box_19" style="display:none;">
                                                            Note: Traveling or visiting a place for pleasure. </div>
                                                        <div class="permit_type_description_box" id="permit_type_description_box_27" style="display:none;">
                                                            Note: UN Chartered Flight </div>
                                                        <div class="permit_type_description_box" id="permit_type_description_box_5" style="display:none;">
                                                            Note: VIP or VVIP flight considers the lead pax is a person who is accorded special privileges due to their status or importance. </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group field-landingformstep1-dangergoods required">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label">Danger Goods</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <input type="hidden" name="LandingFormStep1[dangerGoods]" value="">
                                                    <div id="landingformstep1-dangergoods" class="danger-goods-radio-list inline-list2" style="margin-top:6px;" aria-required="true">
                                                        <label>
                                                            <input type="radio" name="LandingFormStep1[dangerGoods]" value="1"> Yes</label>
                                                        <label>
                                                            <input type="radio" name="LandingFormStep1[dangerGoods]" value="0"> No</label>
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

                                                <div class="form-group field-landingformstep1-dgunno required">
                                                    <div class="col-md-4 pod-label-text-right">
                                                        <label class="control-label" for="landingformstep1-dgunno">DG UN Number</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" id="landingformstep1-dgunno" class="form-control dg-field" name="LandingFormStep1[dgUnNo]" aria-required="true">
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group field-landingformstep1-dgtype required">
                                                    <div class="col-md-4 pod-label-text-right">
                                                        <label class="control-label" for="landingformstep1-dgtype">Type of DG</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <input type="text" id="landingformstep1-dgtype" class="form-control dg-field" name="LandingFormStep1[dgType]" aria-required="true">
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <div class="form-group field-landingformstep1-dgdescription required">
                                                    <div class="col-md-4 pod-label-text-right">
                                                        <label class="control-label" for="landingformstep1-dgdescription">DG Description</label>
                                                    </div>
                                                    <div class="col-md-8">
                                                        <textarea id="landingformstep1-dgdescription" class="form-control dg-field" name="LandingFormStep1[dgDescription]" aria-required="true"></textarea>
                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group field-landingformstep1-notes">
                                                <div class="col-md-4 pod-label-text-right">
                                                    <label class="control-label" for="landingformstep1-notes">Notes</label>
                                                </div>
                                                <div class="col-md-8">
                                                    <textarea id="landingformstep1-notes" class="form-control" name="LandingFormStep1[notes]" maxlength="500" rows="2"></textarea>
                                                    <div class="help-block"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="portlet light bordered">
                                    <div class="portlet-body pod-label-text-center caps-label2 small-label2">
                                        <div class="note note-info">
                                            <p> Coming From </p>
                                        </div>

                                        <div class="item-leg pod-multi-leg-form-box">
                                            <!--            <div id="op-time-diff"></div>-->

                                            <div class="op-time-diff">
                                                <div class="info"> </div>
                                                <hr>
                                                <div class="info2">Remaining time prior to operation</div>
                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group field-legform3-depdate1 required">
                                                        <label class="control-label" for="legform3-depdate1">Departure Date</label>
                                                        <input type="text" id="legform3-depdate1" class="text-center depDate-field dep-date_0 emergency-calc_0 form-control krajee-datepicker" name="LegForm3[depDate1]" readonly="" aria-required="true" data-datepicker-source="legform3-depdate1" data-datepicker-type="1" data-krajee-kvdatepicker="kvDatepicker_4dfc6c32">

                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group field-legform3-etdutc1 required">
                                                        <label class="control-label" for="legform3-etdutc1">ETD UTC</label>
                                                        <input type="text" id="legform3-etdutc1" class="form-control timepicker text-center dep-time_0 emergency-calc_0" name="LegForm3[etdUtc1]" readonly="" aria-required="true">

                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 custom-placeholder">
                                                    <div class="form-group field-legform3-depfrom1 required">
                                                        <label class="control-label" for="legform3-depfrom1">Aerodrome of Departure</label>
                                                        <select id="legform3-depfrom1" class="form-control icao-dropdown" name="LegForm3[depFrom1]" aria-required="true">
                                                            <option value="">Search By ICAO/ Country/ City</option>
                                                        </select>

                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group field-legform3-arrdate1 required">
                                                        <label class="control-label" for="legform3-arrdate1">Arrival Date</label>
                                                        <input type="text" id="legform3-arrdate1" class="arrDate-field text-center form-control krajee-datepicker" name="LegForm3[arrDate1]" readonly="" aria-required="true" data-datepicker-source="legform3-arrdate1" data-datepicker-type="1" data-krajee-kvdatepicker="kvDatepicker_4dfc6c32">

                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group field-legform3-etautc1 required">
                                                        <label class="control-label" for="legform3-etautc1">ETA UTC</label>
                                                        <input type="text" id="legform3-etautc1" class="form-control timepicker text-center" name="LegForm3[etaUtc1]" readonly="" aria-required="true">

                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 custom-placeholder">
                                                    <div class="form-group field-legform3-arrto1 required">
                                                        <label class="control-label" for="legform3-arrto1">Aerodrome of Destination</label>
                                                        <select id="legform3-arrto1" class="form-control icao-dropdown select22" name="LegForm3[arrTo1]" aria-required="true">
                                                            <option value="">Search By ICAO/ Country/ City</option>
                                                        </select>

                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="note note-info">
                                            <p> Going To </p>
                                        </div>

                                        <div class="item-leg pod-multi-leg-form-box">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group field-legform3-depdate2 required">
                                                        <label class="control-label" for="legform3-depdate2">Departure Date</label>
                                                        <input type="text" id="legform3-depdate2" class="text-center depDate-field dep-date_1 emergency-calc_1 form-control krajee-datepicker" name="LegForm3[depDate2]" readonly="" aria-required="true" data-datepicker-source="legform3-depdate2" data-datepicker-type="1" data-krajee-kvdatepicker="kvDatepicker_4dfc6c32">

                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group field-legform3-etdutc2 required">
                                                        <label class="control-label" for="legform3-etdutc2">ETD UTC</label>
                                                        <input type="text" id="legform3-etdutc2" class="form-control timepicker text-center dep-time_1 emergency-calc_1" name="LegForm3[etdUtc2]" readonly="" aria-required="true">

                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 custom-placeholder">
                                                    <div class="form-group field-legform3-depfrom2 required">
                                                        <label class="control-label" for="legform3-depfrom2">Aerodrome of Departure</label>
                                                        <select id="legform3-depfrom2" class="form-control icao-dropdown" name="LegForm3[depFrom2]" aria-required="true">
                                                            <option value="">Search By ICAO/ Country/ City</option>
                                                        </select>

                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group field-legform3-arrdate2 required">
                                                        <label class="control-label" for="legform3-arrdate2">Arrival Date</label>
                                                        <input type="text" id="legform3-arrdate2" class="arrDate-field text-center form-control krajee-datepicker" name="LegForm3[arrDate2]" readonly="" aria-required="true" data-datepicker-source="legform3-arrdate2" data-datepicker-type="1" data-krajee-kvdatepicker="kvDatepicker_4dfc6c32">

                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-group field-legform3-etautc2 required">
                                                        <label class="control-label" for="legform3-etautc2">ETA UTC</label>
                                                        <input type="text" id="legform3-etautc2" class="form-control timepicker text-center" name="LegForm3[etaUtc2]" readonly="" aria-required="true">

                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-6 custom-placeholder">
                                                    <div class="form-group field-legform3-arrto2 required">
                                                        <label class="control-label" for="legform3-arrto2">Aerodrome of Destination</label>
                                                        <select id="legform3-arrto2" class="form-control icao-dropdown text-center" name="LegForm3[arrTo2]" aria-required="true">
                                                            <option value="">Search By ICAO/ Country/ City</option>
                                                        </select>

                                                        <div class="help-block"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr>

                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group field-legform3-firin required">
                                                        <label class="control-label" for="legform3-firin">FIR In</label>
                                                        <select id="legform3-firin" class="select2" name="LegForm3[firIn]" aria-required="true">
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
                                                    <div class="form-group field-legform3-firout required">
                                                        <label class="control-label" for="legform3-firout">FIR Out</label>
                                                        <select id="legform3-firout" class="select2" name="LegForm3[firOut]" aria-required="true">
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

                                        </div>
                                    </div>
                                </div>

                                <input type="hidden" id="landingformstep1-emergency_hours" class="emergency-hours" name="LandingFormStep1[emergency_hours]">
                            </div>

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Continue</button>
                        </div>
                        <label id="is-copy" hidden="">0</label>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- END CONTENT -->

</div>
<!-- END CONTENT BODY -->
@endsection