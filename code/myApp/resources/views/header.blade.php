
        <div class="header-top">
            <div class="logo">
            <img src="{{ asset('storage/images/top view.png') }}" class="top-view" alt="Background Image" width="100%">
        </div>
            <div class="menu">
                <div class="row">
                    
                    <div class="col-4 d-flex justify-content-center">
                        <img src="{{ asset('storage/images/logo.png') }}" alt="Logo" class="logo" width="100px" height="100px">
                    </div>

                    <div class="col-6 d-flex justify-content-center">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Your menu items go here -->
                            <a class="nav-link text-success p-2" href="{{ route('home') }}">Home</a>
                            <a class="nav-link text-success p-2" href="{{ route('about') }}">About Us</a>
                            <a class="nav-link text-success p-2" href="{{ route('product') }}">Product</a>
                            <a class="nav-link text-success p-2" href="{{ route('contact') }}">Contact</a>
                        </nav>
                    </div>
                   
                <div class="col-2">
                    <div class="user-links">
                        <nav class="navbar navbar-expand-lg navbar-light">
                            <!-- Your user links go here -->
                            <a href="{{route('login')}}"><i class="fa fa-sign-in text-success text-success p-3"></i></a>
                            <a href="{{route('cart')}}"><i class="fa fa-shopping-cart text-success p-3"></i></a>
                            <a href="{{route('wishlist')}}"><i class="fa fa-heart text-success p-3"></i></a>
                        </nav>
                    </div>
                </div>
            </div>

</div>
    