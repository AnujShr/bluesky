<div class="form-group @hasError('title')">
    {!!Form::label('name', 'Category Title :', ['class' => "control-label"])!!}
    {!!Form::input('text', 'name', $category->name??'', ['class' => "form-control",'id'=>'title'])!!}
    @errorBlock('title')
</div>
<div class="form-group @hasError('title')">
    {!!Form::label('slug', 'Category Slug :', ['class' => "control-label"])!!}
    {!!Form::input('text', 'slug', $category->slug??'', ['class' => "form-control",'readonly' ,'id'=>'slug'])!!}
    @errorBlock('title')
</div>
