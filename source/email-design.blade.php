@extends('_layouts.main')

@push('css')
    <style>
        .selected {
            background-color: #CAB232;
            border-color: #CAB232;
            color: black;
        }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css"/>
    <style>
        .gslide-image img {
            min-width: auto !important;
        }
    </style>
@endpush

@push('js')
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
@endpush

@section('content')
    <div class="text-center px-2">
        <section class="bg-secondary py-2 md:py-10 flex-1 sm:flex sm:items-center">
            <div class="md:w-8/12 max-w-3xl mx-auto my-12">
                <h1 class="text-white font-bold text-4xl lg:text-7xl leading-tight">Email Design & Development</h1>
                <p class="text-white lg:text-xl mt-5">Email template designs following best practices to achieve fully
                    responsive, accessible and lightweight emails that are compatible with all major inbox providers and
                    devices.</p>

                <a href="#samples" class="text-white lg:text-xl mt-5 block">
                    <p>View Samples</p>
                    <x-icon type="arrow-down" class="text-gray-300 block"></x-icon>
                </a>
                <img src="/assets/images/bar.svg" alt="" class="inline-block mb-0 md:my-5">
            </div>
        </section>

        <section id="samples" class="mb-8 md:mb-16">
            <x-email-showcase
                    pre-title="Design + Development"
                    title="Bvlgari News"
                    subtitle="Email template showcasing a newsletter style email highlighting the latest news for the brand."
                    desktop-version="/assets/images/emails/bulgari/bulgari-desktop.jpg"
                    mobile-version="/assets/images/emails/bulgari/bulgari-mobile.jpg"
            >
                <x-slot name="compatibilityTestsMobile">
                    <x-image-card title="IPhone 12 Pro iOS 14"
                                  image="/assets/images/emails/bulgari/compatibility/iphone-12-ios-14.jpeg"></x-image-card>
                    <x-image-card title="IPhone SE - Gmail"
                                  image="/assets/images/emails/bulgari/compatibility/iphone-gmail.jpeg"></x-image-card>
                    <x-image-card title="IPhone 12 - Gmail iOS 14 (dark)"
                                  image="/assets/images/emails/bulgari/compatibility/iphone-gmail-dark.jpeg"></x-image-card>
                    <x-image-card title="IPhone 8 - Outlook"
                                  image="/assets/images/emails/bulgari/compatibility/iphone-outlook.jpeg"></x-image-card>
                    <x-image-card title="Android 11 - Gmail"
                                  image="/assets/images/emails/bulgari/compatibility/android-gmail.jpeg"></x-image-card>
                    <x-image-card title="Android 6 - Outlook"
                                  image="/assets/images/emails/bulgari/compatibility/android-outlook.jpeg"></x-image-card>
                    <x-image-card title="Android 6 - Yahoo"
                                  image="/assets/images/emails/bulgari/compatibility/android-yahoo.jpeg"></x-image-card>
                </x-slot>

                <x-slot name="compatibilityTestsWebmail">
                    <x-image-card title="Gmail - Chrome"
                                  image="/assets/images/emails/bulgari/compatibility/gmail-chrome.jpeg"></x-image-card>
                    <x-image-card title="Gmail - Firefox"
                                  image="/assets/images/emails/bulgari/compatibility/gmail-firefox.jpeg"></x-image-card>
                    <x-image-card title="Outlook - Firefox"
                                  image="/assets/images/emails/bulgari/compatibility/outlook-firefox.jpeg"></x-image-card>
                    <x-image-card title="Yahoo - Safari"
                                  image="/assets/images/emails/bulgari/compatibility/yahoo-safari.jpeg"></x-image-card>
                </x-slot>

                <x-slot name="compatibilityTestsDesktop">
                    <x-image-card title="Outlook 2016"
                                  image="/assets/images/emails/bulgari/compatibility/outlook-2016.jpeg"></x-image-card>
                    <x-image-card title="Outlook 2016 (MacOS)"
                                  image="/assets/images/emails/bulgari/compatibility/outlook-2016-mac.jpeg"></x-image-card>
                    <x-image-card title="Outlook 2013"
                                  image="/assets/images/emails/bulgari/compatibility/outlook-2013.jpeg"></x-image-card>
                    <x-image-card title="Office 365 Dark (Win)"
                                  image="/assets/images/emails/bulgari/compatibility/office-365-dark.jpeg"></x-image-card>
                    <x-image-card title="MacOS Sierra"
                                  image="/assets/images/emails/bulgari/compatibility/macos-sierra.jpeg"></x-image-card>
                </x-slot>
            </x-email-showcase>

            <x-email-showcase
                    pre-title="Design + Development"
                    title="Movie Streaming Service"
                    subtitle="Email template showcasing the latest available movies for a video streaming service."
                    desktop-version="/assets/images/emails/movies/movies-desktop.jpg"
                    mobile-version="/assets/images/emails/movies/movies-mobile.jpg"
            >
                <x-slot name="compatibilityTestsMobile">
                    <x-image-card title="IPhone 12 Pro iOS 14"
                                  image="/assets/images/emails/movies/compatibility/iphone-12.jpeg"></x-image-card>
                    <x-image-card title="IPhone SE - Gmail"
                                  image="/assets/images/emails/movies/compatibility/iphone-gmail.jpeg"></x-image-card>
                    <x-image-card title="IPhone 8 - Outlook"
                                  image="/assets/images/emails/movies/compatibility/iphone-outlook.jpeg"></x-image-card>
                    <x-image-card title="Android 11 - Gmail"
                                  image="/assets/images/emails/movies/compatibility/android-gmail.jpeg"></x-image-card>
                    <x-image-card title="Android 6 - Outlook"
                                  image="/assets/images/emails/movies/compatibility/android-outlook.jpeg"></x-image-card>
                </x-slot>

                <x-slot name="compatibilityTestsWebmail">
                    <x-image-card title="Gmail - Chrome"
                                  image="/assets/images/emails/movies/compatibility/gmail-chrome.jpeg"></x-image-card>
                    <x-image-card title="Outlook - Safari"
                                  image="/assets/images/emails/movies/compatibility/outlook-safari.jpeg"></x-image-card>
                    <x-image-card title="Yahoo - Firefox"
                                  image="/assets/images/emails/movies/compatibility/yahoo-firefox.jpeg"></x-image-card>
                </x-slot>

                <x-slot name="compatibilityTestsDesktop">
                    <x-image-card title="Outlook 2016"
                                  image="/assets/images/emails/movies/compatibility/outlook-2016.jpeg"></x-image-card>
                    <x-image-card title="Outlook 2016 (MacOS)"
                                  image="/assets/images/emails/movies/compatibility/outlook-2016-mac.jpeg"></x-image-card>
                    <x-image-card title="Outlook 2013"
                                  image="/assets/images/emails/movies/compatibility/outlook-2013.jpeg"></x-image-card>
                    <x-image-card title="MacOS Sierra"
                                  image="/assets/images/emails/movies/compatibility/macos-sierra.jpeg"></x-image-card>
                </x-slot>
            </x-email-showcase>

            <x-email-showcase
                    pre-title="Design + Development"
                    title="Travel Agency"
                    subtitle="Email template showcasing popular destinations for a travel agency."
                    desktop-version="/assets/images/emails/travel-agency/desktop.jpg"
                    mobile-version="/assets/images/emails/travel-agency/mobile.jpg"
            >
                <x-slot name="compatibilityTestsMobile">
                    <x-image-card title="IPhone 12 Pro iOS 14"
                                  image="/assets/images/emails/travel-agency/compatibility/iphone-11.jpeg"></x-image-card>
                    <x-image-card title="IPhone SE - Gmail"
                                  image="/assets/images/emails/travel-agency/compatibility/iphone-gmail.jpeg"></x-image-card>
                    <x-image-card title="IPhone 8 - Outlook"
                                  image="/assets/images/emails/travel-agency/compatibility/iphone-outlook.jpeg"></x-image-card>
                    <x-image-card title="Android 11 - Gmail"
                                  image="/assets/images/emails/travel-agency/compatibility/android-gmail.jpeg"></x-image-card>
                    <x-image-card title="Android 6 - Outlook"
                                  image="/assets/images/emails/travel-agency/compatibility/android-outlook.jpeg"></x-image-card>
                    <x-image-card title="Android - Yahoo"
                                  image="/assets/images/emails/travel-agency/compatibility/android-yahoo.jpeg"></x-image-card>
                </x-slot>

                <x-slot name="compatibilityTestsWebmail">
                    <x-image-card title="Gmail - Chrome"
                                  image="/assets/images/emails/travel-agency/compatibility/gmail-chrome.jpeg"></x-image-card>
                    <x-image-card title="Yahoo - Chrome"
                                  image="/assets/images/emails/travel-agency/compatibility/yahoo-chrome.jpeg"></x-image-card>
                    <x-image-card title="Yahoo - Firefox"
                                  image="/assets/images/emails/travel-agency/compatibility/yahoo-firefox.jpeg"></x-image-card>
                    <x-image-card title="Outlook - Safari"
                                  image="/assets/images/emails/travel-agency/compatibility/outlook-safari.jpeg"></x-image-card>
                </x-slot>

                <x-slot name="compatibilityTestsDesktop">
                    <x-image-card title="Outlook 2016"
                                  image="/assets/images/emails/travel-agency/compatibility/outlook-2016.jpeg"></x-image-card>
                    <x-image-card title="Outlook 2016 (MacOS)"
                                  image="/assets/images/emails/travel-agency/compatibility/outlook-2016-mac.jpeg"></x-image-card>
                    <x-image-card title="Outlook 2013"
                                  image="/assets/images/emails/travel-agency/compatibility/outlook-2013.jpeg"></x-image-card>
                    <x-image-card title="MacOS Sierra"
                                  image="/assets/images/emails/travel-agency/compatibility/macos-sierra.jpeg"></x-image-card>
                    <x-image-card title="Office 365 Dark"
                                  image="/assets/images/emails/travel-agency/compatibility/office-365-dark.jpeg"></x-image-card>
                </x-slot>
            </x-email-showcase>

            <x-email-showcase
                    pre-title="Design + Development"
                    title="Fashion Blog"
                    subtitle="Email template showcasing posts from a fashion blog."
                    desktop-version="/assets/images/emails/pink/desktop.jpg"
                    mobile-version="/assets/images/emails/pink/mobile.jpg"
            >
                <x-slot name="compatibilityTestsMobile">
                    <x-image-card title="IPhone 12 Pro iOS 14"
                                  image="/assets/images/emails/pink/compatibility/iphone-12.jpeg"></x-image-card>
                    <x-image-card title="IPhone SE - Gmail"
                                  image="/assets/images/emails/pink/compatibility/iphone-gmail.jpeg"></x-image-card>
                    <x-image-card title="IPhone 8 - Outlook"
                                  image="/assets/images/emails/pink/compatibility/iphone-outlook.jpeg"></x-image-card>
                    <x-image-card title="IPhone Dark"
                                  image="/assets/images/emails/pink/compatibility/iphone-dark.jpeg"></x-image-card>
                    <x-image-card title="Android 11 - Gmail"
                                  image="/assets/images/emails/pink/compatibility/android-gmail.jpeg"></x-image-card>
                    <x-image-card title="Android 6 - Outlook"
                                  image="/assets/images/emails/pink/compatibility/android-outlook.jpeg"></x-image-card>
                </x-slot>

                <x-slot name="compatibilityTestsWebmail">
                    <x-image-card title="Gmail - Chrome"
                                  image="/assets/images/emails/pink/compatibility/gmail-chrome.jpeg"></x-image-card>
                    <x-image-card title="Yahoo - Firefox"
                                  image="/assets/images/emails/pink/compatibility/yahoo-firefox.jpeg"></x-image-card>
                    <x-image-card title="Outlook - Safari"
                                  image="/assets/images/emails/pink/compatibility/outlook-safari.jpeg"></x-image-card>
                </x-slot>

                <x-slot name="compatibilityTestsDesktop">
                    <x-image-card title="Outlook 2019"
                                  image="/assets/images/emails/pink/compatibility/outlook-2019.jpeg"></x-image-card>
                    <x-image-card title="Outlook 2016"
                                  image="/assets/images/emails/pink/compatibility/outlook-2016.jpeg"></x-image-card>
                    <x-image-card title="Outlook 2013"
                                  image="/assets/images/emails/pink/compatibility/outlook-2013.jpeg"></x-image-card>
                    <x-image-card title="Office Dark 365"
                                  image="/assets/images/emails/pink/compatibility/office-365-dark.jpeg"></x-image-card>
                    <x-image-card title="MacOS Sierra"
                                  image="/assets/images/emails/pink/compatibility/macos-sierra.jpeg"></x-image-card>
                </x-slot>
            </x-email-showcase>

            <x-email-showcase
                    pre-title="Design + Development"
                    title="Fashion Accessories Boutique"
                    subtitle="Email template showcasing new products arrivals."
                    desktop-version="/assets/images/emails/martinuzzi/desktop.jpg"
                    mobile-version="/assets/images/emails/martinuzzi/mobile.jpg"
            >
                <x-slot name="compatibilityTestsMobile">
                    <x-image-card title="IPhone 12 Pro iOS 14"
                                  image="/assets/images/emails/martinuzzi/compatibility/iphone-11.jpeg"></x-image-card>
                    <x-image-card title="IPhone SE - Gmail"
                                  image="/assets/images/emails/martinuzzi/compatibility/iphone-gmail.jpeg"></x-image-card>
                    <x-image-card title="IPhone 8 - Outlook"
                                  image="/assets/images/emails/martinuzzi/compatibility/iphone-outlook.jpeg"></x-image-card>
                    <x-image-card title="Android 11 - Gmail"
                                  image="/assets/images/emails/martinuzzi/compatibility/android-gmail.jpeg"></x-image-card>
                    <x-image-card title="Android 6 - Outlook"
                                  image="/assets/images/emails/martinuzzi/compatibility/android-outlook.jpeg"></x-image-card>
                </x-slot>

                <x-slot name="compatibilityTestsWebmail">
                    <x-image-card title="Gmail - Chrome"
                                  image="/assets/images/emails/martinuzzi/compatibility/gmail-chrome.jpeg"></x-image-card>
                    <x-image-card title="Yahoo - Firefox"
                                  image="/assets/images/emails/martinuzzi/compatibility/yahoo-firefox.jpeg"></x-image-card>
                    <x-image-card title="Outlook - Safari"
                                  image="/assets/images/emails/martinuzzi/compatibility/outlook-safari.jpeg"></x-image-card>
                </x-slot>

                <x-slot name="compatibilityTestsDesktop">
                    <x-image-card title="Outlook 2019"
                                  image="/assets/images/emails/martinuzzi/compatibility/outlook-2019.jpeg"></x-image-card>
                    <x-image-card title="Outlook 2016"
                                  image="/assets/images/emails/martinuzzi/compatibility/outlook-2016.jpeg"></x-image-card>
                    <x-image-card title="Outlook 2016 (MacOS)"
                                  image="/assets/images/emails/martinuzzi/compatibility/outlook-2016-mac.jpeg"></x-image-card>
                    <x-image-card title="Outlook 2013"
                                  image="/assets/images/emails/martinuzzi/compatibility/outlook-2013.jpeg"></x-image-card>
                    <x-image-card title="MacOS Sierra"
                                  image="/assets/images/emails/martinuzzi/compatibility/macos-sierra.jpeg"></x-image-card>
                </x-slot>
            </x-email-showcase>
        </section>

        <x-call-to-action></x-call-to-action>
    </div>
@endsection
