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

                <!-- Contact Info -->
                <div class="col-lg-4">
                    <div class="contact_info">
                        <div class="section_title">Get in touch with us</div>
                        <div class="section_subtitle">Say hello</div>
                        <div class="contact_info_text"><p>Donec ullamcorper nulla non metus auctor fringi lla. Curabitur
                                blandit tempus porttitor.Sed lectus urna, ultricies sit amet risus eget.</p></div>
                        <div class="contact_info_content">
                            <ul class="contact_info_list">
                                <li>
                                    <div>Address:</div>
                                    <div>1481 Creekside Lane Avila Beach, CA 93424</div>
                                </li>
                                <li>
                                    <div>Phone:</div>
                                    <div>+53 345 7953 32453</div>
                                </li>
                                <li>
                                    <div>Email:</div>
                                    <div>yourmail@gmail.com</div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-8">
                    <div class="contact_form_container">
                        <form action="#" class="contact_form" id="contact_form">
                            <div class="row">
                                <!-- Name -->
                                <div class="col-lg-6 contact_name_col">
                                    <input type="text" class="contact_input" placeholder="Name" required="required">
                                </div>
                                <!-- Email -->
                                <div class="col-lg-6">
                                    <input type="email" class="contact_input" placeholder="E-mail" required="required">
                                </div>
                            </div>
                            <div><input type="text" class="contact_input" placeholder="Subject"></div>
                            <div><textarea class="contact_textarea contact_input" placeholder="Message"
                                           required="required"></textarea></div>
                            <button class="contact_button button">send</button>
                        </form>
                    </div>
                </div>
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

@endsection

@section('js')
    <script src="{{asset('plugin/rangeslider.js-2.3.0/rangeslider.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCgi--a_yluiQAjqYxqkN_Y-72WrdCtfso"></script>

@endsection

