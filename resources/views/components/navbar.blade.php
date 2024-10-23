<nav class="navbar navbar-expand-lg header">
    <div class="container-fluid my-2 px-0">
        <a class="navbar-brand color_logo ms-2 ms-md-2 ms-lg-0" href="{{ route('home') }}">NETFILMS</a>
        <button class="navbar-toggler me-2 me-md-2 me-lg-0" type="button" data-bs-toggle="collapse"
            data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse mt-1 px-3" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{ route('home') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Serie TV</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('index') }}">Film</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('create') }}">Inserisci</a>
                </li>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn-outline-success button-primary" type="submit"><i
                        class="bi bi-search fs-5"></i></button>
            </form>
        </div>
    </div>
</nav>
