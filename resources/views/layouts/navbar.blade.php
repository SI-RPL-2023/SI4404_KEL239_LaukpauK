<nav class="navbar sticky-top navbar-expand-lg navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <div class="container-fluid text-center">
        <div class="col-4 d-flex justify-content-center">
            <a class="navbar-brand" href="index.php">
                <img src="{{ asset('assets/user/images/landingPage/logo.png') }}" alt="Bootstrap" width="" height="50">
            </a>
        </div>
        <div class="col-4 d-flex justify-content-center">
            <a href="index.html" class="navbar-brand d-block d-lg-none">
                <h2 class="m-0"><b>LaukpauK</b></h2>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto mx-lg-auto py-0">
                    <a href="{{ url('/') }}" class="nav-item nav-link active"><b>Home</b></a>
                    @auth
                        <a href="" class="nav-item nav-link"><b>Articles</b></a>
                        <a href="" class="nav-item nav-link"><b>Recipe</b></a>
                    @endauth
                    <a href="{{ url('listProduct') }}" class="nav-item nav-link"><b>Products</b></a>
                    <a href="{{ url('contactUs') }}" class="nav-item nav-link"><b>Contact</b></a>
                    @auth
                        <a href="" class="nav-item nav-link"><b>Orders</b></a>
                    @endauth
                </div>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-center">
            @auth
            <div class="col-4">
                <div class="nav-item dropdown">
                    <a class="navbar-brand" href="">
                        <img src="{{ asset('assets/user/images/landingPage/cart.png') }}" alt="Bootstrap" width="" height="25">
                    </a>
                    <button class="btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('assets/user/images/landingPage/user.png') }}" alt="Bootstrap" width="" height="27">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="" class="dropdown-item">Profile</a></li>
                        <form action="/logout" method="post">
                            @csrf
                            <button type="submit" class="dropdown-item">Logout</button>
                        </form>
                    </ul>
                </div>
            </div>
            @else
            <div class="navbar-nav ms-auto mx-lg-auto py-0">
                <a href="{{ route('login') }}" class="nav-item nav-link"><b>Login</b></a>
            </div>
            @endauth
        </div>

    </div>
</nav>