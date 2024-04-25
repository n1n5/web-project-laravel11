<x-head>
    <x-navbar>
        <div class="container py-4">
            <div class="row">
                <div class="col-3">
                    @include('includes.sidebar')
                </div>
                <div class="col-9">
                    @include('includes.success')
                    @include('includes.story_submit')
                    <hr>
                    @forelse ($stories as $story)
                        <div class="mt-3">
                            @include('includes.story_card')
                        </div>
                    @empty
                        <p class="text-center mt-4">No results found.</p>
                    @endforelse
                    <div class="mt-3">{{ $stories->withQueryString()->links() }}</div>
                </div>
            </div>
        </div>
    </x-navbar>
</x-head>
