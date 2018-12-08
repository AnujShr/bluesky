@extends('layouts.realtors.master')

@section('content')
    <!-- Page Content  -->
    <section class="status">
        <div class="row text-center h-100">
            <div class="col-md-4 text-center">
                <div class="card shadow main">
                    <div class="card-body content child">
                        <span>Down</span>
                        <span>Up</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card shadow">
                    <div class="card-body content">
                        <p>Up</p>
                        <span>Down</span>
                    </div>
                </div>
            </div>
            <div class="col-md-4 text-center">
                <div class="card shadow">
                    <div class="card-body content">
                        <p>Up</p>
                        <span>Down</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="recent-enquiries">
        <div class="card">
            <div class="card-body">
                <div class="table-responsive-md">
                    <div class="head-text">
                        <span>Recent Specific Request</span>

                    </div>
                    <table class="table table-striped enquiry_table">
                        <tr>
                            <td><p>{{\Carbon\Carbon::now()->format('d M Y')}}</p></td>
                            <td><p>Name</p></td>
                            <td class="enquiry"><p>This is a specific request</p></td>
                            <td><a href="#"><i class="fa fa-eye fa-2x "></i></a></td>
                        </tr>
                        <tr>
                            <td><p>{{\Carbon\Carbon::now()->format('d M Y')}}</p></td>
                            <td><p>Name</p></td>
                            <td class="enquiry"><p>This is a specific request with a long content for me to see its
                                    layout as </p></td>
                            <td><a href="#"><i class="fa fa-eye fa-2x"></i></a></td>
                        </tr>
                        <tr>
                            <td><p>{{\Carbon\Carbon::now()->format('d M Y')}}</p></td>
                            <td><p>Name NameName NameName NameName Name</p></td>
                            <td class="enquiry"><p>This is a specific request</p></td>
                            <td><a href="#"><i class="fa fa-eye fa-2x "></i></a></td>
                        </tr>
                        <tr>
                            <td><p>{{\Carbon\Carbon::now()->format('d M Y')}}</p></td>
                            <td><p>Name</p></td>
                            <td class="enquiry"><p>This is a specific request</p></td>
                            <td><a href="#"><i class="fa fa-eye fa-2x "></i></a></td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <div class="line"></div>
    <div class="card-deck">
        <div class="card">
            <div class="card-header">
                Most Viewed
            </div>
            <div class="card-body">
                <div class="general-property">
                    <div class="general-img">
                        <img src="#" alt="">
                    </div>
                    <div class="prop-detail">
                        <p>Name</p>
                        <p>price</p>
                    </div>
                </div>
                <p class="card-text">Some text inside the first card</p>
                <p class="card-text">Some more text to increase the height</p>
                <p class="card-text">Some more text to increase the height</p>
                <p class="card-text">Some more text to increase the height</p>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                Most Recent Properties
            </div>
            <div class="card-body">
                <p class="card-text">Some text inside the second card</p>
                <p class="card-text">Some text inside the second card</p>
                <p class="card-text">Some text inside the second card</p>
            </div>
        </div>
    </div>
@endsection
