<x-head>
    <x-navbar>
        <div class="container py-4">
            <div class="row">
                <div class="col-3">
                    @include('includes.sidebar')
                </div>
                <div class="col-6">
                    @include('includes.success')
                    <div class="mt-3">
                        <div class="container">
                            <div class="row">
                                @forelse ($scps as $scp)
                                    <div class="col">
                                        <a href="{{ route('scps.show', $scp->id) }}"><img class="my-3"
                                                src="{{ $scp->label }}" width="200" height="200"
                                                alt="SCP"></a>
                                    </div>
                                @empty
                                    <p class="text-center mt-4">No results found.</p>
                                @endforelse
                            </div>
                        </div>
                    </div>
                    <div class="mt-3">{{ $scps->withQueryString()->links() }}</div>
                </div>
                <div class="col-3">
                    @include('includes.searchbar')
                </div>
            </div>
        </div>
    </x-navbar>
</x-head>
