@extends('layouts.app')

@section('title', 'Home - SJ Treven')
@section('meta_title', 'SJ Treven - Author | Literary Works Exploring Human Experience')
@section('meta_description', 'SJ Treven - Author website featuring literary works exploring human experience, resilience, and connection. Discover books on burnout, loneliness, masculinity, and more.')
@section('og_title', 'SJ Treven - Author | Literary Works')
@section('og_description', 'Exploring the quiet spaces between words, where meaning lives and stories breathe.')
@section('twitter_title', 'SJ Treven - Author')
@section('twitter_description', 'Exploring the quiet spaces between words, where meaning lives and stories breathe.')

@section('content')
    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 pt-12 sm:pt-16 lg:pt-24 pb-12 sm:pb-16 lg:pb-20">
        <div class="max-w-4xl animate-fade-in-up">
            <h1 class="text-4xl sm:text-5xl lg:text-7xl xl:text-8xl font-bold text-gray-900 mb-6 leading-tight tracking-tight float-animation">
                SJ Treven
            </h1>
            <p class="text-lg sm:text-xl lg:text-2xl text-gray-800 leading-relaxed font-medium max-w-2xl">
                Exploring the quiet spaces between words, where meaning lives and stories breathe.
            </p>
        </div>
    </section>

    <!-- Featured Books Section -->
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 pb-16 sm:pb-20 lg:pb-32">
        <h2 class="text-2xl sm:text-3xl lg:text-4xl font-bold text-gray-900 mb-8 sm:mb-12 lg:mb-16 text-center animate-fade-in-up">Featured Works</h2>
        <div class="book-grid">
            <!-- The Human Reset - OUT NOW -->
            <article 
                x-data="{ synopsisOpen: false }"
                x-intersect="synopsisOpen = false"
                class="book-card bg-white/90 rounded-lg shadow-xl border-2 border-gray-900/10 overflow-hidden animate-fade-in-up"
                style="animation-delay: 0.1s"
            >
                <div class="p-6 sm:p-8 lg:p-10">
                    <div class="mb-6">
                        <img 
                            src="{{ asset('uploads/humanReset.jpeg') }}" 
                            alt="The Human Reset book cover"
                            class="book-cover w-full max-w-[280px] mx-auto shadow-2xl mb-6"
                            loading="lazy"
                        >
                        <div class="text-center mb-4">
                            <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 mb-3 leading-tight">
                                The Human Reset
                            </h3>
                            <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                                <span class="inline-block text-[10px] sm:text-xs font-bold uppercase tracking-widest text-gray-900 border-2 border-gray-900 bg-yellow-200 px-4 py-2 rounded-full">
                                    Out Now
                                </span>
                                <a 
                                    href="https://www.amazon.com/dp/B0XXXXXXXXX" 
                                    target="_blank" 
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center gap-2 font-sans text-xs sm:text-sm font-bold text-white bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded-full transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-xl"
                                >
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M6.921 9.68c-.051.24-.321 1.557-1.354 3.12-.825 1.213-1.973 2.4-3.567 2.4-.149 0-.321-.015-.321-.015v.405h5.477c.24 1.477 1.345 2.4 2.533 2.4 1.32 0 2.4-1.08 2.4-2.4 0-1.32-1.08-2.4-2.4-2.4-.24 0-.48.03-.72.09l-.51-1.02c.27-.09.54-.15.84-.15 1.95 0 3.54 1.59 3.54 3.54 0 1.95-1.59 3.54-3.54 3.54-2.22 0-3.93-1.98-4.26-4.65l-.03-.15H0v-.405c.06 0 .24.015.39.015 1.2 0 2.1-.45 2.85-1.35L8.7 5.4H4.8L2.4 9.68h4.521zm10.8 0c-.051.24-.321 1.557-1.354 3.12-.825 1.213-1.973 2.4-3.567 2.4-.149 0-.321-.015-.321-.015v.405h5.477c.24 1.477 1.345 2.4 2.533 2.4 1.32 0 2.4-1.08 2.4-2.4 0-1.32-1.08-2.4-2.4-2.4-.24 0-.48.03-.72.09l-.51-1.02c.27-.09.54-.15.84-.15 1.95 0 3.54 1.59 3.54 3.54 0 1.95-1.59 3.54-3.54 3.54-2.22 0-3.93-1.98-4.26-4.65l-.03-.15h-4.26v-.405c.06 0 .24.015.39.015 1.2 0 2.1-.45 2.85-1.35l3.15-4.29h-3.9L12.3 9.68h4.521z"/>
                                    </svg>
                                    Order on Amazon
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-gray-800 leading-relaxed">
                        <p class="mb-5 font-medium text-base sm:text-lg">
                            The Human Reset is a call to a world that has confused exhaustion with success and productivity with human worth.
                        </p>
                        
                        <a href="{{ route('books') }}" class="inline-block font-sans text-sm font-semibold text-gray-900 hover:text-gray-700 underline underline-offset-4 transition-all duration-300 hover:scale-105">
                            View all books →
                        </a>
                    </div>
                </div>
            </article>

            <!-- RyXXa - COMING SOON -->
            <article 
                x-data="{ synopsisOpen: false }"
                x-intersect="synopsisOpen = false"
                class="book-card bg-white/90 rounded-lg shadow-xl border-2 border-gray-900/10 overflow-hidden animate-fade-in-up"
                style="animation-delay: 0.2s"
            >
                <div class="p-6 sm:p-8 lg:p-10">
                    <div class="mb-6">
                        <img 
                            src="{{ asset('uploads/Ryxxa.jpeg') }}" 
                            alt="RyXXa book cover"
                            class="book-cover w-full max-w-[280px] mx-auto shadow-2xl mb-6"
                            loading="lazy"
                        >
                        <div class="text-center mb-4">
                            <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 mb-3 leading-tight">
                                RyXXa
                            </h3>
                            <span class="inline-block text-[10px] sm:text-xs font-bold uppercase tracking-widest text-gray-600 border-2 border-gray-400 bg-white px-4 py-2 rounded-full">
                                Coming Soon
                            </span>
                        </div>
                    </div>
                    
                    <div class="text-gray-800 leading-relaxed">
                        <p class="mb-5 font-medium text-base sm:text-lg">
                            RyXXa is a book about the moment after everything falls apart — when progress stops, certainty disappears, and continuing feels heavier than quitting.
                        </p>
                        
                        <a href="{{ route('books') }}" class="inline-block font-sans text-sm font-semibold text-gray-900 hover:text-gray-700 underline underline-offset-4 transition-all duration-300 hover:scale-105">
                            View all books →
                        </a>
                    </div>
                </div>
            </article>
        </div>
    </section>
@endsection
