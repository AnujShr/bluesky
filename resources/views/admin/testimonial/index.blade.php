@extends('admin.layouts')
@section('page-content')
    <div class="x_panel">
        <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Title</th>
                    <th>Rating</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($testimonials as $testimonial)
                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>{{$testimonial->name}}</td>
                        <td>{{$testimonial->title}}</td>
                        <td>{{$testimonial->rating}}</td>
                        <td></td>
                        <td>
                            {!! Form::open(
                        [
                            'url'=>route('admin.testimonial.destroy',$testimonial->id),
                            'method' => 'delete'
                        ]) !!}
                            <a href="{{route('admin.testimonial.edit',$testimonial->id)}}"
                               class="btn btn-info">Edit</a>{!! Form::submit('DELETE',['class' => 'delete-confirm btn btn-danger']) !!}
                            {!! Form::close() !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection