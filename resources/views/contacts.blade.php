@extends('layouts.app')

@section('title', 'Contact - SJ Treven')
@section('meta_title', 'Contact SJ Treven | Get in Touch')
@section('meta_description', 'Get in touch with SJ Treven for inquiries, collaborations, or to share your thoughts. Contact form available.')
@section('og_title', 'Contact SJ Treven')
@section('og_description', 'Get in touch for inquiries, collaborations, or to share your thoughts.')
@section('twitter_title', 'Contact SJ Treven')
@section('twitter_description', 'Get in touch for inquiries, collaborations, or to share your thoughts.')

@section('content')
    <section class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-12 pt-12 sm:pt-16 lg:pt-24 pb-16 sm:pb-20 lg:pb-32">
        <div class="mb-8 sm:mb-12 lg:mb-16 text-center animate-fade-in-up">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 mb-4 leading-tight">
                Contact
            </h1>
            <p class="text-base sm:text-lg lg:text-xl text-gray-800 font-medium max-w-2xl mx-auto">
                Get in touch for inquiries, collaborations, or to share your thoughts.
            </p>
        </div>

        <div class="bg-white/90 rounded-lg shadow-xl border-2 border-gray-900/10 p-6 sm:p-8 lg:p-12 animate-fade-in-up" style="animation-delay: 0.2s">
            <div class="space-y-6 sm:space-y-8">
                <div>
                    <h2 class="text-xl sm:text-2xl font-bold text-gray-900 mb-4">General Inquiries</h2>
                    <p class="text-gray-800 font-medium">
                        For book-related inquiries, speaking engagements, or media requests, please reach out through the contact form below.
                    </p>
                </div>

                <div class="pt-6 border-t-2 border-gray-900/20">
                    <form class="space-y-6" method="POST" action="#">
                        @csrf
                        <div>
                            <label for="name" class="block text-sm sm:text-base font-semibold text-gray-900 mb-2">Name</label>
                            <input 
                                type="text" 
                                id="name" 
                                name="name" 
                                required
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-gray-900 transition-all duration-300 font-medium text-gray-900 hover:border-gray-400"
                            >
                        </div>

                        <div>
                            <label for="email" class="block text-sm sm:text-base font-semibold text-gray-900 mb-2">Email</label>
                            <input 
                                type="email" 
                                id="email" 
                                name="email" 
                                required
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-gray-900 transition-all duration-300 font-medium text-gray-900 hover:border-gray-400"
                            >
                        </div>

                        <div>
                            <label for="subject" class="block text-sm sm:text-base font-semibold text-gray-900 mb-2">Subject</label>
                            <input 
                                type="text" 
                                id="subject" 
                                name="subject" 
                                required
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-gray-900 transition-all duration-300 font-medium text-gray-900 hover:border-gray-400"
                            >
                        </div>

                        <div>
                            <label for="message" class="block text-sm sm:text-base font-semibold text-gray-900 mb-2">Message</label>
                            <textarea 
                                id="message" 
                                name="message" 
                                rows="6" 
                                required
                                class="w-full px-4 py-3 border-2 border-gray-300 rounded-lg focus:outline-none focus:border-gray-900 transition-all duration-300 font-medium text-gray-900 resize-none hover:border-gray-400"
                            ></textarea>
                        </div>

                        <div>
                            <button 
                                type="submit"
                                class="font-sans text-sm sm:text-base font-bold text-white bg-gray-900 hover:bg-gray-800 px-8 py-4 rounded-lg transition-all duration-300 tracking-wide hover:scale-105 active:scale-95 shadow-lg hover:shadow-xl"
                            >
                                Send Message
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
@endsection
