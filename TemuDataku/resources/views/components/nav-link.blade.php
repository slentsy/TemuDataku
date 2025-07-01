@props(['active'])

@php
$classes = ($active ?? false)
    ? 'inline-flex items-center px-1 pt-1 border-b-4 border-[#035D37] dark:border-[#035D37] text-sm font-sans font-black leading-5 text-[#035D37] focus:outline-none focus:border-[#035D37] transition duration-150 ease-in-out'
    : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent font-sans font-black leading-5 text-black-500 hover:text-[#035D37] hover:border-gray-300 focus:outline-none focus:text-[#035D37] focus:border-gray-300 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>