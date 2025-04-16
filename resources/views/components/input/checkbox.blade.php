@props(['disabled' => false])

<input type="checkbox" {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'rounded border-[#E1E3DE] text-[#073938] shadow-sm focus:border-[#0079A0] focus:ring focus:ring-[#073938] focus:ring-opacity-30 disabled:opacity-50 disabled:pointer-events-none'
]) !!}>
