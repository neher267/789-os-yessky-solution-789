@extends('backend.master')

@section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">
    <!-- BEGIN CONTENT -->

    <div class="row" style="margin-top: 25px">
        <div class="col-md-12">
            <div class="panel panel-default">
                
                <div class="panel-heading">Create User</div>

                <div class="panel-body">
                    <div style="width: 100%; text-align: center;">
                        @if (session('success'))
                            <div class="alert alert-success flash" style="color: white; text-transform: capitalize;">
                                {{ session('success') }}
                            </div>
                        @endif
                    </div>
                    
                    <form class="form-horizontal" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                            <label for="name" class="col-md-4 control-label">Name</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('role') ? ' has-error' : '' }}">
                            <label for="role" class="col-md-4 control-label">User Role</label>

                            <div class="col-md-6">
                                <select id="role" class="form-control" name="role" required autofocus>
                                    <option value="">Select</option>
                                    <option value="admen">Admin</option>
                                    <option value="customer">Customer</option>
                                </select>

                                @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('role') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('primary_contact') ? ' has-error' : '' }}">
                            <label for="primary_contact" class="col-md-4 control-label">Primary Contact</label>

                            <div class="col-md-6">
                                <input id="primary_contact" type="text" class="form-control" name="primary_contact" value="{{ old('primary_contact') }}" required autofocus>

                                @if ($errors->has('primary_contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('primary_contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('secondary_contact') ? ' has-error' : '' }}">
                            <label for="secondary_contact" class="col-md-4 control-label">Secondary Contact</label>

                            <div class="col-md-6">
                                <input id="secondary_contact" type="text" class="form-control" name="secondary_contact" value="{{ old('secondary_contact') }}" autofocus>

                                @if ($errors->has('secondary_contact'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('secondary_contact') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('secondary_contact') ? ' has-error' : '' }}">
                            <label for="secondary_contact" class="col-md-4 control-label">Aditional Notes</label>

                            <div class="col-md-6">
                                <textarea class="form-control" name="aditional_notes"></textarea>

                                @if ($errors->has('aditional_notes'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('aditional_notes') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>



                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                            <label for="password" class="col-md-4 control-label">Password</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Register
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>    
    <!-- END CONTENT -->
</div>
<!-- END CONTENT BODY -->
@endsection
