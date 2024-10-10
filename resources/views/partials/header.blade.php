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
            </ul>
            <form class="d-flex">
                <input class="form-control me-1" type="search" placeholder="Cerca" aria-label="Cerca">
                <button class="btn btn-outline-light" type="submit">Cerca</button>
            </form>
            <div class="d-flex align-items-center ms-2">
                <a href="#" class="btn btn-outline-light">Accedi</a>
                <img src="https://flagcdn.com/16x12/it.png" alt="Bandiera Italiana" class="ms-2">
            </div>
        </div>
    </div>
</header>
