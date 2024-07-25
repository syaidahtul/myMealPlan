<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Ingredients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">

            <form action="{{ route('ingredients.store') }}" method="POST">
                @csrf
                <div class="card">
                    <x-card-header>{{ __('Create New Ingredients') }}</x-card-header>

                    <div class="card-body">
                        <div class="row px-4 py-2">
                            <div class="col-sm-6">
                                <label for="name" class="form-label">{{ __('label.name') }}</label>
                                <input type="text" name="name" id="type"
                                    class="text-uppercase @error('name') is-invalid alert-danger @enderror mandatory rounded-md"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <x-input-error :message="$message" />
                                @enderror
                            </div>
                        </div>

                        <div class="row px-4 py-2">
                            <div class="col-sm-2">
                                <label for="object" class="form-label">{{ __('label.votCodeObject') }}</label>
                                <input type="number" name="object" id="object"
                                    class="@error('object') is-invalid alert-danger @enderror mandatory rounded-md"
                                    value="{{ old('object') }}">
                                @error('object')
                                    <x-input-error :message="$message" />
                                @enderror
                            </div>
                        </div>

                        <div class="row px-4 py-2">

                            <div class="col-sm-1">
                                <label for="sort_order" class="form-label">{{ __('label.sortOrder') }}</label>
                                <input type="number" name="sort_order" id="sort_order"
                                    class="@error('sort_order') is-invalid alert-danger @enderror mandatory rounded-md"
                                    value="">
                                @error('sort_order')
                                    <x-input-error :message="$message" />
                                @enderror
                            </div>
                        </div>

                        <div class="row px-4 py-2">
                            <div class="col-sm-12">
                                <label for="name" class="form-label">{{ __('label.expensesName') }}</label>
                                <input type="text" name="name" id="name"
                                    class="col-sm-12 @error('name') is-invalid alert-danger @enderror mandatory rounded-md"
                                    value="{{ old('name') }}">
                                @error('name')
                                    <x-input-error :message="$message" />
                                @enderror
                            </div>
                        </div>

                        <div class="row px-4 py-2">
                            <div class="col-sm-6">
                                <label for="circular_title" class="form-label">{{ __('label.expensesName') }}</label>
                                <input type="text" name="circular_title" id="circular_title"
                                    class="col-sm-12 @error('circular_title') is-invalid alert-danger @enderror rounded-md"
                                    value="{{ old('circular_title') }}">
                                @error('circular_title')
                                    <x-input-error :message="$message" />
                                @enderror
                            </div>
                        </div>

                        <div class="row px-4 py-2">
                            <div class="col-sm-12">
                                <label for="remark" class="form-label">{{ __('label.remark') }}</label>
                                <input type="text" name="remark" id="remark"
                                    class="col-sm-12 @error('remark') is-invalid alert-danger @enderror mandatory rounded-md"
                                    value="{{ old('remark') }}">
                                @error('remark')
                                    <x-input-error :message="$message" />
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="card-footer p-3">
                        <div class="text-end">
                            <a href="{{ route('ingredients.index') }}"
                                class="btn fw-bold rounded-3 text-capitalize px-4 shadow">Back
                            </a>
                            <x-button-primary type="submit">Save</x-button-primary>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</x-app-layout>
