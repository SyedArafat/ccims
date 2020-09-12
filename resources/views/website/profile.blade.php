@extends('layouts.website')
@section('title', 'CCIMS')
@section('body_content')
    <div class="main-wrapper">
        <!--Title Bar -->
        <div id="titlebar" class="gradient">
            <div class="title-bar-inner">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <h2>My Profile</h2>
                            <span>Explore the best places nearby</span>
                            <!-- Breadcrumbs -->
                            <nav id="breadcrumbs">
                                <ul>
                                    <li><a href="{{ route('home') }}">Home</a></li>
                                    <li>Profile</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="title-overlay"></div>
        </div>
        <div id="content">
            <div class="container">
                <div class="profile-page">
                    <div class="card card-profile shadow">
                        <div class="px-4">
                            <div class="row justify-content-center">
                                <div class="col-lg-3 order-lg-2">
                                    <div class="card-profile-image">
                                        <a href="#">
                                            <img src="assets/images/thumb-3.jpg" class="rounded-circle" alt="image">
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-4 order-lg-3 text-lg-right align-self-lg-center">
                                    <div class="card-profile-actions py-4 mt-lg-0">
                                        <a href="#" class="btn btn-sm btn-info mr-4">Connect</a>
                                        <a href="#" class="btn btn-sm btn-default float-right">Message</a>
                                    </div>
                                </div>
                                <div class="col-lg-4 order-lg-1">
                                    <div class="card-profile-stats d-flex justify-content-center">
                                        <div>
                                            <span class="heading">22</span>
                                            <span class="description">Friends</span>
                                        </div>
                                        <div>
                                            <span class="heading">10</span>
                                            <span class="description">Photos</span>
                                        </div>
                                        <div>
                                            <span class="heading">89</span>
                                            <span class="description">Comments</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center mt-5">
                                <h3> {{ $user->name }}
                                    <span class="font-weight-light">, 27</span>
                                </h3>
                                <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i> {{ $user->email }}</div>
                                <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i> {{ $user->mobile }}</div>
                                <div class="h6 font-weight-300"><i class="ni location_pin mr-2"></i>Bucharest, Romania</div>
                                <div class="h6 mt-4"><i class="ni business_briefcase-24 mr-2"></i>Solution Manager - Oatman INC.</div>
                                <div><i class="ni education_hat mr-2"></i>University of Computer Science</div>
                            </div>
                            <div class="mt-5 py-5 border-top text-center">
                                <div class="row justify-content-center">
                                    <div class="col-lg-9">
                                        <p>An artist of considerable range, Ryan — the name taken by Melbourne-raised, Brooklyn-based Nick Murphy — writes, performs and records all of his own music, giving it a warm, intimate feel with a solid groove structure. An artist of considerable
                                            range.</p>
                                        <a href="JavaScript:Void(0)">Show more</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="px-4">
                            <h3>Lisa's Listings</h3>
                        </div>
                        <div class="row p-4">
                            <div class="col-md-6 mb-4">
                                <div class="listing-item-container list-layout">
                                    <a href="#" class="listing-item">
                                        <!-- Image -->
                                        <div class="listing-item-image">
                                            <img src="assets/images/most-img-1.jpg" alt="image">
                                        </div>
                                        <!-- Content -->
                                        <div class="listing-item-content">
                                            <span class="badge badge-pill list-banner badge-success text-uppercase">Open</span>
                                            <div class="listing-item-inner">
                                                <h3>Vendy Nors</h3>
                                                <span> <small> Noi Nwar, Givok Berlin </small> </span>
                                                <div class="mt-3"><span class="badge badge-pill badge-primary text-uppercase">Food</span></div>
                                            </div>
                                            <span class="round-pill like-banner d-block bg-primary"><i class="fa fa-heart-o"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="listing-item-container list-layout">
                                    <a href="#" class="listing-item">
                                        <!-- Image -->
                                        <div class="listing-item-image">
                                            <img src="assets/images/most-img-1.jpg" alt="image">
                                        </div>
                                        <!-- Content -->
                                        <div class="listing-item-content">
                                            <span class="badge badge-pill list-banner badge-success text-uppercase">Open</span>
                                            <div class="listing-item-inner">
                                                <h3>Vendy Nors</h3>
                                                <span> <small>Noi Nwar, Givok Berlin</small> </span>
                                                <div class="mt-3"><span class="badge badge-pill badge-primary text-uppercase">Food</span></div>
                                            </div>
                                            <span class="round-pill like-banner d-block bg-primary"><i class="fa fa-heart-o"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="listing-item-container list-layout">
                                    <a href="#" class="listing-item">
                                        <!-- Image -->
                                        <div class="listing-item-image">
                                            <img src="assets/images/most-img-1.jpg" alt="image">
                                        </div>
                                        <!-- Content -->
                                        <div class="listing-item-content">
                                            <span class="badge badge-pill list-banner badge-success text-uppercase">Open</span>
                                            <div class="listing-item-inner">
                                                <h3>Vendy Nors</h3>
                                                <span> <small> Noi Nwar, Givok Berlin</small></span>
                                                <div class="mt-3"><span class="badge badge-pill badge-primary text-uppercase">Food</span></div>
                                            </div>
                                            <span class="round-pill like-banner d-block bg-primary"><i class="fa fa-heart-o"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                                <div class="listing-item-container list-layout">
                                    <a href="#" class="listing-item">
                                        <!-- Image -->
                                        <div class="listing-item-image">
                                            <img src="assets/images/most-img-1.jpg" alt="image">
                                        </div>
                                        <!-- Content -->
                                        <div class="listing-item-content">
                                            <span class="badge badge-pill list-banner badge-success text-uppercase">Open</span>
                                            <div class="listing-item-inner">
                                                <h3>Vendy Nors</h3>
                                                <span> <small> Noi Nwar, Givok Berlin</small></span>
                                                <div class="mt-3"><span class="badge badge-pill badge-primary text-uppercase">Food</span></div>
                                            </div>
                                            <span class="round-pill like-banner d-block bg-primary"><i class="fa fa-heart-o"></i></span>
                                        </div>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-12 text-center my-4">
                                <a href="#">Show more</a>
                            </div>
                        </div>
                        <div class="pb-5">
                            <div class="px-4">
                                <h3>Reviews</h3>
                            </div>
                            <div class="row p-4 list-img-wrap">
                                <div class="col-md-2 list-img">
                                    <img src="assets/images/logo-1.png" class="img-fluid rounded-circle shadow-lg" alt="image">
                                </div>
                                <div class="col-md-10">
                                    <h5 class="text-primary">Cafe Bar</h5>
                                    <p>15 Minutes Ago</p>
                                    <p>Lorem Ipsum is simply dummy text of the pr make but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently
                                        with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                                    <button class="btn btn-sm btn-primary" type="button">Edit</button>
                                    <button class="btn btn-sm btn-danger" type="button">Remove</button>
                                </div>
                            </div>
                            <div class="row p-4 list-img-wrap">
                                <div class="col-md-2 list-img">
                                    <img src="assets/images/logo-2.png" class="img-fluid rounded-circle shadow-lg" alt="image">
                                </div>
                                <div class="col-md-10">
                                    <h5 class="text-primary">Kyoto Sushi Bar</h5>
                                    <p>1 Week Ago</p>
                                    <p>Quisque vel semper mauris, quis auctor magna. Morbi posuere risus non efficitur fringilla. Integer lacus arcu, imperdiet eget orci at, tempor euismod massa. Donec sit amet luctus leo, sit amet blandit sapien. Lorem ipsum dolor sit amet, consectetur
                                        adipiscing elit. Morbi maximus dui quis ex scelerisque iaculis</p>
                                    <button class="btn btn-sm btn-primary" type="button">Edit</button>
                                    <button class="btn btn-sm btn-danger" type="button">Remove</button>
                                </div>
                            </div>
                            <div class="row p-4 list-img-wrap">
                                <div class="col-md-2 list-img">
                                    <img src="assets/images/logo-3.png" class="img-fluid rounded-circle shadow-lg" alt="image">
                                </div>
                                <div class="col-md-10">
                                    <h5 class="text-primary">Burger Sack</h5>
                                    <p>21 March 18</p>
                                    <p>Maecenas mollis bibendum ipsum id vestibulum. Donec viverra sem eu diam euismod, quis congue nisi commodo. Maecenas volutpat sem justo, id cursus tellus placerat sit amet. Nunc porta orci ultrices purus congue placerat. Proin laoreet et odio
                                        dictum laoreet. Maecenas consectetur sem quis velit euismod hendrerit.</p>
                                    <button class="btn btn-sm btn-primary" type="button">Edit</button>
                                    <button class="btn btn-sm btn-danger" type="button">Remove</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
