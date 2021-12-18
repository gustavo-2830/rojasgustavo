@extends('_layouts.main')

@section('content')
    <div class="text-center px-2">
        <section class="bg-secondary py-2 lg:py-10 flex-1 sm:flex sm:items-center">
            <div class="md:w-8/12 lg:w-full max-w-3xl mx-auto my-12">
                <h1 class="text-white font-bold text-4xl lg:text-7xl leading-tight">Web Design & Development</h1>
                <p class="text-white lg:text-xl mt-5">Fully responsive websites designed and coded from scratch implementing best UI design and coding practices.</p>

                <a href="#samples" class="text-white lg:text-xl mt-5 block">
                    <p>View Samples</p>
                    <x-icon type="arrow-down" class="text-gray-300 block"></x-icon>
                </a>

                <img src="/assets/images/bar.svg" alt="" class="inline-block mb-0 md:mt-5 lg:my-5">
            </div>
        </section>

        <section id="samples" class="mb-8 md:mb-16">
            <x-site-showcase
                    title="Dior Product Launch Micro-site"
                    description="Micro-site to showcase a new product line launch offering key
            information about products and allowing customers to reserve a spot for a related event."
                    image-url="/assets/images/web-design/dior.jpg"
                    :codingLanguages="['PHP (Lavarel)', 'JavaScript (Alpine.js)']"
                    direction="left"
            ></x-site-showcase>

            <x-site-showcase
                    title="American Crew Landing Page"
                    description="Landing page showcasing information about a local event for the brand."
                    image-url="/assets/images/web-design/american.jpg"
                    :codingLanguages="['PHP (Lavarel)', 'JavaScript (JQuery)']"
                    direction="right"
            ></x-site-showcase>

            <x-site-showcase
                    title="Telecial Saas App Launch Page"
                    description="Website for the launch of a social media media management application."
                    image-url="/assets/images/web-design/telecial.jpg"
                    :codingLanguages="['PHP (Lavarel)']"
                    direction="left"
            ></x-site-showcase>

            <x-site-showcase
                    title="Dior Mother's Day Micro-site"
                    description="Micro-site with interactive functionality as a part of a Mother's Day themed marketing campaign."
                    image-url="/assets/images/web-design/mothers.jpg"
                    :codingLanguages="['PHP (Lavarel)', 'JavaScript (Alpine.js)']"
                    direction="right"
            ></x-site-showcase>

            <x-site-showcase
                    title="Martinuzzi Accessories Fashion Jewelry E-commerce"
                    description="Complete E-commerce store for a fashion jewelry brand."
                    image-url="/assets/images/web-design/martinuzzi.jpg"
                    :codingLanguages="['Shopify (Liquid)', 'JavaScript']"
                    direction="left"
            ></x-site-showcase>

            <x-site-showcase
                    title="DC Medical Supplies Website"
                    description="Website for a medical supplies business."
                    image-url="/assets/images/web-design/descartables.jpg"
                    :codingLanguages="['PHP', 'JavaScript']"
                    direction="right"
            ></x-site-showcase>
        </section>

        <x-call-to-action></x-call-to-action>
    </div>
@endsection
