@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
    'class' => 'border-[#efefef] focus:border-[#0079A0] focus:ring focus:ring-[#073938] focus:ring-opacity-30 rounded-md shadow-sm'
]) !!}>
