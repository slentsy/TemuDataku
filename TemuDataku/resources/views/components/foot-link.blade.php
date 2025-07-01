@props(['href'])

<a href="{{ $href }}" class="text-sm hover:text-gray-300 block">
    {{ $slot }}
</a>
