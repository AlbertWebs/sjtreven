<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=5, user-scalable=yes">
    <meta name="theme-color" content="#fbbf24">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-title" content="SJ Treven">
    <meta name="format-detection" content="telephone=no">
    <meta name="msapplication-TileColor" content="#fbbf24">
    <meta name="msapplication-config" content="/browserconfig.xml">
    
    <!-- Primary Meta Tags / SEO -->
    <title>@yield('title', 'SJ Treven - Author')</title>
    <meta name="title" content="@yield('meta_title', 'SJ Treven - Author | Literary Works Exploring Human Experience')">
    <meta name="description" content="@yield('meta_description', 'SJ Treven - Author website featuring literary works exploring human experience, resilience, and connection. Discover books on burnout, loneliness, masculinity, and more.')">
    <meta name="keywords" content="@yield('meta_keywords', 'SJ Treven, author, books, literature, human experience, burnout, loneliness, masculinity, literary nonfiction, fantasy, The Human Reset, RyXXa')">
    <meta name="author" content="SJ Treven">
    <meta name="robots" content="index, follow">
    <meta name="language" content="English">
    <meta name="revisit-after" content="7 days">
    
    <!-- Open Graph / Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:title" content="@yield('og_title', 'SJ Treven - Author | Literary Works')">
    <meta property="og:description" content="@yield('og_description', 'Exploring the quiet spaces between words, where meaning lives and stories breathe.')">
    <meta property="og:image" content="@yield('og_image', url(asset('favicon/icon.jpeg')))">
    <meta property="og:image:width" content="1200">
    <meta property="og:image:height" content="630">
    <meta property="og:image:alt" content="SJ Treven - Author">
    <meta property="og:site_name" content="SJ Treven">
    <meta property="og:locale" content="en_US">
    
    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:url" content="{{ url()->current() }}">
    <meta name="twitter:title" content="@yield('twitter_title', 'SJ Treven - Author')">
    <meta name="twitter:description" content="@yield('twitter_description', 'Exploring the quiet spaces between words, where meaning lives and stories breathe.')">
    <meta name="twitter:image" content="@yield('twitter_image', url(asset('favicon/icon.jpeg')))">
    <meta name="twitter:image:alt" content="SJ Treven - Author">
    
    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link rel="icon" type="image/jpeg" href="{{ asset('favicon/icon.jpeg') }}">
    <link rel="apple-touch-icon" href="{{ asset('favicon/icon.jpeg') }}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('favicon/icon.jpeg') }}">
    <link rel="icon" type="image/jpeg" sizes="32x32" href="{{ asset('favicon/icon.jpeg') }}">
    <link rel="icon" type="image/jpeg" sizes="16x16" href="{{ asset('favicon/icon.jpeg') }}">
    
    <!-- PWA Manifest -->
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    
    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=crimson-text:400,600|inter:300,400,500,600" rel="stylesheet" />
    
    <!-- Alpine.js -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    
    <!-- Styles -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    
    <!-- Service Worker Registration -->
    <script>
        if ('serviceWorker' in navigator) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/sw.js')
                    .then(function(registration) {
                        console.log('ServiceWorker registration successful');
                    })
                    .catch(function(err) {
                        console.log('ServiceWorker registration failed');
                    });
            });
        }
    </script>
    
    <!-- PWA Install Prompt -->
    <script>
        let deferredPrompt;
        let installBannerShown = localStorage.getItem('pwa-install-dismissed') === 'true';
        
        // Capture the beforeinstallprompt event
        window.addEventListener('beforeinstallprompt', (e) => {
            e.preventDefault();
            deferredPrompt = e;
            
            // Show install banner if not dismissed
            if (!installBannerShown) {
                setTimeout(() => {
                    showInstallBanner();
                }, 3000); // Show after 3 seconds
            }
        });
        
        // Show install banner
        function showInstallBanner() {
            const banner = document.getElementById('pwa-install-banner');
            if (banner && !installBannerShown) {
                banner.classList.remove('hidden');
                banner.classList.add('animate-slide-up');
            }
        }
        
        // Install button click handler
        function installPWA() {
            if (deferredPrompt) {
                deferredPrompt.prompt();
                deferredPrompt.userChoice.then((choiceResult) => {
                    if (choiceResult.outcome === 'accepted') {
                        console.log('User accepted the install prompt');
                    }
                    deferredPrompt = null;
                    hideInstallBanner();
                });
            }
        }
        
        // Dismiss banner
        function dismissInstallBanner() {
            const banner = document.getElementById('pwa-install-banner');
            if (banner) {
                banner.classList.add('hidden');
                localStorage.setItem('pwa-install-dismissed', 'true');
                installBannerShown = true;
            }
        }
        
        // Check if already installed
        window.addEventListener('appinstalled', () => {
            console.log('PWA was installed');
            hideInstallBanner();
            deferredPrompt = null;
        });
        
        function hideInstallBanner() {
            const banner = document.getElementById('pwa-install-banner');
            if (banner) {
                banner.classList.add('hidden');
            }
        }
        
        // iOS Safari detection and instructions
        function isIOS() {
            return /iPad|iPhone|iPod/.test(navigator.userAgent) && !window.MSStream;
        }
        
        function showIOSInstructions() {
            const iosBanner = document.getElementById('pwa-ios-install');
            if (iosBanner && !localStorage.getItem('pwa-ios-dismissed')) {
                iosBanner.classList.remove('hidden');
                iosBanner.classList.add('animate-slide-up');
            }
        }
        
        if (isIOS()) {
            window.addEventListener('load', () => {
                setTimeout(showIOSInstructions, 3000);
            });
        }
        
        function dismissIOSBanner() {
            const iosBanner = document.getElementById('pwa-ios-install');
            if (iosBanner) {
                iosBanner.classList.add('hidden');
                localStorage.setItem('pwa-ios-dismissed', 'true');
            }
        }
    </script>
    
    <style>
        @media (-webkit-min-device-pixel-ratio: 2), (min-resolution: 192dpi) {
            /* Retina display optimizations */
            body {
                -webkit-font-smoothing: antialiased;
                -moz-osx-font-smoothing: grayscale;
            }
        }
        
        [x-cloak] { display: none !important; }
        
        body {
            font-family: 'Crimson Text', serif;
            letter-spacing: 0.01em;
            background: linear-gradient(135deg, #fef3c7 0%, #fde68a 25%, #fcd34d 50%, #fbbf24 75%, #f59e0b 100%);
            background-attachment: fixed;
            min-height: 100vh;
        }
        
        .font-sans {
            font-family: 'Inter', sans-serif;
        }
        
        /* Animated background pattern */
        .bg-pattern {
            background-image: 
                radial-gradient(circle at 20% 50%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 80% 80%, rgba(255, 255, 255, 0.1) 0%, transparent 50%),
                radial-gradient(circle at 40% 20%, rgba(255, 255, 255, 0.05) 0%, transparent 50%);
            animation: patternMove 20s ease-in-out infinite;
        }
        
        @keyframes patternMove {
            0%, 100% { background-position: 0% 0%, 100% 100%, 50% 50%; }
            50% { background-position: 100% 100%, 0% 0%, 25% 75%; }
        }
        
        /* Book cover animations */
        .book-cover {
            transition: all 0.6s cubic-bezier(0.34, 1.56, 0.64, 1);
            image-rendering: -webkit-optimize-contrast;
            image-rendering: crisp-edges;
        }
        
        .book-cover:hover {
            transform: translateY(-8px) scale(1.05) rotate(2deg);
            box-shadow: 0 25px 50px -12px rgba(0, 0, 0, 0.3);
        }
        
        .book-card {
            transition: all 0.5s cubic-bezier(0.34, 1.56, 0.64, 1);
            backdrop-filter: blur(10px);
        }
        
        .book-card:hover {
            transform: translateY(-4px) scale(1.02);
            box-shadow: 0 20px 40px -10px rgba(0, 0, 0, 0.25);
        }
        
        /* Scroll animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(30px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .animate-fade-in-up {
            animation: fadeInUp 0.8s ease-out forwards;
        }
        
        /* Grid layout */
        @media (min-width: 1024px) {
            .book-grid {
                display: grid;
                grid-template-columns: repeat(2, 1fr);
                gap: 3rem;
            }
        }
        
        @media (min-width: 1280px) {
            .book-grid {
                gap: 4rem;
            }
        }
        
        /* Navigation animations */
        .nav-link {
            position: relative;
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            padding: 8px 16px;
            border-radius: 8px;
            overflow: hidden;
        }
        
        .nav-link::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: left 0.5s ease;
        }
        
        .nav-link:hover::before {
            left: 100%;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%) scaleX(0);
            width: 80%;
            height: 3px;
            background: linear-gradient(90deg, #fbbf24, #f59e0b, #d97706);
            transition: transform 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            border-radius: 2px;
            box-shadow: 0 2px 8px rgba(251, 191, 36, 0.4);
        }
        
        .nav-link:hover::after,
        .nav-link.active::after {
            transform: translateX(-50%) scaleX(1);
        }
        
        .nav-link:hover {
            transform: translateY(-3px) scale(1.05);
            background: rgba(255, 255, 255, 0.2);
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        
        .nav-link.active {
            background: rgba(255, 255, 255, 0.3);
            font-weight: 600;
        }
        
        /* Menu item icons */
        .nav-icon {
            display: inline-block;
            margin-right: 6px;
            transition: transform 0.3s ease;
        }
        
        .nav-link:hover .nav-icon {
            transform: rotate(10deg) scale(1.2);
        }
        
        .nav-link.active .nav-icon {
            transform: scale(1.1);
        }
        
        /* Bottom navigation for mobile */
        .bottom-nav {
            position: fixed;
            bottom: 0;
            left: 0;
            right: 0;
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(20px);
            border-top: 1px solid rgba(0, 0, 0, 0.1);
            z-index: 100;
            box-shadow: 0 -4px 20px rgba(0, 0, 0, 0.1);
        }
        
        .bottom-nav-item {
            transition: all 0.4s cubic-bezier(0.34, 1.56, 0.64, 1);
            position: relative;
            border-radius: 12px;
            padding: 8px 12px;
            border: 1px solid rgba(0, 0, 0, 0.05);
        }
        
        .bottom-nav-item:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 50%;
            transform: translateY(-50%);
            width: 1px;
            height: 60%;
            background: rgba(0, 0, 0, 0.08);
        }
        
        .bottom-nav-item::before {
            content: '';
            position: absolute;
            inset: 0;
            border-radius: 12px;
            background: linear-gradient(135deg, rgba(251, 191, 36, 0.2), rgba(245, 158, 11, 0.2));
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .bottom-nav-item.active {
            color: #111827;
        }
        
        .bottom-nav-item.active::before {
            opacity: 1;
        }
        
        .bottom-nav-item.active::after {
            content: '';
            position: absolute;
            top: -3px;
            left: 50%;
            transform: translateX(-50%);
            width: 50px;
            height: 4px;
            background: linear-gradient(90deg, #fbbf24, #f59e0b);
            border-radius: 0 0 4px 4px;
            box-shadow: 0 2px 8px rgba(251, 191, 36, 0.5);
        }
        
        .bottom-nav-item:hover {
            transform: translateY(-4px) scale(1.1);
            background: rgba(255, 255, 255, 0.3);
        }
        
        .bottom-nav-item:active {
            transform: scale(0.9);
        }
        
        .bottom-nav-item svg {
            transition: all 0.3s ease;
        }
        
        .bottom-nav-item:hover svg {
            transform: scale(1.2) rotate(5deg);
        }
        
        .bottom-nav-item.active svg {
            transform: scale(1.15);
        }
        
        /* Floating animation */
        @keyframes float {
            0%, 100% { transform: translateY(0px); }
            50% { transform: translateY(-10px); }
        }
        
        .float-animation {
            animation: float 3s ease-in-out infinite;
        }
        
        /* Pulse animation */
        @keyframes pulse {
            0%, 100% { opacity: 1; }
            50% { opacity: 0.7; }
        }
        
        .pulse-animation {
            animation: pulse 2s ease-in-out infinite;
        }
        
        /* Content spacing for bottom nav */
        @media (max-width: 1023px) {
            main {
                padding-bottom: 80px;
            }
        }
        
        /* PWA Install Banner */
        .pwa-install-banner {
            position: fixed;
            bottom: 80px;
            left: 50%;
            transform: translateX(-50%);
            z-index: 99;
            max-width: 90%;
            width: 100%;
            max-width: 400px;
        }
        
        @keyframes slideUp {
            from {
                opacity: 0;
                transform: translateX(-50%) translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateX(-50%) translateY(0);
            }
        }
        
        .animate-slide-up {
            animation: slideUp 0.5s ease-out forwards;
        }
        
        @media (min-width: 1024px) {
            .pwa-install-banner {
                bottom: 20px;
            }
        }
    </style>
    @stack('styles')
</head>
<body class="text-gray-900 antialiased bg-pattern" x-data="{ mobileMenuOpen: false }">
    <!-- Header -->
    <header class="sticky top-0 bg-white/90 backdrop-blur-xl z-50 border-b border-black/10 shadow-sm">
        <nav class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-4 lg:py-6">
            <div class="flex items-center justify-between">
                <a href="{{ route('home') }}" class="text-xl lg:text-2xl font-semibold text-gray-900 hover:text-gray-700 transition-all duration-300 hover:scale-105">
                    SJ Treven
                </a>
                
                <!-- Desktop Menu -->
                <div class="hidden lg:flex items-center space-x-2">
                    <a href="{{ route('home') }}" class="nav-link font-sans text-sm font-semibold text-gray-900 {{ request()->routeIs('home') ? 'active' : '' }}">
                        <span class="nav-icon">🏠</span>
                        <span>Home</span>
                    </a>
                    <a href="{{ route('about') }}" class="nav-link font-sans text-sm font-semibold text-gray-900 {{ request()->routeIs('about') ? 'active' : '' }}">
                        <span class="nav-icon">👤</span>
                        <span>About</span>
                    </a>
                    <a href="{{ route('books') }}" class="nav-link font-sans text-sm font-semibold text-gray-900 {{ request()->routeIs('books') ? 'active' : '' }}">
                        <span class="nav-icon">📚</span>
                        <span>Books</span>
                    </a>
                    <a href="{{ route('articles') }}" class="nav-link font-sans text-sm font-semibold text-gray-900 {{ request()->routeIs('articles') ? 'active' : '' }}">
                        <span class="nav-icon">📝</span>
                        <span>Articles</span>
                    </a>
                    <a href="{{ route('apps') }}" class="nav-link font-sans text-sm font-semibold text-gray-900 {{ request()->routeIs('apps') ? 'active' : '' }}">
                        <span class="nav-icon">📱</span>
                        <span>Apps</span>
                    </a>
                    <a href="{{ route('contacts') }}" class="nav-link font-sans text-sm font-semibold text-gray-900 {{ request()->routeIs('contacts') ? 'active' : '' }}">
                        <span class="nav-icon">✉️</span>
                        <span>Contact</span>
                    </a>
                </div>
                
                <!-- Mobile Menu Button -->
                <button 
                    @click="mobileMenuOpen = !mobileMenuOpen"
                    class="lg:hidden text-gray-900 hover:text-gray-700 transition-all duration-300 active:scale-95"
                    aria-label="Toggle menu"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path x-show="!mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
                        <path x-show="mobileMenuOpen" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
            
            <!-- Mobile Menu -->
            <div 
                x-show="mobileMenuOpen"
                x-transition:enter="transition ease-out duration-400"
                x-transition:enter-start="opacity-0 -translate-y-4 scale-95"
                x-transition:enter-end="opacity-100 translate-y-0 scale-100"
                x-transition:leave="transition ease-in duration-250"
                x-transition:leave-start="opacity-100 translate-y-0 scale-100"
                x-transition:leave-end="opacity-0 -translate-y-4 scale-95"
                class="lg:hidden mt-4 space-y-2 pb-4"
            >
                <a href="{{ route('home') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg font-sans text-sm font-semibold text-gray-900 hover:bg-white/30 transition-all duration-300 hover:translate-x-2 hover:scale-105 {{ request()->routeIs('home') ? 'bg-white/40 font-bold' : '' }}">
                    <span class="text-lg">🏠</span>
                    <span>Home</span>
                </a>
                <a href="{{ route('about') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg font-sans text-sm font-semibold text-gray-900 hover:bg-white/30 transition-all duration-300 hover:translate-x-2 hover:scale-105 {{ request()->routeIs('about') ? 'bg-white/40 font-bold' : '' }}">
                    <span class="text-lg">👤</span>
                    <span>About Author</span>
                </a>
                <a href="{{ route('books') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg font-sans text-sm font-semibold text-gray-900 hover:bg-white/30 transition-all duration-300 hover:translate-x-2 hover:scale-105 {{ request()->routeIs('books') ? 'bg-white/40 font-bold' : '' }}">
                    <span class="text-lg">📚</span>
                    <span>Books</span>
                </a>
                <a href="{{ route('articles') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg font-sans text-sm font-semibold text-gray-900 hover:bg-white/30 transition-all duration-300 hover:translate-x-2 hover:scale-105 {{ request()->routeIs('articles') ? 'bg-white/40 font-bold' : '' }}">
                    <span class="text-lg">📝</span>
                    <span>Articles & Guides</span>
                </a>
                <a href="{{ route('apps') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg font-sans text-sm font-semibold text-gray-900 hover:bg-white/30 transition-all duration-300 hover:translate-x-2 hover:scale-105 {{ request()->routeIs('apps') ? 'bg-white/40 font-bold' : '' }}">
                    <span class="text-lg">📱</span>
                    <span>Apps</span>
                </a>
                <a href="{{ route('contacts') }}" class="flex items-center gap-3 px-4 py-3 rounded-lg font-sans text-sm font-semibold text-gray-900 hover:bg-white/30 transition-all duration-300 hover:translate-x-2 hover:scale-105 {{ request()->routeIs('contacts') ? 'bg-white/40 font-bold' : '' }}">
                    <span class="text-lg">✉️</span>
                    <span>Contacts</span>
                </a>
            </div>
        </nav>
    </header>

    <!-- Main Content -->
    <main>
        @yield('content')
    </main>

    <!-- Bottom Navigation for Mobile -->
    <nav class="lg:hidden bottom-nav">
        <div class="flex items-center justify-around py-2">
            <a href="{{ route('home') }}" class="bottom-nav-item flex flex-col items-center justify-center px-3 py-2 text-gray-700 {{ request()->routeIs('home') ? 'active' : '' }}">
                <span class="text-2xl mb-1">🏠</span>
                <span class="text-[10px] font-bold">Home</span>
            </a>
            <a href="{{ route('about') }}" class="bottom-nav-item flex flex-col items-center justify-center px-3 py-2 text-gray-700 {{ request()->routeIs('about') ? 'active' : '' }}">
                <span class="text-2xl mb-1">👤</span>
                <span class="text-[10px] font-bold">About</span>
            </a>
            <a href="{{ route('books') }}" class="bottom-nav-item flex flex-col items-center justify-center px-3 py-2 text-gray-700 {{ request()->routeIs('books') ? 'active' : '' }}">
                <span class="text-2xl mb-1">📚</span>
                <span class="text-[10px] font-bold">Books</span>
            </a>
            <a href="{{ route('articles') }}" class="bottom-nav-item flex flex-col items-center justify-center px-3 py-2 text-gray-700 {{ request()->routeIs('articles') ? 'active' : '' }}">
                <span class="text-2xl mb-1">📝</span>
                <span class="text-[10px] font-bold">Articles</span>
            </a>
            <a href="{{ route('contacts') }}" class="bottom-nav-item flex flex-col items-center justify-center px-3 py-2 text-gray-700 {{ request()->routeIs('contacts') ? 'active' : '' }}">
                <span class="text-2xl mb-1">✉️</span>
                <span class="text-[10px] font-bold">Contact</span>
            </a>
        </div>
    </nav>

    <!-- PWA Install Banner (Android/Chrome) -->
    <div id="pwa-install-banner" class="hidden pwa-install-banner">
        <div class="bg-white/95 backdrop-blur-xl rounded-lg shadow-2xl border-2 border-gray-900/20 p-4 mx-4">
            <div class="flex items-start gap-3">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-900 text-sm mb-1">Install App</h3>
                    <p class="text-xs text-gray-600 mb-3">Add SJ Treven to your home screen for quick access</p>
                    <div class="flex gap-2">
                        <button 
                            onclick="installPWA()"
                            class="flex-1 font-sans text-xs font-bold text-white bg-gray-900 hover:bg-gray-800 px-4 py-2 rounded-lg transition-all duration-300 hover:scale-105"
                        >
                            Install
                        </button>
                        <button 
                            onclick="dismissInstallBanner()"
                            class="font-sans text-xs font-semibold text-gray-600 hover:text-gray-900 px-4 py-2 rounded-lg transition-colors"
                        >
                            Later
                        </button>
                    </div>
                </div>
                <button 
                    onclick="dismissInstallBanner()"
                    class="flex-shrink-0 text-gray-400 hover:text-gray-600 transition-colors"
                    aria-label="Close"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- PWA Install Banner (iOS Safari) -->
    <div id="pwa-ios-install" class="hidden pwa-install-banner">
        <div class="bg-white/95 backdrop-blur-xl rounded-lg shadow-2xl border-2 border-gray-900/20 p-4 mx-4">
            <div class="flex items-start gap-3">
                <div class="flex-shrink-0">
                    <div class="w-12 h-12 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-lg flex items-center justify-center">
                        <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"></path>
                        </svg>
                    </div>
                </div>
                <div class="flex-1">
                    <h3 class="font-bold text-gray-900 text-sm mb-1">Add to Home Screen</h3>
                    <p class="text-xs text-gray-600 mb-2">Tap the share button <span class="font-bold">□</span> then "Add to Home Screen"</p>
                    <ol class="text-xs text-gray-600 space-y-1 mb-3 list-decimal list-inside">
                        <li>Tap the share icon at the bottom</li>
                        <li>Scroll and tap "Add to Home Screen"</li>
                        <li>Tap "Add" to confirm</li>
                    </ol>
                    <button 
                        onclick="dismissIOSBanner()"
                        class="w-full font-sans text-xs font-semibold text-gray-600 hover:text-gray-900 px-4 py-2 rounded-lg transition-colors border border-gray-300"
                    >
                        Got it
                    </button>
                </div>
                <button 
                    onclick="dismissIOSBanner()"
                    class="flex-shrink-0 text-gray-400 hover:text-gray-600 transition-colors"
                    aria-label="Close"
                >
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="border-t border-black/10 mt-20 lg:mt-32 bg-white/50 backdrop-blur-sm">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-12 py-8 lg:py-12">
            <p class="text-xs text-gray-700 text-center font-medium tracking-wider">
                © {{ date('Y') }} SJ Treven. All rights reserved.
            </p>
        </div>
    </footer>
</body>
</html>
