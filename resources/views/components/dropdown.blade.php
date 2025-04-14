<div x-cloak class="inline-block relative" x-data="{ open: false }">
    <button
        @click="open = !open"
        @click.away="open = false"
        class="focus:outline-none shadow cursor-pointer inline-block text-gray-700 hover:text-gray-900 flex border border-gray-200 rounded p-2 pl-3 pr-1 bg-gray-100"
        :class="{ 'shadow-none border-gray-300': open } {{ $buttonClass ?? '' }}"
    >
        {{ $label }}
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" :class="{'-rotate-180': open}"
            class="ml-1 transform duration-200 inline-block fill-current text-gray-500 w-6 h-6">
            <path fill-rule="evenodd" d="M15.3 10.3a1 1 0 011.4 1.4l-4 4a1 1 0 01-1.4 0l-4-4a1 1 0 011.4-1.4l3.3 3.29 3.3-3.3z" />
        </svg>
    </button>

    <ul
        x-show="open"
        class="bg-white absolute left-0 shadow w-full rounded text-gray-600 origin-top shadow-lg"
        x-transition:enter="transition ease-out duration-200"
        x-transition:enter-start="opacity-0 transform scale-y-50"
        x-transition:enter-end="opacity-100 transform scale-y-100"
        x-transition:leave="transition ease-in duration-200"
        x-transition:leave-end="opacity-0 transform scale-y-50"
    >
        @foreach ($items as $item)
            <li>
                <a href="{{ $item['href'] }}" class="py-1 px-3 border-b block hover:bg-gray-200 {{ $item['class'] ?? '' }}">
                    {{ $item['label'] }}
                </a>
            </li>
        @endforeach
    </ul>
</div>
