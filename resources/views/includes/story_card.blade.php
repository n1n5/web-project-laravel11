<div class="card">
    <div class="px-3 pt-4 pb-2">
        <div class="d-flex align-items-center justify-content-between">
            <div class="d-flex align-items-center">
                <img style="width:50px" class="me-2 avatar-sm rounded-circle" src="{{ $story->user->getImageURL() }}"
                    alt="{{ $story->user->name }}">
                <div>
                    <h5 class="card-title mb-0"><a
                            href="{{ route('users.show', $story->user->id) }}">{{ $story->user->name }}</a></h5>
                </div>
            </div>
            <div>
                <form action="{{ route('stories.destroy', $story->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <a class="mx-1" href="{{ route('stories.show', $story->id) }}"> View </a>
                    @if (auth()->user()->id === $story->user_id)
                        <a class="mx-1" href="{{ route('stories.edit', $story->id) }}"> Edit </a>
                        <button class="ms-1 btn btn-danger btn-sm">Delete</button>
                    @endif
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
        @if ($editing ?? false)
            <form action="{{ route('stories.update', $story->id) }}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <textarea name="content" class="form-control" id="content" rows="3">{{ $story->content }}</textarea>
                    @error('content')
                        <span class="d-block fs-6 text-danger mt-2">{{ $message }}</span>
                    @enderror
                </div>
                <div class="">
                    <button type="submit" class="btn btn-dark mb-2 btn-sm"> Update </button>
                </div>
            </form>
        @else
            <p class="fs-6 fw-light text-muted">
                {{ $story->content }}
            </p>
        @endif
        <div class="d-flex justify-content-between">
            <div>
                <span class="fs-6 fw-light text-muted"> <span class="fas fa-clock"> </span>
                    {{ $story->created_at }} </span>
            </div>
        </div>
        @include('includes.comments')
    </div>
</div>
