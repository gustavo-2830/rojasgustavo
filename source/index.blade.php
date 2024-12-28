@extends('_layouts.main')

@section('content')
    <div class="bg-secondary py-4 sm:py-12 flex-1 sm:flex sm:items-center px-3 mx-auto w-full">
        <div class="max-w-4xl mx-auto my-6">
            <h2 class="text-white text-center sm:text-left text-lg lg:text-xl uppercase tracking-wider mb-2"><strong>Top
                    3%</strong> email developer freeLancer on Upwork</h2>

            <div class="relative text-center">
                <img src="/assets/images/gustavo-rojas-email.png" alt="" class="my-4 md:mb-0 md:absolute right-0 -top-10 inline-block w-28">

                <h1 class="text-white font-bold text-center sm:text-left text-4xl lg:text-7xl" style="line-height: 1.25;">
                    Gustavo Rojas,<br>
                    Web & Email Developer</h1>
            </div>

            <img src="/assets/images/bar.svg" alt="" class="inline-block mb-5">

            <p class="text-white text-base text-center sm:text-left lg:text-lg w-full sm:w-10/12 mt-3">Web developer & Email
                marketing freelancer with more than 8 years of experience helping businesses of all sizes create
                compelling digital experiences with email marketing and websites.</p>

            <p class="text-white text-base text-center sm:text-left lg:text-lg w-full sm:w-10/12 mt-5">Mailchimp, Klaviyo and Shopify expert.</p>

            <div class="flex gap-x-7 justify-center sm:justify-start items-center mt-5 flex-wrap">
                <img src="/assets/images/platforms/mailchimp.png" alt="" class="inline-block w-28">
                <img src="/assets/images/platforms/klaviyo.png" alt="" class="inline-block w-28">
                <img src="/assets/images/platforms/shopify.png?id=1" alt="" class="inline-block w-28">
            </div>

            <p class="text-white text-base text-center sm:text-left lg:text-lg w-full sm:w-10/12 mt-8 font-bold">Check out the services</p>

            <div class="flex flex-col w-full text-center sm:w-auto sm:flex-row sm:space-x-10 space-y-5 sm:space-y-0 mt-5">
                <x-button href="{{ $page->baseUrl }}/email-design">Email Marketing</x-button>
                <x-button href="{{ $page->baseUrl }}/web-development">Web Design & Development</x-button>
            </div>
        </div>
    </div>
@endsection
