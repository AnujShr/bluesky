@extends('layouts.master')
@section('home')
    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/properties.jpg"
             data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content d-flex flex-row align-items-end justify-content-start">
                            <div class="home_title">Search results</div>
                            <div class="breadcrumbs ml-auto">
                                <ul>
                                    <li><a href="{{route('home')}}">Home</a></li>
                                    <li>Search Results</li>
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
    <div class="intro">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="intro_content d-flex flex-lg-row flex-column align-items-start justify-content-start">
                        <div class="intro_title_container">
                            <div class="intro_title">Town house with sea view</div>
                            <div class="intro_tags">
                                <ul>
                                    <li><a href="#">Hottub</a></li>
                                    <li><a href="#">Swimming Pool</a></li>
                                    <li><a href="#">Garden</a></li>
                                    <li><a href="#">Patio</a></li>
                                    <li><a href="#">Hard Wood Floor</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="intro_price_container ml-lg-auto d-flex flex-column align-items-start justify-content-center">
                            <div>For Sale</div>
                            <div class="intro_price">$980,000</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="intro_slider_container">

            <!-- Intro Slider -->
            <div class="owl-carousel owl-theme intro_slider">
                <!-- Slide -->
                <div class="owl-item"><img src="images/intro_1.jpg" alt=""></div>
                <!-- Slide -->
                <div class="owl-item"><img src="images/intro_1.jpg" alt=""></div>
                <!-- Slide -->
                <div class="owl-item"><img src="images/intro_1.jpg" alt=""></div>
            </div>

            <!-- Intro Slider Nav -->
            <div class="intro_slider_nav_container">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <div class="intro_slider_nav_content d-flex flex-row align-items-start justify-content-end">
                                <div class="intro_slider_nav intro_slider_prev"><i class="fa fa-chevron-left"
                                                                                   aria-hidden="true"></i></div>
                                <div class="intro_slider_nav intro_slider_next"><i class="fa fa-chevron-right"
                                                                                   aria-hidden="true"></i></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="property">
        <div class="container">
            <div class="row">

                <!-- Sidebar -->

                <div class="col-lg-4">
                    <div class="sidebar">
                        <div class="sidebar_search">
                            <div class="sidebar_search_title">Search your home</div>
                            <div class="sidebar_search_form_container">
                                <form action="#" class="sidebar_search_form" id="sidebar_search_form">
                                    <select class="sidebar_search_select">
                                        <option disabled selected>Keywords</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                    </select>
                                    <select class="sidebar_search_select">
                                        <option disabled selected>Property ID</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                    </select>
                                    <select class="sidebar_search_select">
                                        <option disabled selected>Property Status</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                    </select>
                                    <select class="sidebar_search_select">
                                        <option disabled selected>City</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                    </select>
                                    <select class="sidebar_search_select">
                                        <option disabled selected>Property Type</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                        <option>Option</option>
                                    </select>
                                    <div class="row sidebar_search_row">
                                        <div class="col-lg-6">
                                            <input type="text" class="sidebar_search_input" placeholder="Bedrooms No">
                                        </div>
                                        <div class="col-lg-6">
                                            <input type="text" class="sidebar_search_input" placeholder="Bathrooms No">
                                        </div>
                                    </div>

                                    <!-- Filter Price -->
                                    <div class="price_filter">
                                        <div class="price_filter_values d-flex flex-row align-items-center justfy-content-start">
                                            <div>Min Price</div>
                                            <div class="ml-auto">Max Price</div>
                                        </div>
                                        <input type="range" min="0" max="1000" step="10" value="250" data-rangeslider=""
                                               style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                                    </div>

                                    <!-- Filter Area -->
                                    <div class="area_filter">
                                        <div class="price_filter_values d-flex flex-row align-items-center justfy-content-start">
                                            <div>Min Price</div>
                                            <div class="ml-auto">Max Price</div>
                                        </div>
                                        <input type="range" min="0" max="1000" step="10" value="300" data-rangeslider=""
                                               style="position: absolute; width: 1px; height: 1px; overflow: hidden; opacity: 0;">
                                    </div>
                                    <button class="sidebar_search_button search_form_button">search</button>
                                </form>
                            </div>
                        </div>

                        <!-- Realtor -->
                        <div class="sidebar_realtor">
                            <div class="sidebar_realtor_image"><img src="images/sidebar_realtor.jpg" alt=""></div>
                            <div class="sidebar_realtor_body text-center">
                                <div class="sidebar_realtor_title"><a href="#">Maria Williams</a></div>
                                <div class="sidebar_realtor_subtitle">Senior Realtor</div>
                                <div class="sidebar_realtor_phone"><span>call us: </span>652 345 3222 11</div>
                                <div class="realtor_link"><a href="#">+</a></div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Property Content -->
                <div class="col-lg-7 offset-lg-1">
                    <div class="property_content">
                        <div class="property_icons">
                            <div class="property_title">Extra Facilities</div>
                            <div class="property_text property_text_1">
                                <p>Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus
                                    porttitor.</p>
                            </div>
                            <div class="property_rooms d-flex flex-sm-row flex-column align-items-start justify-content-start">

                                <!-- Property Room Item -->
                                <div class="property_room">
                                    <div class="property_room_title">Bedrooms</div>
                                    <div class="property_room_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="room_icon"><img src="images/room_1.png" alt=""></div>
                                        <div class="room_num">4</div>
                                    </div>
                                </div>

                                <!-- Property Room Item -->
                                <div class="property_room">
                                    <div class="property_room_title">Bathrooms</div>
                                    <div class="property_room_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="room_icon"><img src="images/room_2.png" alt=""></div>
                                        <div class="room_num">3</div>
                                    </div>
                                </div>

                                <!-- Property Room Item -->
                                <div class="property_room">
                                    <div class="property_room_title">Area</div>
                                    <div class="property_room_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="room_icon"><img src="images/room_3.png" alt=""></div>
                                        <div class="room_num">7100 Sq Ft</div>
                                    </div>
                                </div>

                                <!-- Property Room Item -->
                                <div class="property_room">
                                    <div class="property_room_title">Patio</div>
                                    <div class="property_room_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="room_icon"><img src="images/room_4.png" alt=""></div>
                                        <div class="room_num">1</div>
                                    </div>
                                </div>

                                <!-- Property Room Item -->
                                <div class="property_room">
                                    <div class="property_room_title">Garage</div>
                                    <div class="property_room_content d-flex flex-row align-items-center justify-content-start">
                                        <div class="room_icon"><img src="images/room_5.png" alt=""></div>
                                        <div class="room_num">2</div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Description -->

                        <div class="property_description">
                            <div class="property_title">Description</div>
                            <div class="property_text property_text_2">
                                <p>Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus
                                    porttitor.Sed lectus urna, ultricies sit amet risus eget, euismod imperdiet augue.
                                    Duis imperdiet, purus a pellentesque sodales, sapien mauris rhoncus eros, ac blandit
                                    elit leo ac diam. Sed lectus urna, ultricies sit amet risus eget, euismod imperdiet
                                    augue. Duis imperdiet, purus a pellentesque sodales, sapien mauris rhoncus eros, ac
                                    blandit elit leo ac diam</p>
                            </div>
                        </div>

                        <!-- Additional Details -->

                        <div class="additional_details">
                            <div class="property_title">Additional Details</div>
                            <div class="details_container">
                                <ul>
                                    <li><span>bedroom features: </span>Main Floor Master Bedroom, Walk-In Closet</li>
                                    <li><span>dining area: </span>Breakfast Counter/Bar, Living/Dining Combo</li>
                                    <li><span>doors & windows: </span>Bay Window</li>
                                    <li><span>entry location: </span>Mid Level</li>
                                    <li><span>floors: </span>Raised Foundation, Vinyl Tile, Wall-to-Wall Carpet, Wood
                                    </li>
                                </ul>
                            </div>
                        </div>

                        <!-- Property On Map -->

                        <div class="property_map">
                            <div class="property_title">Property on map</div>
                            <div class="property_map_container">

                                <!-- Google Map -->
                                <div id="google_map" class="google_map">
                                    <div class="map_container">
                                        <div id="map"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')
    <script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
    <script src="{{asset('plugins/rangeslider.js-2.3.0/rangeslider.min.js')}}"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&key=AIzaSyCIwF204lFZg1y4kPSIhKaHEXMLYxxuMhA"></script>
@endsection
