<nav class="navbar p-2 navbar-expand-sm navbar-light bg-light">
    <div class="container w-50">
        <a class="navbar-brand" href="/"><img class="object-fit-cover" style="width: 120px; height: 50px"
                src="{{ asset('images/Logo-removebg-preview.png') }}" alt="logo"></a>
        <button class="navbar-toggler d-lg-none" type="button" data-bs-toggle="collapse"
            data-bs-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavId">
            <ul class="navbar-nav ms-auto mt-2 mt-lg-0">
                
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('about-us') }}">About Us</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('restaurants.create') }}">Become a partner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white" href="{{ route('drivers.create') }}">Become a driver</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
