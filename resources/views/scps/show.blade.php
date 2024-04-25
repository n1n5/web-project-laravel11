<x-head>
    <x-navbar>
        <div class="container py-4">
            <div class="row">
                <div class="col-3">
                    @include('includes.sidebar')
                </div>
                <div class="col-6">
                    <h2>{{ $scp->item }}</h2>
                    <hr>
                    <h4>Special Containment Procedures</h4>
                    <p>{{ $scp->containment }}</p>
                    <h4>Description</h4>
                    <p>{{ $scp->description }}</p>
                </div>
                <div class="col-3">
                    <div class="card mt-3">
                        <div class="card-body text-center">
                            <div class="hstack gap-2 mb-3">
                                <img src="{{ $scp->image }}" class="mx-auto" alt="{{ $scp->item }}">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </x-navbar>
</x-head>
