@extends('admin')
@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Products</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="input-group custom-search-form">
                        {!! Form::open(['method' => 'GET', 'route' =>  ['products.index'] ]) !!}
                        <span class="input-group-btn">
                            <input type="text" value="{{$searchProduct}}" name="q" class="form-control" placeholder="Search products..">

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
                                <th>Price</th>
                                <th>Version</th>
                                <th>Image</th>
                                <th>Provider</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($products as $product)
                                <tr>
                                    <td>{{$product->name}}</td>
                                    <td>{{$product->price}}</td>
                                    {{--<td><img src="{{url('img/cache/small/' . $provider->image_preview)}}" /></td>--}}
                                    <td>{{$product->product_version}}</td>

                                    <td><img src="{{$product->image_preview}}" style="max-height: 150px" /></td>
                                    <td>{{$product->provider->name}}</td>
                                    <td>
                                        <button id-attr="{{$product->id}}" class="btn btn-primary btn-sm edit-post" type="button">Edit</button>&nbsp;
                                        {!! Form::open(['method' => 'DELETE', 'route' => ['products.destroy', $product->id]]) !!}
                                        <button type="submit" class="btn btn-danger btn-mini">Delete</button>
                                        {!! Form::close() !!}
                                    </td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>

                    </div>
                    <div class="row">

                        <div class="col-sm-6">{!!$products->render()!!}</div>
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
                window.location.href = window.baseUrl + '/admin/products/create';
            });
            $('.edit-post').click(function(){
                window.location.href = window.baseUrl + '/admin/products/' + $(this).attr('id-attr') + '/edit';
            });
        });
    </script>
@endsection