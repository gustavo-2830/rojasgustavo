<article class="flex flex-col sm:flex-row xl:w-8/12 mx-auto justify-center mt-5 sm:mt-12 relative">
    <div class="md:w-5/12 order-2 @if($direction === 'right') md:order-2 @else md:order-1 @endif">
        <img src="{{ $imageUrl }}" alt="" class="shadow-lg">
    </div>

    <div class="md:w-6/12 order-1 @if($direction === 'right') md:order-1 @else md:order-2 @endif text-center sm:text-left py-8 px-5 sm:p-16 bg-secondary shadow-lg">
        <div class="sticky top-10">
            <h2 class="text-white font-bold text-2xl">{{ $title }}</h2>
            <p class="text-white mt-3 mb-6">{{ $description }}</p>

            <div>
                <p class="uppercase tracking-wider text-gray-400">Coding Languages</p>

                <ul class="text-white">
                    @foreach($codingLanguages as $language)
                        <li>{{ $language }}</li>
                    @endforeach
                </ul>
            </div>

            <div class="mt-5">
                <p class="uppercase tracking-wider text-gray-400">Design Tool</p>

                <ul class="text-white">
                    <li>Figma</li>
                </ul>
            </div>
        </div>

    </div>
</article>
