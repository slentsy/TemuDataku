<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-white border border-transparent rounded-md font-semibold text-xs text-black tracking-widest hover:bg-[#078450] hover:text-white focus:bg-[#078450] active:bg-[#056c3b] transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
