@extends('layouts.app')

@section('title', 'Apps - SJ Treven')
@section('meta_title', 'Apps by SJ Treven | Digital Tools and Applications')
@section('meta_description', 'Digital tools and applications designed to support your journey. Coming soon from SJ Treven.')
@section('og_title', 'Apps by SJ Treven')
@section('og_description', 'Digital tools and applications designed to support your journey.')
@section('twitter_title', 'Apps by SJ Treven')
@section('twitter_description', 'Digital tools and applications designed to support your journey.')

@section('content')
    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-12 pt-12 sm:pt-16 lg:pt-24 pb-16 sm:pb-20 lg:pb-32">
        <div class="mb-8 sm:mb-12 lg:mb-16 text-center animate-fade-in-up">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 mb-4 leading-tight">
                Apps
            </h1>
            <p class="text-base sm:text-lg lg:text-xl text-gray-800 font-medium max-w-2xl mx-auto">
                Digital tools and applications designed to support your journey.
            </p>
        </div>

        <div class="bg-white/90 rounded-lg shadow-xl border-2 border-gray-900/10 p-6 sm:p-8 lg:p-12 animate-fade-in-up" style="animation-delay: 0.2s">
            <div class="text-center py-12 sm:py-16">
                <div class="mb-8 float-animation">
                    <svg class="w-16 h-16 sm:w-20 sm:h-20 mx-auto text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path>
                    </svg>
                </div>
                <p class="text-gray-800 font-medium text-lg sm:text-xl mb-6">
                    Applications and digital tools are coming soon.
                </p>
                <p class="text-gray-700 font-medium text-sm sm:text-base">
                    Check back soon for updates on digital resources designed to complement the books.
                </p>
            </div>
        </div>
    </section>
@endsection
