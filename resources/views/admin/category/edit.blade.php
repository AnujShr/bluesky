@extends('admin.layouts')

@section('page-content')
    <div class="x_panel">
        <div class="x_content">
            <div class="col-md-4">
                {!!Form::open([
               'url'        => route('admin.category.update'),
               'method'     => 'POST',
               'novalidate' => 'novalidate'
            ])!!}
                <div class="form-group @hasError('title')">
                    {!!Form::label('title', 'Category Title :', ['class' => "control-label"])!!}
                    {!!Form::input('text', 'title', $content['title']??'', ['class' => "form-control",'id'=>'title'])!!}
                    @errorBlock('title')
                </div>
                <div class="form-group @hasError('title')">
                    {!!Form::label('slug', 'Category Slug :', ['class' => "control-label"])!!}
                    {!!Form::input('text', 'slug', $content['title']??'', ['class' => "form-control",'readonly' ,'id'=>'slug'])!!}
                    @errorBlock('title')
                </div>
                {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
            </div>
        </div>
    </div>
@endsection