<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center justify-center px-4 py-2 bg-[#FF5449] border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-[#FF897A] focus:outline-none focus:border-[#DD3730] focus:ring focus:ring-[#FFEDE9] active:bg-[#FF5449] disabled:opacity-25 transition']) }}>
    {{ $slot }}
</button>
