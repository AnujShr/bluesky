@extends('layouts.admin')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="full_title">
                    <div class="container">
                        <ol class="breadcrumb breadcrumb-arrow">
                            <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i> Home</a></li>
                            <li class="active"><span>Pages</span></li>
                        </ol>
                    </div>
                </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>Pages</h2>
                            <ul class="nav navbar-right panel_toolbox">
                                <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </li>
                                <li><a class="close-link"><i class="fa fa-close"></i></a>
                                </li>
                            </ul>
                            <div class="clearfix"></div>
                        </div>
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
                </div>
            </div>
        </div>
    </div>
@endsection