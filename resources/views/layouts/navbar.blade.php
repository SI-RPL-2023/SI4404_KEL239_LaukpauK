<nav class="navbar sticky-top navbar-expand-lg navbar-dark shadow-sm py-3 py-lg-0 px-3 px-lg-0">
    <div class="container-fluid text-center">
        <div class="col-4 d-flex justify-content-center">
            <a class="navbar-brand" href="{{ route('landingPage') }}">
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
                    <a href="{{ route('landingPage') }}" class="nav-item nav-link {{ set_active(['/', 'landingPage']) }}"><b>Home</b></a>
                    @auth
                        <a href="{{ route('artikel') }}" class="nav-item nav-link {{ set_active('artikel') }}"><b>Articles</b></a>
                        <a href="{{ route('resep') }}" class="nav-item nav-link {{ set_active('resep') }}"><b>Recipe</b></a>
                    @endauth
                    <a href="{{ route('listProductView') }}" class="nav-item nav-link {{ set_active(['listProduct', 'listProductView']) }}"><b>Products</b></a>
                    <a href="{{ route('contactUs') }}" class="nav-item nav-link {{ set_active('contactUs') }}"><b>Contact</b></a>
                    @auth
                        <a href="{{ route('orders') }}" class="nav-item nav-link {{ set_active('orders') }}"><b>Orders</b></a>
                    @endauth
                </div>
            </div>
        </div>
        <div class="col-4 d-flex justify-content-center">
            @auth
            <div class="col-4">
                <div class="nav-item dropdown">
                    <a class="navbar-brand" href="">
                        <img src="{{ asset('assets/user/images/landingPage/cart.png') }}" alt="Cart Icon" width="" height="25">
                    </a>
                    <button class="imgratio btn dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="{{ asset('storage/'.auth()->user()->foto_user) }}" class="rounded-circle ratio ratio-1x1" alt="Foto User" width="" height="40">
                    </button>
                    <ul class="dropdown-menu">
                        <li><a href="{{ route('profile', ['id' => auth()->user()->id]) }}" class="dropdown-item">Profile</a></li>
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