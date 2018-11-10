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
                                    <li><a href="{{route('properties')}}">Home</a></li>
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
    <div class="properties">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section_title">25 Properties found</div>
                    <div class="section_subtitle">Search your dream home</div>
                </div>
            </div>
            <div class="row properties_row">

                <!-- Property -->
                <div class="col-xl-4 col-lg-6 property_col">
                    <div class="property">
                        <div class="property_image">
                            <img src="images/property_1.jpg" alt="">
                            <div class="tag_featured property_tag"><a href="#">Featured</a></div>
                        </div>
                        <div class="property_body text-center">
                            <div class="property_location">Miami</div>
                            <div class="property_title"><a href="property.html">Sea view property</a></div>
                            <div class="property_price">$ 1. 234 981</div>
                        </div>
                        <div class="property_footer d-flex flex-row align-items-center justify-content-start">
                            <div>
                                <div class="property_icon"><img src="images/icon_1.png" alt="">
                            </div>
                                <span>650 Ftsq</span></div>

                            <div>
                                <div class="property_icon"><img src="images/icon_2.png" alt=""></div>
                                <span>3 Bedrooms</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_3.png" alt=""></div>
                                <span>3 Bathrooms</span></div>
                        </div>
                    </div>
                </div>

                <!-- Property -->
                <div class="col-xl-4 col-lg-6 property_col">
                    <div class="property">
                        <div class="property_image">
                            <img src="images/property_2.jpg" alt="">
                            <div class="tag_offer property_tag"><a href="#">Offer</a></div>
                        </div>
                        <div class="property_body text-center">
                            <div class="property_location">Los Angeles</div>
                            <div class="property_title"><a href="property.html">2 Floor Town House</a></div>
                            <div class="property_price">$ 1. 234 981</div>
                        </div>
                        <div class="property_footer d-flex flex-row align-items-center justify-content-start">
                            <div>
                                <div class="property_icon"><img src="images/icon_1.png" alt=""></div>
                                <span>650 Ftsq</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_2.png" alt=""></div>
                                <span>3 Bedrooms</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_3.png" alt=""></div>
                                <span>3 Bathrooms</span></div>
                        </div>
                    </div>
                </div>

                <!-- Property -->
                <div class="col-xl-4 col-lg-6 property_col">
                    <div class="property">
                        <div class="property_image">
                            <img src="images/property_3.jpg" alt="">
                            <div class="tag_featured property_tag"><a href="#">Featured</a></div>
                        </div>
                        <div class="property_body text-center">
                            <div class="property_location">Florida</div>
                            <div class="property_title"><a href="property.html">Vacation Home</a></div>
                            <div class="property_price">$ 1. 234 981</div>
                        </div>
                        <div class="property_footer d-flex flex-row align-items-center justify-content-start">
                            <div>
                                <div class="property_icon"><img src="images/icon_1.png" alt=""></div>
                                <span>650 Ftsq</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_2.png" alt=""></div>
                                <span>3 Bedrooms</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_3.png" alt=""></div>
                                <span>3 Bathrooms</span></div>
                        </div>
                    </div>
                </div>

                <!-- Property -->
                <div class="col-xl-4 col-lg-6 property_col">
                    <div class="property">
                        <div class="property_image">
                            <img src="images/property_4.jpg" alt="">
                            <div class="tag_new property_tag"><a href="#">New</a></div>
                        </div>
                        <div class="property_body text-center">
                            <div class="property_location">Miami</div>
                            <div class="property_title"><a href="property.html">Sea view property</a></div>
                            <div class="property_price">$ 1. 234 981</div>
                        </div>
                        <div class="property_footer d-flex flex-row align-items-center justify-content-start">
                            <div>
                                <div class="property_icon"><img src="images/icon_1.png" alt=""></div>
                                <span>650 Ftsq</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_2.png" alt=""></div>
                                <span>3 Bedrooms</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_3.png" alt=""></div>
                                <span>3 Bathrooms</span></div>
                        </div>
                    </div>
                </div>

                <!-- Property -->
                <div class="col-xl-4 col-lg-6 property_col">
                    <div class="property">
                        <div class="property_image">
                            <img src="images/property_5.jpg" alt="">
                        </div>
                        <div class="property_body text-center">
                            <div class="property_location">New York</div>
                            <div class="property_title"><a href="property.html">Sea view property</a></div>
                            <div class="property_price">$ 1. 234 981</div>
                        </div>
                        <div class="property_footer d-flex flex-row align-items-center justify-content-start">
                            <div>
                                <div class="property_icon"><img src="images/icon_1.png" alt=""></div>
                                <span>650 Ftsq</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_2.png" alt=""></div>
                                <span>3 Bedrooms</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_3.png" alt=""></div>
                                <span>3 Bathrooms</span></div>
                        </div>
                    </div>
                </div>

                <!-- Property -->
                <div class="col-xl-4 col-lg-6 property_col">
                    <div class="property">
                        <div class="property_image">
                            <img src="images/property_6.jpg" alt="">
                        </div>
                        <div class="property_body text-center">
                            <div class="property_location">Miami</div>
                            <div class="property_title"><a href="property.html">Sea view property</a></div>
                            <div class="property_price">$ 1. 234 981</div>
                        </div>
                        <div class="property_footer d-flex flex-row align-items-center justify-content-start">
                            <div>
                                <div class="property_icon"><img src="images/icon_1.png" alt=""></div>
                                <span>650 Ftsq</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_2.png" alt=""></div>
                                <span>3 Bedrooms</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_3.png" alt=""></div>
                                <span>3 Bathrooms</span></div>
                        </div>
                    </div>
                </div>

                <!-- Property -->
                <div class="col-xl-4 col-lg-6 property_col">
                    <div class="property">
                        <div class="property_image">
                            <img src="images/property_7.jpg" alt="">
                            <div class="tag_new property_tag"><a href="#">New</a></div>
                        </div>
                        <div class="property_body text-center">
                            <div class="property_location">Miami</div>
                            <div class="property_title"><a href="property.html">Sea view property</a></div>
                            <div class="property_price">$ 1. 234 981</div>
                        </div>
                        <div class="property_footer d-flex flex-row align-items-center justify-content-start">
                            <div>
                                <div class="property_icon"><img src="images/icon_1.png" alt=""></div>
                                <span>650 Ftsq</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_2.png" alt=""></div>
                                <span>3 Bedrooms</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_3.png" alt=""></div>
                                <span>3 Bathrooms</span></div>
                        </div>
                    </div>
                </div>

                <!-- Property -->
                <div class="col-xl-4 col-lg-6 property_col">
                    <div class="property">
                        <div class="property_image">
                            <img src="images/property_8.jpg" alt="">
                        </div>
                        <div class="property_body text-center">
                            <div class="property_location">San Francisco</div>
                            <div class="property_title"><a href="property.html">Sea view property</a></div>
                            <div class="property_price">$ 1. 234 981</div>
                        </div>
                        <div class="property_footer d-flex flex-row align-items-center justify-content-start">
                            <div>
                                <div class="property_icon"><img src="images/icon_1.png" alt=""></div>
                                <span>650 Ftsq</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_2.png" alt=""></div>
                                <span>3 Bedrooms</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_3.png" alt=""></div>
                                <span>3 Bathrooms</span></div>
                        </div>
                    </div>
                </div>

                <!-- Property -->
                <div class="col-xl-4 col-lg-6 property_col">
                    <div class="property">
                        <div class="property_image">
                            <img src="images/property_9.jpg" alt="">
                        </div>
                        <div class="property_body text-center">
                            <div class="property_location">Miami</div>
                            <div class="property_title"><a href="property.html">Sea view property</a></div>
                            <div class="property_price">$ 1. 234 981</div>
                        </div>
                        <div class="property_footer d-flex flex-row align-items-center justify-content-start">
                            <div>
                                <div class="property_icon"><img src="images/icon_1.png" alt=""></div>
                                <span>650 Ftsq</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_2.png" alt=""></div>
                                <span>3 Bedrooms</span></div>
                            <div>
                                <div class="property_icon"><img src="images/icon_3.png" alt=""></div>
                                <span>3 Bathrooms</span></div>
                        </div>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col">
                    <div class="pagination">
                        <ul>
                            <li class="active"><a href="#">01.</a></li>
                            <li><a href="#">02.</a></li>
                            <li><a href="#">03.</a></li>
                            <li><a href="#">04.</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
