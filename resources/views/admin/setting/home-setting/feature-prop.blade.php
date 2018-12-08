@extends('admin.layouts')

@section('page-content')
    <div class="x_panel">
        <div class="x_content">
            <table id="datatable" class="table table-striped table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Seller</th>
                    <th>Location</th>
                    <th>Action</th>
                </tr>
                </thead>

                <tbody>
                @foreach($properties as $property)
                    <tr>
                        <td>
                            {{$loop->iteration}}
                        </td>
                        <td>{{$property->title}}</td>
                        <td>{{$property->seller->name}}</td>
                        <td>{{$property->location}}</td>
                        <td>
                            {!! Form::checkbox('featureId[]',$property->id,(in_array($property->id,$content)?true:false),['class'=>'form-control']) !!}
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>

        </div>
    </div>
@endsection