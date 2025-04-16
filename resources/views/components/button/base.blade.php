<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-[#073938] border border-transparent rounded-md font-bold text-white hover:bg-[#0079A0] active:bg-[#0079A0] focus:outline-none focus:border-[#0079A0] focus:ring focus:ring-[#E1E3DE] disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
