@props([
    'disabled' => false,
])

<button
    {{ $attributes->class(['btn btn-primary fw-normal text-uppercase shadow-sm'])->merge(['type' => 'button'])->merge(['disabled' => false]) }}>
    {{ $slot }}
</button>
