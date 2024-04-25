<div class="card overflow-hidden">
    <div class="card-body pt-3">
        <ul class="nav nav-link-secondary flex-column fw-bold gap-2">
            <li class="nav-item">
                <a class="{{ Route::is('dashboard') ? 'text-white bg-primary' : '' }} nav-link"
                    href="{{ route('dashboard') }}">
                    <span>Stories</span></a>
            </li>
            <li class="nav-item">
                <a class="{{ Route::is('administration') ? 'text-white bg-primary' : '' }} nav-link"
                    href="{{ route('administration') }}">
                    <span>Administration</span></a>
            </li>
            <li class="nav-item">
                <a class="{{ Route::is('founder') ? 'text-white bg-primary' : '' }} nav-link"
                    href="{{ route('founder') }}">
                    <span>The Founder</span></a>
            </li>
        </ul>
    </div>
</div>
