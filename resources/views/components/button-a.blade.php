<!-- resources/views/components/button-a.blade.php -->
@props(['href'])

<a href="{{ $href }}" {{ $attributes->merge(['class' => 'btn fw-bold rounded-3 px-4 text-capitalize shadow']) }}>
    {{ $slot }}
</a>
