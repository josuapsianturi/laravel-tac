@props(['active'])

@php
$classes = ($active ?? false)
            ? 'block pl-3 pr-4 py-2 border-l-4 border-[#60DE92] text-base font-bold text-[#00894A] bg-gray-50 focus:outline-none focus:text-[#006D3A] focus:bg-forest-100 focus:border-[#00894A] transition'
            : 'block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-white hover:text-[#00894A] hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
