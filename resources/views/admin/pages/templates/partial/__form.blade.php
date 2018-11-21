<div class="form-group">
    {!! Form::label('name','Name',['class' => "control-label"]) !!}
    {!! Form::input('text','name',$page->name,['class'=>'form-control','readonly']) !!}
</div>

<div class="form-group @hasError('title')">
    {!!Form::label('title', 'Title', ['class' => "control-label"])!!}
    {!!Form::input('text', 'title', $content['title']??'', ['class' => "form-control ",  'required' => 'required'])!!}
    @errorBlock('title')
</div>

<div class="form-group @hasError('description')">
    {!!Form::label('description', 'Content Description', ['class' => "control-label"])!!}
    {!!Form::textarea('description', $content['description']??'',
    ['class' => 'form-control summernote'])!!}
    @errorBlock('description')
</div>

