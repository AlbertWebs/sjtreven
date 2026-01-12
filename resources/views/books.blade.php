@extends('layouts.app')

@section('title', 'Books - SJ Treven')
@section('meta_title', 'Books by SJ Treven | The Human Reset, RyXXa, and More')
@section('meta_description', 'Explore all books by SJ Treven including The Human Reset, RyXXa, This Is What America Has Become, The Legend of Ndike, He Never Said a Word, and Connected but Lonely.')
@section('og_title', 'Books by SJ Treven')
@section('og_description', 'A collection of literary works exploring human experience, resilience, and connection.')
@section('twitter_title', 'Books by SJ Treven')
@section('twitter_description', 'A collection of literary works exploring human experience, resilience, and connection.')

@section('content')
    <section class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 pt-12 sm:pt-16 lg:pt-24 pb-16 sm:pb-20 lg:pb-32">
        <div class="mb-8 sm:mb-12 lg:mb-16 text-center animate-fade-in-up">
            <h1 class="text-3xl sm:text-4xl lg:text-5xl xl:text-6xl font-bold text-gray-900 mb-4 leading-tight">
                Books
            </h1>
            <p class="text-base sm:text-lg lg:text-xl text-gray-800 font-medium max-w-2xl mx-auto">
                A collection of literary works exploring human experience, resilience, and connection.
            </p>
        </div>

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
                            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 mb-3 leading-tight">
                                The Human Reset
                            </h2>
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
                                        <path d="M23.27 21.18l-2.73-2.73.98-2.19L22.98 13l-2.73-2.73-2.19.98L16.82 9l-2.73 2.73.98 2.19L13.02 16l2.73 2.73 2.19-.98L19.18 21l2.73-2.73-2.19-.98.55-1.11zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/>
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
                        
                        <button 
                            @click="synopsisOpen = !synopsisOpen"
                            class="font-sans text-sm font-semibold text-gray-900 hover:text-gray-700 underline underline-offset-4 transition-all duration-300 hover:scale-105 mb-4"
                        >
                            <span x-show="!synopsisOpen">Read full synopsis</span>
                            <span x-show="synopsisOpen">Close synopsis</span>
                        </button>
                        
                        <div 
                            x-show="synopsisOpen"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-2"
                            class="space-y-4 pt-6 border-t-2 border-gray-900/20 text-sm sm:text-base"
                        >
                            <p class="font-medium">
                                Burnout is no longer an individual problem. It is the predictable outcome of a system that rewards overwork, glorifies hustle, and treats rest as weakness. This book challenges the belief that burnout is a personal failure and reframes it as a system failure.
                            </p>
                            <p class="font-light">
                                At the center of this crisis is an addiction to productivity. Achievement and constant busyness activate the brain's reward system, slowly turning ambition into identity. Sleep stops restoring. Creativity fades. Relationships suffer. Life becomes performance rather than experience.
                            </p>
                            <p class="font-light">
                                The book exposes how burnout hides behind competence, perfectionism, and success. Promotions and achievements often increase pressure instead of peace, trapping people on a ladder where the goalposts never stop moving.
                            </p>
                            <p class="font-light">
                                The Human Reset dismantles hustle culture and its core myths: that rest must be earned, that more hours equal more value, and that sacrifice proves worth. It shows how exhaustion benefits systems that depend on constant availability and compliance.
                            </p>
                            <p class="font-light">
                                Readers learn to recognize the silent signs of burnout before collapse occurs, including emotional numbness, irritability, brain fog, withdrawal, self doubt, and reliance on stimulants. These are not weaknesses. They are warning signals.
                            </p>
                            <p class="font-light">
                                Recovery begins with boundaries. It begins with learning to say no. No to guilt driven yeses. No to endless demands. No to a life built on self abandonment.
                            </p>
                            <p class="font-light">
                                Ultimately, The Human Reset offers a path back to humanity. One where rest is required, worth is not tied to output, and success includes health, presence, and meaning.
                            </p>
                            <p class="font-bold italic text-gray-900 pt-2 text-base sm:text-lg">
                                The reset is not about escaping life.<br>
                                It is about reclaiming it.
                            </p>
                        </div>
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
                            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 mb-3 leading-tight">
                                RyXXa
                            </h2>
                            <span class="inline-block text-[10px] sm:text-xs font-bold uppercase tracking-widest text-gray-600 border-2 border-gray-400 bg-white px-4 py-2 rounded-full">
                                Coming Soon
                            </span>
                        </div>
                    </div>
                    
                    <div class="text-gray-800 leading-relaxed">
                        <p class="mb-5 font-medium text-base sm:text-lg">
                            RyXXa is a book about the moment after everything falls apart — when progress stops, certainty disappears, and continuing feels heavier than quitting.
                        </p>
                        
                        <button 
                            @click="synopsisOpen = !synopsisOpen"
                            class="font-sans text-sm font-semibold text-gray-900 hover:text-gray-700 underline underline-offset-4 transition-all duration-300 hover:scale-105 mb-4"
                        >
                            <span x-show="!synopsisOpen">Read full synopsis</span>
                            <span x-show="synopsisOpen">Close synopsis</span>
                        </button>
                        
                        <div 
                            x-show="synopsisOpen"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-2"
                            class="space-y-4 pt-6 border-t-2 border-gray-900/20 text-sm sm:text-base"
                        >
                            <p class="font-medium">
                                It explores the quiet endurance of those who kept going without recognition, without momentum, and without proof that their effort would ever matter. This is not a story of success or transformation. It is about staying present when dreams fade, bodies fail, relationships fracture, and life refuses to move forward.
                            </p>
                            <p class="font-light">
                                Through restrained, reflective chapters, RyXXa gives language to experiences often carried in silence: the weight of repeated disappointment, the pressure to remain functional while unraveling internally, and the strength required simply to stay. RyXXa is not a hero or a solution…
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <!-- This Is What America Has Become - COMING SOON -->
            <article 
                x-data="{ synopsisOpen: false }"
                x-intersect="synopsisOpen = false"
                class="book-card bg-white/90 rounded-lg shadow-xl border-2 border-gray-900/10 overflow-hidden animate-fade-in-up"
                style="animation-delay: 0.3s"
            >
                <div class="p-6 sm:p-8 lg:p-10">
                    <div class="mb-6">
                        <img 
                            src="{{ asset('uploads/WhatAmericaHasBecome.jpeg') }}" 
                            alt="This Is What America Has Become book cover"
                            class="book-cover w-full max-w-[280px] mx-auto shadow-2xl mb-6"
                            loading="lazy"
                        >
                        <div class="text-center mb-4">
                            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 mb-3 leading-tight">
                                This Is What America Has Become
                            </h2>
                            <span class="inline-block text-[10px] sm:text-xs font-bold uppercase tracking-widest text-gray-600 border-2 border-gray-400 bg-white px-4 py-2 rounded-full">
                                Coming Soon
                            </span>
                        </div>
                    </div>
                    
                    <div class="text-gray-800 leading-relaxed">
                        <p class="mb-5 font-medium text-base sm:text-lg">
                            This Is What America Has Become examines a nation in gradual decline, unraveling not through a single crisis but through overlapping failures of trust, governance, economy, and shared identity.
                        </p>
                        
                        <button 
                            @click="synopsisOpen = !synopsisOpen"
                            class="font-sans text-sm font-semibold text-gray-900 hover:text-gray-700 underline underline-offset-4 transition-all duration-300 hover:scale-105 mb-4"
                        >
                            <span x-show="!synopsisOpen">Read full synopsis</span>
                            <span x-show="synopsisOpen">Close synopsis</span>
                        </button>
                        
                        <div 
                            x-show="synopsisOpen"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-2"
                            class="space-y-4 pt-6 border-t-2 border-gray-900/20 text-sm sm:text-base"
                        >
                            <p class="font-medium">
                                Through narrative storytelling and historical reflection, the book argues that America is divided by competing realities, paralyzed by political gridlock, hollowed by economic inequality, and weakened by the erosion of community and common truth.
                            </p>
                            <p class="font-light">
                                The book explores how civic rituals endure while belief fades, how the American Dream has become fragile and unevenly accessible, and how institutions once trusted to serve the public now struggle for legitimacy. Grounded in the lived experiences of workers, veterans, families, and communities, it reveals the human cost of stagnation, isolation, and abandonment.
                            </p>
                            <p class="font-light">
                                Tracing a self-reinforcing spiral of mistrust, inequality, and institutional decay, the book warns that no republic can endure without faith in its promises. Yet it resists despair, insisting that renewal remains possible if Americans choose courage, accountability, and collective responsibility over cynicism.
                            </p>
                            <p class="font-light">
                                Neither partisan nor prescriptive, this book is a civic reckoning—asking whether America will continue reciting its ideals as ritual, or act to rebuild the trust and shared purpose required for the republic to endure.
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <!-- The Legend of Ndike - COMING SOON -->
            <article 
                x-data="{ synopsisOpen: false }"
                x-intersect="synopsisOpen = false"
                class="book-card bg-white/90 rounded-lg shadow-xl border-2 border-gray-900/10 overflow-hidden animate-fade-in-up"
                style="animation-delay: 0.4s"
            >
                <div class="p-6 sm:p-8 lg:p-10">
                    <div class="mb-6">
                        <img 
                            src="{{ asset('uploads/theLegendofNdike.jpeg') }}" 
                            alt="The Legend of Ndike book cover"
                            class="book-cover w-full max-w-[280px] mx-auto shadow-2xl mb-6"
                            loading="lazy"
                        >
                        <div class="text-center mb-4">
                            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 mb-3 leading-tight">
                                The Legend of Ndike
                            </h2>
                            <span class="inline-block text-[10px] sm:text-xs font-bold uppercase tracking-widest text-gray-600 border-2 border-gray-400 bg-white px-4 py-2 rounded-full">
                                Coming Soon
                            </span>
                        </div>
                    </div>
                    
                    <div class="text-gray-800 leading-relaxed">
                        <p class="mb-5 font-medium text-base sm:text-lg">
                            Where Harry Potter introduced a hidden magical world, The Legend of Ndike reveals something closer—and more dangerous: the magic buried inside the real one.
                        </p>
                        
                        <button 
                            @click="synopsisOpen = !synopsisOpen"
                            class="font-sans text-sm font-semibold text-gray-900 hover:text-gray-700 underline underline-offset-4 transition-all duration-300 hover:scale-105 mb-4"
                        >
                            <span x-show="!synopsisOpen">Read full synopsis</span>
                            <span x-show="synopsisOpen">Close synopsis</span>
                        </button>
                        
                        <div 
                            x-show="synopsisOpen"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-2"
                            class="space-y-4 pt-6 border-t-2 border-gray-900/20 text-sm sm:text-base"
                        >
                            <p class="font-medium">
                                At St. Magnus Magnus Academy, an ancient boarding school built on tradition and discipline, boys are trained to lead and girls are taught to stay quiet. Silence is praised as excellence. Questioning the system is quietly punished.
                            </p>
                            <p class="font-light">
                                When twelve-year-old Ndike arrives, she immediately notices the imbalance—the iron gates carved with the faces of past champions, all boys; teachers who reward confidence in boys and call it disruption in girls; classmates who mock her simply for speaking her name.
                            </p>
                            <p class="font-light">
                                Unlike Harry Potter, Ndike is not invited into magic.<br>
                                She becomes it.
                            </p>
                            <p class="font-light">
                                As the school prepares for its most celebrated tradition—the Festival of Masks—Ndike begins to experience unsettling moments: words appearing in her notebook, lights flickering when she's humiliated, objects responding when she speaks the truth. With the help of her loyal friend Amara, she uncovers evidence of a girl erased from the school's history.
                            </p>
                            <p class="font-light">
                                When Ndike is publicly humiliated at the Festival and refuses to apologize, her defiance awakens a power that doesn't destroy—but reveals. Labeled dangerous, she is put on trial before the entire school, where her voice sparks a reckoning that forces tradition itself to change.
                            </p>
                            <p class="font-light">
                                The Legend of Ndike is a bold middle-grade fantasy about voice, justice, and the power of truth—designed to grow with its readers and resonate worldwide.
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <!-- He Never Said a Word - COMING SOON -->
            <article 
                x-data="{ synopsisOpen: false }"
                x-intersect="synopsisOpen = false"
                class="book-card bg-white/90 rounded-lg shadow-xl border-2 border-gray-900/10 overflow-hidden animate-fade-in-up"
                style="animation-delay: 0.5s"
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
                            <h2 class="text-xl sm:text-2xl lg:text-3xl font-bold text-gray-900 mb-3 leading-tight">
                                He Never Said a Word
                            </h2>
                            <span class="inline-block text-[10px] sm:text-xs font-bold uppercase tracking-widest text-gray-600 border-2 border-gray-400 bg-white px-4 py-2 rounded-full">
                                Coming Soon
                            </span>
                        </div>
                    </div>
                    
                    <div class="text-gray-800 leading-relaxed">
                        <p class="mb-5 font-medium text-base sm:text-lg">
                            He Never Said a Word is a literary nonfiction exploration of the silent emotional lives of men who are praised for their strength while quietly unraveling inside.
                        </p>
                        
                        <button 
                            @click="synopsisOpen = !synopsisOpen"
                            class="font-sans text-sm font-semibold text-gray-900 hover:text-gray-700 underline underline-offset-4 transition-all duration-300 hover:scale-105 mb-4"
                        >
                            <span x-show="!synopsisOpen">Read full synopsis</span>
                            <span x-show="synopsisOpen">Close synopsis</span>
                        </button>
                        
                        <div 
                            x-show="synopsisOpen"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-2"
                            class="space-y-4 pt-6 border-t-2 border-gray-900/20 text-sm sm:text-base"
                        >
                            <p class="font-medium">
                                Through a series of intimate, scene-driven vignettes, the book follows a composite figure—He—as he moves through work, love, fatherhood, loss, and responsibility without ever voicing what hurts.
                            </p>
                            <p class="font-light">
                                Each chapter reveals how silence is learned early and reinforced by culture, turning humor, endurance, and productivity into masks that conceal loneliness, fear, grief, and doubt. What appears as stability on the outside slowly becomes isolation within. Over time, that silence exacts a heavy cost—on the body, on relationships, and on a man's sense of self.
                            </p>
                            <p class="font-light">
                                Rather than offering advice or easy solutions, the book bears witness to the moments where silence nearly destroys—and the quiet, human moments where it finally breaks. A late-night message. A single honest sentence. A breath taken out loud. In those moments, something shifts.
                            </p>
                            <p class="font-light">
                                Ultimately, He Never Said a Word reframes masculinity, suggesting that true strength is not found in holding everything in, but in the courage to speak, to be seen, and to let someone else carry part of the weight.
                            </p>
                        </div>
                    </div>
                </div>
            </article>

            <!-- Connected but Lonely - COMING SOON -->
            <article 
                x-data="{ synopsisOpen: false }"
                x-intersect="synopsisOpen = false"
                class="book-card bg-white/90 rounded-lg shadow-xl border-2 border-gray-900/10 overflow-hidden animate-fade-in-up"
                style="animation-delay: 0.6s"
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
                            <h2 class="text-2xl lg:text-3xl font-light text-gray-900 mb-2 leading-tight">
                                Connected but Lonely
                            </h2>
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
                        
                        <button 
                            @click="synopsisOpen = !synopsisOpen"
                            class="font-sans text-sm font-semibold text-gray-900 hover:text-gray-700 underline underline-offset-4 transition-all duration-300 hover:scale-105 mb-4"
                        >
                            <span x-show="!synopsisOpen">Read full synopsis</span>
                            <span x-show="synopsisOpen">Close synopsis</span>
                        </button>
                        
                        <div 
                            x-show="synopsisOpen"
                            x-transition:enter="transition ease-out duration-500"
                            x-transition:enter-start="opacity-0 translate-y-2"
                            x-transition:enter-end="opacity-100 translate-y-0"
                            x-transition:leave="transition ease-in duration-300"
                            x-transition:leave-start="opacity-100 translate-y-0"
                            x-transition:leave-end="opacity-0 translate-y-2"
                            class="space-y-4 pt-6 border-t-2 border-gray-900/20 text-sm sm:text-base"
                        >
                            <p class="font-medium">
                                We live in a world where we are always online, always reachable, always surrounded by voices—yet so many of us feel unseen, unheard, and deeply alone. Through psychological insight, emotional storytelling, and honest reflection, this book unpacks why modern connection often leaves us emptier than before, and why belonging cannot be built on likes, messages, or surface-level interactions.
                            </p>
                            <p class="font-light">
                                S.J. TreveN takes the reader on a transformative journey—examining how technology, social expectations, comparison, trauma, and unspoken emotional needs fracture our sense of self and disconnect us from others. More importantly, the book shows that loneliness is not a personal failure, but a human signal: a call to return to authenticity, vulnerability, and meaningful connection.
                            </p>
                            <p class="font-light">
                                This is not a book about "fixing" yourself. It is a book about remembering who you are, understanding why you feel the way you do, and learning how to create relationships—starting with yourself—that are rooted in truth, presence, and genuine belonging.
                            </p>
                            <p class="font-light">
                                For anyone who has ever felt alone in a crowded room, invisible online, or disconnected despite being surrounded by people, Connected but Lonely offers clarity, compassion, and a path back to feeling truly seen.
                            </p>
                        </div>
                    </div>
                </div>
            </article>
        </div>
    </section>
@endsection
