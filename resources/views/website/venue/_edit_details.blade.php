@php
    $facilities = json_decode($venue->facilities, true);
    $facilities = $facilities ? $facilities : [];
@endphp
<div class="add-listing-section mb-4">
    <!-- Headline -->
    <div class="add-listing-headline">
        <h3> Details</h3>
    </div>
    <!-- Description -->
    <div class="form">
        <h5>Description</h5>
        <textarea class="WYSIWYG form-control form-control-alternative" name="description" cols="40" rows="3" id="summary" spellcheck="true"> {{ $venue->description }}</textarea>
        @if($errors->has('description'))
            <p class="text-danger">{{ $errors->first('description') }}</p>
        @endif
    </div>
    <!-- Row -->
    <div class="row with-forms">
        <!-- Phone -->
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="phone" required value="{{ $venue->phone }}" maxlength="18" placeholder="Phone*" class="form-control form-control-alternative">
            </div>
            @if($errors->has('phone'))
                <p class="text-danger">{{ $errors->first('phone') }}</p>
            @endif
        </div>
        <!-- Website -->
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="website" value="{{ $venue->website }}" placeholder="Website" class="form-control form-control-alternative">
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
                <input type="email" name="email" value="{{ $venue->email }}" placeholder="E-mail" class="form-control form-control-alternative">
            </div>
            @if($errors->has('email'))
                <p class="text-danger">{{ $errors->first('email') }}</p>
            @endif
        </div>
        <!-- Phone -->
        <div class="col-md-6">
            <div class="form-group">
                <input type="text" name="facebook" value="{{ $venue->facebook }}" placeholder="Facebook" class="form-control form-control-alternative">
            </div>
            @if($errors->has('facebook'))
                <p class="text-danger">{{ $errors->first('facebook') }}</p>
            @endif
        </div>

        <!-- Image -->

        <div class="col-md-12">
            <table id="pricing-list-container">
                <tr class="pricing-list-item pattern">
                    <td class="col-md-12">
                        <div class="fm-input pricing-name">
                            <label style="color: black" class="custom-select form-control-alternative">
                                Venue Image*
                            </label>
                        </div>
                        <div class="fm-input pricing-ingredients">
                            <div class="form-group">
                                <img class="edit-image-position" id="blah" width="250" height="200" src="{{ asset($venue->venue_image) }}" alt="your image" />
                                <input onchange="readURL(this);" name="venue_image" type="file" id="venue_image" placeholder="Venue Image*" class="form-control form-control-alternative">
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
        </div>

    </div>
    <!-- Row / End -->
    <!-- Checkboxes -->
    <h5 class="margin-top-30 margin-bottom-10">Amenities <span>(optional)</span></h5>
    <div class="checkboxes checkbox-group in-row margin-bottom-20">
        <div class="custom-control custom-checkbox mb-3 pl-0">
            <input name="facilities[]" @if(in_array('elevator', $facilities)) checked @endif value="elevator" class="custom-control-input" id="customCheck1" type="checkbox">
            <label class="custom-control-label" for="customCheck1">
                <span>Elevator</span>
            </label>
        </div>
        <div class="custom-control custom-checkbox mb-3 pl-0">
            <input name="facilities[]" @if(in_array('friendly_workspace', $facilities)) checked @endif value="friendly_workspace" class="custom-control-input" id="customCheck2" type="checkbox">
            <label class="custom-control-label" for="customCheck2">
                <span>Friendly workspace</span>
            </label>
        </div>
        <div class="custom-control custom-checkbox mb-3 pl-0">
            <input name="facilities[]" @if(in_array('instant_book', $facilities)) checked @endif value="instant_book" class="custom-control-input" id="customCheck3" type="checkbox">
            <label class="custom-control-label" for="customCheck3">
                <span>Instant Book</span>
            </label>
        </div>
        <div class="custom-control custom-checkbox mb-3 pl-0">
            <input name="facilities[]" @if(in_array('free_parking', $facilities)) checked @endif value="free_parking" class="custom-control-input" id="customCheck5" type="checkbox">
            <label class="custom-control-label" for="customCheck5">
                <span>Free parking on premises</span>
            </label>
        </div>
        <div class="custom-control custom-checkbox mb-3 pl-0">
            <input name="facilities[]" @if(in_array('all_events', $facilities)) checked @endif value="all_events" class="custom-control-input" id="customCheck8" type="checkbox">
            <label class="custom-control-label" for="customCheck8">
                <span>All Events</span>
            </label>
        </div>
    </div>
    <!-- Checkboxes / End -->
</div>

<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#blah')
                    .attr('src', e.target.result)
                    .width(250)
                    .height(200);
            };

            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
