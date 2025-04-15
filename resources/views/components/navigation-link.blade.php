@props(['active', 'outer' => false])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 font-bold leading-5 text-white focus:outline-none focus:border-primary transition-all'
            : 'inline-flex items-center px-3 font-medium leading-5 text-white focus:outline-none focus:border-secondary transition';
@endphp

@if ($outer)
    <div {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </div>
@else
    <a {{ $attributes->merge(['class' => $classes]) }}>
        {{ $slot }}
    </a>
@endif
