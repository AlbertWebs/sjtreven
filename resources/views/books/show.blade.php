@extends('layouts.app')

@section('title', $book['title'].' by SJ Treven | Official Book Page')
@section('meta_title', $book['title'].' by SJ Treven | Official Book Page')
@section('meta_description', $book['description'])
@section('og_title', $book['title'].' by SJ Treven')
@section('og_description', $book['description'])
@section('og_image', $book['image_url'])
@section('og_image_alt', 'Book cover of '.$book['title'].' by SJ Treven')
@section('twitter_title', $book['title'].' by SJ Treven')
@section('twitter_description', $book['description'])
@section('twitter_image', $book['image_url'])
@section('canonical_url', $book['url'])
@section('og_type', 'book')

@section('content')
    <article class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-12 pt-10 sm:pt-14 lg:pt-20 pb-16 sm:pb-20 lg:pb-28">
        <nav aria-label="Breadcrumb" class="mb-8 text-sm text-gray-700">
            <a href="{{ route('home') }}" class="underline underline-offset-4">Home</a>
            <span aria-hidden="true"> / </span>
            <a href="{{ route('books') }}" class="underline underline-offset-4">Books by SJ Treven</a>
            <span aria-hidden="true"> / </span>
            <span aria-current="page">{{ $book['title'] }}</span>
        </nav>

        <div class="grid gap-10 lg:grid-cols-[minmax(0,0.8fr)_minmax(0,1.2fr)] lg:gap-14 items-start">
            <figure class="text-center">
                <img src="{{ asset($book['image']) }}" alt="{{ $book['title'] }} book cover by SJ Treven" class="book-cover w-full max-w-[360px] mx-auto rounded shadow-2xl" fetchpriority="high">
                <figcaption class="mt-4 text-sm text-gray-700">{{ $book['title'] }} by SJ Treven</figcaption>
            </figure>

            <div>
                <p class="text-sm font-bold uppercase tracking-widest text-gray-700 mb-3">A book by SJ Treven</p>
                <h1 class="text-4xl sm:text-5xl font-bold leading-tight text-gray-900 mb-4">{{ $book['title'] }}</h1>
                @if ($book['subtitle'])
                    <p class="text-xl sm:text-2xl text-gray-800 mb-5">{{ $book['subtitle'] }}</p>
                @endif
                <p class="inline-block mb-6 text-xs font-bold uppercase tracking-widest text-gray-900 border-2 border-gray-900 bg-yellow-200 px-4 py-2 rounded-full">{{ $book['status'] }}</p>
                <p class="text-lg leading-relaxed text-gray-800">{{ $book['intro'] }}</p>

                <div class="mt-7 flex flex-wrap gap-2" aria-label="Book topics">
                    @foreach ($book['genres'] as $genre)
                        <span class="rounded-full border border-gray-400 px-3 py-1 text-sm text-gray-800">{{ $genre }}</span>
                    @endforeach
                </div>
            </div>
        </div>

        <section class="mt-12 sm:mt-16 border-t border-gray-300 pt-8 sm:pt-10" aria-labelledby="about-book-heading">
            <h2 id="about-book-heading" class="text-2xl sm:text-3xl font-bold text-gray-900 mb-6">About {{ $book['title'] }}</h2>
            <div class="max-w-3xl space-y-5 text-base sm:text-lg leading-relaxed text-gray-800">
                @foreach ($book['sections'] as $paragraph)
                    <p>{{ $paragraph }}</p>
                @endforeach
            </div>
        </section>

        <aside class="mt-12 rounded-lg border border-gray-300 bg-white/80 p-6 sm:p-8">
            <h2 class="text-xl font-bold text-gray-900 mb-3">About the author</h2>
            <p class="text-gray-800 leading-relaxed">SJ Treven writes across literary nonfiction and fiction, exploring voice, resilience, belonging, and the systems that shape everyday life.</p>
            <a href="{{ route('about') }}" class="inline-block mt-4 font-semibold text-gray-900 underline underline-offset-4">Read SJ Treven’s author biography</a>
        </aside>

        <p class="mt-8"><a href="{{ route('books') }}" class="font-semibold text-gray-900 underline underline-offset-4">Browse all books by SJ Treven</a></p>
    </article>
@endsection

@section('structured_data')
    <script type="application/ld+json">@json($book['schema'], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE)</script>
@endsection
