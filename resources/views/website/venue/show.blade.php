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
                            <p>Dingloy Place, Remington, London, EC1V 8BP, United Kingdom</p>
                            <span class="badge badge-pill badge-info text-uppercase mr-2">Dinner</span>
                            <span class="badge badge-pill badge-info text-uppercase mr-2">Hotel</span>
                            <span class="badge badge-pill badge-info text-uppercase">Sea Foods</span>
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
                                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat rerum doloribus repudiandae nulla odit, omnis ex, a assumenda fugiat quasi neque necessitatibus fugit maiores quis. Quo dolor minus pariatur natus!</p>
                                        <p class="description">Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat rerum doloribus repudiandae nulla odit, omnis ex, a assumenda fugiat quasi neque necessitatibus fugit maiores quis. Quo dolor minus pariatur natus! Lorem ipsum dolor sit amet
                                            consectetur adipisicing elit. Blanditiis quis laudantium est pariatur, harum laboriosam odit delectus vitae minima dolorem ipsam repudiandae sunt non. Dolorem adipisci voluptates doloribus voluptatum nihil.
                                        </p>
                                        <h4 class="mb-4">
                                            Contact Info
                                        </h4>
                                        <div class="row mb-5">
                                            <div class="col-lg-4">
                                                <div class="detail-list mb-2">
                                                    <div class="detail-list-label mb-1"><i aria-hidden="true" class="fa fa-phone mr-2"></i>
                                                        <small class="text-uppercase font-weight-bold">Reception.</small>
                                                    </div>
                                                    <p class="m-0 text-small">+123 123 456 45</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="detail-list mb-2">
                                                    <div class="detail-list-label mb-1"><i aria-hidden="true" class="fa fa-phone mr-2"></i>
                                                        <small class="text-uppercase font-weight-bold">For Complaints.</small>
                                                    </div>
                                                    <p class="m-0 text-small">+123 123 456 45</p>
                                                </div>
                                            </div>
                                            <div class="col-lg-4">
                                                <div class="detail-list mb-2">
                                                    <div class="detail-list-label mb-1"><i aria-hidden="true" class="fa fa-phone mr-2"></i><small class="text-uppercase font-weight-bold">Support.</small>
                                                    </div>
                                                    <p class="m-0 text-small">+123 123 456 45</p>
                                                </div>
                                            </div>
                                        </div>
                                        <h4 class="mb-4">Features</h4>
                                        <span class="badge badge-pill badge-primary text-uppercase mr-2 mb-2">Swimming pool</span>
                                        <span class="badge badge-pill badge-primary text-uppercase mr-2 mb-2"> Free WiFi Internet Access Included</span>
                                        <span class="badge badge-pill badge-primary text-uppercase mr-2 mb-2"> Free Parking</span>
                                        <span class="badge badge-pill badge-primary text-uppercase mr-2 mb-2">Swimmingpool Outdoor</span>
                                        <span class="badge badge-pill badge-primary text-uppercase mr-2 mb-2">Family Rooms</span>
                                        <span class="badge badge-pill badge-primary text-uppercase mr-2 mb-2">Non Smoking Rooms</span>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-2" role="tabpanel" aria-labelledby="tabs-icons-text-2-tab">
                                        <p class="description">Cosby sweater eu banh mi, qui irure terry richardson ex squid. Aliquip placeat salvia cillum iphone. Seitan aliquip quis cardigan american apparel, butcher voluptate nisi qui.</p>
                                        <div>
                                            <!-- <agm-map [latitude]="lat" [longitude]="lng" style="height: 300px">
                                  <agm-marker [latitude]="lat" [longitude]="lng"></agm-marker>
                                  </agm-map> -->
                                        </div>
                                    </div>
                                    <div class="tab-pane fade" id="tabs-icons-text-3" role="tabpanel" aria-labelledby="tabs-icons-text-3-tab">
                                        <div class="pricing-list-container">
                                            <ul>
                                                <li>
                                                    <h5>Classic Burger</h5>
                                                    <p>Beef, salads, mayonnaise, spicey relish, cheese</p>
                                                    <span>$6</span>
                                                </li>
                                                <li>
                                                    <h5>Cheddar Burger</h5>
                                                    <p>Cheddar cheese, lettuce, tomato, onion, dill pickles</p>
                                                    <span>$6</span>
                                                </li>
                                                <li>
                                                    <h5>Veggie Burger</h5>
                                                    <p>Panko crumbed and fried, grilled peppers and mushroom</p>
                                                    <span>$6</span>
                                                </li>
                                                <li>
                                                    <h5>Chicken Burger</h5>
                                                    <p>Cheese, chicken fillet, avocado, bacon, tomatoes, basil</p>
                                                    <span>$6</span>
                                                </li>
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