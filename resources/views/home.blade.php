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
            <!-- He Never Said a Word - OUT NOW -->
            <article 
                x-data="{ synopsisOpen: false }"
                x-intersect="synopsisOpen = false"
                class="book-card bg-white/90 rounded-lg shadow-xl border-2 border-gray-900/10 overflow-hidden animate-fade-in-up"
                style="animation-delay: 0.1s"
            >
                <div class="p-6 sm:p-8 lg:p-10">
                    <div class="mb-6">
                        <img 
                            src="{{ asset('uploads/heNeverSaidaWord.jpeg') }}" 
                            alt="He Never Said a Word book cover"
                            class="book-cover w-full max-w-[280px] mx-auto shadow-2xl mb-6"
                            loading="lazy"
                        >
                        <div class="text-center mb-4">
                            <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 mb-3 leading-tight">
                                He Never Said a Word
                            </h3>
                            <div class="flex flex-col sm:flex-row items-center justify-center gap-3">
                                <span class="inline-block text-[10px] sm:text-xs font-bold uppercase tracking-widest text-gray-900 border-2 border-gray-900 bg-yellow-200 px-4 py-2 rounded-full">
                                    Out Now
                                </span>
                                <a
                                    href="https://www.amazon.com/dp/B0GTW4KQ9T"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    class="inline-flex items-center gap-2 font-sans text-xs sm:text-sm font-bold text-white bg-orange-500 hover:bg-orange-600 px-4 py-2 rounded-full transition-all duration-300 hover:scale-105 shadow-lg hover:shadow-xl"
                                >
                                    <svg class="w-4 h-4" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true">
                                        <path d="M23.27 21.18l-2.73-2.73.98-2.19L22.98 13l-2.73-2.73-2.19.98L16.82 9l-2.73 2.73.98 2.19L13.02 16l2.73 2.73 2.19-.98L19.18 21l2.73-2.73-2.19-.98.55-1.11zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
                                    </svg>
                                    Order on Amazon
                                </a>
                            </div>
                        </div>
                    </div>
                    
                    <div class="text-gray-800 leading-relaxed">
                        <p class="mb-5 font-medium text-base sm:text-lg">
                            He Never Said a Word is a literary nonfiction exploration of the silent emotional lives of men who are praised for their strength while quietly unraveling inside.
                        </p>
                        
                        <a href="{{ route('books') }}" class="inline-block font-sans text-sm font-semibold text-gray-900 hover:text-gray-700 underline underline-offset-4 transition-all duration-300 hover:scale-105">
                            View all books →
                        </a>
                    </div>
                </div>
            </article>

            <!-- Connected but Lonely - COMING SOON -->
            <article 
                x-data="{ synopsisOpen: false }"
                x-intersect="synopsisOpen = false"
                class="book-card bg-white/90 rounded-lg shadow-xl border-2 border-gray-900/10 overflow-hidden animate-fade-in-up"
                style="animation-delay: 0.2s"
            >
                <div class="p-6 sm:p-8 lg:p-10">
                    <div class="mb-6">
                        <img 
                            src="{{ asset('uploads/connectedButLonely.jpeg') }}" 
                            alt="Connected but Lonely book cover"
                            class="book-cover w-full max-w-[280px] mx-auto shadow-2xl mb-6"
                            loading="lazy"
                        >
                        <div class="text-center mb-4">
                            <h3 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 mb-2 leading-tight">
                                Connected but Lonely
                            </h3>
                            <p class="text-sm text-gray-500 font-light italic mb-3">
                                Why You Feel Alone and How to Truly Belong
                            </p>
                            <span class="inline-block text-[10px] sm:text-xs font-bold uppercase tracking-widest text-gray-600 border-2 border-gray-400 bg-white px-4 py-2 rounded-full">
                                Coming Soon
                            </span>
                        </div>
                    </div>
                    
                    <div class="text-gray-800 leading-relaxed">
                        <p class="mb-5 font-medium text-base sm:text-lg">
                            Connected but Lonely: Why You Feel Alone and How to Truly Belong is a powerful exploration of one of the quietest epidemics of our time: loneliness in an age of constant connection.
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
