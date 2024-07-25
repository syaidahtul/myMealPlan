@props([
    'disabled' => false,
])

<button {{ $attributes->class(['btn btn-primary'])->merge(['type' => 'button'])->merge(['disabled' => false]) }}>
    {{ $slot }}
</button>
