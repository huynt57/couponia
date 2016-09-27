@extends('admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Providers</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="input-group custom-search-form">
                        {!! Form::open(['method' => 'GET', 'route' =>  ['providers.index'] ]) !!}
                        <span class="input-group-btn">
                            <input type="text" value="{{$searchProvider}}" name="q" class="form-control" placeholder="Search post..">

                            <button class="btn btn-default" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>

                        {!! Form::close() !!}
                    </div>
                </div>
                <!-- /.panel-heading -->
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Alias</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($providers as $provider)
                                <tr>
                                    <td>{{$provider->name}}</td>
                                    <td>{{$provider->alias}}</td>
                                    {{--<td><img src="{{url('img/cache/small/' . $provider->image_preview)}}" /></td>--}}
                                    <td><img src="{{$provider->image_preview}}" /></td>
                                    <td>{{ ($provider->status) ? 'Yes' : 'No'  }}</td>
                                    <td>
                                        <button id-attr="{{$provider->id}}" class="btn btn-primary btn-sm edit-post" type="button">Edit</button>&nbsp;
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['providers.destroy', $provider->id]]) !!}
                                        <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="row">

                        <div class="col-sm-6">{!!$providers->render()!!}</div>
                    </div>
                    <div class="row">
                        <div class="col-sm-6">
                            <button class="btn btn-primary add-post" type="button">Add</button>
                        </div>
                    </div>


                </div>
                <!-- /.panel-body -->
            </div>
            <!-- /.panel -->
        </div>

    </div>
@endsection
@section('footer')
    <script>
        $(function(){
            $('.add-post').click(function(){
                window.location.href = window.baseUrl + '/admin/providers/create';
            });
            $('.edit-post').click(function(){
                window.location.href = window.baseUrl + '/admin/providers/' + $(this).attr('id-attr') + '/edit';
            });
        });
    </script>
@endsection