
<div x-data
     x-init="lightbox = GLightbox({
            touchNavigation: true,
            loop: true,
        });"
     class="bg-transparent border border-gray-800 rounded shadow-md xl:w-72 lg:w-52 mx-auto hover:border-custom-yellow hover:shadow-2xl cursor-pointer transition duration-200">
    <span class="h-60 overflow-hidden block">
        <img src="{{ $image }}"
             alt="{{ $title }}"
             class="glightbox"
             data-title="{{ $title }}">
    </span>

    <p class="py-5 text-white">{{ $title }}</p>
</div>
