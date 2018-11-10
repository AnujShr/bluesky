@extends('layouts.master')
@section('home')
    <div class="home">
        <div class="parallax_background parallax-window" data-parallax="scroll" data-image-src="images/news.jpg"
             data-speed="0.8"></div>
        <div class="home_container">
            <div class="container">
                <div class="row">
                    <div class="col">
                        <div class="home_content d-flex flex-row align-items-end justify-content-start">
                            <div class="home_title">News</div>
                            <div class="breadcrumbs ml-auto">
                                <ul>
                                    <li><a href="index.htmo">Home</a></li>
                                    <li>News</li>
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
    <div class="news">
        <div class="container">
            <div class="row">

                <!-- News Posts -->
                <div class="col-lg-8">
                    <div class="news_posts">

                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_title_container d-flex flex-row align-items-center justify-content-start">
                                <div>
                                    <div class="news_post_date_container d-flex flex-column align-items-center justify-content-center">
                                        <div class="news_post_day">15</div>
                                        <div class="news_post_month">Apr '18</div>
                                    </div>
                                </div>
                                <div class="news_post_title_content">
                                    <div class="news_post_title"><a href="#">How to invest in real estate?</a></div>
                                    <div class="news_post_info">
                                        <ul>
                                            <li>By <a href="#">James Morrison</a></li>
                                            <li>in <a href="#">Real Estate</a></li>
                                            <li><a href="#">3 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="news_post_image"><img src="images/news_1.jpg" alt=""></div>
                            <div class="news_post_text">
                                <p>Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus
                                    porttitor.Sed lectus urna, ultricies sit amet risus eget, euismod imperdiet augue.
                                    Duis imperdiet, purus a pellentesque sodales, sapien mauris rhoncus eros, ac blandit
                                    elit leo ac diam.</p>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_title_container d-flex flex-row align-items-center justify-content-start">
                                <div>
                                    <div class="news_post_date_container d-flex flex-column align-items-center justify-content-center">
                                        <div class="news_post_day">15</div>
                                        <div class="news_post_month">Apr '18</div>
                                    </div>
                                </div>
                                <div class="news_post_title_content">
                                    <div class="news_post_title"><a href="#">The best 10 cities to buy a house</a></div>
                                    <div class="news_post_info">
                                        <ul>
                                            <li>By <a href="#">James Morrison</a></li>
                                            <li>in <a href="#">Real Estate</a></li>
                                            <li><a href="#">3 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="news_post_image"><img src="images/news_2.jpg" alt=""></div>
                            <div class="news_post_text">
                                <p>Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus
                                    porttitor.Sed lectus urna, ultricies sit amet risus eget, euismod imperdiet augue.
                                    Duis imperdiet, purus a pellentesque sodales, sapien mauris rhoncus eros, ac blandit
                                    elit leo ac diam.</p>
                            </div>
                        </div>

                        <!-- News Post -->
                        <div class="news_post">
                            <div class="news_post_title_container d-flex flex-row align-items-center justify-content-start">
                                <div>
                                    <div class="news_post_date_container d-flex flex-column align-items-center justify-content-center">
                                        <div class="news_post_day">15</div>
                                        <div class="news_post_month">Apr '18</div>
                                    </div>
                                </div>
                                <div class="news_post_title_content">
                                    <div class="news_post_title"><a href="#">5 Tips for a vacation home</a></div>
                                    <div class="news_post_info">
                                        <ul>
                                            <li>By <a href="#">James Morrison</a></li>
                                            <li>in <a href="#">Real Estate</a></li>
                                            <li><a href="#">3 Comments</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="news_post_image"><img src="images/news_3.jpg" alt=""></div>
                            <div class="news_post_text">
                                <p>Donec ullamcorper nulla non metus auctor fringi lla. Curabitur blandit tempus
                                    porttitor.Sed lectus urna, ultricies sit amet risus eget, euismod imperdiet augue.
                                    Duis imperdiet, purus a pellentesque sodales, sapien mauris rhoncus eros, ac blandit
                                    elit leo ac diam.</p>
                            </div>
                        </div>

                    </div>

                    <!-- Pagination -->
                    <div class="pagination">
                        <ul>
                            <li class="active"><a href="#">01.</a></li>
                            <li><a href="#">02.</a></li>
                            <li><a href="#">03.</a></li>
                            <li><a href="#">04.</a></li>
                        </ul>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    <div class="sidebar">

                        <!-- Search -->
                        <div class="sidebar_top_search">
                            <form action="#" class="sidebar_top_search_form">
                                <input type="text" class="sidebar_top_search_input" placeholder="Search"
                                       required="required">
                                <button class="sidebar_top_search_button"><i class="fa fa-search"
                                                                             aria-hidden="true"></i></button>
                            </form>
                        </div>

                        <!-- Categories -->
                        <div class="categories">
                            <div class="sidebar_title">Categories</div>
                            <div class="categories_list">
                                <ul>
                                    <li><a href="#" class="d-flex flex-row align-items-start justfy-content-start">
                                            <div>Real Estate</div>
                                            <div class="ml-auto">20</div>
                                        </a></li>
                                    <li><a href="#" class="d-flex flex-row align-items-start justfy-content-start">
                                            <div>Properties</div>
                                            <div class="ml-auto">33</div>
                                        </a></li>
                                    <li><a href="#" class="d-flex flex-row align-items-start justfy-content-start">
                                            <div>Selling Information</div>
                                            <div class="ml-auto">44</div>
                                        </a></li>
                                    <li><a href="#" class="d-flex flex-row align-items-start justfy-content-start">
                                            <div>Vacation homes</div>
                                            <div class="ml-auto">52</div>
                                        </a></li>
                                    <li><a href="#" class="d-flex flex-row align-items-start justfy-content-start">
                                            <div>Uncategorized</div>
                                            <div class="ml-auto">12</div>
                                        </a></li>
                                </ul>
                            </div>
                        </div>

                        <!-- Latest Posts -->
                        <div class="sidebar_latest">
                            <div class="sidebar_title">Latest Posts</div>
                            <div class="sidebar_latest_posts">

                                <!-- Recent Post -->
                                <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="latest_post_image"><img src="images/latest_1.jpg" alt=""></div>
                                    </div>
                                    <div class="latest_post_content">
                                        <div class="latest_post_date"><a href="#">April 02, 2018</a></div>
                                        <div class="latest_post_title"><a href="#">How to choose a house?</a></div>
                                        <div class="latest_post_author">By <a href="#">William Smith</a></div>
                                    </div>
                                </div>

                                <!-- Recent Post -->
                                <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="latest_post_image"><img src="images/latest_2.jpg" alt=""></div>
                                    </div>
                                    <div class="latest_post_content">
                                        <div class="latest_post_date"><a href="#">April 02, 2018</a></div>
                                        <div class="latest_post_title"><a href="#">How to spot bargains</a></div>
                                        <div class="latest_post_author">By <a href="#">William Smith</a></div>
                                    </div>
                                </div>

                                <!-- Recent Post -->
                                <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="latest_post_image"><img src="images/latest_3.jpg" alt=""></div>
                                    </div>
                                    <div class="latest_post_content">
                                        <div class="latest_post_date"><a href="#">April 02, 2018</a></div>
                                        <div class="latest_post_title"><a href="#">3 Tips to get a bargain on a home</a>
                                        </div>
                                        <div class="latest_post_author">By <a href="#">William Smith</a></div>
                                    </div>
                                </div>

                                <!-- Recent Post -->
                                <div class="latest_post d-flex flex-row align-items-start justify-content-start">
                                    <div>
                                        <div class="latest_post_image"><img src="images/latest_4.jpg" alt=""></div>
                                    </div>
                                    <div class="latest_post_content">
                                        <div class="latest_post_date"><a href="#">April 02, 2018</a></div>
                                        <div class="latest_post_title"><a href="#">The best cities to own a house</a>
                                        </div>
                                        <div class="latest_post_author">By <a href="#">William Smith</a></div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <!-- Sidebar Search -->
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
                                    <button class="sidebar_search_button_2 search_form_button_2">search</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('js')
    <script src="{{asset('plugin/rangeslider.js-2.3.0/rangeslider.min.js')}}"></script>
@endsection