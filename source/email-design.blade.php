@extends('_layouts.main')

@section('title', 'Freelance HTML Email Developer and Designer')
@section('description', 'Freelance email HTML developer and designer with focus on E-commerce brands and marketing agencies.')

@push('css')
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/css/splide.min.css">

    <style>
        .selected {
            background-color: #CAB232;
            border-color: #CAB232;
            color: black;
        }

        .splide__arrow--prev {
            left: -5em;
        }

        .splide__arrow--next {
            right: -5em;
        }

        .splide__arrow {
            background: transparent;
        }

        .splide__arrow svg {
            fill: #fff;
            height: 2.2em;
            width: 2.2em;
        }

        @-webkit-keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-250px * 7));
            }
        }

        @keyframes scroll {
            0% {
                transform: translateX(0);
            }
            100% {
                transform: translateX(calc(-250px * 7));
            }
        }

        .slider {
            height: 70px;
            margin: auto;
            overflow: hidden;
            position: relative;
            width: 100%;
        }

        .slider::before, .slider::after {
            content: "";
            height: 100px;
            position: absolute;
            width: 200px;
            z-index: 2;
        }

        .slider::after {
            right: 0;
            top: 0;
            transform: rotateZ(180deg);
        }

        .slider::before {
            left: 0;
            top: 0;
        }

        .slider .slide-track {
            -webkit-animation: scroll 40s linear infinite;
            animation: scroll 40s linear infinite;
            display: flex;
            width: calc(250px * 14);
        }

        .slider .slide {
            height: 100px;
            width: 220px;
        }

        @media (max-width: 700px) {
            .slider .slide {
                width: 180px;
            }
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
    <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.4/dist/js/splide.min.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
@endpush

@section('content')
    <div class="text-center px-2">
        <section class="bg-secondary pt-2 md:pt-10 pb-12">
            <div class="md:w-8/12 max-w-3xl mx-auto my-8">
                <h1 class="text-white font-bold text-4xl lg:text-7xl leading-tight">Email Marketing</h1>
                <p class="text-white lg:text-xl mt-5">Freelance email marketing expert with focus on
                    E-commerce brands and marketing agencies of all sizes and industries.</p>
                <img src="/assets/images/bar.svg" alt="" class="inline-block mt-5 md:my-5">

                <p class="text-sm md:text-lg mt-5 md:mt-0" style="color:#767680;">Happy brands sending successful
                    emails</p>
            </div>

            <section class="max:w-8/12 max-w-6xl mx-auto px-2">
                <div class="slider">
                    <div class="slide-track">
                        <div class="slide">
                            <img src="/assets/images/clients/krete.png" alt=""
                                 class="inline-block w-32">
                        </div>
                        <div class="slide">
                            <img src="/assets/images/clients/shernbao.png" alt=""
                                 class="inline-block w-32">
                        </div>
                        <div class="slide">
                            <img src="/assets/images/clients/client-1.png" alt=""
                                 class="inline-block w-32">
                        </div>
                        <div class="slide">
                            <img src="/assets/images/clients/eyemail.png" alt=""
                                 class="inline-block w-32">
                        </div>
                        <div class="slide">
                            <img src="/assets/images/clients/martinuzzi.png" alt=""
                                 class="inline-block w-44">
                        </div>
                        <div class="slide">
                            <img src="/assets/images/clients/venetus.png" alt=""
                                 class="inline-block w-32">
                        </div>
                        <div class="slide">
                            <img src="/assets/images/clients/telecial.png" alt=""
                                 class="inline-block w-32">
                        </div>

                        <div class="slide">
                            <img src="/assets/images/clients/krete.png" alt=""
                                 class="inline-block w-32">
                        </div>
                        <div class="slide">
                            <img src="/assets/images/clients/shernbao.png" alt=""
                                 class="inline-block w-32">
                        </div>
                        <div class="slide">
                            <img src="/assets/images/clients/client-1.png" alt=""
                                 class="inline-block w-32">
                        </div>
                        <div class="slide">
                            <img src="/assets/images/clients/eyemail.png" alt=""
                                 class="inline-block w-32">
                        </div>
                        <div class="slide">
                            <img src="/assets/images/clients/martinuzzi.png" alt=""
                                 class="inline-block w-44">
                        </div>
                        <div class="slide">
                            <img src="/assets/images/clients/venetus.png" alt=""
                                 class="inline-block w-32">
                        </div>
                        <div class="slide">
                            <img src="/assets/images/clients/telecial.png" alt=""
                                 class="inline-block w-32">
                        </div>
                    </div>
                </div>
            </section>
        </section>

        <section class="text-white md:w-8/12 max-w-3xl mx-auto text-left space-y-4 py-10 md:py-14 px-4">
            <p>
                Full-service email marketing expert who can take charge of your entire email marketing program.
                From strategy to execution, I handle everything to ensure your business gets the results it needs.
            </p>

            <p>
                I’ll design and hand-code professional, responsive emails that look great on every device, while also
                crafting a strategic plan tailored to your goals—whether that’s growing your email list, engaging your
                audience, nurturing relationships, or increasing sales.
            </p>

            <p>You’ll get complete email marketing support, including:</p>

            <ul class="list-disc list-inside">
                <li>Developing an email marketing strategy aligned with your business goals</li>
                <li>Designing, coding, and testing campaigns for compatibility and accessibility</li>
                <li>Running A/B tests to improve engagement</li>
                <li>Building and managing your subscriber lists</li>
                <li>Setting up automated flows/journeys to nurture leads and drive conversions</li>
                <li>Analyzing campaign performance and optimizing for better results</li>
            </ul>
        </section>

        <section x-data="{ slider:  '', selected: 1 }" x-init="slider = new Splide('#esp-container', {
            perMove: 1,
            pagination: false,
              breakpoints: {
                640: {
                    arrows: false,
                },
            }
         }).mount();

         slider.on( 'move', function (index) {
              if (index == 0) { selected = 1 } else { selected = 2 }
            } );"
                 class="bg-secondary py-12">
            <h2 class="text-white font-bold text-3xl md:text-4xl">ESP Certifications</h2>

            <!-- Buttons -->
            <div class="flex flex-row space-x-3 md:space-x-10 mt-8 justify-center mb-10 flex-wrap">
                <x-button type="button" x-on:click="slider.go(0); selected = 1;"
                          x-bind:class="[ selected === 1 ? 'selected' : '' ]">Mailchimp
                </x-button>

                <x-button type="button" x-on:click="slider.go(1); selected = 2"
                          x-bind:class="[ selected === 2 ? 'selected' : '' ]">Klaviyo
                </x-button>
            </div>

            <section id="esp-container" class="splide md:w-8/12 max-w-5xl mx-auto"
                     aria-label="Splide Basic HTML Example">
                <div class="splide__arrows">
                    <button class="splide__arrow splide__arrow--prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M7.33 24l-2.83-2.829 9.339-9.175-9.339-9.167 2.83-2.829 12.17 11.996z"/>
                        </svg>
                    </button>
                    <button class="splide__arrow splide__arrow--next">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path d="M7.33 24l-2.83-2.829 9.339-9.175-9.339-9.167 2.83-2.829 12.17 11.996z"/>
                        </svg>
                    </button>
                </div>

                <div class="splide__track">
                    <ul class="splide__list">
                        <li class="splide__slide">
                            <div class="flex flex-col md:flex-row items-center justify-between gap-x-12 gap-y-8 md:gap-y-0">
                                <img src="/assets/images/certifications/mailchimp.png" alt="" class="inline-block w-56">

                                <div class="text-left text-white px-4">
                                    <p class="mb-5">As a Mailchimp Certified email developer freelancer, I can offer
                                        full support
                                        to help you
                                        get the most out the platform. Whether it is managing your audiences,
                                        segmenting, building automations, setting up signup forms and landing pages, or
                                        creating email campaigns, I can make sure you are on track to get the results
                                        you are looking for.</p>

                                    <p>
                                        Specifically, the Mailchimp services offered are:
                                    </p>

                                    <ul class="list-disc list-inside">
                                        <li>Email template design and HTML/CSS code</li>
                                        <li>Audience management</li>
                                        <li>Signup form creation and set up</li>
                                        <li>Automation development</li>
                                        <li>Email reporting and analytics</li>
                                        <li>Landing page design</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                        <li class="splide__slide">
                            <div class="flex flex-col md:flex-row items-center justify-between gap-x-12 gap-y-8 md:gap-y-0">
                                <img src="/assets/images/certifications/klaviyo.png?id=1" alt=""
                                     class="inline-block w-56">

                                <div class="text-left text-white px-4">
                                    <p class="mb-5">Similarly, I'm an email design freelancer certified on Klaviyo. I
                                        can assist your brand or marketing agency to create
                                        successful campaigns, smart flows, effective signup forms and organize your
                                        audiences and segments. To put in simply, I can be your go-to person for all
                                        things Klaviyo.</p>

                                    <p>
                                        Specifically, the Klaviyo services offered are:
                                    </p>

                                    <ul class="list-disc list-inside">
                                        <li>Email template design and HTML/CSS code</li>
                                        <li>List &amp; segments management</li>
                                        <li>Signup form creation and set up</li>
                                        <li>Flows development</li>
                                        <li>Email reporting and analytics</li>
                                        <li>Template building</li>
                                        <li>E-commerce integration</li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </section>

        <div class="bg-secondary shadow-xl py-10 2xl:w-9/12 lg:w-10/12 mx-auto flex flex-col md:flex-row md:gap-x-12 gap-y-8 items-center justify-center mt-12 px-6 py-12">
            <div class="text-white text-left max-w-2xl">
                <h3 class="mb-3 font-bold text-xl md:text-2xl">Top 3% Rated Email Marketing Freelancer</h3>
                <p class="mb-4">I have successfully completed a great deal of email projects as an email freelancer in
                    the past few years. </p>

                <p>
                    Upwork has awarded me with the Top Rated Plus badge for building a strong reputation and working on
                    high-value, long-term contracts in the platform.</p>
            </div>

            <img src="/assets/images/top-rated.png?id=1" alt=""
                 class="inline-block w-60 md:w-72">
        </div>

        <a href="#samples" class="text-white lg:text-xl mt-8 block">
            <p>View Samples</p>
            <x-icon type="arrow-down" class="text-gray-300 block"></x-icon>
        </a>

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
                    title="Shernbao Products Highlight"
                    subtitle="Email template showcasing a product sale."
                    desktop-version="/assets/images/emails/shernbao/shernbao-desktop.jpg"
                    mobile-version="/assets/images/emails/shernbao/shernbao-mobile.jpg"
            >
                <x-slot name="compatibilityTestsMobile">
                    <x-image-card title="IPhone 12 Pro iOS 14"
                                  image="/assets/images/emails/shernbao/compatibility/iphone-12-ios-14.jpeg"></x-image-card>
                    <x-image-card title="IPhone SE - Gmail"
                                  image="/assets/images/emails/shernbao/compatibility/iphone-gmail.jpeg"></x-image-card>
                    <x-image-card title="IPhone 8 - Outlook"
                                  image="/assets/images/emails/shernbao/compatibility/iphone-outlook.jpeg"></x-image-card>
                    <x-image-card title="Android 11 - Gmail"
                                  image="/assets/images/emails/shernbao/compatibility/android-gmail.jpeg"></x-image-card>
                    <x-image-card title="Android 6 - Outlook"
                                  image="/assets/images/emails/shernbao/compatibility/android-outlook.jpeg"></x-image-card>
                    <x-image-card title="Android 6 - Yahoo"
                                  image="/assets/images/emails/shernbao/compatibility/android-yahoo.jpeg"></x-image-card>
                </x-slot>

                <x-slot name="compatibilityTestsWebmail">
                    <x-image-card title="Gmail - Chrome"
                                  image="/assets/images/emails/shernbao/compatibility/gmail-chrome.jpeg"></x-image-card>
                    <x-image-card title="Gmail - Firefox"
                                  image="/assets/images/emails/shernbao/compatibility/gmail-firefox.jpeg"></x-image-card>
                    <x-image-card title="Outlook - Firefox"
                                  image="/assets/images/emails/shernbao/compatibility/outlook-firefox.jpeg"></x-image-card>
                    <x-image-card title="Yahoo - Firefox"
                                  image="/assets/images/emails/shernbao/compatibility/yahoo-firefox.jpeg"></x-image-card>
                </x-slot>

                <x-slot name="compatibilityTestsDesktop">
                    <x-image-card title="Outlook 2016"
                                  image="/assets/images/emails/shernbao/compatibility/outlook-2016.jpeg"></x-image-card>
                    <x-image-card title="Outlook 2016 (MacOS)"
                                  image="/assets/images/emails/shernbao/compatibility/outlook-2016-mac.jpeg"></x-image-card>
                    <x-image-card title="Outlook 2013"
                                  image="/assets/images/emails/shernbao/compatibility/outlook-2013.jpeg"></x-image-card>
                    <x-image-card title="MacOS Sierra"
                                  image="/assets/images/emails/shernbao/compatibility/macos-sierra.jpeg"></x-image-card>
                </x-slot>
            </x-email-showcase>

            <x-email-showcase
                    pre-title="Design + Development"
                    title="Krete New Year Sale"
                    subtitle="Email template showcasing a NYE sale."
                    desktop-version="/assets/images/emails/krete/krete-desktop.jpg"
                    mobile-version="/assets/images/emails/krete/krete-mobile.jpg?id=1"
            >
                <x-slot name="compatibilityTestsMobile">
                    <x-image-card title="IPhone 12 Pro iOS 14"
                                  image="/assets/images/emails/krete/compatibility/iphone-12-ios-14.jpeg"></x-image-card>
                    <x-image-card title="IPhone SE - Gmail"
                                  image="/assets/images/emails/krete/compatibility/iphone-gmail.jpeg"></x-image-card>
                    <x-image-card title="IPhone 8 - Outlook"
                                  image="/assets/images/emails/krete/compatibility/iphone-outlook.jpeg"></x-image-card>
                    <x-image-card title="Android 11 - Gmail"
                                  image="/assets/images/emails/krete/compatibility/android-gmail.jpeg"></x-image-card>
                    <x-image-card title="Android 6 - Outlook"
                                  image="/assets/images/emails/krete/compatibility/android-outlook.jpeg"></x-image-card>
                    <x-image-card title="Android 6 - Yahoo"
                                  image="/assets/images/emails/krete/compatibility/android-yahoo.jpeg"></x-image-card>
                </x-slot>

                <x-slot name="compatibilityTestsWebmail">
                    <x-image-card title="Gmail - Chrome"
                                  image="/assets/images/emails/krete/compatibility/gmail-chrome.jpeg"></x-image-card>
                    <x-image-card title="Gmail - Firefox"
                                  image="/assets/images/emails/krete/compatibility/gmail-firefox.jpeg"></x-image-card>
                    <x-image-card title="Outlook - Firefox"
                                  image="/assets/images/emails/krete/compatibility/outlook-firefox.jpeg"></x-image-card>
                    <x-image-card title="Yahoo - Firefox"
                                  image="/assets/images/emails/krete/compatibility/yahoo-firefox.jpeg"></x-image-card>
                </x-slot>

                <x-slot name="compatibilityTestsDesktop">
                    <x-image-card title="Outlook 2016"
                                  image="/assets/images/emails/krete/compatibility/outlook-2016.jpeg"></x-image-card>
                    <x-image-card title="Office 365 Dark"
                                  image="/assets/images/emails/krete/compatibility/365-dark.jpeg"></x-image-card>
                    <x-image-card title="Outlook 2016 (MacOS)"
                                  image="/assets/images/emails/krete/compatibility/outlook-2016-mac.jpeg"></x-image-card>
                    <x-image-card title="Outlook 2013"
                                  image="/assets/images/emails/krete/compatibility/outlook-2013.jpeg"></x-image-card>
                    <x-image-card title="MacOS Sierra"
                                  image="/assets/images/emails/krete/compatibility/macos-sierra.jpeg"></x-image-card>
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

    <div class="fixed bottom-4 right-4 bg-custom-yellow p-5 rounded-lg font-bold text-primary text-center hover:bg-white transition duration-300">
        <a href="https://www.figma.com/proto/hnaNk1e5eoYEcOSc9dO5zm/Email-Design-%26-Development---Gustavo-Rojas?page-id=0%3A1&type=design&node-id=1-211&viewport=649%2C1050%2C0.25&t=dnORsCnoYPAlACqd-1&scaling=min-zoom&mode=design"
           target="_blank">
            See more designs
        </a>
    </div>
@endsection
