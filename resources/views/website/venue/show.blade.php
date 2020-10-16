@extends('layouts.website')
@section('title', "Venue Detail")
@section('body_content')
    <style>
        html {
            background: #f5f5f5;
            font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
        }

        h3 {
            margin-top: 30px;
            font-size: 18px;
            color: #555;
        }

        p { padding-left: 10px; }


        /*
         * Basic button style
         */
        .love-btn {
            box-shadow: 1px 1px 0 rgba(255,255,255,0.5) inset;
            border-radius: 3px;
            border: 2px solid;
            display: inline-block;
            height: 36px;
            line-height: 36px;
            padding: 0 12px;
            position: relative;

            font-size: 12px;
            text-decoration: none;
            text-shadow: 0 1px 0 rgba(255,255,255,0.5);
        }
        /*
         * Counter button style
         */
        .btn-counter { margin-right: 39px; }
        .btn-counter:after,
        .btn-counter:hover:after { text-shadow: none; }
        .btn-counter:after {
            border-radius: 3px;
            border: 1px solid #d3d3d3;
            background-color: #eee;
            padding: 0 8px;
            color: #777;
            content: attr(data-count);
            left: 100%;
            margin-left: 8px;
            margin-right: -13px;
            position: absolute;
            top: -1px;
        }
        .btn-counter:before {
            transform: rotate(45deg);
            filter: progid:DXImageTransform.Microsoft.Matrix(M11=0.7071067811865476, M12=-0.7071067811865475, M21=0.7071067811865475, M22=0.7071067811865476, sizingMethod='auto expand');

            background-color: #eee;
            border: 1px solid #d3d3d3;
            border-right: 0;
            border-top: 0;
            content: '';
            position: absolute;
            right: -13px;
            top: 5px;
            height: 6px;
            width: 6px;
            z-index: 1;
            zoom: 1;
        }
        /*
         * Custom styles
         */
        .love-btn {
            background-color: #dbdbdb;
            border-color: #bbb;
            color: #666;
        }
        .love-btn:hover,
        .love-btn.active {
            text-shadow: 0 1px 0 #b12f27;
            background-color: #f69b8e;
            border-color: #f69b8e;
        }
        .love-btn:active { box-shadow: 0 0 5px 3px rgba(0,0,0,0.2) inset; }
        .love-btn span { color: #f69b8e; }
        .love-btn:hover, .love-btn:hover span,
        .love-btn.active, .love-btn.active span { color: #ee1716; }
        .love-btn:active span {
            color: #b12f27;
            text-shadow: 0 1px 0 rgba(255,255,255,0.3);
        }
        .love-icon {
            font-size: 28px;
        }
    </style>
    <div class="container">
        <div class="content">
            @include('website._error_alerts')
            @if ($errors->any())
                <div id="alert_message" class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <div class="row sticky-wrapper">
                <div class="col-lg-8 col-md-8">
                    <div class="">
                        <div class="row">
                            <div class="col-sm-8 detail-tile mb-4">
                                <h3> {{$venue->name}} <span class="badge badge-pill badge-success text-uppercase">Open</span>
                                </h3>
                                <p>{{ $venue->address.", ".$venue->area->area_name.", ". $venue->city }}</p>
                                <span class="badge badge-pill badge-info text-uppercase">{{ $venue->venue_category }}</span>
                            </div>
                            <div class="col-sm-4">
                                @auth()
                                    <a href="{{ route('venue_favourite.change', [$venue->id, \Illuminate\Support\Facades\Auth::id()]) }}" title="Love it" class="love-btn btn-counter @if($is_fav) active @endif" data-count="{{ $venue->favourites->count()}}"><span class="love-icon">&#x2764;</span></a>
                                @else
                                    <a title="Love it" class="love-btn btn-counter" data-count="{{ $venue->favourites->count()}}"><span class="love-icon">&#x2764;</span></a>
                                @endauth
                            </div>
                        </div>
                        <div class="nav-wrapper">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active show" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fa fa-info-circle mr-2"></i>About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fa fa-map-marker mr-2"></i>Location</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fa fa-money mr-2"></i>Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fa fa-money mr-2"></i>Reviews</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                        <p class="description">{{ $venue->description }}</p>
                                        <p class="description">A place where you can spend some wonderful time with your family and create memories.</p>
                                        <h4 class="mb-4">
                                            Contact Info
                                        </h4>
                                        <div class="row mb-5">
                                            <div class="col-lg-4">
                                                <div class="detail-list mb-2">
                                                    <div class="detail-list-label mb-1"><i aria-hidden="true" class="fa fa-phone mr-2"></i>
                                                        <small class="text-uppercase font-weight-bold">Contact Number.</small>
                                                    </div>
                                                    <p class="m-0 text-small">{{ $venue->phone }}</p>
                                                </div>
                                            </div>
                                            @if(($venue->email))
                                                <div class="col-lg-4">
                                                    <div class="detail-list mb-2">
                                                        <div class="detail-list-label mb-1"><i aria-hidden="true" class="fa fa-mail-forward mr-2"></i>
                                                            <small class="text-uppercase font-weight-bold">Email.</small>
                                                        </div>
                                                        <p class="m-0 text-small">{{ $venue->email }}</p>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="col-lg-4">
                                                <div class="detail-list mb-2">
                                                    <div class="detail-list-label mb-1"><i aria-hidden="true" class="fa fa-facebook mr-2"></i><small class="text-uppercase font-weight-bold">Facebook.</small>
                                                    </div>
                                                    <a href="{{$venue->facebook}}" class="m-0 text-small">Visit Page</a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        /** @var \App\Venue $venue */
                                        $facilities = (json_decode($venue->facilities, true));
                                        $facilities = $facilities ? $facilities : [];
                                        ?>
                                        <h4 class="mb-4">Features</h4>
                                        @for($i=0; $i<count($facilities); $i++)
                                            <span class="badge badge-pill badge-primary text-uppercase mr-2 mb-2">{{ str_replace("_", " ", $facilities[$i]) }}</span>
                                        @endfor
                                        <?php
                                        /** @var \App\Venue $venue */
                                        $open_days = (json_decode($venue->open_days, true));
                                        $open_days = $open_days ? $open_days : [];
                                        ?>
                                        <h4 class="mb-4">Open Days</h4>
                                        @for($i=0; $i<count($open_days); $i++)
                                            <span class="badge badge-pill badge-primary text-uppercase mr-2 mb-2">{{ str_replace("_", " ", $open_days[$i]) }}</span>
                                        @endfor
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                        <p class="description">{{ $venue->address.", ".$venue->area->area_name.", ".$venue->city }}</p>
                                        <div>
                                            <agm-map [latitude]="lat" [longitude]="lng" style="height: 300px">
                                                <agm-marker [latitude]="lat" [longitude]="lng"></agm-marker>
                                            </agm-map>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                        <div class="pricing-list-container">
                                            <ul>
                                                @foreach($venue->prices as $price)
                                                    <li>
                                                        <h5>{{ ucfirst(preg_replace('/_/', ' ', $price->category_type)) }}</h5>
                                                        <span> {{ $price->price }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    @include('website.venue._review')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sticky">
                        <!-- Book Now -->
                        <div class="boxed-widget booking-widget">
                            {!! Form::open(["method" => "post", "action" => "BookingController@store"]) !!}
                            {!! Form::hidden('venue_id', $venue->id) !!}
                                <div>
                                    <div class="form-group focused @if($errors->has('date')) {{ 'has-error' }} @endif">
                                        <div class="input-group">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                            </div>
                                            <input name="booking_date" value="{{ old('booking_date') }}" class="form-control" placeholder="Start booking date" title="select booking date" type="date">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <select name="price_id" required class="form-control form-control-alternative custom-select" id="exampleFormControlSelect1">
                                            <option value="" selected>Select Type</option>
                                            @foreach($venue->prices as $price)
                                                <option @if(old('price') == $price->id) selected @endif value="{{ $price->id }}">{{ ucfirst(preg_replace('/_/', ' ', $price->category_type)). " (". $price->price ."TK)" }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <button style="margin: auto" type="submit" class="btn btn-1 btn-primary d-block">Book Now</button>
                                    <div class="form-group">
                                </div>
                            <!-- Book Now -->

                            {!! Form::close() !!}
                        </div>
                        <!-- Book Now / End -->
                        @if(isset($booking_status))
                        <div class="boxed-widget bg-secondary mt-4 text-center p-4">
                            <h4 class="mb-4">My Booking (Latest)</h4>
                            <div class="mb-3">
                                <div class="mb-2">
                                    <img class="img-fluid rounded-circle shadow-lg" width="80" height="80" src="@if(\Illuminate\Support\Facades\Auth::user()->profile_photo) {{ asset(\Illuminate\Support\Facades\Auth::user()->profile_photo) }} @else {{ asset("assets/images/default-avatar.png") }} @endif" alt="image">
                                </div>
                            </div>
                            <ul class="listing-details-sidebar">
                                <li><i class="fa fa-calendar"></i>Date : {{ $booking_status->date }}</li>
                                <li><i class="fa fa-angle-double-up"></i> Category : {{ ucfirst(preg_replace('/_/', ' ', $booking_status->prices->category_type)) }}</li>
                                <li><i class="fa fa-star"></i> Status : {{ ucfirst($booking_status->status) }}</li>
                                <li><i class="fa fa-user"></i> Booked By : {{ \Illuminate\Support\Facades\Auth::user()->name }}</li>
                            </ul>
                        </div>
                        @endif
                        <div class="boxed-widget bg-secondary mt-4 text-center p-4">
                            <h4 class="mb-4">Contact Person</h4>
                            <div class="mb-3">
                                <div class="mb-2">
                                    <img class="img-fluid rounded-circle shadow-lg" width="80" height="80" src="@if($venue->creator->profile->profile_photo) {{ asset($user->profile->profile_photo) }} @else {{ asset("assets/images/default-avatar.png") }} @endif" alt="image">
                                </div>
                                <div class="">
                                    <h5 class="text-primary">{{ $venue->creator->name }}</h5>
                                </div>
                            </div>
                            <ul class="listing-details-sidebar">
                                <li><i class="fa fa-phone"></i> {{ $venue->creator->mobile }}</li>
                                <li><i class="fa fa-envelope-o"></i>{{ $venue->creator->email }}</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script type="text/javascript">
            $('.btn-counter').on('click', function (event, count) {
                event.preventDefault();
                var $this = $(this),
                    count = $this.attr('data-count'),
                    active = $this.hasClass('active'),
                    multiple = $this.hasClass('multiple-count');
                let url=$(this).attr('href')
                $.ajax({
                    url : url,
                    method : "post",
                    data : {"_token": "{{ csrf_token() }}"},
                    success : function (response) {
                        console.log(response);
                    }

                });
                $.fn.noop = $.noop;
                $this.attr('data-count', !active || multiple ? ++count : --count)[multiple ? 'noop' : 'toggleClass']('active');

            });

            setTimeout(function() { $('.alert-box').hide('slow'); }, 5000);
    </script>
@endsection
