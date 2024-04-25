<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:150px" class="me-3 avatar-sm rounded-circle" src="{{ $user->getImageURL() }}"
                    alt="{{ $user->name }}">
                <div>
                    <h3 class="card-title mb-0"> {{ $user->name }} </h3>
                    <span class="fs-6 text-muted"> Class-D </span>
                </div>
            </div>
            @if (Auth::id() === $user->id)
                <div>
                    <a href="{{ route('users.edit', $user->id) }}"> Edit </a>
                </div>
            @endif
        </div>
        <div class="px-2 mt-4">
            <h5 class="fs-5"> Bio: </h5>
            <p class="fs-6 fw-light"> {{ $user->bio }} </p>
            <div class="d-flex justify-content-start">
                <span class="fas fa-book me-1 mx-1"> {{ $user->stories()->count() }} </span>
                <span class="fas fa-comment me-1 mx-1"> {{ $user->comments()->count() }} </span>
            </div>
        </div>
    </div>
</div>
