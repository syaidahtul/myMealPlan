<x-app-layout>
    <div class="container-fluid">
        <div class="layout-specing">
            <div class="row">
                <div class="mt-4 col-12">
                    <form action="{{ route('ingredients.store') }}" method="post">
                        @csrf
                        @include('ingredients.form', [
                            'title' => 'Create Event',
                            'submitButton' => 'Store',
                        ])
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
