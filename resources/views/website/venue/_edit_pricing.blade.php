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
                    @foreach($venue->prices as $price)
                        <tr class="pricing-list-item pattern">
                            <td>
                                <div class="fm-input pricing-name">
                                    <label class="custom-select form-control-alternative">
                                        {{  ucfirst(preg_replace('/_/', ' ', $price->category_type)) }}
                                    </label>
                                </div>
                                <div class="fm-input pricing-ingredients">
                                    <div class="form-group">
                                        <input required name="prices[{{$price->id}}]" value="{{ $price->price }}" type="number" placeholder="Price*" class="form-control form-control-alternative">
                                    </div>
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </table>
            </div>
            @if($errors->has('prices'))
                <p class="text-danger">{{ $errors->first('prices') }}</p>
            @endif
        </div>
    </div>
    <!-- Switcher ON-OFF Content / End -->
</div>
