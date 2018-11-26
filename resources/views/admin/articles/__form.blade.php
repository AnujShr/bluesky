<div class="form-group @hasError('title')">
    {!!Form::label('title', 'Post Title :', ['class' => "control-label"])!!}
    {!!Form::input('text','title', $article->title??'', ['class' => "form-control",'id'=>'title'])!!}
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
    {!!Form::select('category[]', $category, $articleCategory??'', ['class' => "form-control" ,'id'=>'category','multiple'=>'multiple'])!!}
    @errorBlock('category')
</div>
<div class="form-group @hasError('description')">
    {!!Form::label('description', 'Content Description', ['class' => "control-label"])!!}
    {!!Form::textarea('description', $article->description??'',
    ['class' => 'form-control summernote'])!!}
    @errorBlock('description')
</div>
<div class="form-group">
    <div class="col-md-3 xdisplay_inputx form-group has-feedback">
        {!! Form::label('published','Published Date:',['class' => "control-label"]) !!}
        <input type="text" class="form-control has-feedback-left" id="single_cal1" placeholder="Published Date"
               aria-describedby="inputSuccess2Status3" name="published">
        <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
        <span id="inputSuccess2Status3" class="sr-only">(success)</span>
    </div>
</div>
</div>
@isset($article)
    <script>
        var published = "{{(\Carbon\Carbon::parse($article->published)->format('m/d/Y'))?:\Carbon\Carbon::now()->format('m/d/Y')}};"
    </script>
@endisset

