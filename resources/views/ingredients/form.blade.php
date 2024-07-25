<div class="card rounded shadow">
    <div class="card-header d-flex justify-content-between align-items-center">
        <h5 class="title mb-0"> {{ $title ? $title : '' }} </h5>
    </div>
    <div class="card-body">
        <ul class="mt-2">
            <li>
                <h6>{{ __('Event Details') }}</h6>
            </li>
        </ul>
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <x-input-label required>{{ __('Name') }}</x-input-label>
                <x-input-text name="name" :value="old('name', $event?->name)" />
            </div>
            <div class="col-md-6">
                <x-input-label>{{ __('Status') }}</x-input-label>
                <select class="form-control form-select" name="is_active" id="is_active">
                    <option value="1" @selected(old('is_active', $event?->is_active?->value) == 1)>Active</option>
                    <option value="0" @selected(old('is_active', $event?->is_active?->value) == 0)>Inactive</option>
                </select>
            </div>
        </div>
        <div class="row g-3 mb-4">
            <div class="col-md-6">
                <x-input-label>{{ __('Is Main Homepage') }}</x-input-label>
                <select class="form-control form-select" name="is_main_homepage" id="is_main_homepage">
                    <option value="1" @selected(old('is_main_homepage', $event?->is_main_homepage) == 1)>Active</option>
                    <option value="0" @selected(old('is_main_homepage', $event?->is_main_homepage) == 0)>Inactive</option>
                </select>
            </div>
            <div class="col-md-6">
                <x-input-label>{{ __('Is Dashboard Active') }}</x-input-label>
                <select class="form-control form-select" name="is_dashboard_active" id="is_dashboard_active">
                    <option value="1" @selected(old('is_dashboard_active', $event?->is_dashboard_active) == 1)>Active</option>
                    <option value="0" @selected(old('is_dashboard_active', $event?->is_dashboard_active) == 0)>Inactive</option>
                </select>
            </div>
        </div>
        <div class="row g-3 mb-4">
            <div class="col-md-12">
                <x-input-label>{{ __('Source') }}</x-input-label>
                <div class="input-group">
                    <span class="input-group-text"><i class="fa-solid fa-globe"></i></span>
                    <x-input-text name="source" :value="old('source', $event?->source)" />
                </div>
            </div>
            <div class="col-md-12">
                <x-input-label required>{{ __('Description (Malay)') }}</x-input-label>
                <x-textarea name="description_ms" id="description_ms" :value="$event?->description_ms"></x-textarea>
            </div>
            <div class="col-md-12">
                <x-input-label required>{{ __('Description (English)') }}</x-input-label>
                <x-textarea name="description_en" id="description_en" :value="$event?->description_en"></x-textarea>
            </div>
        </div>

        <ul class="mt-2">
            <li>
                <h6>{{ __('Venue & Time') }}</h6>
            </li>
        </ul>
        <div class="row g-3">
            <div class="col-md-6">
                <x-input-label required>{{ __('Start Date') }}</x-input-label>
                <x-input-text type="date" name="started_date" :value="old('started_date', $event?->started_at?->format('Y-m-d'))" />
            </div>
            <div class="col-md-6">
                <x-input-label required>{{ __('Start At') }}</x-input-label>
                <x-input-text type="time" name="started_time" :value="old('started_time', $event?->started_at?->format('H:i'))" />
            </div>
            <div class="col-md-6">
                <x-input-label required>{{ __('End Date') }}</x-input-label>
                <x-input-text type="date" name="ended_date" :value="old('ended_date', $event?->ended_at?->format('Y-m-d'))" />
            </div>
            <div class="col-md-6">
                <x-input-label required>{{ __('End At') }}</x-input-label>
                <x-input-text type="time" name="ended_time" :value="old('ended_time', $event?->ended_at?->format('H:i'))" />
            </div>
            <div class="col-md-6">
                <x-input-label required>{{ __('Ticket Sale Start Date') }}</x-input-label>
                <x-input-text type="date" name="ticket_sale_started_at" :value="old('ticket_sale_started_at', $event?->ticket_sale_started_at?->format('Y-m-d'))" />
            </div>
            <div class="col-md-6">
                <x-input-label required>{{ __('Ticket Sale End Date') }}</x-input-label>
                <x-input-text type="date" name="ticket_sale_ended_at" :value="old('ticket_sale_ended_at', $event?->ticket_sale_ended_at?->format('Y-m-d'))" />
            </div>
            <div class="col-md-6">
                <x-input-label>{{ __('Addon Disable Date') }}</x-input-label>
                <x-input-text type="date" name="date_addon_disable" :value="old('date_addon_disable', $event?->date_addon_disable?->format('Y-m-d'))" />
            </div>
            <div class="col-md-6">
                <x-input-label required>{{ __('Ticket View Path') }}</x-input-label>
                <x-input-text name="ticket_view_path" :value="old('ticket_view_path', $event?->ticket_view_path)" />
            </div>
            <div class="col-md-12">
                <x-input-label required>{{ __('Location') }}</x-input-label>
                <x-input-text name="location" :value="old('location', $event?->location)" />
            </div>
        </div>
        <div class="row g-3 mb-4 mt-1">
            <x-input-label>{{ __('GPS Coordinate') }}</x-input-label>
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">{{ __('Latitude') }}</span>
                    <x-input-text name="latitude" :value="old('latitude', $event?->latitude)" />
                </div>
            </div>
            <div class="col-md-6">
                <div class="input-group">
                    <span class="input-group-text">{{ __('Longitude') }}</span>
                    <x-input-text name="longitude" :value="old('longitude', $event?->longitude)" />
                </div>
            </div>
        </div>

        <ul class="mt-4">
            <li>
                <h6>{{ __('Galleries') }}</h6>
            </li>
        </ul>
        <div class="row g-3">
            <div class="col-md-12">
                <x-upload-document :$uploads :model="$event"></x-upload-document>
            </div>
        </div>
    </div>
    <div class="card-footer text-end">
        <div class="d-flex">
            <div class="me-auto">
                <a href="{{ route('dashboard.events.index') }}"
                    class="btn btn-secondary rounded-pill">{{ __('Back') }}</a>
            </div>
            <div>
                <button
                    class="btn btn-primary rounded-pill">{{ $submitButton ? __($submitButton) : __('Save') }}</button>
            </div>
        </div>
    </div>
</div>
