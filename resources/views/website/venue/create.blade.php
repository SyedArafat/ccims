@extends('layouts.website')
@section('title', "Add venue")
@section('body_content')
    <div class="content">
        <!-- Container -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <span class="alert-inner--icon"><i class="fa fa-thumbs-o-up"></i></span>
                        <span class="alert-inner--text"><strong>Don't Have an Account?</strong> If you don't have an account you can create one</span>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    {!! Form::open(['method' => 'POST', 'action' => 'VenueController@store']) !!}
                        <div id="add-listing" class="separated-form">
                        <!-- Section -->
                        <div class="add-listing-section mb-4">
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3> Basic Information</h3>
                            </div>
                            <!-- Title -->
                            <div class="row with-forms">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <input type="text" id="name" placeholder="Title*" value="{{ old('name') }}" name="name" class="form-control form-control-alternative @error('name') is-invalid @enderror">
                                        @error('name')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row with-forms">
                                <!-- Status -->
                                <div class="col-md-6">
                                    <select name="venue_category" class="custom-select form-control-alternative @error('venue_category') is-invalid @enderror">
                                        <option selected>Category*</option>
                                        @foreach(config('venue.categories') as $category)
                                            <option @if(old('venue_category') == $category) selected @endif value="{{ $category }}">{{ $category }}</option>
                                        @endforeach
                                    </select>
                                    @error('venue_category')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <!-- Type -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input id="capacity" name="capacity" type="text" placeholder="capacity*" class="form-control form-control-alternative @error('capacity') is-invalid @enderror">
                                    </div>
                                    @error('capacity')
                                    <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <!-- Row / End -->
                        </div>
                        <!-- Section / End -->
                        <!-- Section -->
                        <div class="add-listing-section mb-4">
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3>Location</h3>
                            </div>
                            <div class="submit-section">
                                <!-- Row -->
                                <div class="row with-forms">
                                    <!-- City -->
                                    <div class="col-md-6">
                                        <select class="custom-select form-control-alternative">
                                            <option selected>City*</option>
                                            @foreach(config('constants.cities') as $key => $city)
                                                <option>{{ $city }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="col-md-6">
                                        <select class="custom-select form-control-alternative">
                                            <option selected>Area*</option>
                                            @foreach(config('constants.areas') as $key => $area)
                                                <option>{{ $area }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <!-- Address -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Address*" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                    <!-- Zip-Code -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" placeholder="Zip Code" class="form-control form-control-alternative">
                                        </div>
                                    </div>
                                </div>
                                <!-- Row / End -->
                            </div>
                        </div>
                        <!-- Section / End -->
                        <!-- Section -->
                        <div class="add-listing-section mb-4">
                            <!-- Dropzone -->
                            <!-- <dropzone class="dropzone-container" [message]="'Click or drag images here to upload'"></dropzone> -->
                        </div>
                        <!-- Section / End -->
                        <!-- Section -->
                        <div class="add-listing-section mb-4">
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3> Details</h3>
                            </div>
                            <!-- Description -->
                            <div class="form">
                                <h5>Description</h5>
                                <textarea class="WYSIWYG form-control form-control-alternative" name="summary" cols="40" rows="3" id="summary" spellcheck="true"></textarea>
                            </div>
                            <!-- Row -->
                            <div class="row with-forms">
                                <!-- Phone -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Phone*" class="form-control form-control-alternative">
                                    </div>
                                </div>
                                <!-- Website -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Website" class="form-control form-control-alternative">
                                    </div>
                                </div>
                            </div>
                            <!-- Row / End -->
                            <!-- Row -->
                            <div class="row with-forms">
                                <!-- Email Address -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="E-mail" class="form-control form-control-alternative">
                                    </div>
                                </div>
                                <!-- Phone -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" placeholder="Facebook" class="form-control form-control-alternative">
                                    </div>
                                </div>

                            </div>
                            <!-- Row / End -->
                            <!-- Checkboxes -->
                            <h5 class="margin-top-30 margin-bottom-10">Amenities <span>(optional)</span></h5>
                            <div class="checkboxes checkbox-group in-row margin-bottom-20">
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input class="custom-control-input" id="customCheck1" type="checkbox">
                                    <label class="custom-control-label" for="customCheck1">
                                        <span>Elevator</span>
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input class="custom-control-input" id="customCheck2" type="checkbox">
                                    <label class="custom-control-label" for="customCheck2">
                                        <span>Friendly workspace</span>
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input class="custom-control-input" id="customCheck3" type="checkbox">
                                    <label class="custom-control-label" for="customCheck3">
                                        <span>Instant Book</span>
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input class="custom-control-input" id="customCheck4" type="checkbox">
                                    <label class="custom-control-label" for="customCheck4">
                                        <span>Wireless Internet</span>
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input class="custom-control-input" id="customCheck5" type="checkbox">
                                    <label class="custom-control-label" for="customCheck5">
                                        <span>Free parking on premises</span>
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input class="custom-control-input" id="customCheck6" type="checkbox">
                                    <label class="custom-control-label" for="customCheck6">
                                        <span>Free parking on street</span>
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input class="custom-control-input" id="customCheck7" type="checkbox">
                                    <label class="custom-control-label" for="customCheck7">
                                        <span>Smoking allowed</span>
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input class="custom-control-input" id="customCheck8" type="checkbox">
                                    <label class="custom-control-label" for="customCheck8">
                                        <span>Events</span>
                                    </label>
                                </div>
                            </div>
                            <!-- Checkboxes / End -->
                        </div>
                        <!-- Section / End -->
                        <!-- Section -->
                        <div class="add-listing-section mb-4">
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3> Open Days</h3>
                                <!-- Switcher -->
                                <label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                            </div>
                            <!-- Switcher ON-OFF Content -->
                            <div class="switcher-content">
                                <!-- Day -->
                                <div class="checkboxes checkbox-group in-row margin-bottom-20">
                                    <div class="row opening-day">
                                        <div class="custom-control custom-checkbox mb-3 pl-0">
                                            <input class="custom-control-input" id="saturday" type="checkbox">
                                            <label class="custom-control-label" for="saturday">
                                                <span>Saturday</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3 pl-0">
                                            <input class="custom-control-input" id="sunday" type="checkbox">
                                            <label class="custom-control-label" for="sunday">
                                                <span>Sunday</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3 pl-0">
                                            <input class="custom-control-input" id="monday" type="checkbox">
                                            <label class="custom-control-label" for="monday">
                                                <span>Monday</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3 pl-0">
                                            <input class="custom-control-input" id="tuesday" type="checkbox">
                                            <label class="custom-control-label" for="tuesday">
                                                <span>Tuesday</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3 pl-0">
                                            <input class="custom-control-input" id="wednesday" type="checkbox">
                                            <label class="custom-control-label" for="wednesday">
                                                <span>Wednesday</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3 pl-0">
                                            <input class="custom-control-input" id="thursday" type="checkbox">
                                            <label class="custom-control-label" for="thursday">
                                                <span>Thursday</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3 pl-0">
                                            <input class="custom-control-input" id="friday" type="checkbox">
                                            <label class="custom-control-label" for="friday">
                                                <span>Friday</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Switcher ON-OFF Content / End -->
                        </div>
                        <!-- Section / End -->
                        <!-- Section -->
                        <div class="add-listing-section mb-4">
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3> Opening Hours</h3>
                                <!-- Switcher -->
                                <label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                            </div>
                            <!-- Switcher ON-OFF Content -->
                            <div class="switcher-content">
                                <!-- Day -->
                                <div class="row opening-day">
                                    <div class="col-md-2">
                                        <h5>Start Time</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-form md-outline">
                                            <input type="time" class="form-control" placeholder="Select time">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>End Time</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-form md-outline">
                                            <input type="time" class="form-control" placeholder="Select time">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Switcher ON-OFF Content / End -->
                        </div>
                        <!-- Section / End -->
                        <!-- Section -->
                        <div class="add-listing-section mb-4">
                            <!-- Headline -->
                            <div class="add-listing-headline">
                                <h3> Pricing</h3>
                                <!-- Switcher -->
                                <label class="switch"><input type="checkbox" checked><span class="slider round"></span></label>
                            </div>
                            <!-- Switcher ON-OFF Content -->
                            <div class="switcher-content">
                                <div class="row">
                                    <div class="col-md-12">
                                        <table id="pricing-list-container">
                                            @foreach(config('venue.price_categories') as $category)
                                                <tr class="pricing-list-item pattern">
                                                    <td>
                                                        <div class="fm-input pricing-name">
                                                            <select class="custom-select form-control-alternative">
                                                                <option value="{{ $category }}">{{ $category }}</option>
                                                            </select>
                                                        </div>
                                                        <div class="fm-input pricing-ingredients">
                                                            <div class="form-group">
                                                                <input type="text" placeholder="Price" class="form-control form-control-alternative">
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <!-- Switcher ON-OFF Content / End -->
                        </div>
                        <!-- Section / End -->
                        <button class="btn btn-lg btn-primary mt-4" type="submit">Add Venue</button>
                    </div>
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>

@endsection
