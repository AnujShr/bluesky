@extends('admin.layouts')

@section('page-content')
    <div class="x_panel">
        <div class="x_content">
            <div class="col-md-4">
                {!!Form::open([
               'url'        => route('admin.category.add'),
               'method'     => 'POST',
               'novalidate' => 'novalidate'
            ])!!}
                @include('admin.category.__forms')

                {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection