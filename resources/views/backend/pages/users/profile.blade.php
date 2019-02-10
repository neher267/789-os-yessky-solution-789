@extends('backend.master') @section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">

    <!-- BEGIN CONTENT -->
    <div class="profile-index">

        <h1 class="page-title">User Profile</h1>
        <hr>
        <div class="row">
            <div class="col-md-6">
                <div class="text-center">
                    <h4>User Information</h4>
                </div>
                <table id="w0" class="table table-striped table-bordered detail-view">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td>{{$user->name}}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{$user->email}}</td>
                        </tr>

                        <tr>
                            <th>Primary Contact</th>
                            <td>{{$user->primary_contact}}</td>
                        </tr>
                        <tr>
                            <th>Secondary Contact</th>
                            <td>{{$user->secondary_contact}}</td>
                        </tr>
                        
                        <tr>
                            <th>Additional Notes</th>
                            <td>{{$user->aditional_notes}}</td>
                        </tr>                        
                    </tbody>
                </table>
                <!-- <div>
                    <a class="btn btn-success" href="/client/profile/update">Update Profile</a> &nbsp;
                    <a class="btn btn-danger" href="/client/profile/change-password">Change Password</a> 
                </div> -->
            </div>
            <!-- <div class="col-md-6">
                <div class="text-center">
                    <h4>Organization Information</h4>
                </div>
                <table id="w1" class="table table-striped table-bordered detail-view">
                    <tbody>
                        <tr>
                            <th>Organization</th>
                            <td># 2. Sky Solution (Pvt.) Co. Ltd</td>
                        </tr>
                        <tr>
                            <th>Billing Address Line 1</th>
                            <td>Head office, 48 Kemal Ataturk Avenue Banani, Dhaka-</td>
                        </tr>
                        <tr>
                            <th>Billing Address Line 2</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Postal Code</th>
                            <td>1212</td>
                        </tr>
                        <tr>
                            <th>Contact</th>
                            <td>+880 2 8957910, +880 2 8957925</td>
                        </tr>
                        <tr>
                            <th>Extension</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Fax Number</th>
                            <td></td>
                        </tr>
                        <tr>
                            <th>Website</th>
                            <td><a href="http://www.skysolutionbd.com">www.skysolutionbd.com</a></td>
                        </tr>
                        <tr>
                            <th>City</th>
                            <td>Dhaka</td>
                        </tr>
                        <tr>
                            <th>Country</th>
                            <td>Bangladesh</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td><a href="mailto:management@skysolutionbd.com">management@skysolutionbd.com</a></td>
                        </tr>
                        <tr>
                            <th>ICAO</th>
                            <td>VGHS</td>
                        </tr>
                        <tr>
                            <th>Type</th>
                            <td>OSP Agent</td>
                        </tr>
                        <tr>
                            <th>Additional Notes</th>
                            <td></td>
                        </tr>
                    </tbody>
                </table>
                <p>
                    <a class="btn btn-success" href="/client/profile/update-organization">Update Organization</a> 
                </p>
            </div> -->
        </div>
    </div>
    <!-- END CONTENT -->

</div>
<!-- END CONTENT BODY -->
@endsection