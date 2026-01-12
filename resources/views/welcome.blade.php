<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="SJ Treven - Author website featuring literary works exploring human experience, resilience, and connection.">
    
    <title>SJ Treven</title>
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=crimson-text:400,600|inter:300,400,500" rel="stylesheet" />
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <style>
        [x-cloak] { display: none !important; }
        body {
            font-family: 'Crimson Text', serif;
            letter-spacing: 0.01em;
        }
        .font-sans {
            font-family: 'Inter', sans-serif;
        }
        .book-cover {
            transition: all 0.5s cubic-bezier(0.4, 0, 0.2, 1);
        }
        .book-cover:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 20px 40px -12px rgba(0, 0, 0, 0.2);
        }
        .book-card {
            transition: all 0.4s ease;
        }
        .book-card:hover {
            transform: translateY(-2px);
        }
        @media (min-width: 1024px) {
            .book-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 4rem;
            }
        }
    </style>
</head>
<body class="bg-[#fafafa] text-gray-900 antialiased">
    <!-- Header -->
    <header class="border-b border-gray-200/50 sticky top-0 bg-white/80 backdrop-blur-xl z-50">
        <nav class="max-w-7xl mx-auto px-8 lg:px-12 py-6 lg:py-8">
            <div class="flex items-center justify-between">
                <a href="/" class="text-xl font-light text-gray-900 hover:text-gray-600 transition-colors tracking-wide">
                    SJ Treven
                </a>
            </div>
        </nav>
    </header>

    <!-- Hero Section -->
    <section class="max-w-7xl mx-auto px-8 lg:px-12 pt-20 lg:pt-32 pb-16 lg:pb-24">
        <div class="max-w-4xl">
            <h1 class="text-5xl lg:text-7xl font-light text-gray-900 mb-6 leading-[1.1] tracking-tight">
                SJ Treven
            </h1>
            <p class="text-xl lg:text-2xl text-gray-600 leading-relaxed font-light max-w-2xl">
                Exploring the quiet spaces between words, where meaning lives and stories breathe.
            </p>
        </div>
    </section>

    <!-- Books Section -->
    <main class="max-w-7xl mx-auto px-8 lg:px-12 pb-24 lg:pb-32">
        <div class="book-grid">
            <!-- The Human Reset - OUT NOW -->
            <article 
                x-data="{ synopsisOpen: false }"
                class="book-card bg-white rounded-sm shadow-sm border border-gray-100 overflow-hidden"
            >
                <div class="p-8 lg:p-10">
                    <div class="mb-6">
                        <img 
                            src="{{ asset('uploads/humanReset.jpeg') }}" 
                            alt="The Human Reset book cover"
                            class="book-cover w-full max-w-[280px] mx-auto shadow-xl mb-6"
                        >
                        <div class="text-center mb-4">
                            <h2 class="text-2xl lg:text-3xl font-light text-gray-900 mb-3 leading-tight">
                                The Human Reset
                            </h2>
                            <span class="inline-block text-[9px] font-medium uppercase tracking-widest text-gray-700 border border-gray-300 bg-gray-50 px-3 py-1.5">
                                Out Now
                            </span>
                        </div>
                    </div>
                    
                    <div class="text-gray-700 leading-relaxed">
                        <p class="mb-5 font-light text-base">
                            The Human Reset is a call to a world that has confused exhaustion with success and productivity with human worth.
                        </p>
                        
                        <button 
                            @click="synopsisOpen = !synopsisOpen"
                            class="font-sans text-xs font-normal text-gray-500 hover:text-gray-900 underline underline-offset-4 transition-colors tracking-wide mb-4"
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
                            class="space-y-4 pt-6 border-t border-gray-100 text-sm"
                        >
                            <p class="font-light">
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
                            <p class="font-normal italic text-gray-800 pt-2">
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
                class="book-card bg-white rounded-sm shadow-sm border border-gray-100 overflow-hidden"
            >
                <div class="p-8 lg:p-10">
                    <div class="mb-6">
                        <img 
                            src="{{ asset('uploads/Ryxxa.jpeg') }}" 
                            alt="RyXXa book cover"
                            class="book-cover w-full max-w-[280px] mx-auto shadow-xl mb-6"
                        >
                        <div class="text-center mb-4">
                            <h2 class="text-2xl lg:text-3xl font-light text-gray-900 mb-3 leading-tight">
                                RyXXa
                            </h2>
                            <span class="inline-block text-[9px] font-medium uppercase tracking-widest text-gray-400 border border-gray-200 bg-white px-3 py-1.5">
                                Coming Soon
                            </span>
                        </div>
                    </div>
                    
                    <div class="text-gray-700 leading-relaxed">
                        <p class="mb-5 font-light text-base">
                            RyXXa is a book about the moment after everything falls apart — when progress stops, certainty disappears, and continuing feels heavier than quitting.
                        </p>
                        
                        <button 
                            @click="synopsisOpen = !synopsisOpen"
                            class="font-sans text-xs font-normal text-gray-500 hover:text-gray-900 underline underline-offset-4 transition-colors tracking-wide mb-4"
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
                            class="space-y-4 pt-6 border-t border-gray-100 text-sm"
                        >
                            <p class="font-light">
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
                class="book-card bg-white rounded-sm shadow-sm border border-gray-100 overflow-hidden"
            >
                <div class="p-8 lg:p-10">
                    <div class="mb-6">
                        <img 
                            src="{{ asset('uploads/WhatAmericaHasBecome.jpeg') }}" 
                            alt="This Is What America Has Become book cover"
                            class="book-cover w-full max-w-[280px] mx-auto shadow-xl mb-6"
                        >
                        <div class="text-center mb-4">
                            <h2 class="text-2xl lg:text-3xl font-light text-gray-900 mb-3 leading-tight">
                                This Is What America Has Become
                            </h2>
                            <span class="inline-block text-[9px] font-medium uppercase tracking-widest text-gray-400 border border-gray-200 bg-white px-3 py-1.5">
                                Coming Soon
                            </span>
                        </div>
                    </div>
                    
                    <div class="text-gray-700 leading-relaxed">
                        <p class="mb-5 font-light text-base">
                            This Is What America Has Become examines a nation in gradual decline, unraveling not through a single crisis but through overlapping failures of trust, governance, economy, and shared identity.
                        </p>
                        
                        <button 
                            @click="synopsisOpen = !synopsisOpen"
                            class="font-sans text-xs font-normal text-gray-500 hover:text-gray-900 underline underline-offset-4 transition-colors tracking-wide mb-4"
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
                            class="space-y-4 pt-6 border-t border-gray-100 text-sm"
                        >
                            <p class="font-light">
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
                class="book-card bg-white rounded-sm shadow-sm border border-gray-100 overflow-hidden"
            >
                <div class="p-8 lg:p-10">
                    <div class="mb-6">
                        <img 
                            src="{{ asset('uploads/theLegendofNdike.jpeg') }}" 
                            alt="The Legend of Ndike book cover"
                            class="book-cover w-full max-w-[280px] mx-auto shadow-xl mb-6"
                        >
                        <div class="text-center mb-4">
                            <h2 class="text-2xl lg:text-3xl font-light text-gray-900 mb-3 leading-tight">
                                The Legend of Ndike
                            </h2>
                            <span class="inline-block text-[9px] font-medium uppercase tracking-widest text-gray-400 border border-gray-200 bg-white px-3 py-1.5">
                                Coming Soon
                            </span>
                        </div>
                    </div>
                    
                    <div class="text-gray-700 leading-relaxed">
                        <p class="mb-5 font-light text-base">
                            Where Harry Potter introduced a hidden magical world, The Legend of Ndike reveals something closer—and more dangerous: the magic buried inside the real one.
                        </p>
                        
                        <button 
                            @click="synopsisOpen = !synopsisOpen"
                            class="font-sans text-xs font-normal text-gray-500 hover:text-gray-900 underline underline-offset-4 transition-colors tracking-wide mb-4"
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
                            class="space-y-4 pt-6 border-t border-gray-100 text-sm"
                        >
                            <p class="font-light">
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
                class="book-card bg-white rounded-sm shadow-sm border border-gray-100 overflow-hidden"
            >
                <div class="p-8 lg:p-10">
                    <div class="mb-6">
                        <img 
                            src="{{ asset('uploads/heNeverSaidaWord.jpeg') }}" 
                            alt="He Never Said a Word book cover"
                            class="book-cover w-full max-w-[280px] mx-auto shadow-xl mb-6"
                        >
                        <div class="text-center mb-4">
                            <h2 class="text-2xl lg:text-3xl font-light text-gray-900 mb-3 leading-tight">
                                He Never Said a Word
                            </h2>
                            <span class="inline-block text-[9px] font-medium uppercase tracking-widest text-gray-400 border border-gray-200 bg-white px-3 py-1.5">
                                Coming Soon
                            </span>
                        </div>
                    </div>
                    
                    <div class="text-gray-700 leading-relaxed">
                        <p class="mb-5 font-light text-base">
                            He Never Said a Word is a literary nonfiction exploration of the silent emotional lives of men who are praised for their strength while quietly unraveling inside.
                        </p>
                        
                        <button 
                            @click="synopsisOpen = !synopsisOpen"
                            class="font-sans text-xs font-normal text-gray-500 hover:text-gray-900 underline underline-offset-4 transition-colors tracking-wide mb-4"
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
                            class="space-y-4 pt-6 border-t border-gray-100 text-sm"
                        >
                            <p class="font-light">
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
                class="book-card bg-white rounded-sm shadow-sm border border-gray-100 overflow-hidden"
            >
                <div class="p-8 lg:p-10">
                    <div class="mb-6">
                        <img 
                            src="{{ asset('uploads/connectedButLonely.jpeg') }}" 
                            alt="Connected but Lonely book cover"
                            class="book-cover w-full max-w-[280px] mx-auto shadow-xl mb-6"
                        >
                        <div class="text-center mb-4">
                            <h2 class="text-2xl lg:text-3xl font-light text-gray-900 mb-2 leading-tight">
                                Connected but Lonely
                            </h2>
                            <p class="text-sm text-gray-500 font-light italic mb-3">
                                Why You Feel Alone and How to Truly Belong
                            </p>
                            <span class="inline-block text-[9px] font-medium uppercase tracking-widest text-gray-400 border border-gray-200 bg-white px-3 py-1.5">
                                Coming Soon
                            </span>
                        </div>
                    </div>
                    
                    <div class="text-gray-700 leading-relaxed">
                        <p class="mb-5 font-light text-base">
                            Connected but Lonely: Why You Feel Alone and How to Truly Belong is a powerful exploration of one of the quietest epidemics of our time: loneliness in an age of constant connection.
                        </p>
                        
                        <button 
                            @click="synopsisOpen = !synopsisOpen"
                            class="font-sans text-xs font-normal text-gray-500 hover:text-gray-900 underline underline-offset-4 transition-colors tracking-wide mb-4"
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
                            class="space-y-4 pt-6 border-t border-gray-100 text-sm"
                        >
                            <p class="font-light">
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
    </main>

    <!-- Footer -->
    <footer class="border-t border-gray-200/50 mt-32 lg:mt-40">
        <div class="max-w-7xl mx-auto px-8 lg:px-12 py-12 lg:py-16">
            <p class="text-xs text-gray-400 text-center font-light tracking-wider uppercase">
                © {{ date('Y') }} SJ Treven. All rights reserved.
            </p>
        </div>
    </footer>
</body>
</html>
