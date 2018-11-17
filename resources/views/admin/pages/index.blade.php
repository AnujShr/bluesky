@extends('admin.layouts')
@section('page-content')
    <div class="x_panel">
        <div class="x_content">
            <table class="table table-striped table-hover">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Slug</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($pages as $page)
                    <tr>
                        <th scope="row">{{$loop->iteration}}</th>
                        <td>{{$page->name}}</td>
                        <td>{{$page->slug}}</td>
                        <td><a href="{{route('admin.page.detail',$page->slug)}}"
                               class="btn btn-default"><i class="fa fa-edit"></i> Edit</a></td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection