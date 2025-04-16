@props([
    'padding' => 'sm:px-6 lg:px-8',
    'bgHead' => '',
    'divideColor' => 'divide-gray-50',
    'baseClasses' => '',
    'sortableName' => '',
])

<div class="align-middle inline-block min-w-full {{ $padding }}">
    <div class="overflow-hidden {{ $baseClasses }}">
        <table class="min-w-full divide-y {{ $divideColor }}">
            <thead class="{{ $bgHead }}">
                <tr>
                    {{ $head }}
                </tr>
            </thead>

            <tbody class="bg-white divide-y {{ $divideColor }}" {{ filled($sortableName) ? "wire:sortable={$sortableName}" : ''}}>
                {{ $body }}
            </tbody>
        </table>
    </div>
</div>
