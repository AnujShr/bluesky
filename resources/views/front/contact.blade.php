@extends('layouts.master')
@section('home')
    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/contact.jpg"
             data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content d-flex flex-row align-items-end justify-content-start">
                            <div class="home_title">Contact</div>
                            <div class="breadcrumbs ml-auto">
                                <ul>
                                    <li><a href="index.htmo">Home</a></li>
                                    <li>Contact</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('content')
    <div class="contact">
        <div class="container">
            <div class="row">

                <!-- Contact Form -->
                <div class="col-md-12 contact_section">
                    <section class="mb-4">
                        <h2 class="h1-responsive font-weight-bold text-center my-4 section_title">Contact us</h2>
                        <p class="text-center w-responsive mx-auto mb-5 ">Do you have any questions? Please do not
                            hesitate to contact us directly. Our team will come back to you within
                            a matter of hours to help you.</p>

                        <div class="row">
                            <div class="col-md-9 mb-md-0 mb-5">
                                <form id="contact-form" name="contact-form" method="POST">
                                    {!! csrf_field() !!}
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="name" name="name" class="form-control">
                                                <label for="name" class="">Your name</label>
                                                <span class="error"></span>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="md-form mb-0">
                                                <input type="text" id="email" name="email" class="form-control">
                                                <label for="email" class="">Your email</label>
                                                <span class="error"></span>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form mb-0">
                                                <input type="text" id="subject" name="subject" class="form-control">
                                                <label for="subject" class="">Subject</label>
                                                <span class="error"></span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="md-form">
                                                <textarea type="text" id="message" name="message" rows="1"
                                                          class="form-control md-textarea"></textarea>
                                                <label for="message">Your message</label>
                                                <span class="error"></span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                                <div class="text-center text-md-left">
                                    <a class="btn btn-cyan contact_button">SUBMIT</a>
                                </div>
                            </div>

                            <div class="col-md-3 text-center">
                                <ul class="list-unstyled mb-0">
                                    <li><i class="fa fa-map-marker fa-2x"></i>
                                        <p>San Francisco, CA 94126, USA</p>
                                    </li>

                                    <li><i class="fa fa-phone mt-4 fa-2x"></i>
                                        <p>+ 01 234 567 89</p>
                                    </li>

                                    <li><i class="fa fa-envelope mt-4 fa-2x"></i>
                                        <p>contact@mdbootstrap.com</p>
                                    </li>
                                </ul>
                            </div>

                        </div>

                    </section>
                </div>
            </div>
        </div>
        <div class="contact_map">
            <!-- Google Map -->


            <div class="map">
                <div id="google_map" class="google_map">
                    <div class="map_container">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>






        <div class="map">
                <div id="google_map" class="google_map">
                    <div class="map_container">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </div>

    <script>



    </script>
        @endsection

        @section('js')
            <script src="{{asset('plugins/rangeslider.js-2.3.0/rangeslider.min.js')}}"></script>
            {{--<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCgi--a_yluiQAjqYxqkN_Y-72WrdCtfso"></script>--}}
@endsection

