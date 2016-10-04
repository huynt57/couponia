@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Providers</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            @if (!empty($provider))
            <h2>Edit</h2>
            {!! Form::model($provider, [
                'method' => 'PATCH',
                'route' => ['providers.update', $provider->id],
                'files' => true
             ]) !!}
            @else
                <h2>Add</h2>
                {!! Form::model($provider = new App\Provider, ['route' => ['providers.store'], 'files' => true]) !!}
            @endif

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>

                <div class="form-group">
                    {!! Form::label('alias', 'Alias') !!}
                    {!! Form::text('alias', null, ['class' => 'form-control']) !!}
                </div>

            <div class="form-group">
                {!! Form::label('image', 'Image') !!}
                @if ($provider->image_preview)
                    <img src="{{url('img/cache/small/' . $provider->image_preview)}}" />
                    <hr>
                @endif
                {!! Form::file('image', null, ['class' => 'form-control']) !!}
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
