
<div x-data="{ open: false }"
     class="bg-primary container mx-auto">
    <div class="flex justify-between items-center px-4 py-6 sm:px-6 md:justify-start md:space-x-10">
        <!-- Logo -->
        <div class="mr-auto">
            <a href="/" class="flex">
                <span class="sr-only">Gustavo Rojas</span>
                <img class="h-10 w-auto sm:h-12" src="/assets/images/logo.svg" alt="GR">
            </a>
        </div>

        <!-- Hamburger icon -->
        <div x-on:click="open = true"
             class="-mr-2 -my-2 md:hidden">
            <button type="button" class="bg-transparent rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-custom-yellow" aria-expanded="false">
                <span class="sr-only">Open menu</span>
                <!-- Heroicon name: outline/menu -->
                <svg class="h-8 w-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>

        <!-- Links -->
        <div class="hidden md:flex">
            <nav class="flex items-center md:ml-4 lg:ml-12 md:space-x-5 lg:space-x-12 text-center lg:text-left">
                <a href="/" class="{{ $page->isIndexSelected() }} lg:tracking-wider border-b text-sm hover:border-white transition duration-200 uppercase">
                    Home
                </a>
                <a href="{{ $page->baseUrl }}/email-design" class="lg:tracking-wider border-b text-sm hover:border-white transition duration-200 uppercase {{ $page->selected('email-design') }}">
                    Email Marketing
                </a>
                <a href="{{ $page->baseUrl }}/web-development" class="lg:tracking-wider border-b text-sm hover:border-white transition duration-200 uppercase {{ $page->selected('web-development') }}">
                    Web Design & Development
                </a>
                <a href="{{ $page->baseUrl }}/about" class="lg:tracking-wider border-b text-sm hover:border-white transition duration-200 uppercase {{ $page->selected('about') }}">
                    About Me
                </a>
                <x-button href="{{ $page->baseUrl }}/contact">Contact</x-button>

                <img src="/assets/images/top-rated.png?id=1" alt=""
                     class="inline-block w-36">
            </nav>
        </div>
    </div>

    <!-- Mobile menu -->
    <div x-show="open"
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 transform scale-90"
         x-transition:enter-end="opacity-100 transform scale-100"
         x-transition:leave="transition ease-in duration-300"
         x-transition:leave-start="opacity-100 transform scale-100"
         x-transition:leave-end="opacity-0 transform scale-90"
         class="absolute top-0 inset-x-0 p-2 z-50 transition transform origin-top-right md:hidden">
        <div class="rounded-lg shadow-lg ring-1 ring-black ring-opacity-5 bg-primary divide-y-2 divide-gray-50 border border-gray-700">
            <div class="pt-5 pb-6 px-5">
                <div class="flex items-center justify-between">
                    <div>
                        <img class="h-10 w-auto sm:h-12" src="/assets/images/logo.svg" alt="GR">
                    </div>
                    <div x-on:click="open = false" class="-mr-2">
                        <button type="button" class="bg-primary rounded-md p-2 inline-flex items-center justify-center text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-gray-500">
                            <span class="sr-only">Close menu</span>
                            <!-- Heroicon name: outline/x -->
                            <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="my-6">
                    <nav class="flex flex-col items-center space-y-7">
                        <a href="/" class="{{ $page->isIndexSelected() }} tracking-wider border-b text-base hover:border-white transition duration-200 uppercase">
                            Home
                        </a>
                        <a href="{{ $page->baseUrl }}/email-design" class="{{ $page->selected('email-design') }} tracking-wider border-b text-base hover:border-white transition duration-200 uppercase">
                            Email Marketing
                        </a>
                        <a href="{{ $page->baseUrl }}/web-development" class="{{ $page->selected('web-development') }} tracking-wider border-b text-base hover:border-white transition duration-200 uppercase">
                            Web Design & Development
                        </a>
                        <a href="{{ $page->baseUrl }}/about" class="{{ $page->selected('about') }} tracking-wider border-b text-base hover:border-white transition duration-200 uppercase">
                            About Me
                        </a>
                        <a href="{{ $page->baseUrl }}/contact" class="{{ $page->selected('contact') }} tracking-wider border-b text-base hover:border-white transition duration-200 uppercase">
                            Contact
                        </a>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>

