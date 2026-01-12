@extends('layouts.app')

@section('title', 'Articles & Guides - SJ Treven')
@section('meta_title', 'Articles & Guides by SJ Treven')
@section('meta_description', 'Explore articles, guides, and insights by SJ Treven on human experience, resilience, connection, and personal growth.')
@section('og_title', 'Articles & Guides - SJ Treven')
@section('og_description', 'Explore articles, guides, and insights on human experience, resilience, and connection.')
@section('twitter_title', 'Articles & Guides - SJ Treven')
@section('twitter_description', 'Explore articles, guides, and insights on human experience, resilience, and connection.')

@section('content')
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 pt-12 sm:pt-16 lg:pt-24 pb-16 sm:pb-20 lg:pb-32">
        <div class="mb-8 sm:mb-12 lg:mb-16 text-center animate-fade-in-up">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 mb-4 leading-tight">
                Articles & Guides
            </h1>
            <p class="text-base sm:text-lg lg:text-xl text-gray-800 font-medium max-w-2xl mx-auto">
                Insights, reflections, and guides exploring the themes that shape our human experience.
            </p>
        </div>

        <div class="bg-white/90 rounded-lg shadow-xl border-2 border-gray-900/10 p-6 sm:p-8 lg:p-12 animate-fade-in-up" style="animation-delay: 0.2s">
            <div class="text-center py-12 sm:py-16">
                <div class="mb-8 float-animation">
                    <svg class="w-16 h-16 sm:w-20 sm:h-20 mx-auto text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z"></path>
                    </svg>
                </div>
                <p class="text-gray-800 font-medium text-lg sm:text-xl mb-6">
                    Articles and guides are coming soon.
                </p>
                <p class="text-gray-700 font-medium text-sm sm:text-base max-w-xl mx-auto">
                    Check back soon for articles, guides, and insights that complement the books and explore themes of human experience, resilience, and connection.
                </p>
            </div>
        </div>
    </section>
@endsection
