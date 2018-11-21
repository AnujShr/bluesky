@extends('admin.layouts')
@section('page-content')
    <div class="x_panel">
        <div class="x_content">
            @if(in_array($page->slug,$diffView))
                @php $view = $page->slug;@endphp
            @endif
            {!!Form::open([
                'url'        => route('admin.page.update', [$page->slug]),
                'method'     => 'PUT',
                'files'      => true,
                'novalidate' => 'novalidate'
             ])!!}
            @include('admin.pages.templates.'.$view)
        </div>
    </div>
    <div class="x_panel">
        <div class="x_content">
            @include('admin.pages.templates.meta')
        </div>
        {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>

@endsection



