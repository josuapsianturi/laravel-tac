<th scope="col" {{ $attributes->merge(['class' => 'p-3 text-left text-sm font-medium'])->only('class') }}>
    {{ $slot }}
</th>
