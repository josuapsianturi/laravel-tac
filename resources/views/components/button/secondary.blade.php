<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-gray-300 rounded-md text-primary shadow-sm hover:text-gray-500 focus:outline-none focus:border-[#7EFBAC] focus:ring focus:ring-[#C1FFD3] active:text-gray-800 active:bg-gray-50 disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
