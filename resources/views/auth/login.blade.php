<x-guest-layout>
    <h2 class="fw-bold text-uppercase mb-5">{{ __('label.login') }}</h2>
    <form method="POST" action="{{ route('login') }}">
        @csrf
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <x-button-primary>{{ __('button.login') }}</x-button-primary>
        </form>
    </form>
</x-guest-layout>
