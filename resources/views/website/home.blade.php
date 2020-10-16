@extends('layouts.website')
@section('title', 'CCIMS')
@section('body_content')
    <div class="position-relative">
        <section class="section section-lg section-hero section-shaped">
            <div class="shape shape-style-1 shape-primary">
                <span class="span-150"></span>
                <span class="span-50"></span>
                <span class="span-50"></span>
                <span class="span-75"></span>
                <span class="span-100"></span>
                <span class="span-75"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
                <span class="span-50"></span>
                <span class="span-100"></span>
                <div class="overlay-bg"></div>
            </div>
            <div class="container shape-container d-flex align-items-center py-lg">
                <div class="main-search-inner">
                    <h2 class="text-white display-2">Find and book suitable venue for your event</h2>
                    <h4 class="text-white">Gaye Halud, Wedding Party, Corporate Meeting, Fair, Birthday Party & more ...</h4>
                    {!! Form::open(["method" => "get", "action" => "VenueController@indexList"]) !!}
                    <div class="main-search-input">
                        <div class="main-search-input-item">
                            <input type="text" placeholder="What are you looking for?" value="" />
                        </div>
                        <div class="main-search-input-item location">
                            <div id="autocomplete-container">
                                <select name="area_id" class="chosen-select custom-select" id="inlineFormCustomSelectPref">
                                    <option value="" selected>All...</option>
                                    @foreach($areas as $area)
                                        <option @if($request->area_id == $area->id) selected @endif value="{{ $area->id }}">{{ $area->area_name }}</option>
                                    @endforeach
                                </select>
{{--                                <input id="autocomplete-input" type="text" placeholder="Location">--}}
                            </div>
                            <a href="#"><i class="fa fa-map-marker"></i></a>
                        </div>
                        <div class="main-search-input-item">
                            <select name="venue_category" class="chosen-select custom-select" id="inlineFormCustomSelectPref">
                                <option value="" selected>All...</option>
                                @foreach(config('venue.categories') as $category)
                                    <option @if($request->venue_category == $category) selected @endif value="{{ $category }}">{{ $category }}</option>
                                @endforeach
                            </select>
                        </div>
                        <button type="submit" class="btn main-search-btn btn-radius btn-lg btn-primary text-white"><span class="btn-inner--text">Search</span></button>

                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
            <!-- SVG separator -->
            <div class="separator separator-bottom separator-skew zindex-100">
                <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <polygon class="fill-white" points="2560 0 2560 100 0 100"></polygon>
                </svg>
            </div>
        </section>
    </div>
    <div class="block-space">
        <div class="container">
            <div class="block-head text-center mb-5">
                <h2 class="head-line display-3">
                    Popular Categories
                </h2>
                <p class="lead mt-2 head-desc">Browse the most desirable categories</p>
            </div>
        </div>
        <!-- Categories Carousel -->
        <div class="fullwidth-carousel-container">
            <div class="fullwidth-slick-carousel category-carousel">
                <!-- Item -->
                <div class="fw-carousel-item">
                    <div class="category-box-container text-center">
                        <div class="category-box">
                            <div class="category-box-content">
                                <div class="icon-title">
                                    <i class="fa-2x fa fa-bed"></i>
                                </div>
                                <h3>
                                    <a href="JavaScript:Void(0);" class="text-white">Hotels
                                    </a>
                                </h3>
                                <span> <small>64 listings</small> </span>
                            </div>
                            <div class="category-box-background" style="background-image: url('assets/images/cat-img-6.jpg')">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fw-carousel-item">
                    <div class="category-box-container text-center">
                        <div class="category-box">
                            <div class="category-box-content">
                                <div class="icon-title">
                                    <i class="fa-2x fa fa-shopping-bag"></i>
                                </div>
                                <h3><a href="JavaScript:Void(0);" class="text-white">Shops</a></h3>
                                <span> <small>14 listings</small> </span>
                            </div>
                            <div class="category-box-background" style="background-image: url('assets/images/cat-img-5.jpg')">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fw-carousel-item">
                    <div class="category-box-container text-center">
                        <div class="category-box">
                            <div class="category-box-content">
                                <div class="icon-title">
                                    <i class="fa-2x fa fa-calendar"></i>
                                </div>
                                <h3><a href="JavaScript:Void(0);" class="text-white">Events</a></h3>
                                <span> <small>67 listings</small> </span>
                            </div>
                            <div class="category-box-background" style="background-image: url('assets/images/cat-img-2.jpg')">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fw-carousel-item">
                    <div class="category-box-container text-center">
                        <div class="category-box">
                            <div class="category-box-content">
                                <div class="icon-title">
                                    <i class="fa-2x fa fa-glass"></i>
                                </div>
                                <h3><a href="JavaScript:Void(0);" class="text-white">Fitness</a></h3>
                                <span> <small>27 listings</small> </span>
                            </div>
                            <div class="category-box-background" style="background-image: url('assets/images/cat-img-3.jpg')">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fw-carousel-item">
                    <div class="category-box-container text-center">
                        <div class="category-box">
                            <div class="category-box-content">
                                <div class="icon-title">
                                    <i class="fa-2x fa fa-glass"></i>
                                </div>
                                <h3><a href="JavaScript:Void(0);" class="text-white">Nightlife</a></h3>
                                <span> <small>22 listings</small> </span>
                            </div>
                            <div class="category-box-background" style="background-image: url('assets/images/cat-img-4.jpg')">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="fw-carousel-item">
                    <div class="category-box-container text-center">
                        <div class="category-box">
                            <div class="category-box-content">
                                <div class="icon-title">
                                    <i class="fa-2x fa fa-glass"></i>
                                </div>
                                <h3><a href="JavaScript:Void(0);" class="text-white">Eat & Drink</a></h3>
                                <span> <small>127 listings</small> </span>
                            </div>
                            <div class="category-box-background" style="background-image: url('assets/images/cat-img-1.jpg')">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-space bg-secondary">
        <div class="container">
            <div class="block-head text-center mb-5">
                <h2 class="head-line display-3">
                    Most Visited Places
                </h2>
                <p class="lead mt-2 head-desc">Discover top-rated local businesses</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="simple-slick-carousel dots-nav">
                        <div class="carousel-item">
                            <div class="category-box-container text-center">
                                <div class="listing-item-container">
                                    <div class="listing-item text-center">
                                        <div class="mostviewed-bg" style="background-image: url('assets/images/most-img-4.jpg')">
                                            <div class="listing-item-content">
                                                <div class="list-logo">
                                                    <a> <img src="assets/images/logo-1.png" width="80" height="80" alt="logo"></a>
                                                </div>
                                                <span class="badge badge-pill badge-primary text-uppercase category-banner">Eat & Drink</span>
                                                <h3><a href="JavaScript:Void(0);">Cafe Bar</a></h3>
                                                <p class="mb-0"> <small>Wall Street, New York</small></p>
                                                <span class="badge badge-pill badge-primary text-uppercase open-close-banner">Open</span>
                                            </div>
                                            <span class="round-pill like-banner d-block bg-primary"><i class="fa fa-heart-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="category-box-container text-center">
                                <div class="listing-item-container">
                                    <div class="listing-item text-center">
                                        <div class="mostviewed-bg" style="background-image: url('assets/images/most-img-3.jpg')">
                                            <div class="listing-item-content">
                                                <div class="list-logo">
                                                    <a> <img src="assets/images/logo-2.png" width="80" height="80" alt="logo"></a>
                                                </div>
                                                <span class="badge badge-pill badge-primary text-uppercase category-banner">Concert</span>
                                                <h3><a href="JavaScript:Void(0);">Milky Ducth</a></h3>
                                                <p class="mb-0"> <small>MayLand Square, LA</small></p>
                                                <span class="badge badge-pill badge-primary text-uppercase open-close-banner">Coming Soon</span>
                                            </div>
                                            <span class="round-pill like-banner d-block bg-primary"><i class="fa fa-heart-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="category-box-container text-center">
                                <div class="listing-item-container">
                                    <div class="listing-item text-center">
                                        <div class="mostviewed-bg" style="background-image: url('assets/images/most-img-2.jpg')">
                                            <div class="listing-item-content">
                                                <div class="list-logo">
                                                    <a> <img src="assets/images/logo-3.png" width="80" height="80" alt="list-logo"></a>
                                                </div>
                                                <span class="badge badge-pill badge-primary text-uppercase category-banner">Hotels</span>
                                                <h3><a href="JavaScript:Void(0);">Maledy Hotels</a></h3>
                                                <p class="mb-0"> <small>672, CreedWay, New York</small></p>
                                                <span class="badge badge-pill badge-primary text-uppercase open-close-banner">Open</span>
                                            </div>
                                            <span class="round-pill like-banner d-block bg-primary"><i class="fa fa-heart-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <div class="category-box-container text-center">
                                <div class="listing-item-container">
                                    <div class="listing-item text-center">
                                        <div class="mostviewed-bg" style="background-image: url('assets/images/most-img-1.jpg')">
                                            <div class="listing-item-content">
                                                <div class="list-logo">
                                                    <a> <img src="assets/images/logo-4.png" width="80" height="80" alt="list-logo"></a>
                                                </div>
                                                <span class="badge badge-pill badge-primary text-uppercase category-banner">Eat & Drink</span>
                                                <h3><a href="JavaScript:Void(0);">Donuts Hub</a></h3>
                                                <p class="mb-0"> <small>56,Hihu Pora, New Yorkk</small></p>
                                                <span class="badge badge-pill badge-primary text-uppercase open-close-banner">Open</span>
                                            </div>
                                            <span class="round-pill like-banner d-block bg-primary"><i class="fa fa-heart-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="block-space bg-primary">
        <div class="container">
            <div class="block-head text-center mb-5">
                <h2 class="head-line text-white display-3">
                    Plan The Vacation of Your Dreams
                </h2>
                <div class="col-12 col-md-7 mx-auto pb-3">
                    <p class="lead mt-2 head-desc text-white">Explore some of the best tips from around the world from our partners and friends. Discover some of the most popular listings in Sydney.</p>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row row-grid mt-5">
                <div class="col-lg-4 text-center">
                    <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                        <i class="fa fa-search"></i>
                    </div>
                    <h5 class="text-white mt-3">Find Interesting Place</h5>
                    <p class="text-white mt-3">Proin dapibus nisl ornare diam varius tempus. Aenean a quam luctus, finibus tellus ut, convallis eros sollicitudin turpis.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                        <i class="fa fa-phone-square"></i>
                    </div>
                    <h5 class="text-white mt-3">Contact a Few Owners</h5>
                    <p class="text-white mt-3">Maecenas pulvinar, risus in facilisis dignissim, quam nisi hendrerit nulla, id vestibulum metus nullam viverra porta purus.</p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <h5 class="text-white mt-3">Make a Reservation</h5>
                    <p class="text-white mt-3">Faucibus ante, in porttitor tellus blandit et. Phasellus tincidunt metus lectus sollicitudin feugiat pharetra consectetur.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="block-space bg-secondary">
        <div class="block-head text-center mb-5">
            <h2 class="head-line display-3">
                Recent Blog
            </h2>
            <p class="lead mt-2 head-desc">Hassel Free Service</p>
        </div>
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <div class="row row-grid">
                        <div class="col-lg-4">
                            <div class="card card-lift--hover shadow border-0">
                                <img class="img-fluid" src="assets/images/post-1.jpg" alt="list-logo">
                                <div class="card-body py-4">
                                    <h5>Take a Look at Hotels for All Budgets</h5>
                                    <p>22 August 2018</p>
                                    <p class="description mb-4">Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque</p>
                                    <a class="btn btn-primary" href="JavaScript:Void(0);">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-lift--hover shadow border-0">
                                <img class="img-fluid" src="assets/images/post-2.jpg" alt="list-logo">
                                <div class="card-body py-4">
                                    <h5>The 50 Greatest Street Arts In London</h5>
                                    <p>22 August 2018</p>
                                    <p class="description mb-4">Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque</p>
                                    <a class="btn btn-primary" href="JavaScript:Void(0);">Read More</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card card-lift--hover shadow border-0">
                                <img class="img-fluid" src="assets/images/post-3.jpg" alt="list-logo">
                                <div class="card-body py-4">
                                    <h5>The Best Cofee Shops In Sydney Neighborhoods</h5>
                                    <p>22 August 2018</p>
                                    <p class="description mb-4">Sed sed tristique nibh iam porta volutpat finibus. Donec in aliquet urneget mattis lorem. Pellentesque pellentesque</p>
                                    <a class="btn btn-primary" href="JavaScript:Void(0);">Read More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
