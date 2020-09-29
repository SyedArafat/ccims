@php
    $open_days = json_decode($venue->open_days, true);
    $open_days = $open_days ? $open_days : [];
@endphp
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
                    <input name="open_days[]" @if(in_array('saturday', $open_days)) checked @endif value="saturday"  class="custom-control-input" id="saturday" type="checkbox">
                    <label class="custom-control-label" for="saturday">
                        <span>Saturday</span>
                    </label>
                </div>
                <div class="custom-control custom-checkbox mb-3 pl-0">
                    <input name="open_days[]" @if(in_array('sunday', $open_days)) checked @endif value="sunday" class="custom-control-input" id="sunday" type="checkbox">
                    <label class="custom-control-label" for="sunday">
                        <span>Sunday</span>
                    </label>
                </div>
                <div class="custom-control custom-checkbox mb-3 pl-0">
                    <input name="open_days[]" @if(in_array('monday', $open_days)) checked @endif value="monday" class="custom-control-input" id="monday" type="checkbox">
                    <label class="custom-control-label" for="monday">
                        <span>Monday</span>
                    </label>
                </div>
                <div class="custom-control custom-checkbox mb-3 pl-0">
                    <input name="open_days[]" @if(in_array('tuesday', $open_days)) checked @endif value="tuesday" class="custom-control-input" id="tuesday" type="checkbox">
                    <label class="custom-control-label" for="tuesday">
                        <span>Tuesday</span>
                    </label>
                </div>
                <div class="custom-control custom-checkbox mb-3 pl-0">
                    <input name="open_days[]" @if(in_array('wednesday', $open_days)) checked @endif value="wednesday" class="custom-control-input" id="wednesday" type="checkbox">
                    <label class="custom-control-label" for="wednesday">
                        <span>Wednesday</span>
                    </label>
                </div>
                <div class="custom-control custom-checkbox mb-3 pl-0">
                    <input name="open_days[]" @if(in_array('thursday', $open_days)) checked @endif value="thursday" class="custom-control-input" id="thursday" type="checkbox">
                    <label class="custom-control-label" for="thursday">
                        <span>Thursday</span>
                    </label>
                </div>
                <div class="custom-control custom-checkbox mb-3 pl-0">
                    <input name="open_days[]" @if(in_array('friday', $open_days)) checked @endif value="friday" class="custom-control-input" id="friday" type="checkbox">
                    <label class="custom-control-label" for="friday">
                        <span>Friday</span>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <!-- Switcher ON-OFF Content / End -->
</div>
