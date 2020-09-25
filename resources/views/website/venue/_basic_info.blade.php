<div class="add-listing-section mb-4">
    <!-- Headline -->
    <div class="add-listing-headline">
        <h3> Basic Information</h3>
    </div>
    <!-- Title -->
    <div class="row with-forms">
        <div class="col-md-12">
            <div class="form-group @if($errors->has('name')) {{ 'has-error' }} @endif">
                <input type="text" maxlength="255" id="name" required placeholder="Title*" value="{{ old('name') }}" name="name" class="form-control form-control-alternative @error('name') is-invalid @enderror">
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
                <input name="capacity" maxlength="11" required value="{{ old('capacity') }}" type="number" placeholder="capacity*" class="form-control form-control-alternative @error('capacity') is-invalid @enderror">
            </div>
            @if($errors->has('capacity'))
                <p class="text-danger">{{ $errors->first('capacity') }}</p>
            @endif
        </div>
    </div>
    <!-- Row / End -->
</div>
