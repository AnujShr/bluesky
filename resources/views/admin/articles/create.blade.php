@extends('admin.layouts')

@section('page-content')
    <div class="x_panel">
        <div class="x_content">
            {!!Form::open([
           'url'        => route('admin.articles.create'),
           'method'     => 'POST',
             'files'      => true,
           'novalidate' => 'novalidate'
        ])!!}
            @include('admin.articles.__form')
        </div>
    </div>
    <div class="x_panel">
        <div class="x_content">
            @include('admin.pages.templates.meta')
        </div>
        {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
        {!! Form::close() !!}

    </div>
@endsection