 <!--================Header Area =================-->
 <header class="header_area">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">
            <!-- Brand and toggle get grouped for better mobile display -->
            <a class="navbar-brand logo_h" href="{{ route('homepage')}}"><h3 style="font-weight: bold; color:black;">Graduation Grown</h3></a>
            
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
                <ul class="nav navbar-nav menu_nav ml-auto">
                    <li class="nav-item active"><a class="nav-link" href="{{ route('homepage')}}">Home</a></li> 
                    {{-- <li class="nav-item"><a class="nav-link" href="about.html">About us</a></li> --}}
                    <li class="nav-item"><a class="nav-link" href="{{ route('booking.records')}}">Booking Records</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('homepage')}}">Booking Contract</a></li>
                    @auth
                        <li class="nav-item"><a class="nav-link" href="{{ route('booking.list')}}">Booking List</a></li>
                        <li class="nav-item submenu dropdown">
                            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Grown</a>
                            <ul class="dropdown-menu">
                                <li class="nav-item"><a class="nav-link" href="blog.html">Create Gown</a></li>
                                <li class="nav-item"><a class="nav-link" href="blog-single.html">Gown Details</a></li>
                            </ul>
                        </li> 
                    @endauth
                    @guest
                        <!-- Add links for non-logged-in users here -->
                        <li class="nav-item"><a class="nav-link" href="login">Login</a></li>
                        <!-- Add more non-logged-in user links here -->
                    @endguest
                    {{-- <li class="nav-item"><a class="nav-link" href="elements.html">Elemests</a></li> --}}
                    {{-- <li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li> --}}
                </ul>
            </div>
            
        </nav>
    </div>
</header>
<!--================Header Area =================-->