@extends('layouts.website')
@section('title', "Favorite Venues")
@section('body_content')
    <div class="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <!-- Sorting - Filtering Section / End -->
                    <div class="row">
                    @foreach($venues as $venue)
                        <!-- Listing Item -->
                            <div class="col-lg-12 col-md-12 mb-5">
                                <div class="listing-item-container list-layout">
                                    <div class="listing-item">
                                        <!-- Image -->
                                        <div class="listing-item-image max-height-100">
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
