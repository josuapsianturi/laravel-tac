@props(['asterisk' => false, 'value'])

@php
$ast = $asterisk ? " after:content-['*'] after:text-error" : '';
@endphp

<label {{ $attributes->merge([
        'class' => 'block font-medium text-sm text-[#454744]'.$ast
    ])
}}>
    {{ $value ?? $slot }}
</label>
