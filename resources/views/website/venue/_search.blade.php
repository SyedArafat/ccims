<div class="col-md-12 grid-full-width page-search mb-3">
    {!! Form::open(["method" => "get"]) !!}
        <div class="main-search-input mt-0">
            <div class="col-lg-3 col-sm-6">
                <div class="form-group">
                    <input type="text" placeholder="What are you looking for?" class="form-control">
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <div class="form-group">
                    <select name="area_id" class="custom-select my-1 mr-sm-2 new-select" id="inlineFormCustomSelectPref">
                        <option value="" selected>Area...</option>
                        @foreach($areas as $area)
                            <option @if($request->area_id == $area->id) selected @endif value="{{ $area->id }}">{{ $area->area_name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="col-lg-3 col-sm-6">
                <select name="venue_category" class="custom-select my-1 mr-sm-2 new-select" id="inlineFormCustomSelectPref">
                    <option value="" selected>Type...</option>
                    @foreach(config('venue.categories') as $category)
                        <option @if($request->venue_category == $category) selected @endif value="{{ $category }}">{{ $category }}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-lg-3 col-sm-6 text-right">
                <button type="submit" class="btn main-search-btn btn-radius btn-lg btn-primary text-white"><span class="btn-inner--text">Search</span></button>
            </div>

        </div>
    {!! Form::close() !!}
</div>

