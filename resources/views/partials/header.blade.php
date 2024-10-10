<header class="navbar navbar-expand-lg navbar-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="{{ route('welcome') }}">
            <span class="logo-text"><span class="logo-highlight">Guido</span>Piano</span>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('welcome') }}">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('cars.index') }}">Auto</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('brands.index') }}">Concessionarie</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        Menu
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">Azione</a></li>
                        <li><a class="dropdown-item" href="#">Un'altra azione</a></li>
                        <li>
                            <hr class="dropdown-divider">
                        </li>
                        <li><a class="dropdown-item" href="#">Qualcos'altro qui</a></li>
                    </ul>
                </li>
            </ul>
            <form class="d-flex">
                <input class="form-control me-2" type="search" placeholder="Cerca" aria-label="Cerca">
                <button class="btn btn-outline-light" type="submit">Cerca</button>
            </form>
            <div class="d-flex align-items-center ms-3">
                <a href="#" class="btn btn-outline-light me-3">Accedi</a>
                <img src="https://flagcdn.com/16x12/it.png" alt="Bandiera Italiana" class="me-2">
            </div>
        </div>
    </div>
</header>
