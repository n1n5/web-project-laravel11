<x-head>
    <x-navbar>
        <div class="container py-4">
            <div class="row">
                <div class="col-3">
                    @include('includes.sidebar')
                </div>
                <div class="col-9">
                    @include('includes.success')
                    <hr>
                    <div class="mt-3">
                        @include('includes.story_card')
                    </div>
                </div>
            </div>
        </div>
    </x-navbar>
</x-head>
