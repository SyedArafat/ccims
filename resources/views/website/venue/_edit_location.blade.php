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
                        <option @if($venue->city == $city) selected @endif value="{{ $city }}">{{ $city }}</option>
                    @endforeach
                </select>
                @if($errors->has('city'))
                    <p class="text-danger">{{ $errors->first('city') }}</p>
                @endif
            </div>
            <div class="col-md-6">
                <select name="area_id" required class="custom-select form-control-alternative">
                    <option value="" selected>Area*</option>
                    @foreach($areas as $area)
                        <option @if($venue->area_id == $area->id) selected @endif value="{{ $area->id }}">{{ $area->area_name }}</option>
                    @endforeach
                </select>
                @if($errors->has('area_id'))
                    <p class="text-danger">{{ $errors->first('area_id') }}</p>
                @endif
            </div>
            <!-- Address -->
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" value="{{ $venue->address }}" name="address" required placeholder="Address*" class="form-control form-control-alternative">
                </div>
                @if($errors->has('address'))
                    <p class="text-danger">{{ $errors->first('address') }}</p>
                @endif
            </div>
            <!-- Zip-Code -->
            <div class="col-md-6">
                <div class="form-group">
                    <input type="text" value="{{ $venue->zip_code }}" maxlength="5" name="zip_code" placeholder="Zip Code" class="form-control form-control-alternative">
                </div>
                @if($errors->has('zip_code'))
                    <p class="text-danger">{{ $errors->first('zip_code') }}</p>
                @endif
            </div>
        </div>
        <!-- Row / End -->
    </div>
</div>
