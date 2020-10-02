@extends('layouts.website')
@section('title', "Venue Detail")
@section('body_content')
    <div class="container">
        <div class="content">
            <div class="row sticky-wrapper">
                <div class="col-lg-8 col-md-8">
                    <div class="">
                        <div class="detail-tile mb-4">
                            <h3> {{$venue->name}} <span class="badge badge-pill badge-success text-uppercase">Open</span>
                            </h3>
                            <p>{{ $venue->address.", ".$venue->area->area_name.", ". $venue->city }}</p>
                            <span class="badge badge-pill badge-info text-uppercase">{{ $venue->venue_category }}</span>
                        </div>
                        <div class="nav-wrapper">
                            <ul class="nav nav-pills nav-fill flex-column flex-md-row" id="tabs-icons-text" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0 active show" id="tabs-icons-text-1-tab" data-toggle="tab" href="#tabs-icons-text-1" role="tab" aria-controls="tabs-icons-text-1" aria-selected="true"><i class="fa fa-info-circle mr-2"></i>About</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-2-tab" data-toggle="tab" href="#tabs-icons-text-2" role="tab" aria-controls="tabs-icons-text-2" aria-selected="false"><i class="fa fa-map-marker mr-2"></i>Location</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-3-tab" data-toggle="tab" href="#tabs-icons-text-3" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fa fa-money mr-2"></i>Pricing</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link mb-sm-3 mb-md-0" id="tabs-icons-text-4-tab" data-toggle="tab" href="#tabs-icons-text-4" role="tab" aria-controls="tabs-icons-text-3" aria-selected="false"><i class="fa fa-money mr-2"></i>Reviews</a>
                                </li>
                            </ul>
                        </div>
                        <div class="card shadow">
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent">
                                    <div class="tab-pane fade active show" id="tabs-icons-text-1" role="tabpanel" aria-labelledby="tabs-icons-text-1-tab">
                                        <p class="description">{{ $venue->description }}</p>
                                        <p class="description">A place where you can spend some wonderful time with your family and create memories.</p>
                                        <h4 class="mb-4">
                                            Contact Info
                                        </h4>
                                        <div class="row mb-5">
                                            <div class="col-lg-4">
                                                <div class="detail-list mb-2">
                                                    <div class="detail-list-label mb-1"><i aria-hidden="true" class="fa fa-phone mr-2"></i>
                                                        <small class="text-uppercase font-weight-bold">Contact Number.</small>
                                                    </div>
                                                    <p class="m-0 text-small">{{ $venue->phone }}</p>
                                                </div>
                                            </div>
                                            @if(($venue->email))
                                                <div class="col-lg-4">
                                                    <div class="detail-list mb-2">
                                                        <div class="detail-list-label mb-1"><i aria-hidden="true" class="fa fa-mail-forward mr-2"></i>
                                                            <small class="text-uppercase font-weight-bold">Email.</small>
                                                        </div>
                                                        <p class="m-0 text-small">{{ $venue->email }}</p>
                                                    </div>
                                                </div>
                                            @endif
                                            <div class="col-lg-4">
                                                <div class="detail-list mb-2">
                                                    <div class="detail-list-label mb-1"><i aria-hidden="true" class="fa fa-facebook mr-2"></i><small class="text-uppercase font-weight-bold">Facebook.</small>
                                                    </div>
                                                    <a href="{{$venue->facebook}}" class="m-0 text-small">Visit Page</a>
                                                </div>
                                            </div>
                                        </div>
                                        <?php
                                        /** @var \App\Venue $venue */
                                        $facilities = (json_decode($venue->facilities, true));
                                        $facilities = $facilities ? $facilities : [];
                                        ?>
                                        <h4 class="mb-4">Features</h4>
                                        @for($i=0; $i<count($facilities); $i++)
                                            <span class="badge badge-pill badge-primary text-uppercase mr-2 mb-2">{{ str_replace("_", " ", $facilities[$i]) }}</span>
                                        @endfor
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                        <p class="description">{{ $venue->address.", ".$venue->area->area_name.", ".$venue->city }}</p>
                                        <div>
                                             <agm-map [latitude]="lat" [longitude]="lng" style="height: 300px">
                                  <agm-marker [latitude]="lat" [longitude]="lng"></agm-marker>
                                  </agm-map>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                        <div class="pricing-list-container">
                                            <ul>
                                                @foreach($venue->prices as $price)
                                                    <li>
                                                        <h5>{{ ucfirst(preg_replace('/_/', ' ', $price->category_type)) }}</h5>
                                                        <span> {{ $price->price }}</span>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-4" role="tabpanel" aria-labelledby="tabs-icons-text-4-tab">
                                        <div class="row mb-4 list-img-wrap">
                                            <div class="col-md-2 list-img"><img class="img-fluid rounded-circle shadow-lg" src="assets/images/thumb-1.jpg" alt="image">
                                            </div>
                                            <div class="col-md-10">
                                                <h5 class="text-primary">Charlotte Ainsley</h5>
                                                <p>15 Minutes Ago</p>
                                                <p>Lorem Ipsum is simply dummy text of the pr make but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                                    recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                <button class="btn btn-sm btn-primary" type="button">Helpful?</button>
                                            </div>
                                        </div>
                                        <div class="row mb-4 list-img-wrap">
                                            <div class="col-md-2 list-img"><img class="img-fluid rounded-circle shadow-lg" src="assets/images/thumb-2.jpg" alt="image">
                                            </div>
                                            <div class="col-md-10">
                                                <h5 class="text-primary">Sophia Ainsworth</h5>
                                                <p>2 Days Ago</p>
                                                <p>Lorem Ipsum is simply dummy text of the pr make but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                                    recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                <button class="btn btn-sm btn-primary" type="button">Helpful?</button>
                                            </div>
                                        </div>
                                        <div class="row mb-4 list-img-wrap">
                                            <div class="col-md-2 list-img"><img class="img-fluid rounded-circle shadow-lg" src="assets/images/thumb-1.jpg" alt="image">
                                            </div>
                                            <div class="col-md-10">
                                                <h5 class="text-primary">Ava Acton</h5>
                                                <p>3 days Ago</p>
                                                <p>Lorem Ipsum is simply dummy text of the pr make but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more
                                                    recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                                <button class="btn btn-sm btn-primary" type="button">Helpful?</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sticky">
                        <!-- Book Now -->
                        <div class="boxed-widget booking-widget">
                            <div>
                                <div class="form-group focused">
                                    <div class="input-group">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="ni ni-calendar-grid-58"></i></span>
                                        </div>
                                        <input class="form-control" placeholder="Start date" type="text" value="06/18/2018">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <select class="form-control form-control-alternative custom-select" id="exampleFormControlSelect1">
                                        <option selected>Guest</option>
                                        <option value="1">One</option>
                                        <option value="2">Two</option>
                                        <option value="3">Three</option>
                                        <option value="4">Four</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Book Now -->
                            <a href="#" class="btn btn-1 btn-primary d-block">Book Now</a>
                        </div>
                        <!-- Book Now / End -->
                        <div class="boxed-widget bg-secondary mt-4 text-center p-4">
                            <h4 class="mb-4">Key People</h4>
                            <div class="mb-3">
                                <div class="mb-2">
                                    <img class="img-fluid rounded-circle shadow-lg" width="80" height="80" src="assets/images/thumb-1.jpg" alt="image">
                                </div>
                                <div class="">
                                    <h5 class="text-primary">Victoria Benson</h5>
                                </div>
                            </div>
                            <ul class="listing-details-sidebar">
                                <li><i class="fa fa-phone"></i> (123) 123-456</li>
                                <li><i class="fa fa-external-link"></i> http://example.com</li>
                                <li><i class="fa fa-envelope-o"></i>victoria@victoria.com</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
