@extends('_layouts.main')

@section('content')
    <div class="text-center px-2 sm:px-5">
        <section class="bg-secondary py-2 md:py-10">
            <div class="xl:w-10/12 mx-auto my-5 md:my-12 flex flex-col sm:flex-row justify-between items-center">
                <h1 class="text-white font-bold text-4xl lg:text-7xl leading-tight mb-4 sm:mb-0">Gustavo Rojas</h1>

                <x-button href="https://www.linkedin.com/in/gustavoerojas/" target="_blank">LinkedIn Profile</x-button>
            </div>

            <div class="xl:w-10/12 mx-auto my-12 flex flex-col sm:flex-row justify-between items-center px-2 sm:px-0">
                <h2 class="text-white text-center sm:text-left sm:w-5/12 font-bold text-2xl lg:text-4xl leading-tight">
                    Web & Email Developer with a BA
                    degree in Marketing</h2>

                <div class="text-left flex-5 mt-3 sm:mt-0">
                    <div class="sm:ml-10">
                        <p class="text-white mt-3">I have a deep passion for web/email design & development and digital
                            marketing. Creating
                            value and delivering
                            positive customer experiences on the web are my top objectives as a professional.</p>

                        <p class="text-white mt-3">I am always very focused on finding the most efficient and simplest
                            solution
                            possible for any issue to deliver top quality results and achieve set goals while
                            saving resources.</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="my-10">
            <h2 class="text-white text-3xl font-bold">Skills</h2>
            <p class="text-white font-bold mt-4">Computer Programming</p>

            <div class="flex flex-wrap justify-between sm:justify-evenly lg:w-9/12 mx-auto mt-12">
                <div class="w-1/2 sm:w-auto">
                    <x-percentage-icon percentage="90"></x-percentage-icon>
                    <p class="text-white uppercase mt-3">HTML & CSS</p>
                </div>

                <div class="w-1/2 sm:w-auto">
                    <x-percentage-icon percentage="85"></x-percentage-icon>
                    <p class="text-white uppercase mt-3">PHP/Laravel</p>
                </div>

                <div class="w-1/2 sm:w-auto mt-8 sm:mt-0">
                    <x-percentage-icon percentage="80"></x-percentage-icon>
                    <p class="text-white uppercase mt-3">Shopify (Liquid)</p>
                </div>

                <div class="w-1/2 sm:w-auto mt-8 sm:mt-0">
                    <x-percentage-icon percentage="80"></x-percentage-icon>
                    <p class="text-white uppercase mt-3">Javascript</p>
                </div>

                <div class="w-1/2 sm:w-auto mt-8 sm:mt-0">
                    <x-percentage-icon percentage="70"></x-percentage-icon>
                    <p class="text-white uppercase mt-3">Mysql</p>
                </div>

                <div class="w-1/2 sm:w-auto mt-8 sm:mt-0">
                    <x-percentage-icon percentage="80"></x-percentage-icon>
                    <p class="text-white uppercase mt-3">GIT</p>
                </div>
            </div>

            <p class="text-white font-bold mt-10 sm:mt-16">Design</p>

            <div class="flex flex-wrap justify-between sm:justify-evenly md:w-7/12 lg:w-5/12 mx-auto mt-12">
                <div class="w-1/2 sm:w-auto">
                    <x-percentage-icon percentage="90"></x-percentage-icon>
                    <p class="text-white uppercase mt-3">Email Template Design</p>
                </div>

                <div class="w-1/2 sm:w-auto">
                    <x-percentage-icon percentage="85"></x-percentage-icon>
                    <p class="text-white uppercase mt-3">UI Design</p>
                </div>
            </div>

            <p class="text-white font-bold mt-12 sm:mt-16">Tools</p>

            <div class="w-11/12 lg:w-9/12 mx-auto mt-12">
                <p class="text-white uppercase mb-1 text-left">Figma</p>
                <x-progress-bar width="w-11/12"></x-progress-bar>

                <p class="text-white uppercase mb-1 text-left mt-10">ADOBE photoshop</p>
                <x-progress-bar width="w-8/12"></x-progress-bar>

                <p class="text-white uppercase mb-1 text-left mt-10">ADOBE Dreamweaver</p>
                <x-progress-bar width="w-9/12"></x-progress-bar>

                <p class="text-white uppercase mb-1 text-left mt-10">Email ESP (Klaviyo, Mailchimp, Constant Contact & Campaign Monitor)</p>
                <x-progress-bar width="w-10/12"></x-progress-bar>
            </div>
        </section>

        <section class="bg-secondary py-10 mt-16">
            <h2 class="text-white text-center font-bold text-3xl leading-tight">Experience</h2>
            <h3 class="text-white text-center font-bold text-xl lg:text-2xl leading-tight mt-10">Independent Email & Web Developer Freelancer</h3>
            <p class="text-white mt-3">December 2020 - present</p>

            <h3 class="text-white text-center font-bold text-xl lg:text-2xl leading-tight mt-10">Elliptic Marketing</h3>
            <p class="text-white mt-3">Digital Marketing Developer<br>
                August 2015 - December 2020</p>
        </section>

        <section class="md:w-10/12 xl:w-6/12 mx-auto text-left px-2 ">
            <p class="text-white my-10 sm:my-16">I always look forward to learning something new and keeping up to date with all things marketing and
                technology. I consider myself a very organized and methodical person that sets clear goals and executes
                as needed to achieve them.</p>
        </section>

        <section class="bg-secondary py-10 px-2">
            <h2 class="text-white text-center font-bold text-3xl leading-tight">Education</h2>
            <h3 class="text-white text-center font-bold text-xl lg:text-2xl leading-tight mt-10">Florida International University</h3>
            <p class="text-white mt-3">Bachelor of Business Administration
                in
                Marketing<br>
                3.96/4.00 GPA</p>
        </section>
    </div>
@endsection
