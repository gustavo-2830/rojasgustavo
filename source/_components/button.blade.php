@props(['href' => '#', 'type' => 'link', 'color' => 'secondary' ])

@if($type === 'link')
    <a href="{{ $href }}" {{ $attributes }}
    class="{{ $color === 'primary' ? 'bg-custom-yellow text-black border-custom-yellow' : 'bg-transparent text-white border-white' }}
            border px-8 py-3 rounded-full flex items-center justify-center sm:inline-block h-14 sm:h-auto hover:bg-custom-yellow hover:border-custom-yellow hover:text-black transition duration-200 ease-in-out">
        {{ $slot }}
    </a>
@endif

@if($type === 'button')
    <button {{ $attributes }}
            class="{{ $color === 'primary' ? 'bg-custom-yellow text-black border-custom-yellow' : 'bg-transparent text-white border-white' }}
            border px-4 md:px-8 py-3 rounded-full hover:bg-custom-yellow hover:border-custom-yellow hover:text-black focus:outline-none focus:ring-2 focus:ring-offset-0 focus:ring-custom-yellow transition duration-200 ease-in-out">
        {{ $slot }}
    </button>
@endif


