@extends('layouts.website')
@section('title', $user->name)
@section('body_content')
    <style>
        .modal {
            position: absolute;
            top: 80px;
            right: 100px;
            bottom: 0;
            left: 0;
            z-index: 10040;
            overflow: auto;
            overflow-y: auto;
        }
        .form-control-text {
            color: black;
        }

    </style>
    <div class="main-wrapper">
        <!--Title Bar -->
        <div id="content">
            <div class="container">
                <div class="profile-page">
                    @include('website._error_alerts')
                    <div class="card card-profile shadow">
                        <div class="px-4">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 col-sm-12 order-lg-2">
                                    <div class="card-profile-image">
                                        <a href="#">
                                            <img src="@if($user->profile->profile_photo) {{ asset($user->profile->profile_photo) }} @else {{ asset("assets/images/default-avatar.png") }} @endif"  alt="image">
                                            <button class="btn btn-sm btn-warning" data-toggle="modal" data-target="#updatePhoto">Edit</button>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-sm-12 offset-5 order-lg-3 text-lg-right">
                                    <div class="card-profile-actions py-4 mt-lg-0">
                                        <a href="#" data-toggle="modal" data-target="#updateInfo" class="btn btn-sm btn-info mr-4">Edit Info</a>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-5">
                                <h3> {{ $user->name }}
                                </h3>
                                <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i> {{ $user->email }}</div>
                                <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i> {{ $user->mobile }}</div>
                                @if($user->profile->address)
                                    <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>{{ $user->profile->address }}</div>
                                @endif
                            </div>

                                <div class="mt-5 py-5 border-top text-center">
                                    <div class="row justify-content-center">
                                        <div class="col-lg-9">
                                            @if($user->profile->bio)
                                                <p>{{ $user->profile->bio }}</p>
                                            @else
                                                <p>Write a short Bio describing yourself. Your test, likes, dislikes.</p>
                                            @endif
                                        </div>
                                    </div>
                                </div>

                        </div>
                        <div class="px-4">
                            <h3>{{getUserName()}}'s Stored Venues</h3>
                        </div>
                        <div class="row p-4">
                            @foreach($user->venues as $venue)
                                <?php
                                /** @var \App\Venue $venue */
                                $facilities = (json_decode($venue->facilities, true));
                                $facilities = $facilities ? $facilities : [];
                                ?>
                                <div class="col-md-6 mb-4">
                                    <div class="listing-item-container list-layout">
                                        <span  class="listing-item">
                                            <!-- Image -->
                                            <div class="listing-item-image">
                                                <img src="{{ asset($venue->venue_image) }}" alt="image">
                                            </div>
                                            <!-- Content -->
                                            <div class="listing-item-content">
                                                <span class="badge badge-pill list-banner @if(isNowOpen($venue)) badge-success @else badge-warning @endif text-uppercase">@if(isNowOpen($venue)) Now Open @else Closed @endif</span>
                                                <div class="listing-item-inner">
                                                    <h3>{{ $venue->name }}</h3>
                                                    <span> <small>{{ $venue->venue_category }}</small> </span>
                                                    @for ($i=0; $i<2; $i++)
                                                        @if(isset($facilities[$i]))
                                                            <div class="mt-3"><span class="badge badge-pill badge-primary text-uppercase">{{ str_replace("_", " ", $facilities[$i]) }}</span></div>
                                                        @endif
                                                    @endfor
                                                </div>
                                                <a href="{{ route('venue.edit', $venue->id) }}" title="Edit Details" class="round-pill like-banner d-block bg-primary"><i class="fa fa-edit"></i></a>
                                            </div>
                                        </span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <div class="pb-5">
                            <div class="px-4">
                                <h3>Reviews</h3>
                            </div>
                            <div class="row p-4 list-img-wrap">
                                <div class="col-md-2 list-img">
                                    <img src="{{ asset('assets/images/logo-1.png') }}" class="img-fluid rounded-circle shadow-lg" alt="image">
                                </div>
                                <div class="col-md-10">
                                    <h5 class="text-primary">Cafe Bar</h5>
                                    <p>15 Minutes Ago</p>
                                    <p>Lorem Ipsum is simply dummy text of the pr make but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <button class="btn btn-sm btn-primary" type="button">Edit</button>
                                    <button class="btn btn-sm btn-danger" type="button">Remove</button>
                                </div>
                            </div>
                            <div class="row p-4 list-img-wrap">
                                <div class="col-md-2 list-img">
                                    <img src="{{ asset('assets/images/logo-2.png') }}" class="img-fluid rounded-circle shadow-lg" alt="image">
                                </div>
                                <div class="col-md-10">
                                    <h5 class="text-primary">Kyoto Sushi Bar</h5>
                                    <p>1 Week Ago</p>
                                    <p>Quisque vel semper mauris, quis auctor magna. Morbi posuere risus non efficitur fringilla. Integer lacus arcu, imperdiet eget orci at, tempor euismod massa. Donec sit amet luctus leo, sit amet blandit sapien. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Morbi maximus dui quis ex scelerisque iaculis</p>
                                    <button class="btn btn-sm btn-primary" type="button">Edit</button>
                                    <button class="btn btn-sm btn-danger" type="button">Remove</button>
                                </div>
                            </div>
                            <div class="row p-4 list-img-wrap">
                                <div class="col-md-2 list-img">
                                    <img src="{{ asset('assets/images/logo-3.png') }}" class="img-fluid rounded-circle shadow-lg" alt="image">
                                </div>
                                <div class="col-md-10">
                                    <h5 class="text-primary">Burger Sack</h5>
                                    <p>21 March 18</p>
                                    <p>Maecenas mollis bibendum ipsum id vestibulum. Donec viverra sem eu diam euismod, quis congue nisi commodo. Maecenas volutpat sem justo, id cursus tellus placerat sit amet. Nunc porta orci ultrices purus congue placerat. Proin laoreet et odio
                                        dictum laoreet. Maecenas consectetur sem quis velit euismod hendrerit.</p>
                                    <button class="btn btn-sm btn-primary" type="button">Edit</button>
                                    <button class="btn btn-sm btn-danger" type="button">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @include('website.profile.modal.update_photo')

    @include('website.profile.modal.update_info')

    <script>
        setTimeout(function() { $('.alert-box').hide('slow'); }, 5000);
    </script>

@endsection
