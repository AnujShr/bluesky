@extends('layouts.admin')

@section('content')
    <div class="right_col" role="main">
        <div class="">
            @include('layouts.admin.page-title')

            <div class="clearfix"></div>
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>{{$crumbs['title']}}</h2>
                        <div class="clearfix"></div>
                    </div>
                </div>

                @yield('page-content')
            </div>
        </div>
    </div>

@endsection