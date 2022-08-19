@props(['active'])

@php
$classes = ($active ?? false)
            ? 'text-xs uppercase py-3 font-bold block text-red-500 hover:text-red-600'
            : 'text-xs uppercase py-3 font-bold block text-blueGray-700 hover:text-blueGray-500';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $icon ?? '' }}
    {{ $slot }}
</a>
