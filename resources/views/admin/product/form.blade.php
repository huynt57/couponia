@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Product</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            @if (!empty($product))
            <h2>Edit</h2>
            {!! Form::model($product, [
                'method' => 'PATCH',
                'route' => ['deals.update', $product->id],
                'files' => true
             ]) !!}
            @else
                <h2>Add</h2>
                {!! Form::model($product = new App\Product, ['route' => ['products.store'], 'files' => true]) !!}
            @endif

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
                <div class="form-group">
                    {!! Form::label('price', 'Price') !!}
                    {!! Form::text('price', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('product_url', 'Product Url') !!}
                    {!! Form::text('product_url', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('product_version', 'Product version') !!}
                    {!! Form::text('product_version', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('aff_link', 'Affiliate Link') !!}
                    {!! Form::text('aff_link', null, ['class' => 'form-control']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('source', 'Providers') !!}
                    {!! Form::select('source', $providers, null, ['class' => 'form-control']) !!}
                </div>



            <div class="form-group">
                {!! Form::label('image', 'Image') !!}
                @if ($product->image_preview)
                    <img src="{{$product->image_preview}}" />
                    <hr>
                @endif
            </div>




            <div class="form-group">
                {!! Form::label('status', 'Status') !!}
                {!! Form::checkbox('status', null, null) !!}
            </div>



                <div class="form-group">
                {!! Form::submit('Save', ['class' => 'btn btn-primary form-control']) !!}
            </div>

            {!! Form::close() !!}

            @include('admin.list')

        </div>
    </div>
@endsection
