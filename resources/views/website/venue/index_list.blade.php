@extends('layouts.website')
@section('title', "Add venue")
@section('body_content')
    <div class="content">
        <div class="container">
            <div class="row">
                <!-- Search -->
                @include('website.venue._search')
                <!-- Search Section / End -->
                <div class="col-md-12">
                    <!-- Sorting - Filtering Section -->
                    <div class="row mt-4 mb-5">
                        <div class="col-md-6">
                            <!-- Layout Switcher -->
{{--                            <div class="layout-switcher">--}}
{{--                                <a href="listings-grid-with-sidebar.html" class="grid"> <span class="round-pill d-block"><i class="fa fa-th"></i></span></a>--}}
{{--                                <a href="listings-list-with-sidebar.html" class="list active"><span class="round-pill d-block"><i class="fa fa-align-justify"></i></span></a>--}}
{{--                            </div>--}}
                        </div>
                    </div>
                    <!-- Sorting - Filtering Section / End -->
                    <div class="row">
                        @foreach($venues as $venue)
                        <!-- Listing Item -->
                            <div class="col-lg-12 col-md-12 mb-5">
                                <div class="listing-item-container list-layout">
                                    <div class="listing-item">
                                        <!-- Image -->
                                        <div class="listing-item-image">
                                            <a href="listings-detail-one.html"><img src="{{ asset($venue->venue_image) }}" alt=""></a>
                                        </div>
                                        <!-- Content -->
                                        <div class="listing-item-content">
                                            <span class="badge badge-pill list-banner @if(isNowOpen($venue)) badge-success @else badge-warning @endif text-uppercase"> @if(isNowOpen($venue)) Now Open @else Closed @endif</span>
                                            <div class="listing-item-inner">
                                                <!-- <DirectlistRating [rate]="list.rating"></DirectlistRating> -->
                                                <a href="listings-detail-two.html">
                                                    <h3>{{ $venue->name }}</h3>
                                                </a>
                                                <div class="address-bar"> <small>{{ $venue->city.", ".$venue->area->area_name  }}</small> </div>
                                                <div class="mt-3"><span class="badge badge-pill badge-primary text-uppercase badge-cat">{{ $venue->venue_category }}</span></div>
                                            </div>
                                            <span class="round-pill like-banner d-block bg-primary"><i class="fa fa-heart-o"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <!-- Pagination -->
                    <div class="clearfix"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <!-- Pagination -->
                            <div class="mt-3">
                                <nav aria-label="Page navigation">
                                    <ul class="pagination">
                                        <li class="page-item">
                                            <a class="page-link"><i class="fa fa-angle-left"></i></a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link">1</a>
                                        </li>
                                        <li class="page-item active">
                                            <a class="page-link">2</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link">3</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link">4</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link">5</a>
                                        </li>
                                        <li class="page-item">
                                            <a class="page-link"><i class="fa fa-angle-right"></i></a>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                    <!-- Pagination / End -->
                </div>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function() { $('.alert-box').hide('slow'); }, 5000);
    </script>

@endsection
