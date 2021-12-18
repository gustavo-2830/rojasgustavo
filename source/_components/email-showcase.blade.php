<div class="relative">
    <article x-data="{ version: 'desktop' }" {{ $attributes->merge(['class' => 'mt-10']) }}>
        <small class="inline-block uppercase tracking-wider text-sm text-gray-400">{{ $preTitle }}</small>
        <h2 class="text-white font-bold text-2xl md:text-3xl">{{ $title }}</h2>
        <p class="text-white mt-3">{{ $subtitle }}</p>

        <!-- Buttons -->
        <div class="flex flex-row space-x-3 md:space-x-10 mt-8 justify-center mb-10 flex-wrap">
            <x-button type="button" x-on:click="version = 'desktop'"
                      x-bind:class="[ version === 'desktop' ? 'selected' : '' ]">Desktop View
            </x-button>

            <x-button type="button" x-on:click="version = 'mobile'"
                      x-bind:class="[ version === 'mobile' ? 'selected' : '' ]">Mobile View
            </x-button>

            <div class="mt-4 sm:mt-0">
                <x-button type="button" x-on:click="version = 'compatibility'"
                          x-bind:class="[ version === 'compatibility' ? 'selected' : '' ]">Compatibility
                </x-button>
            </div>
        </div>

        <!-- Showcase design template container -->
        <div class="bg-secondary shadow-xl py-10 2xl:w-9/12 lg:w-10/12 mx-auto">
            <div x-show="version !== 'compatibility'">
                <div class="flex space-x-4 items-center inline-block justify-center mb-5">
                    <div class="text-white focus:outline-none focus:text-gray-200">
                        <x-icon type="eye" class="text-white h-5"></x-icon>
                        Preview
                    </div>
                </div>

                <div x-show="version === 'desktop'" class="mx-auto" style="max-width: 700px;">
                    <img src="{{ $desktopVersion }}" alt="Email Desktop Version">
                </div>

                <div x-show="version === 'mobile'" class="mx-auto" style="max-width: 400px;">
                    <img src="{{ $mobileVersion }}" alt="Email Mobile Version">
                </div>
            </div>

            <div x-show="version === 'compatibility'" class="px-5">
                <p class="inline-block uppercase tracking-wider text-sm text-gray-400 mb-8 border-b border-gray-400">
                    Mobile</p>

                <div class="grid 2xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-2 gap-y-12">
                    {{ $compatibilityTestsMobile }}
                </div>

                <p class="inline-block uppercase tracking-wider text-sm text-gray-400 my-8 border-b border-gray-400">
                    Webmail</p>

                <div class="grid 2xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-2 gap-y-12">
                    {{ $compatibilityTestsWebmail }}
                </div>

                <p class="inline-block uppercase tracking-wider text-sm text-gray-400 my-8 border-b border-gray-400">
                    Desktop</p>

                <div class="grid 2xl:grid-cols-4 lg:grid-cols-3 md:grid-cols-2 gap-2 gap-y-12">
                    {{ $compatibilityTestsDesktop }}
                </div>

                <small class="text-gray-600 text-sm mt-12 block">Screenshots provided by Testi.at</small>
            </div>
        </div>
    </article>
</div>

