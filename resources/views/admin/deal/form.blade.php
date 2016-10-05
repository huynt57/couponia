@extends('admin')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Deal</h1>
        </div>

    </div>
    <div class="row">
        <div class="col-lg-12">
            @if (!empty($deal))
            <h2>Edit</h2>
            {!! Form::model($deal, [
                'method' => 'PATCH',
                'route' => ['deals.update', $deal->id],
                'files' => true
             ]) !!}
            @else
                <h2>Add</h2>
                {!! Form::model($deal = new App\Deal, ['route' => ['deals.store'], 'files' => true]) !!}
            @endif

            <div class="form-group">
                {!! Form::label('name', 'Name') !!}
                {!! Form::text('name', null, ['class' => 'form-control']) !!}
            </div>
                <div class="form-group">
                    {!! Form::label('valid_from', 'Valid From') !!}
                    {!! Form::text('valid_from', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('valid_to', 'Valid To') !!}
                    {!! Form::text('valid_to', null, ['class' => 'form-control']) !!}
                </div>
                <div class="form-group">
                    {!! Form::label('condition', 'Condition') !!}
                    {!! Form::textarea('condition', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('description', 'Description') !!}
                    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('original_price', 'Original Price') !!}
                    {!! Form::text('original_price', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('new_price', 'New Price') !!}
                    {!! Form::text('new_price', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('code', 'Code') !!}
                    {!! Form::text('code', null, ['class' => 'form-control']) !!}
                </div>

                <div class="form-group">
                    {!! Form::label('online_url', 'URL') !!}
                    {!! Form::text('online_url', null, ['class' => 'form-control']) !!}
                </div>


                <div class="form-group">
                    {!! Form::label('source', 'Providers') !!}
                    {!! Form::select('source', $providers, null, ['class' => 'form-control']) !!}
                </div>



            <div class="form-group">
                {!! Form::label('image', 'Image') !!}
                @if ($deal->image_preview)
                    <img src="{{$deal->image_preview}}" />
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
