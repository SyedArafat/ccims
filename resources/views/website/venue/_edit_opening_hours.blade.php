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
                    <input name="start_time" value="{{ $venue->start_time }}" type="time" class="form-control" placeholder="Select time">
                </div>
            </div>
            <div class="col-md-2">
                <h5>End Time</h5>
            </div>
            <div class="col-md-4">
                <div class="md-form md-outline">
                    <input name="end_time" type="time" value="{{ $venue->end_time }}" class="form-control" placeholder="Select time">
                </div>
            </div>
        </div>
    </div>
    <!-- Switcher ON-OFF Content / End -->
</div>
