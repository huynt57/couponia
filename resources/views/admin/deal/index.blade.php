@extends('admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Deals</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="input-group custom-search-form">
                        {!! Form::open(['method' => 'GET', 'route' =>  ['deals.index'] ]) !!}
                        <span class="input-group-btn">
                            <input type="text" value="{{$searchDeal}}" name="q" class="form-control" placeholder="Search deals..">

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
                                <th>Name</th>
                                <th>Description</th>
                                <th>Valid from</th>
                                <th>Valid to</th>
                                <th>Image</th>
                                <th>Provider</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($deals as $deal)
                                <tr>
                                    <td>{{$deal->name}}</td>
                                    <td width="15%">{{$deal->description}}</td>
                                    {{--<td><img src="{{url('img/cache/small/' . $provider->image_preview)}}" /></td>--}}
                                    <td>{{$deal->valid_from}}</td>
                                    <td>{{$deal->valid_to}}</td>
                                    <td><img src="{{$deal->image_preview}}" style="max-height: 150px" /></td>
                                    <td>{{$deal->provider->name}}</td>
                                    <td>
                                        <button id-attr="{{$deal->id}}" class="btn btn-primary btn-sm edit-post" type="button">Edit</button>&nbsp;
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['deals.destroy', $deal->id]]) !!}
                                        <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="row">

                        <div class="col-sm-6">{!!$deals->render()!!}</div>
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
                window.location.href = window.baseUrl + '/admin/deals/create';
            });
            $('.edit-post').click(function(){
                window.location.href = window.baseUrl + '/admin/deals/' + $(this).attr('id-attr') + '/edit';
            });
        });
    </script>
@endsection