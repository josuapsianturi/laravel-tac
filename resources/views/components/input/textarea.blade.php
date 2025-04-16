@props(['disabled' => false])

<textarea {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-[#E1E3DE] focus:border-[#0079A0] focus:ring focus:ring-[#0079A0] focus:ring-opacity-30 rounded-md shadow-sm']) !!}></textarea>
