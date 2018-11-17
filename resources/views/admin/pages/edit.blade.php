@extends('layouts.admin')
@section('content')
    <div class="right_col" role="main">
        <div class="">
            <div class="page-title">
                <div class="full_title">
                    <div class="container">
                        <ol class="breadcrumb breadcrumb-arrow">
                            <li><a href="{{route('admin.home')}}"><i class="fa fa-home"></i> Home </a></li>
                            <li><a href="{{route('admin.pages')}}"><i class="fa fa-file-text-o"></i> {{slugToTitle($page->group)}}</a></li>
                            <li class="active"><span>{{$page->name}}</span></li>
                        </ol>
                    </div>
                </div>

            </div>

            <div class="clearfix"></div>

            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="x_panel">
                        <div class="x_title">
                            <h2>{{$page->name}}</h2>
                            <div class="clearfix"></div>
                        </div>
                        <div class="x_content">
                            {!!Form::open([
                                'url'        => route('admin.page.update', [$page->slug]),
                                'method'     => 'PUT',
                                'files'      => true,
                                'novalidate' => 'novalidate'
                             ])!!}
                            @include('admin.pages.templates.'.$page->slug)
                        </div>
                    </div>
                </div>
                <div class="x_panel">
                    <div class="x_content">
                        @include('admin.pages.templates.meta')
                    </div>
                    {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                    {!! Form::close() !!}
                </div>

            </div>
        </div>
    </div>

@endsection



