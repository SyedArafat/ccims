<header class="header-global">
    <nav id="navbar-main" class="navbar navbar-main fixed-top navbar-expand-lg navbar-transparent navbar-light headroom">
        <div class="container">
            <div class="logo">
                <a><img src="assets/images/logo-white.png" class="img-fluid" alt=""></a>
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="navbar-collapse collapse" id="navbar_global">
                <div class="navbar-collapse-header">
                    <div class="row">
                        <div class="col-6 collapse-brand">
                            <div class="logo">
                                <a><img class="img-fluid" src="assets/images/logo-white.png" width="164" height="25" alt=""></a>
                            </div>
                        </div>
                        <div class="col-6 collapse-close">
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar_global" aria-controls="navbar_global" aria-expanded="false" aria-label="Toggle navigation">
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="navbar-nav navbar-nav-hover align-items-lg-center ml-auto">
                    <nav id="navigation" class="style-1">
                        <ul id="responsive">
                            <li>
                                <a class="current" href="#">Home</a>
                                <ul>
                                    <li><a href="index.html">Home Version 1</a></li>
                                    <li><a href="index-2.html">Home Version 2</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">Listings</a>
                                <ul>
                                    <li>
                                        <a href="#">List Layout</a>
                                        <ul>
                                            <li><a href="listings-list-with-sidebar.html">With Sidebar</a></li>
                                            <li><a href="listings-list-full-width.html">Full Width</a></li>
                                            <li><a href="listings-list-full-width-map.html">Full Width + Map</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Grid Layout</a>
                                        <ul>
                                            <li><a href="listings-grid-with-sidebar.html">With Sidebar</a></li>
                                            <li><a href="listings-grid-full-width.html">Full Width</a></li>
                                            <li><a href="listings-grid-full-width-map.html">Full Width + Map</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Half Screen Map</a>
                                        <ul>
                                            <li><a href="listings-half-screen-map-list.html">Layout 1</a></li>
                                            <li><a href="listings-half-screen-map-grid.html">Layout 2</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">Detail</a>
                                        <ul>
                                            <li><a href="listings-detail-one.html">Version 1</a></li>
                                            <li><a href="listings-detail-two.html">Version 2</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </li>
                            <li>
                                <a href="#">User Panel</a>
                                <ul>
                                    <li><a href="dashboard.html">Dashboard</a></li>
                                    <li><a href="dashboard-messages.html">Messages</a></li>
                                    <li><a href="dashboard-bookings.html">Bookings</a></li>
                                    <li><a href="dashboard-reviews.html">Reviews</a></li>
                                    <li><a href="dashboard-bookmarks.html">Bookmarks</a></li>
                                    <li><a href="dashboard-listing.html">My Listings</a></li>
                                    <li><a href="dashboard-add-listing.html">Add List</a></li>
                                    <li><a href="dashboard-profile.html">Profile</a></li>
                                </ul>
                            </li>
                            <li>
                                <a href=" {{ route('register') }} ">Register</a>
                            </li>
                            <li>
                                <a href="{{route('login')}}">Login</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="header-widget">
                        <a class="btn btn-neutral btn-icon btn-radius" href="add-listing.html">Add Listing <i class="fa fa-plus"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </nav>
</header>
