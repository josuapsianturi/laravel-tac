@props(['disabled' => false])

<select {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge([
        'class' => 'border border-[#E1E3DE] rounded-lg shadow-ms focus:border-[#0079A0] focus:ring-1 focus:outline-none focus:ring-opacity-50 transition duration-150 ease-in-out'
    ]) !!}>

    {{ $slot }}
</select>
