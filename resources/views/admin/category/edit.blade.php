@extends('admin.layouts')

@section('page-content')
    <div class="x_panel">
        <div class="x_content">
            <div class="col-md-4">
                {!!Form::open([
               'url'        => route('admin.category.update',$category->id),
               'method'     => 'POST',
               'novalidate' => 'novalidate'
            ])!!}
                @include('admin.category.__forms')
                {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
                {!! Form::close() !!}
            </div>
        </div>
        @isset($category)
            <script>
                let id = {{$category->id}};
            </script>
        @endisset
    </div>
@endsection