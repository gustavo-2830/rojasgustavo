@extends('_layouts.main')

@section('content')
    <div class="bg-secondary py-4 sm:py-12 flex-1 sm:flex sm:items-center text-center px-2">
        <div class="max-w-4xl mx-auto my-12">
            <h1 class="text-white font-bold text-4xl lg:text-7xl leading-tight">Get in touch</h1>
            <p class="text-white text-center lg:text-xl mt-3">I look forward to getting in contact with you! Expect a response in the next 24 hours.</p>

            <img src="/assets/images/bar.svg" alt="" class="inline-block mt-5 mb-10">

            <p class="text-white text-center lg:text-xl mt-3">Please send me an email and I’ll be in touch shortly.</p>
            <a href="mailto:hello@rojasgustavo.com" target="_blank" class="text-white text-xl lg:text-5xl mt-3 font-bold block">hello@rojasgustavo.com</a>
        </div>
    </div>
@endsection
