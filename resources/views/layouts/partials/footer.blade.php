<div id="footer" class="sticky-footer bg-primary">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6">
                <a href="{{ route('home') }}"><h3 style="color: wheat">CCIMS</h3></a>
                <div class="text-widget text-white">
                    <span class="text-white">12345 Little Lonsdale St, Dhaka</span> <br> Phone: <span class="text-white">(123) 123-456 </span><br> E-Mail:
                    <span class="text-white"> <a href="#" class="text-white">office@email.com</a> </span><br>
                </div>
                <div class="mt-4">
                    <a target="_blank" href="https://twitter.com/" class="btn btn-neutral btn-icon-only btn-round btn-lg" data-toggle="tooltip" data-original-title="Follow us">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a target="_blank" href="https://www.facebook.com/" class="btn btn-neutral btn-icon-only btn-round btn-lg" data-toggle="tooltip" data-original-title="Like us">
                        <i class="fa fa-facebook-square"></i>
                    </a>
                    <a target="_blank" href="https://dribbble.com/" class="btn btn-neutral btn-icon-only  btn-lg btn-round" data-toggle="tooltip" data-original-title="Follow us">
                        <i class="fa fa-dribbble"></i>
                    </a>
                    <a target="_blank" href="https://github.com/" class="btn btn-neutral btn-icon-only btn-round btn-lg" data-toggle="tooltip" data-original-title="Star on Github">
                        <i class="fa fa-github"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-4 col-sm-6 ">
                <ul class="footer-links">
                    <li><a class="text-white" href="{{ route('login') }}">Login</a></li>
                    <li><a class="text-white" href="{{ route('register') }}">Sign Up</a></li>
                    <li><a class="text-white" href="{{ route('user.profile') }}">My Profile</a></li>
                </ul>
            </div>
            <div class="col-md-3  col-sm-12">
                <ul class="footer-links">
                    <li><a class="text-white" href="{{ route('venue.index_list') }}">Venue List</a></li>
                    <li><a class="text-white" href="{{ route('venue.index_list') }}">Booking</a></li>
                </ul>
            </div>
        </div>
        <!-- Copyright -->
        <div class="row">
            <div class="col-md-12">
                <div class="copyrights text-white">© Community Center Information Management System. All Rights Reserved.</div>
            </div>
        </div>
    </div>
</div>
