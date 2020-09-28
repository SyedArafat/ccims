@extends('layouts.website')
@section('title', "Edit Venue")
@section('body_content')
    <div class="content">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">

                    @include('website._error_alerts')

                    {!! Form::open(['method' => 'PATCH', 'action' => ['VenueController@update', $venue], "files"=>true]) !!}
                    <div id="add-listing" class="separated-form">
                        <!-- Section -->
                    @include('website.venue._edit_basic_info')
                    <!-- Section / End -->
                        <!-- Section -->
                    @include('website.venue._edit_location')
                    <!-- Section / End -->
                        <!-- Section -->
                    @include('website.venue._edit_details')
                    <!-- Section / End -->
                        <!-- Section -->
                    @include("website.venue._edit_open_days")
                    <!-- Section / End -->
                        <!-- Section -->
                    @include('website.venue._edit_opening_hours')
                    <!-- Section / End -->
                        <!-- Section -->
                    @include('website.venue._edit_pricing')
                    <!-- Section / End -->
                        <button class="btn btn-lg btn-primary mt-4" type="submit">Update Venue</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

    <script>
        setTimeout(function() { $('.alert-box').hide('slow'); }, 5000);
    </script>

@endsection
