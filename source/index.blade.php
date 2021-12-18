@extends('_layouts.main')

@section('content')
    <div class="bg-secondary py-4 sm:py-12 flex-1 sm:flex sm:items-center px-3 mx-auto w-full">
        <div class="max-w-4xl mx-auto my-8 sm:my-12">
            <h1 class="text-white font-bold text-center sm:text-left text-4xl lg:text-7xl" style="line-height: 1.25;">Gustavo Rojas,<br>
                Web & Email Developer</h1>
            <img src="/assets/images/bar.svg" alt="" class="inline-block mb-5">

            <p class="text-white text-base text-center sm:text-left lg:text-xl w-full sm:w-10/12 mt-3">Web & Email developer with UI design and digital marketing experience based in Miami, Florida.</p>

            <div class="flex flex-col w-full text-center sm:w-auto sm:flex-row sm:space-x-10 space-y-5 sm:space-y-0 mt-10">
                <x-button href="{{ $page->baseUrl }}/web-development">Web Design & Development</x-button>
                <x-button href="{{ $page->baseUrl }}/email-design">Email Development</x-button>
            </div>
        </div>
    </div>
@endsection
