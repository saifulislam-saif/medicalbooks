<header id="menu_part">
    <nav class="navbar main_menu main_menu-fixed navbar-expand-lg p-0">
        <div class="container px-0">
            <a class="navbar-brand" href="{{ route('home') }}" action="{{ route('home') }}">
                <img class="" src="{{ asset('assets/img/logo_white.png') }}" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fa fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto m-sm-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}" action="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Books <span>(5)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>

                <!--Search option for books-->
                <div class="ml-auto user__part">
                    <div class="profile_menu">
                        <a class="profile" href="{{ url('myaccount') }}" action="{{ url('myaccount') }}">
                            <i class="fa fa-user-circle"></i> <span>Profile</span>
                        </a>
                        <a class="log__out" href="" title="Sign Out" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Log Out</a>
                        <form id="logout-form" action="{{ url('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </div>
                </div>
                <div class="cart_button">
                    <a class="nav-link cart_button " href="# ">
                        <span>10</span>
                        <img src="{{ asset('assets/img/card.png') }}" alt="cart">
                    </a>
                </div>
            </div>
        </div>
    </nav>
</header>
