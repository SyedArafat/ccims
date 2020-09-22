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
                                    <div class="form-group @if($errors->has('name')) {{ 'has-error' }} @endif">
                                        <input type="text" id="name" required placeholder="Title*" value="{{ old('name') }}" name="name" class="form-control form-control-alternative @error('name') is-invalid @enderror">
                                        @if($errors->has('name'))
                                            <p class="text-danger">{{ $errors->first('name') }}</p>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- Row -->
                            <div class="row with-forms">
                                <!-- Status -->
                                <div class="col-md-6">
                                    <select name="venue_category" required class="custom-select form-control-alternative @error('venue_category') is-invalid @enderror">
                                        <option value="" selected>Category*</option>
                                        @foreach(config('venue.categories') as $category)
                                            <option @if(old('venue_category') == $category) selected @endif value="{{ $category }}">{{ $category }}</option>
                                        @endforeach
                                    </select>
                                    @if($errors->has('venue_category'))
                                        <p class="text-danger">{{ $errors->first('venue_category') }}</p>
                                    @endif
                                </div>
                                <!-- Type -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input name="capacity" required value="{{ old('capacity') }}" type="text" placeholder="capacity*" class="form-control form-control-alternative @error('capacity') is-invalid @enderror">
                                    </div>
                                    @if($errors->has('capacity'))
                                        <p class="text-danger">{{ $errors->first('capacity') }}</p>
                                    @endif
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
                                        <select required name="city" class="custom-select form-control-alternative">
                                            <option value="" selected>City*</option>
                                            @foreach(config('constants.cities') as $key => $city)
                                                <option @if(old('city') == $city) selected @endif value="{{ $city }}">{{ $city }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('city'))
                                            <p class="text-danger">{{ $errors->first('city') }}</p>
                                        @endif
                                    </div>
                                    <div class="col-md-6">
                                        <select name="area_code" required class="custom-select form-control-alternative">
                                            <option value="" selected>Area*</option>
                                            @foreach(config('constants.areas') as $key => $area)
                                                <option @if(old('area_code') == $key) selected @endif value="{{ $key }}">{{ $area }}</option>
                                            @endforeach
                                        </select>
                                        @if($errors->has('area_code'))
                                            <p class="text-danger">{{ $errors->first('area_code') }}</p>
                                        @endif
                                    </div>
                                    <!-- Address -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" value="{{ old('address') }}" name="address" required placeholder="Address*" class="form-control form-control-alternative">
                                        </div>
                                        @if($errors->has('address'))
                                            <p class="text-danger">{{ $errors->first('address') }}</p>
                                        @endif
                                    </div>
                                    <!-- Zip-Code -->
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <input type="text" value="{{ old('zip_code') }}" name="zip_code" placeholder="Zip Code" class="form-control form-control-alternative">
                                        </div>
                                        @if($errors->has('zip_code'))
                                            <p class="text-danger">{{ $errors->first('zip_code') }}</p>
                                        @endif
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
                                <textarea class="WYSIWYG form-control form-control-alternative" name="description" cols="40" rows="3" id="summary" spellcheck="true"> {{ old('description') }}</textarea>
                                @if($errors->has('description'))
                                    <p class="text-danger">{{ $errors->first('description') }}</p>
                                @endif
                            </div>
                            <!-- Row -->
                            <div class="row with-forms">
                                <!-- Phone -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="phone" required value="{{ old('phone') }}" placeholder="Phone*" class="form-control form-control-alternative">
                                    </div>
                                    @if($errors->has('phone'))
                                        <p class="text-danger">{{ $errors->first('phone') }}</p>
                                    @endif
                                </div>
                                <!-- Website -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="website" value="{{old('website')}}" placeholder="Website" class="form-control form-control-alternative">
                                    </div>
                                    @if($errors->has('website'))
                                        <p class="text-danger">{{ $errors->first('website') }}</p>
                                    @endif
                                </div>
                            </div>
                            <!-- Row / End -->
                            <!-- Row -->
                            <div class="row with-forms">
                                <!-- Email Address -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" value="{{old('email')}}" placeholder="E-mail" class="form-control form-control-alternative">
                                    </div>
                                    @if($errors->has('email'))
                                        <p class="text-danger">{{ $errors->first('email') }}</p>
                                    @endif
                                </div>
                                <!-- Phone -->
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="facebook" value="{{ old('facebook') }}" placeholder="Facebook" class="form-control form-control-alternative">
                                    </div>
                                    @if($errors->has('faceook'))
                                        <p class="text-danger">{{ $errors->first('facebook') }}</p>
                                    @endif
                                </div>

                            </div>
                            <!-- Row / End -->
                            <!-- Checkboxes -->
                            <h5 class="margin-top-30 margin-bottom-10">Amenities <span>(optional)</span></h5>
                            <div class="checkboxes checkbox-group in-row margin-bottom-20">
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input name="facilities[]" value="elevator" class="custom-control-input" id="customCheck1" type="checkbox">
                                    <label class="custom-control-label" for="customCheck1">
                                        <span>Elevator</span>
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input name="facilities[]" value="friendly_workspace" class="custom-control-input" id="customCheck2" type="checkbox">
                                    <label class="custom-control-label" for="customCheck2">
                                        <span>Friendly workspace</span>
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input name="facilities[]" value="instant_book" class="custom-control-input" id="customCheck3" type="checkbox">
                                    <label class="custom-control-label" for="customCheck3">
                                        <span>Instant Book</span>
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input name="facilities[]" value="free_parking" class="custom-control-input" id="customCheck5" type="checkbox">
                                    <label class="custom-control-label" for="customCheck5">
                                        <span>Free parking on premises</span>
                                    </label>
                                </div>
                                <div class="custom-control custom-checkbox mb-3 pl-0">
                                    <input name="facilities[]" value="all_events" class="custom-control-input" id="customCheck8" type="checkbox">
                                    <label class="custom-control-label" for="customCheck8">
                                        <span>All Events</span>
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
                                            <input checked name="open_days[]" value="saturday"  class="custom-control-input" id="saturday" type="checkbox">
                                            <label class="custom-control-label" for="saturday">
                                                <span>Saturday</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3 pl-0">
                                            <input checked name="open_days[]" value="sunday" class="custom-control-input" id="sunday" type="checkbox">
                                            <label class="custom-control-label" for="sunday">
                                                <span>Sunday</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3 pl-0">
                                            <input checked name="open_days[]" value="monday" class="custom-control-input" id="monday" type="checkbox">
                                            <label class="custom-control-label" for="monday">
                                                <span>Monday</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3 pl-0">
                                            <input checked name="open_days[]" value="tuesday" class="custom-control-input" id="tuesday" type="checkbox">
                                            <label class="custom-control-label" for="tuesday">
                                                <span>Tuesday</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3 pl-0">
                                            <input checked name="open_days[]" value="wednesday" class="custom-control-input" id="wednesday" type="checkbox">
                                            <label class="custom-control-label" for="wednesday">
                                                <span>Wednesday</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3 pl-0">
                                            <input checked name="open_days[]" value="thursday" class="custom-control-input" id="thursday" type="checkbox">
                                            <label class="custom-control-label" for="thursday">
                                                <span>Thursday</span>
                                            </label>
                                        </div>
                                        <div class="custom-control custom-checkbox mb-3 pl-0">
                                            <input checked name="open_days[]" value="friday" class="custom-control-input" id="friday" type="checkbox">
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
                                <h3> Opening Hours (keep empty if open 24/7)</h3>
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
                                            <input name="start_time" type="time" class="form-control" placeholder="Select time">
                                        </div>
                                    </div>
                                    <div class="col-md-2">
                                        <h5>End Time</h5>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="md-form md-outline">
                                            <input name="end_time" type="time" class="form-control" placeholder="Select time">
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
                                                            <label class="custom-select form-control-alternative">
                                                                {{  ucfirst(preg_replace('/_/', ' ', $category)) }}
                                                            </label>
                                                        </div>
                                                        <div class="fm-input pricing-ingredients">
                                                            <div class="form-group">
                                                                <input required name="prices[{{$category}}]" type="text" placeholder="Price" class="form-control form-control-alternative">
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
