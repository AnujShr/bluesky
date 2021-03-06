@extends('admin.layouts')

@section('page-content')
    <div class="x_panel">
        <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>slug</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($categories as $category)
                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->slug}}</td>
                        <td>
                            {!! Form::open(
                        [
                            'url'=>route('admin.category.destroy',$category->id),
                            'method' => 'delete'
                        ]) !!}

                            <a href="{{route('admin.category.edit',$category->id)}}"
                               class="btn btn-info">Edit</a>{!! Form::submit('DELETE',['class' => 'delete-confirm btn btn-danger']) !!}
                        {!! Form::close() !!}
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection