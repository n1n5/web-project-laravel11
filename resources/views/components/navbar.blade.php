<x-head>
    <nav class="navbar navbar-expand-lg bg-light border-bottom border-bottom-dark ticky-top bg-body-tertiary"
        data-bs-theme="light">
        <div class="container">
            <a class="navbar-brand fw-light" href="{{ route('home') }}">
                <img src="https://upload.wikimedia.org/wikipedia/commons/e/ec/SCP_Foundation_%28emblem%29.svg"
                    width="90" height="90" alt="SCP Logo"><span class="fas me-1"></span>SCP Foundation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="{{ Route::is('profile') ? 'active' : '' }} nav-link"
                            href="{{ route('profile') }}">{{ Auth::user()->name }}</a>
                    </li>
                    <li class="nav-item">
                        <form action="{{ route('logout') }}" method="post">
                            @csrf
                            <button class="btn btn-danger btn-sm" type="submit">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    {{ $slot }}
</x-head>
