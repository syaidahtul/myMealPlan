@props(['onbehalfof'])

@php
$classes = ($onbehalfof ?? false)
            ? 'card-header text-uppercase p-3 bg-orange-200'
            : 'card-header text-uppercase p-3 bg-gray-100';
@endphp

<div {{ $attributes->merge(['class' => $classes]) }}>
    <h4 class="m-0 fw-bold">{{ $slot }}</h4>
</div>