@props([
    'options' => '[]',
    'values' => '',
    'position' => 'all',
    'single' => false,
])

<div wire:ignore>
    <input
        x-data="{}"
        x-ref="input"
        x-init="$nextTick(function () {
            var tag = tagify($refs.input, {{ $options }}, '{{ $position }}', {{ $single }});
            tag.on('change', (e) => {
                $dispatch('input', e.detail.value)
            });
         })"
        type="text"
        value="{{ $values }}"

        {!! $attributes->merge(['class' => 'text-sm placeholder-gray-500 border-[#E1E3DE] rounded-md shadow-sm focus:border-[#0079A0] focus:text-black focus:ring focus:ring-[#0079A0] focus:ring-opacity-30 focus:outline-none']) !!}
    >
</div>
