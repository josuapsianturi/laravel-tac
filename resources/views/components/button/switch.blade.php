@props([
    'id',
    'label' => 'x',
    'active' => false,
    'styleActive' => null,
    'disabled' => false,
])

@php
    $id = $id ?? md5($attributes->wire('model'));
    $styleActive = $active ? $styleActive ?? 'bg-white text-[#17A660] rounded-full' : '';
@endphp

<button {{ $disabled ? 'disabled' : '' }} {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center rounded-r-full px-3 py-2 transition-colors duration-300 ease-in focus:outline-none focus:ring-0 hover:text-[#17A660] focus:text-[#17A660] disabled:opacity-50 disabled:pointer-events-none '. $styleActive ]) }}>
    {{ $label }}
</button>
