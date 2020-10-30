@extends('layouts.website')
@section('title', $user->name)
@section('body_content')
    <style>
        .modals {
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
                        @if(getUserType() === getTypeHallOwner())
                            <div class="px-4">
                                <h3>{{getUserName()}}'s Stored Venues</h3>
                            </div>
                            @include('website.profile.venue_list')
                        @endif
                        @if(getUserType() === getTypeCustomer())
                            <div class="pb-5 reviews-holder">
                                <div class="px-4">
                                    <h3>Reviews</h3>
                                </div>
                                @include('website.profile.review_list')

                            </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>
        @include('website.venue.modal._update_review')
    </div>

    @include('website.profile.modal.update_photo')

    @include('website.profile.modal.update_info')

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

    <script type="text/javascript">
        $('.reviews-holder').on("click", ".edit-review-button", function (event) {
            event.preventDefault();
            let url=$(this).attr('href');
            let method="get";
            $.ajax({
                url:url,
                method:method,
                success:function (response) {
                    $('.edit-modal-body').html(response);
                }
            });

            $("#editReview").modal();
        });

        setTimeout(function() { $('.alert-box').hide('slow'); }, 5000);
    </script>

@endsection
