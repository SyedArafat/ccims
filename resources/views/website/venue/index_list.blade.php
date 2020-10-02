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
                                            <a href="{{ route('venue.show', $venue->id) }}"><img src="{{ asset($venue->venue_image) }}" alt=""></a>
                                        </div>
                                        <!-- Content -->
                                        <div class="listing-item-content">
                                            <span class="badge badge-pill list-banner @if(isNowOpen($venue)) badge-success @else badge-warning @endif text-uppercase"> @if(isNowOpen($venue)) Now Open @else Closed @endif</span>
                                            <div class="listing-item-inner">
                                                <!-- <DirectlistRating [rate]="list.rating"></DirectlistRating> -->
                                                <a href="{{ route('venue.show', $venue->id) }}">
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
                    {{ $venues->appends(\Illuminate\Support\Facades\Request::all())->links()  }}
                    <!-- Pagination / End -->
                </div>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function() { $('.alert-box').hide('slow'); }, 5000);
    </script>

@endsection
