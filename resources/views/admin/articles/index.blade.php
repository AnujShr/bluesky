@extends('admin.layouts')

@section('page-content')
    <div class="x_panel">
        <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Published Date</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($articles as $article)
                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>{{$article->title}}</td>
                        <td>{{$article->published_date}}</td>
                        <td>{{$article->status}}
                            {!! Form::open(
                        [
                            'url'=>route('admin.article.destroy',$category->id),
                            'method' => 'delete'
                        ]) !!}
                            <a href="{{route('admin.category.edit',$category->id)}}"
                               class="btn btn-info">Edit</a>{!! Form::submit('DELETE',['class' => 'delete-category btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection