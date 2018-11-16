<div class="form-group">
    {!! Form::label('name','Name',['class' => "control-label"]) !!}
    {!! Form::input('text','name',$page->name,['class'=>'form-control','readonly']) !!}
</div>
<div class="form-group">
    {!! Form::label('file', 'Upload New Image') !!}
    <div class="input-group @hasError('image')">
            <span class="input-group-btn">
                <span class="btn btn btn-success btn-file">
                    Browse…
                    {!! Form::input('file','image','',['id' => 'imgInp']) !!}
                </span>
            </span>
        {!! Form::input('text','text',null,['class' => 'form-control', 'readonly']) !!}
    </div>
    <div class="has-error">@errorBlockImage('image')</div>

    <div class="img-preview polaroid">
        <img id='img-upload' src=""/>
        <div class="text-container">
        </div>
    </div>

    @if(isset($conent['image']) && $conent['image'])
        <div class="polaroid">
            <img src="{{$content['image']}}"/>
            {!! Form::hidden('old_image',$content['image']) !!}
        </div>
    @endif`
</div>

<div class="form-group @hasError('title') ">
    {!!Form::label('title', 'Title', ['class' => "control-label"])!!}
    {!!Form::input('text', 'title', $content->title??'', ['class' => "form-control ",  'required' => 'required'])!!}
    @errorBlock('title')

</div>
<div class="form-group @hasError('slogan')">
    {!!Form::label('slogan', 'Title Slogan', ['class' => "control-label"])!!}
    {!!Form::input('text','slogan', $content['slogan']??'',
        ['class' => 'form-control'])!!}
    @errorBlock('slogan')
</div>
<div class="form-group @hasError('content')">
    {!!Form::label('content', 'Content', ['class' => "control-label"])!!}
    {!!Form::textarea('content', $content['content']??'',
    ['class' => 'form-control summernote'])!!}
    @errorBlock('content')
</div>

