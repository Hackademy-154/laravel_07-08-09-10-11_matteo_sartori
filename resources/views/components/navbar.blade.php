<nav class="navbar navbar-expand-lg header">
    <div class="container-fluid my-2 px-0">
        <a class="navbar-brand color_logo ms-2 ms-md-2 ms-lg-0" href="{{ route('home') }}">NETFILMS</a>
        <button class="navbar-toggler me-2 me-md-4 me-lg-4" style="background-color: #e50914db;" type="button"
            data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
            aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse my-1 px-3 " id="navbarSupportedContent">
            <div class="navbar-nav  col-6 order-last order-md-first d-flex">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0  ">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Serie TV</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('filmIndex') }}">Film</a>
                    </li>
                    @auth
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('revisorIndex') }}">Revisore</a>
                        </li>
                    @endauth
                </ul>
            </div>
            <div class=" navbar-nav col-6 order-first order-md-last d-flex justify-content-end">
                <ul class="navbar-nav  mb-2 mb-lg-0  ">
                    <li class="nav-item">
                        <div class="btn-group dropstart d-flex justify-content-start ">
                            <button type="button" class="btn btn-secondary dropdown-toggle btn-user "
                                data-bs-toggle="dropdown" aria-expanded="false">
                            </button>
                            <ul class="dropdown-menu  py-1 ps-2 mt-0">
                                @guest
                                    <li class="nav-item">
                                        <a class="nav-link  pt-1 pb-0" href="{{ route('faq') }}">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link pt-1 pb-0" href="{{ route('login') }}">Contattaci</a>
                                    </li>
                                    <hr class="my-2" style="width:90%">
                                    <li class="nav-item">
                                        <a class="nav-link  py-1" href="{{ route('login') }}">Login</a>
                                    </li>
                                @endguest
                                @auth
                                    <li class="nav-item">
                                        <a class="nav-link  pt-1 pb-0" href="{{ route('profile') }}">Profilo</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link  pt-1 pb-0" href="{{ route('faq') }}">FAQ</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link pt-1 pb-0" href="{{ route('login') }}">Contattaci</a>
                                    </li>
                                    <hr class="my-2" style="width:90%">
                                    <div style="width:90%"
                                        class="nav-item d-flex justify-content-start align-items-center text-start">
                                        <form action="{{ route('logout') }}" method="POST">
                                            @csrf
                                            <button class="nav-link  mb-1" type="submit">Logout</button>
                                        </form>
                                    </div>
                                @endauth
                            </ul>
                        </div>
                    </li>
                </ul>
            </div>

        </div>
    </div>
</nav>
