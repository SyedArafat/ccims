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
                                <select style="color: white; background: #5571cd" name="area_id" class="chosen-select custom-select" id="inlineFormCustomSelectPref">
                                    <option value="" selected>Area...</option>
                                    @foreach($areas as $area)
                                        <option @if($request->area_id == $area->id) selected @endif value="{{ $area->id }}">{{ $area->area_name }}</option>
                                    @endforeach
                                </select>
{{--                                <input id="autocomplete-input" type="text" placeholder="Location">--}}
                            </div>
                            <a href="#"><i class="fa fa-map-marker"></i></a>
                        </div>
                        <div class="main-search-input-item">
                            <select style="color: white; background: #5571cd" name="venue_category" class="chosen-select custom-select" id="inlineFormCustomSelectPref">
                                <option value="" selected>Type...</option>
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
                    All Categories
                </h2>
                <p class="lead mt-2 head-desc">Browse the most desirable categories</p>
            </div>
        </div>
        <!-- Categories Carousel -->
        <div class="fullwidth-carousel-container">
            <div class="fullwidth-slick-carousel category-carousel">
                <!-- Item -->
                @foreach(config('venue.categories') as $key  => $category)
                    <div class="fw-carousel-item">
                        <div class="category-box-container text-center">
                            <div class="category-box">
                                <div class="category-box-content">
                                    <div class="icon-title">
                                    </div>
                                    <h3>
                                        <a href="{{ route('venue.index_list')."?venue_category=".$category }}" class="text-white">{{ $category }}
                                        </a>
                                    </h3>
                                    <span> <small>{{$venue_count[$key]}} listings</small> </span>
                                </div>
                                <div class="category-box-background" style="background-image: url('{{asset(config('venue.category_icon')[$key])}}')">
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="block-space bg-primary">
        <div class="container">
            <div class="block-head text-center mb-5">
                <h2 class="head-line text-white display-3">
                    FIND SUITABLE VENUE FOR YOUR EVENT
                </h2>
            </div>
        </div>
        <div class="container">
            <div class="row row-grid mt-5">
                <div class="col-lg-4 text-center">
                    <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                        <i class="fa fa-search"></i>
                    </div>
                    <h5 class="text-white mt-3">Find Your Venue</h5>
                    <p class="text-white mt-3">Search and fine a venue which is best suited for your needs</p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                        <i class="fa fa-phone-square"></i>
                    </div>
                    <h5 class="text-white mt-3">Contact Venue Managers</h5>
                    <p class="text-white mt-3">Contact with authorized personals to know all the details about your selected venue </p>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="icon icon-lg icon-shape bg-gradient-white shadow rounded-circle text-primary">
                        <i class="fa fa-user-plus"></i>
                    </div>
                    <h5 class="text-white mt-3">Book Venue Online</h5>
                    <p class="text-white mt-3">You can book your venue through this website without any hassle.</p>
                </div>
            </div>
        </div>
    </div>

    <div class="block-space bg-secondary">
        <div class="container">
            <div class="block-head text-center mb-5">
                <h2 class="head-line display-3">
                    Popular Places
                </h2>
                <p class="lead mt-2 head-desc">Discover top-rated local places</p>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="simple-slick-carousel dots-nav">
                        @foreach($popular_places as $place)
                            <div class="carousel-item">
                                <div class="category-box-container text-center">
                                    <div class="listing-item-container">
                                        <div class="listing-item text-center">
                                            <div class="mostviewed-bg" style="background-image: url({{asset($place->venue_image)}})">
                                                <div class="listing-item-content">
                                                    <div class="list-logo">
                                                        <a> <img src="{{asset("assets/images/event-hall-logo.png")}}" width="80" height="80" alt="logo"></a>
                                                    </div>
                                                    <span class="badge badge-pill badge-primary text-uppercase category-banner">{{ $place->venue_category }}</span>
                                                    <h3><a href="JavaScript:Void(0);">{{ $place->name }}</a></h3>
                                                    <p class="mb-0"> <small>Wall Street, New York</small></p>
                                                    <span class="badge badge-pill badge-primary text-uppercase open-close-banner">Active</span>
                                                </div>
                                                <span class="round-pill like-banner d-block bg-primary"><i class="fa fa-heart-o"></i></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
