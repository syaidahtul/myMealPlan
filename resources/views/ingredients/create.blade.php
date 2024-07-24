<x-dashboard-layout>
    <div class="container-fluid">
        <div class="layout-specing">
            <div class="row">
                <div class="col-12 mt-4">
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
</x-dashboard-layout>
