@extends('backend.master') @section('content')
<!-- BEGIN CONTENT BODY -->
<div class="page-content">

    <!-- BEGIN CONTENT -->
    @include('backend.partials.flash')
    @include('backend.partials.errors')
    
    <div class="portlet light bordered">
        <div class="portlet-title">
            <div class="caption">
                <span class="caption-subject font-dark2 bold uppercase">Total {{$results->count()}} Countries</span>
            </div>            
        </div>
        <div class="portlet-body">
            <div class="permit-list-table table-responsive">
                <table class="datatable table table-striped table-bordered table-hover text-center">
                    <thead>
                        <tr>
                            <th>Sr.No</th>
                            <th>Name</th>
                            <th>Short Name</th>
                            <th>Continent</th>
                            <th>Actions</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php $i=0 ?>
                            @foreach($results as $result)
                            <tr>
                                <td>{{++$i}}</td>
                                <td>{{$result->name}}</td>
                                <td>{{$result->short_name}}</td>
                                <td>{{$result->continet()->first()->name}}</td>
                                <td>
                                    <a class="btn btn-success btn-xs" href="{{route('countries.edit', $result)}}"><i class="fa fa-edit"></i> Edit </a>

                                    @if(Auth::user()->role == 'admen' || Auth::user()->role == 'super-admen')
                                    <form action="{{route('countries.destroy', $result)}}" method="POST" style="display: inline;">
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