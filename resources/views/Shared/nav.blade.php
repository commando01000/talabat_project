<nav class="navbar p-2 navbar-expand-sm navbar-light bg-light">
    <div class="container w-50">
        <a class="navbar-brand" href="#"><img class="object-fit-cover" style="width: 120px; height: 50px"
                src="{{ asset('images/Logo.jpg') }}" alt="logo"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                <li class="nav-item">
                    <a class="nav-link text-white" href="#" aria-current="page">Donations
                        <span class="visually-hidden"></span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white text-white" href="#">Offers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="#">Become a partner</a>
                </li>
                <li class="nav-item">
                    <a name="" id="" class="btn btn-transparent btn-outline-light" href="#"
                        role="button">Login</a>

                </li>
                {{-- <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="dropdownId" data-bs-toggle="dropdown"
                        aria-haspopup="true" aria-expanded="false">Dropdown</a>
                    <div class="dropdown-menu" aria-labelledby="dropdownId">
                        <a class="dropdown-item" href="#">Action 1</a>
                        <a class="dropdown-item" href="#">Action 2</a>
                    </div>
                </li> --}}
            </ul>
        </div>
    </div>
</nav>
