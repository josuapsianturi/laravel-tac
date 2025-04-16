<a  {{ $attributes->merge([
            'class' => 'inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest shadow-sm hover:text-gray-500 focus:outline-none focus:border-[#073938] focus:ring focus:ring-[#073938] focus:ring-opacity-20 active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition'
        ])
   }}
>
    {{ $slot }}
</a>
