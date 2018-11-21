<div class="form-group @hasError('title')">
    {!!Form::label('title', 'Post Title :', ['class' => "control-label"])!!}
    {!!Form::input('title', 'title', $article->title??'', ['class' => "form-control",'id'=>'title'])!!}
    @errorBlock('title')
</div>

@image('image')

@if(isset($article->image) && $article->image)
    <div class="polaroid" style="display: block;width:45%;">
        <img src="{{asset('storage/uploads/articles/'.$article->id.'/'.$article->image)}}"/>
        {!! Form::hidden('oldImage',$article->image)!!}
    </div>
@endisset

<div class="form-group @hasError('category')">
    {!!Form::label('category', 'Category :', ['class' => "control-label"])!!}
    {!!Form::select('category[]', $category, $articleCategory, ['class' => "form-control" ,'id'=>'category','multiple'=>'multiple'])!!}
    @errorBlock('category')
</div>
<div class="form-group @hasError('description')">
    {!!Form::label('description', 'Content Description', ['class' => "control-label"])!!}
    {!!Form::textarea('description', $article->description??'',
    ['class' => 'form-control summernote'])!!}
    @errorBlock('description')
</div>
<div class="form-group @hasError('description')">
    {!! Form::label('published','Published Date',['class'=>'control-label']) !!}
    {!! Form::date('published',$article->published??null,['class'=>'form-control']) !!}
    @errorBlock('published')
</div>

