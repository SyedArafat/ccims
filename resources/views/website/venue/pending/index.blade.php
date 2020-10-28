@extends('layouts.website')
@section('title', "Venue Detail")
@section('body_content')
    <div style="margin-top: 25px" class="container">
        <div style="margin-top: 110px">
            @include('website._error_alerts')
        </div>

        @foreach($list as $venue)
            <div class="row responsive-row">
                <div class="col-lg-12 col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex align-items-center">
                                <div class="text-center">
                                    <img alt="image" class="img-fluid rounded-circle" src="@if($venue->customer->profile->profile_photo) {{ asset($venue->customer->profile->profile_photo) }} @else {{ asset("assets/images/default-avatar.png") }} @endif" width="90" height="90">
                                    <h6 class="mt-2 font-weight-bold"> {{$venue->customer->name}}</h6>
                                </div>
                                <div class="flex-grow-1 px-5">
                                    <h4 class="mb-3">{{ $venue->name }} <span class="badge badge-pill badge-danger text-uppercase">Pending</span></h4>
                                    <div class="mb-4">
                                        <div class="detail-list mb-2">
                                            <div class="detail-list-label mb-1">
                                                <i class="fa fa-map-marker mr-2" aria-hidden="true"></i> <small class="text-uppercase font-weight-bold">Address</small>
                                            </div>
                                            <p class="m-0 text-small"> {{ $venue->customer->profile->address }}</p>
                                        </div>
                                        <div class="detail-list mb-2">
                                            <div class="detail-list-label mb-1">
                                                <i class="fa fa-calendar mr-2" aria-hidden="true"></i> <small class="text-uppercase font-weight-bold">Booking Date</small>
                                            </div>
                                            <p class="m-0 text-small"> {{\Carbon\Carbon::parse($venue->date)->format('j M Y')}} </p>
                                        </div>
                                        <div class="detail-list mb-2">
                                            <div class="detail-list-label mb-1">
                                                <i class="fa fa-info-circle mr-2" aria-hidden="true"></i> <small class="text-uppercase font-weight-bold">Booking Details</small>
                                            </div>
                                            <p class="m-0 text-small"><b>{{ $venue->prices->category_type}}</b></p>
                                        </div>
                                        <div class="detail-list mb-2">
                                            <div class="detail-list-label mb-1">
                                                <i class="fa fa-phone mr-2" aria-hidden="true"></i> <small class="text-uppercase font-weight-bold">Contact No.</small>
                                            </div>
                                            <p class="m-0 text-small">{{ $venue->customer->mobile }}</p>
                                        </div>
                                    </div>
                                </div>
                                <div>
                                    <div class="detail-list mb-4 text-center">
                                        <div class="detail-list-label mb-1">
                                            <h5 class="">Price</h5>
                                        </div>
                                        <h4 class="m-0 text-small">{{ $venue->price }}</h4>
                                    </div>
                                    <a onclick="return confirm('Are you sure?');" href="{{route('venue.approve_booking', $venue->id)}}"><button class="btn btn-1 btn-primary" type="button">Approve</button></a>
                                    <a onclick="return confirm('Are you sure?');" href="{{route('venue.reject_booking', $venue->id)}}"> <button class="btn btn-1 btn-danger" type="button">Reject</button></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

@endsection
