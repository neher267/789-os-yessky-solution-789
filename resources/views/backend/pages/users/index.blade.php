@extends('backend.master') @section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">

    <!-- BEGIN CONTENT -->
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark2 bold uppercase">Total {{$results->count()}} {{$type}}</span>
            </div>            
        </div>
        <div class="portlet-body">
            <div class="permit-list-table table-responsive">
                <table class="datatable table table-striped table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>Role</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i=0 ?>
                            @foreach($results as $result)
                            <tr>
                                <td>{{++$i}}</td>
                                <!-- <td>
                                <img src="{{asset($result->image)}}" style="height: 50px; box-shadow: 2px 4px 5px darkgrey; margin: 3px;">
                            </td> -->
                                <td>{{$result->name}}</td>
                                <td>{{$result->role == 1 ? "Admin":"Moderator"}}</td>
                                <td>{{$result->email}}</td>
                                <td>
                                    <a href="{{route($name.'.edit.role', $result)}}" class="btn btn-info btn-xs"><i class="fa fa-pencil"></i> Role Edit </a> @if(Auth::user()->role == 1)
                                    <form action="{{route($name.'.destroy', $result)}}" method="POST" style="display: inline;">
                                        {{ csrf_field() }} {{ method_field('DELETE') }}

                                        <button type="submit" class="btn btn-danger btn-xs" onclick="return confirm_user('delete')"><i class="fa fa-trash-o"></i> Delete </button>
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
    <!-- END CONTENT -->
</div>
<!-- END CONTENT BODY -->
@endsection