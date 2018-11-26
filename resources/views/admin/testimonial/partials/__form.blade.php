<div class="form-group @hasError('title')">
    {!!Form::label('name', 'Full Name', ['class' => "control-label"])!!}
    {!!Form::text('name', $testimonial->name??'', ['class' => "form-control",'id'=>'name'])!!}
    @errorBlock('name')
</div>
<div class="form-group @hasError('title')">
    {!!Form::label('title', 'Title :', ['class' => "control-label"])!!}
    {!!Form::text('title',$testimonial->title??'', ['class' => "form-control",'id'=>'title'])!!}
    @errorBlock('title')
</div>

@image('image')

@if(isset($testimonial->image) && $testimonial->image)
    <div class="polaroid" style="display: block;width:45%;">
        <img src="{{asset('storage/uploads/testimonial/'.$testimonial->id.'/'.$testimonial->image)}}"/>
        {!! Form::hidden('oldImage',$testimonial->image)!!}
    </div>
@endisset

<div class="form-group @hasError('content')">
    {!!Form::label('content', 'Content Description', ['class' => "control-label"])!!}
    {!!Form::textarea('content', $testimonial->content??'',
    ['class' => 'form-control summernote'])!!}
    @errorBlock('content')
</div>
<div class="form-group @hasError('rating')">
    {!!Form::label('rating', 'Rating', ['class' => "control-label"])!!}
    {!!Form::text('rating', $testimonial->rating??'', ['class' => "form-control",'id'=>'name'])!!}
    @errorBlock('name')
</div>
