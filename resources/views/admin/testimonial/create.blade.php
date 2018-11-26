@extends('admin.layouts')

@section('page-content')
    <div class="x_panel">
        <div class="x_content">
            {!!Form::open([
           'url'        => route('admin.testimonial.create'),
           'method'     => 'POST',
           'files'      => true,
           'novalidate' => 'novalidate'
        ])!!}
            @include('admin.testimonial.partials.__form')
            {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection