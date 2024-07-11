@props(['onbehalfof'=>false])

@php
$classes = ($onbehalfof ?? false)
            ? 'border-top text-uppercase p-3 bg-orange-200'
            : 'border-top text-uppercase p-3 bg-gray-100';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <div class="text-end">
        {{ $slot }}
    </div>
</div>