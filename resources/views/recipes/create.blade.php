<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800 dark:text-gray-200">
            {{ __('Recipes') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl space-y-6 sm:px-6 lg:px-8">
            <h1>{{ __('Create Ingredient') }}</h1>
            <form action="{{ route('ingredients.store') }}" method="POST">
                @csrf
                <div class="card">
                    <x-card-header>Jenis Perbelanjaan Baru</x-card-header>

                    <div class="card-body">
                        <div class="row px-4 py-2">
                            <div class="col-sm-6">
                                <label for="type" class="form-label">{{ __('label.expensesType') }}</label>
                                <input type="text" name="type" id="type"
                                    class="form-control text-uppercase @error('type') is-invalid alert-danger @enderror mandatory"
                                    value="{{ old('type') }}">
                                @error('type')
                                    <x-input-error :message="$message" />
                                @enderror
                            </div>

                            <div class="col-sm-3">
                                <label for="country_category"
                                    class="form-label">{{ __('label.countryCategory') }}</label>
                                <select name="country_category" id="country_category"
                                    class="form-control @error('country_category') is-invalid alert-danger @enderror mandatory">
                                    <option value="DN" {{ old('country_category') === 'DN' ? 'selected' : '' }}>
                                        Dalam Negeri/Negara</option>
                                    <option value="LN" {{ old('country_category') === 'LN' ? 'selected' : '' }}>Luar
                                        Negeri (Luar Negara)</option>
                                </select>
                                @error('object')
                                    <x-input-error :message="$message" />
                                @enderror
                            </div>

                            <div class="col-sm-2">
                                <label for="object" class="form-label">{{ __('label.votCodeObject') }}</label>
                                <input type="number" name="object" id="object"
                                    class="form-control @error('object') is-invalid alert-danger @enderror mandatory"
                                    value="{{ old('object') }}">
                                @error('object')
                                    <x-input-error :message="$message" />
                                @enderror
                            </div>

                            <div class="col-sm-1">
                                <label for="sort_order" class="form-label">{{ __('label.sortOrder') }}</label>
                                <input type="number" name="sort_order" id="sort_order"
                                    class="form-control @error('sort_order') is-invalid alert-danger @enderror mandatory"
                                    value="{{ $sort_order ?: old('sort_order') }}">
                                @error('sort_order')
                                    <x-input-error :message="$message" />
                                @enderror
                            </div>
                        </div>

                        <div class="row px-4 py-2">
                            <div class="col-sm-12">
                                <label for="name" class="form-label">{{ __('label.expensesName') }}</label>
                                <input type="text" name="name" id="name"
                                    class="col-sm-12 form-control @error('name') is-invalid alert-danger @enderror mandatory"
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
                                    class="col-sm-12 form-control @error('circular_title') is-invalid alert-danger @enderror"
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
                                    class="col-sm-12 form-control @error('remark') is-invalid alert-danger @enderror mandatory"
                                    value="{{ old('remark') }}">
                                @error('remark')
                                    <x-input-error :message="$message" />
                                @enderror
                            </div>
                        </div>
                    </div>

                    <div class="card-footer p-3">
                        <div class="text-end">
                            <x-button-a href="{{ route('systemparameter.expense.index') }}" class="btn-back">
                                <i class="bi bi-arrow-left me-2"></i>
                                {{ __('button.back') }}
                            </x-button-a>

                            <x-button type="submit" class="btn-save">
                                <i class="bi bi-save2 me-2"></i>
                                {{ __('button.save') }}
                            </x-button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </div>
</x-app-layout>
