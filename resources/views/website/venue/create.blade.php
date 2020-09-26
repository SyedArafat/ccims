@extends('layouts.website')
@section('title', "Add venue")
@section('body_content')
    <div class="content">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
{{--                    <div class="alert alert-success alert-dismissible fade show" role="alert">--}}
{{--                        <span class="alert-inner--icon"><i class="fa fa-thumbs-o-up"></i></span>--}}
{{--                        <span class="alert-inner--text"><strong>Don't Have an Account?</strong> If you don't have an account you can create one</span>--}}
{{--                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">--}}
{{--                            <span aria-hidden="true">×</span>--}}
{{--                        </button>--}}
{{--                    </div>--}}
{{--                    @if ($errors->any())--}}
{{--                        <div id="alert_message" class="alert alert-danger">--}}
{{--                            <ul>--}}
{{--                                @foreach ($errors->all() as $error)--}}
{{--                                    <li>{{ $error }}</li>--}}
{{--                                @endforeach--}}
{{--                            </ul>--}}
{{--                        </div>--}}
{{--                    @endif--}}

                    @include('website._error_alerts')

                    {!! Form::open(['method' => 'POST', 'action' => 'VenueController@store', "files"=>true]) !!}
                        <div id="add-listing" class="separated-form">
                            <!-- Section -->
                            @include('website.venue._basic_info')
                            <!-- Section / End -->
                            <!-- Section -->
                            @include('website.venue._location')
                            <!-- Section / End -->
                            <!-- Section -->
                            @include('website.venue._details')
                            <!-- Section / End -->
                            <!-- Section -->
                            @include("website.venue._open_days")
                            <!-- Section / End -->
                            <!-- Section -->
                            @include('website.venue._opening_hours')
                            <!-- Section / End -->
                            <!-- Section -->
                            @include('website.venue._pricing')
                            <!-- Section / End -->
                            <button class="btn btn-lg btn-primary mt-4" type="submit">Add Venue</button>
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
