<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Comics</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link" aria-current="page" href="{{route('createComic')}}">Inserisci il tuo fumetto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Ancora non lo so</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Hai già un account?
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Login<a class="dropdown-item" href="#">Register</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="#"><button type="submit" class="btn btn-danger">Logout</button></a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
</nav>