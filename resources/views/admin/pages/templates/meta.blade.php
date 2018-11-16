<div class="form-group">
    {!! Form::label('meta_title', 'Meta Title',['class' => 'control-label']) !!}
    {!! Form::input('text','meta_title',$meta['meta_title']??'',['class' => "form-control "]) !!}
</div>
<div class="form-group">
    {!! Form::label('meta_description', 'Meta Description',['class' => 'control-label']) !!}
    {!! Form::textarea('meta_description',$meta['meta_description']??'',['class' => "form-control "]) !!}
</div>
