@extends('admin.layouts')

@section('page-content')
    <div class="x_panel">
        <div class="x_content">
            {!!Form::open([
           'url'        => route('admin.articles.update'),
           'method'     => 'POST',
             'files'      => true,
           'novalidate' => 'novalidate'
        ])!!}
            <div class="form-group @hasError('title')">
                {!!Form::label('title', 'Post Title :', ['class' => "control-label"])!!}
                {!!Form::input('title', 'title', $article->name??'', ['class' => "form-control",'id'=>'title'])!!}
                @errorBlock('title')
            </div>

            @image('image')

            @isset($article->image)
                <div class="polaroid" style="display: block;width:45%;">
                    <img src="{{asset('storage/uploads/admin/about/'.$content['image'])}}"/>
                    {!! Form::hidden('oldImage',$content['image']) !!}
                </div>
            @endisset

            @if(isset($articles['image']) && $articles['image'])
                <div class="polaroid" style="display: block">
                    <img src="{{asset('storage/uploads/admin/about/'.$articles['image'])}}"/>
                    {!! Form::hidden('oldImage',$articles['image']) !!}
                </div>
            @endif
            <div class="form-group @hasError('category')">
                {!!Form::label('category', 'Category :', ['class' => "control-label"])!!}
                {!!Form::select('category', $category, $article->category??'', ['class' => "form-control" ,'id'=>'category','multiple'=>'multiple'])!!}
                @errorBlock('category')
            </div>
            <div class="form-group @hasError('description')">
                {!!Form::label('description', 'Content Description', ['class' => "control-label"])!!}
                {!!Form::textarea('description', $content['description']??'',
                ['class' => 'form-control summernote'])!!}
                @errorBlock('description')
            </div>
        </div>
    </div>

    <div class="_xpanel">
        <div class="x_content">
            @include('admin.pages.templates.meta')
            {!! Form::submit('Submit',['class' => 'btn btn-primary']) !!}
            {!! Form::close() !!}
        </div>
    </div>
@endsection