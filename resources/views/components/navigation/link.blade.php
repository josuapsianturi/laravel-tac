@props(['active', 'outer' => false])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-3 bg-[#052c2c] font-bold leading-5 hover:bg-[#0b4f4d] text-white focus:outline-none focus:border-[#073938] transition-all'
            : 'inline-flex items-center px-3 font-medium leading-5 text-white hover:bg-[#0b4f4d] focus:outline-none focus:border-[#0079A0] transition';
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
