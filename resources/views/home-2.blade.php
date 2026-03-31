<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Steel Networking Summit 2026 | VIP Experience</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://unpkg.com/@alpinejs/intersect@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,700;0,800;1,600&display=swap"
        rel="stylesheet" />
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.0.4/css/intlTelInput.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.0.4/js/intlTelInput.min.js"></script>

    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.3.1/dist/js/tom-select.complete.min.js"></script>

    <script>
        tailwind.config = {
            darkMode: 'class',
            theme: {
                extend: {
                    colors: {
                        "slate-950": "#020617",
                        "brand-teal": "#0f4c5c",
                        "brand-teal-light": "#2dd4bf",
                    },
                    fontFamily: {
                        sans: ["Inter", "sans-serif"],
                        serif: ["Playfair Display", "serif"],
                    },
                },
            },
        };
    </script>

    <script>
        // On page load or when changing themes, best to add inline in `head` to avoid FOUC
        if (localStorage.getItem('theme') === 'dark' || (!('theme' in localStorage) && window.matchMedia(
                '(prefers-color-scheme: dark)').matches)) {
            document.documentElement.classList.add('dark')
        } else {
            document.documentElement.classList.remove('dark')
        }
    </script>

    <style>
        html {
            scroll-behavior: smooth;
        }

        @media (prefers-reduced-motion: reduce) {
            html {
                scroll-behavior: auto;
            }
        }

        [x-cloak] {
            display: none !important;
        }

        .glass {
            background: rgba(255, 255, 255, 0.03);
            backdrop-filter: blur(32px);
            -webkit-backdrop-filter: blur(32px);
            border: 1px solid rgba(255, 255, 255, 0.05);
            transition: all 0.3s ease;
        }

        .dark .glass {
            background: #123e4a;
            border: 1px solid rgba(255, 255, 255, 0.05);
        }

        html:not(.dark) .glass {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.25);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
        }

        .text-gradient-platinum {
            background: linear-gradient(to right, #f1f5f9, #cbd5e1, #64748b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        html:not(.dark) .text-gradient-platinum {
            background: linear-gradient(to right, #1e293b, #334155, #64748b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-gradient {
            background: linear-gradient(to bottom, rgba(255, 255, 255, 0.4) 0%, rgba(255, 255, 255, 0.7) 50%, rgba(255, 255, 255, 1) 100%);
        }

        .dark .hero-gradient {
            background: linear-gradient(to bottom, rgba(2, 6, 23, 0.7) 0%, rgba(2, 6, 23, 0.5) 50%, rgba(2, 6, 23, 1) 100%);
        }

        .glow-hover:hover {
            border-color: rgba(148, 163, 184, 0.4);
            box-shadow: 0 0 20px rgba(148, 163, 184, 0.1);
        }

        /* Intl Tel Input & Tom Select Dark overrides */
        .iti {
            width: 100%;
        }

        .iti__country-list {
            background-color: #020617;
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: #fff;
            border-radius: 0.5rem;
        }

        .iti__country.iti__highlight {
            background-color: rgba(255, 255, 255, 0.1);
        }

        .iti__search-input {
            background-color: #0f172a !important;
            color: #fff !important;
            border: 1px solid rgba(255, 255, 255, 0.2) !important;
            border-radius: 0.25rem !important;
            padding: 10px !important;
            margin: 5px !important;
            width: calc(100% - 10px) !important;
        }

        .iti__selected-country {
            opacity: 0.8;
        }

        .iti__selected-country:hover {
            opacity: 1;
            background-color: transparent !important;
        }

        .ts-control {
            background: transparent !important;
            border: none !important;
            border-bottom: 1px solid rgba(255, 255, 255, 0.2) !important;
            color: #fff !important;
            padding: 0.75rem 0 !important;
            border-radius: 0 !important;
            box-shadow: none !important;
            min-height: 46px !important;
        }

        .ts-control>input {
            color: #fff !important;
        }

        .ts-dropdown {
            background: #020617 !important;
            border: 1px solid rgba(255, 255, 255, 0.1) !important;
            border-radius: 0.5rem !important;
            margin-top: 5px !important;
            z-index: 1000 !important;
        }

        .ts-dropdown .option {
            color: #cbd5e1 !important;
            padding: 0.5rem 1rem !important;
        }

        .ts-dropdown .option.active,
        .ts-dropdown .option:hover {
            background: rgba(255, 255, 255, 0.1) !important;
            color: #fff !important;
        }

        .ts-wrapper.single .ts-control::after {
            border-color: rgba(255, 255, 255, 0.4) transparent transparent transparent !important;
            right: 0 !important;
        }

        .ts-control.has-items {
            padding-bottom: 0px !important;
        }

        .ts-control .item {
            color: #fff !important;
            font-size: 1rem;
        }

        /* Hide original select to prevent double lines */
        select.tomselected {
            display: none !important;
        }

        /* Browser Autofill Styling Fix */
        input:-webkit-autofill,
        input:-webkit-autofill:hover,
        input:-webkit-autofill:focus,
        input:-webkit-autofill:active {
            -webkit-box-shadow: 0 0 0 30px #0f172a inset !important;
            -webkit-text-fill-color: white !important;
            transition: background-color 5000s ease-in-out 0s;
        }

        /* Force floating labels up on autofill */
        input:-webkit-autofill+label,
        input:-internal-autofill-selected+label,
        input:not(:placeholder-shown)+label,
        label.active-label {
            transform: translateY(-1.5rem) scale(0.75) !important;
            color: #94a3b8 !important;
            transform-origin: 0 0 !important;
            z-index: 10 !important;
        }

        .animate-fade-in {
            animation: fade-in 1s ease-out forwards;
        }

        @keyframes fade-in {
            from {
                opacity: 0;
                transform: translateY(20px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .scrollbar-hide::-webkit-scrollbar {
            display: none;
        }

        .scrollbar-hide {
            -ms-overflow-style: none;
            /* IE and Edge */
            scrollbar-width: none;
            /* Firefox */
        }
    </style>
    <script id="browser-logger-active">
        (function () {
            const ENDPOINT = 'http://127.0.0.1:8000/_boost/browser-logs';
            const logQueue = [];
            let flushTimeout = null;

            console.log('🔍 Browser logger active (MCP server detected). Posting to: ' + ENDPOINT);

            // Store original console methods
            const originalConsole = {
                log: console.log,
                info: console.info,
                error: console.error,
                warn: console.warn,
                table: console.table
            };

            // Helper to safely stringify values
            function safeStringify(obj) {
                const seen = new WeakSet();
                return JSON.stringify(obj, (key, value) => {
                    if (typeof value === 'object' && value !== null) {
                        if (seen.has(value)) return '[Circular]';
                        seen.add(value);
                    }
                    if (value instanceof Error) {
                        return {
                            name: value.name,
                            message: value.message,
                            stack: value.stack
                        };
                    }
                    return value;
                });
            }

            // Batch and send logs
            function flushLogs() {
                if (logQueue.length === 0) return;

                const batch = logQueue.splice(0, logQueue.length);

                fetch(ENDPOINT, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    },
                    body: JSON.stringify({ logs: batch })
                }).catch(err => {
                    // Silently fail to avoid infinite loops
                    originalConsole.error('Failed to send logs:', err);
                });
            }

            // Debounced flush (100ms)
            function scheduleFlush() {
                if (flushTimeout) clearTimeout(flushTimeout);
                flushTimeout = setTimeout(flushLogs, 100);
            }

            // Intercept console methods
            ['log', 'info', 'error', 'warn', 'table'].forEach(method => {
                console[method] = function (...args) {
                    // Call original method
                    originalConsole[method].apply(console, args);

                    // Capture log data
                    try {
                        logQueue.push({
                            type: method,
                            timestamp: new Date().toISOString(),
                            data: args.map(arg => {
                                try {
                                    return typeof arg === 'object' ? JSON.parse(safeStringify(arg)) : arg;
                                } catch (e) {
                                    return String(arg);
                                }
                            }),
                            url: window.location.href,
                            userAgent: navigator.userAgent
                        });

                        scheduleFlush();
                    } catch (e) {
                        // Fail silently
                    }
                };
            });

            // Global error handlers for uncaught errors
            const originalOnError = window.onerror;
            window.onerror = function boostErrorHandler(errorMsg, url, lineNumber, colNumber, error) {
                try {
                    logQueue.push({
                        type: 'uncaught_error',
                        timestamp: new Date().toISOString(),
                        data: [{
                            message: errorMsg,
                            filename: url,
                            lineno: lineNumber,
                            colno: colNumber,
                            error: error ? {
                                name: error.name,
                                message: error.message,
                                stack: error.stack
                            } : null
                        }],
                        url: window.location.href,
                        userAgent: navigator.userAgent
                    });

                    scheduleFlush();
                } catch (e) {
                    // Fail silently
                }

                // Call original handler if it exists
                if (originalOnError && typeof originalOnError === 'function') {
                    return originalOnError(errorMsg, url, lineNumber, colNumber, error);
                }

                // Let the error continue to propagate
                return false;
            }
            window.addEventListener('error', (event) => {
                try {
                    logQueue.push({
                        type: 'window_error',
                        timestamp: new Date().toISOString(),
                        data: [{
                            message: event.message,
                            filename: event.filename,
                            lineno: event.lineno,
                            colno: event.colno,
                            error: event.error ? {
                                name: event.error.name,
                                message: event.error.message,
                                stack: event.error.stack
                            } : null
                        }],
                        url: window.location.href,
                        userAgent: navigator.userAgent
                    });

                    scheduleFlush();
                } catch (e) {
                    // Fail silently
                }

                // Let the error continue to propagate
                return false;
            });
            window.addEventListener('unhandledrejection', (event) => {
                try {
                    logQueue.push({
                        type: 'error',
                        timestamp: new Date().toISOString(),
                        data: [{
                            message: 'Unhandled Promise Rejection',
                            reason: event.reason instanceof Error ? {
                                name: event.reason.name,
                                message: event.reason.message,
                                stack: event.reason.stack
                            } : event.reason
                        }],
                        url: window.location.href,
                        userAgent: navigator.userAgent
                    });

                    scheduleFlush();
                } catch (e) {
                    // Fail silently
                }

                // Let the rejection continue to propagate
                return false;
            });

            // Flush on page unload
            window.addEventListener('beforeunload', () => {
                if (logQueue.length > 0) {
                    navigator.sendBeacon(ENDPOINT, JSON.stringify({ logs: logQueue }));
                }
            });
        })();
    </script>
</head>

<body @scroll.window="scrolled = (window.pageYOffset > 20); showToTop = (window.pageYOffset > 420)"
    class="bg-white dark:bg-slate-950 text-slate-700 dark:text-slate-200 font-sans antialiased overflow-x-hidden min-h-screen"
    x-data="{ 
        mobileMenu: false, 
        scrolled: false, 
        showToTop: false, 
        modalOpen: @js($errors->any() || session()->has('status')),
        theme: localStorage.getItem('theme') || (window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'),
        toggleTheme() {
            this.theme = this.theme === 'dark' ? 'light' : 'dark';
            localStorage.setItem('theme', this.theme);
            if (this.theme === 'dark') {
                document.documentElement.classList.add('dark');
            } else {
                document.documentElement.classList.remove('dark');
            }
        }
    }">
    <nav :class="scrolled ? 'top-4' : 'top-6'"
        class="fixed left-1/2 -translate-x-1/2 w-[92%] max-w-7xl z-50 transition-all duration-500 ease-in-out">

        <div class="relative flex items-stretch justify-between w-full pr-6">

            <div
                class="absolute inset-y-0 right-0 left-6 md:left-12 glass dark:bg-slate-800/20 dark:border dark:border-white/5 rounded-full shadow-2xl pointer-events-none -z-10">
            </div>

            <div class="relative z-10 flex items-center cursor-pointer pl-0 py-0">
                <img alt="Steel Summits Logo"
                    class="h-[64px] md:h-[72px] w-auto object-contain transition-transform duration-300"
                    src="{{ asset('images/steel-networking-logo-main.webp') }}">
            </div>

            <div
                class="relative z-10 hidden md:flex items-center space-x-8 text-[11px] font-bold tracking-[0.1em] uppercase py-4">
                <a class="text-slate-700 dark:text-slate-200 hover:text-brand-teal dark:hover:text-white transition-all"
                    href="#agenda">Agenda</a>
                <a class="text-slate-700 dark:text-slate-200 hover:text-brand-teal dark:hover:text-white transition-all"
                    href="#about">About Us</a>
                <a class="text-slate-700 dark:text-slate-200 hover:text-brand-teal dark:hover:text-white transition-all"
                    href="#who-attends">Attendees</a>
                <a class="text-slate-700 dark:text-slate-200 hover:text-brand-teal dark:hover:text-white transition-all"
                    href="#keynote-speakers">Keynote Speakers</a>
                <a class="text-slate-700 dark:text-slate-200 hover:text-brand-teal dark:hover:text-white transition-all"
                    href="#sponsorship">Sponsorship</a>
                <a class="text-slate-700 dark:text-slate-200 hover:text-brand-teal dark:hover:text-white transition-all"
                    href="#venue">Venue</a>
            </div>

            <div class="relative z-10 flex items-center space-x-6 py-4">
                <!-- Theme Toggle -->
                <button @click="toggleTheme()"
                    class="w-8 h-8 md:w-10 md:h-10 flex items-center justify-center rounded-full text-slate-600 dark:text-slate-300 hover:bg-slate-200 dark:hover:bg-white/10 transition-all focus:outline-none">
                    <span class="material-symbols-outlined text-[18px] md:text-[20px] leading-none block" x-show="theme === 'dark'">dark_mode</span>
                    <span class="material-symbols-outlined text-[18px] md:text-[20px] leading-none block" x-show="theme === 'light'">light_mode</span>
                </button>

                <button @click="modalOpen = true"
                    class="hidden sm:block border border-slate-500/40 dark:border-white/30 text-slate-900 dark:text-white text-[11px] font-bold px-6 py-2 rounded-full uppercase tracking-wider hover:bg-slate-900/10 dark:hover:bg-white/10 transition-all duration-300">
                    Register Interest
                </button>
                <button @click="mobileMenu = !mobileMenu" class="md:hidden text-slate-900 dark:text-white pl-2">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="!mobileMenu">
                        <path d="M4 8h16M4 16h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                        </path>
                    </svg>
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="mobileMenu"
                        style="display: none;">
                        <path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round"
                            stroke-width="1.5"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div class="md:hidden mt-4 glass rounded-2xl p-6 flex flex-col space-y-4 shadow-2xl" x-show="mobileMenu"
            x-transition:enter="transition ease-out duration-300" x-transition:enter-end="opacity-100 scale-100"
            x-transition:enter-start="opacity-0 scale-95" style="display: none;">
            <a @click="mobileMenu = false"
                class="text-lg font-serif font-bold text-slate-900 dark:text-white hover:text-slate-600 dark:hover:text-slate-300"
                href="#agenda">Agenda</a>
            <a @click="mobileMenu = false"
                class="text-lg font-serif font-bold text-slate-900 dark:text-white hover:text-slate-600 dark:hover:text-slate-300"
                href="#about">About Us</a>
            <a @click="mobileMenu = false"
                class="text-lg font-serif font-bold text-slate-900 dark:text-white hover:text-slate-600 dark:hover:text-slate-300"
                href="#who-attends">Attendees</a>
            <a @click="mobileMenu = false"
                class="text-lg font-serif font-bold text-slate-900 dark:text-white hover:text-slate-600 dark:hover:text-slate-300"
                href="#keynote-speakers">Keynote
                Speakers</a>
            <a @click="mobileMenu = false"
                class="text-lg font-serif font-bold text-slate-900 dark:text-white hover:text-slate-600 dark:hover:text-slate-300"
                href="#sponsorship">Sponsorship</a>
            <a @click="mobileMenu = false"
                class="text-lg font-serif font-bold text-slate-900 dark:text-white hover:text-slate-600 dark:hover:text-slate-300"
                href="#venue">Venue</a>
            <button @click="modalOpen = true; mobileMenu = false"
                class="w-full border border-slate-400/30 dark:border-slate-400/30 text-slate-900 dark:text-white font-bold py-4 rounded-xl hover:bg-slate-900/5 dark:hover:bg-white/5">Register
                Interest</button>
        </div>
    </nav>
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden" id="main">
        <div class="absolute inset-0 z-0 bg-slate-950">
            <video autoplay loop muted playsinline class="w-full h-full object-cover opacity-80 dark:opacity-90 scale-105" poster="{{ asset('images/hero-istanbul.webp') }}">
                <source src="{{ asset('video/istanbul.mp4') }}" type="video/mp4" />
                <img alt="Istanbul Night" class="w-full h-full object-cover scale-110" src="{{ asset('images/hero-istanbul.webp') }}" />
            </video>
            <div class="absolute inset-0 hero-gradient opacity-90 dark:opacity-50"></div>
            <div class="absolute inset-0 bg-white/20 dark:bg-slate-950/30 mix-blend-overlay"></div>
        </div>

        <div class="relative z-10 text-center px-6 max-w-6xl mx-auto pt-24 md:pt-40 pb-32 md:pb-0">

            <div
                class="inline-block px-4 md:px-5 py-1 md:py-1.5 border border-slate-300 dark:border-white/10 rounded-full mb-6 md:mb-8 mt-4 md:mt-8 glass">
                <span
                    class="text-slate-800 dark:text-slate-300 text-[9px] md:text-xs font-extra-bold tracking-[0.2em] md:tracking-[0.3em] uppercase">Invitation
                    Only - Istanbul 2026</span>
            </div>

            <h1 class="text-5xl md:text-8xl font-serif font-extrabold mb-6 md:mb-8 leading-tight text-slate-900 dark:text-white pb-2 md:pb-4">
                Istanbul <br />
                <span
                    class="inline-block bg-clip-text text-transparent overflow-visible bg-gradient-to-r from-slate-600 via-slate-400 to-slate-800 dark:from-slate-100 dark:via-slate-300 dark:to-slate-500 italic pb-2 md:pb-6">Steel
                    Summit</span> <br />
                2026
            </h1>

            <p class="text-base md:text-2xl text-slate-700 dark:text-slate-400 mb-8 md:mb-12 font-light max-w-3xl mx-auto leading-relaxed">
                The world's most exclusive assembly for steel industry titans.
                <br class="hidden md:block" />
                <span class="text-slate-900 dark:text-slate-300 font-medium">25 - 27 October 2026</span> | Swissotel Istanbul
            </p>

            <div class="mx-auto mb-4 md:mb-16 flex w-full max-w-xl items-center justify-center"
                x-data="countdownTimer()" x-init="start()">
                <template x-for="(item, index) in remaining" :key="item.label">
                    <div :class="index > 0 ? 'border-l border-slate-300 dark:border-white/10' : ''"
                        class="flex w-1/4 min-w-0 flex-col items-center px-1 md:px-8">
                        <span
                            class="text-3xl md:text-6xl font-serif font-light text-slate-900 dark:text-white mb-1 md:mb-2 tabular-nums w-[2.5ch] text-center"
                            x-text="item.value">00</span>
                        <span class="text-[9px] md:text-[10px] uppercase tracking-[0.2em] text-slate-500 font-medium"
                            x-text="item.label">Days</span>
                    </div>
                </template>
            </div>

            <button @click="modalOpen = true"
                class="hidden md:inline-flex items-center justify-center px-12 py-6 bg-gradient-to-r from-slate-200 to-slate-400 text-slate-950 font-extrabold tracking-[0.25em] text-lg rounded-2xl shadow-[0_0_30px_rgba(148,163,184,0.5)] hover:scale-105 active:scale-95 transition-all duration-500 uppercase">Pre-Register
                Now</button>
        </div>
    </section>

    <!-- Mobile Fixed CTA -->
    <div class="md:hidden fixed bottom-0 left-0 w-full z-50 p-4 bg-gradient-to-t from-slate-950 via-slate-950/90 to-transparent pt-10 pointer-events-none"
        style="padding-bottom: max(0.75rem, env(safe-area-inset-bottom));">
        <button @click="modalOpen = true"
            class="w-full flex items-center justify-center px-6 py-4 bg-gradient-to-r from-slate-200 to-slate-400 text-slate-950 font-extrabold tracking-[0.2em] text-[14px] md:text-[15px] rounded-xl shadow-[0_0_30px_rgba(148,163,184,0.3)] active:scale-95 transition-all duration-300 uppercase pointer-events-auto">
            Pre-Register Now
        </button>
    </div>

    <section class="py-24 bg-white dark:bg-slate-950 px-6 relative overflow-hidden transition-colors duration-500" id="agenda"
        x-data="{ activeTab: 1, revealed: false }" x-intersect.once="revealed = true">
        <!-- Ambient Glow -->
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-600/5 blur-[120px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-6xl mx-auto relative z-10 transition-all duration-1000 transform"
            :class="revealed ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
            <div class="mb-12 text-center">
                <h2 class="text-4xl md:text-6xl font-serif font-extrabold text-slate-900 dark:text-white mb-4 italic uppercase tracking-wider">STEEL Summit
                    Program</h2>
                <p class="text-slate-600 dark:text-slate-400 text-sm md:text-base font-medium">25-27 October 2026 | Swissotel Istanbul</p>
            </div>

            <div class="flex overflow-x-auto pb-4 mb-8 border-b border-slate-200 dark:border-white/10">
                <div class="flex space-x-6 md:space-x-12 mx-auto min-w-max">
                    <button
                        :class="activeTab === 1 ? 'text-slate-900 dark:text-white border-b-2 border-slate-900 dark:border-slate-300' : 'text-slate-400 dark:text-slate-500 border-b-2 border-transparent hover:text-slate-600 dark:hover:text-slate-300'"
                        @click="activeTab = 1" class="pb-4 text-xs md:text-sm font-bold tracking-[0.2em] uppercase transition-all">25
                        Oct | Sunday</button>
                    <button
                        :class="activeTab === 2 ? 'text-slate-900 dark:text-white border-b-2 border-slate-900 dark:border-slate-300' : 'text-slate-400 dark:text-slate-500 border-b-2 border-transparent hover:text-slate-600 dark:hover:text-slate-300'"
                        @click="activeTab = 2" class="pb-4 text-xs md:text-sm font-bold tracking-[0.2em] uppercase transition-all">26
                        Oct | Monday</button>
                    <button
                        :class="activeTab === 3 ? 'text-slate-900 dark:text-white border-b-2 border-slate-900 dark:border-slate-300' : 'text-slate-400 dark:text-slate-500 border-b-2 border-transparent hover:text-slate-600 dark:hover:text-slate-300'"
                        @click="activeTab = 3" class="pb-4 text-xs md:text-sm font-bold tracking-[0.2em] uppercase transition-all">27
                        Oct | Tuesday</button>
                </div>
            </div>

            <div class="space-y-4" x-show="activeTab === 1">
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">18:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">Networking on the Bosphorus
                    </h4>
                    <p class="text-slate-600 dark:text-slate-400 mt-2 font-light">Boat Tour and DJ Performance (Under the Sponsorship of X).</p>
                </div>
            </div>

            <div class="space-y-4" x-show="activeTab === 2">
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">09:00-09:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">Registration</h4>
                </div>
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">09:30-10:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">Opening Speeches</h4>
                </div>
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">10:00-11:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">1st Session: World Economic
                        Outlook and Steel Industry</h4>
                    <p class="text-slate-600 dark:text-slate-400 mt-2 font-light">Participants: POSCO, BAOW, TATA Steel, Nippon Steel, Marcegaglia
                        Steel, EZZ Steel, HBIS, ArcelorMittal, World Steel Association.</p>
                </div>
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">11:30-12:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">2nd Session: Steel in a High
                        Inflation World: Cost Pressure, Investment Risks, Strategic Responses</h4>
                    <p class="text-slate-600 dark:text-slate-400 mt-2 font-light">Participants: World Steel Dynamics Economist, Fastmarkets, Kallanish.
                    </p>
                </div>
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">12:30-14:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">Lunch and Networking</h4>
                    <p class="text-slate-600 dark:text-slate-400 mt-2 font-light">Under the Sponsorship of X.</p>
                </div>
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">14:00-15:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">3rd Session: The Rise of the
                        Asian Steel Industry: Production, Trade and Market Dynamics</h4>
                    <p class="text-slate-600 dark:text-slate-400 mt-2 font-light">Participants: ANN Steel, TATA Steel, SEAISI, BAOW, Nucor Steel,
                        Jindal Steel, HBIS, ArcelorMittal, Krakatau.</p>
                </div>
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">15:30-16:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">Coffee Break</h4>
                    <p class="text-slate-600 dark:text-slate-400 mt-2 font-light">Under the Sponsorship of X.</p>
                </div>
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">16:00-17:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">4th Session: Steel
                        Opportunities in MENA Region: Growth, Investment and Trade</h4>
                    <p class="text-slate-600 dark:text-slate-400 mt-2 font-light">Participants: Tosyalı Holding, Emirates Steel, Arab Iron and Steel
                        Union, Hadeed, EZZ Steel.</p>
                </div>
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">19:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">Gala Dinner and Networking
                        Cocktail</h4>
                    <p class="text-slate-600 dark:text-slate-400 mt-2 font-light">Under the Sponsorship of X.</p>
                </div>
            </div>

            <div class="space-y-4" x-show="activeTab === 3">
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">09:00-09:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">Registration</h4>
                </div>
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">09:30-10:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">Opening Speeches</h4>
                </div>
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">10:00-11:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">1st Session: Steel Market
                        Across America: Diverging Paths and Common Challenges</h4>
                    <p class="text-slate-600 dark:text-slate-400 mt-2 font-light">Participants: Nucor Corporation, Steelco, Cleveland-Cliffs, CAP
                        Acero, Ternium Argentina.</p>
                </div>
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">11:30-12:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">2nd Session: Navigating the
                        World Steel Trade: Trade Remedies, Protectionism, and the Future of Fair Competition</h4>
                    <p class="text-slate-600 dark:text-slate-400 mt-2 font-light">Participants: ArentFox, World Steel Dynamics, WTO, Fastmarkets.</p>
                </div>
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">12:30-14:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">Lunch and Networking</h4>
                    <p class="text-slate-600 dark:text-slate-400 mt-2 font-light">Under the Sponsorship of X.</p>
                </div>
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">14:00-15:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">3rd Session: Future of Steel
                        in Europe: Global Competition, Safeguard and Industrial Strategy</h4>
                    <p class="text-slate-600 dark:text-slate-400 mt-2 font-light">Participants: EUROFER, Marcegaglia Steel, Danieli, Metinvest, CELSA.
                    </p>
                </div>
                <div class="glass rounded-xl p-6 shadow-sm dark:shadow-none">
                    <p class="text-slate-500 dark:text-slate-300 text-xs uppercase tracking-[0.2em] mb-2 font-bold">15:30-17:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-slate-900 dark:text-white tracking-wide">4th Session: Steel in the New
                        Era: Green Transition and Intelligent Industry</h4>
                    <p class="text-slate-600 dark:text-slate-400 mt-2 font-light">Participants: McKinsey, SSAB, SMS Group, Primetals Technologies,
                        Danieli.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 bg-white dark:bg-slate-950 px-6 border-t border-slate-100 dark:border-white/5 relative overflow-hidden transition-colors duration-500" id="about"
        x-data="{ revealed: false }" x-intersect.once="revealed = true">
        <!-- Ambient Glow -->
        <div class="absolute top-1/2 -left-24 w-80 h-80 bg-brand-teal/5 dark:bg-brand-teal/10 blur-[100px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto relative z-10 transition-all duration-1000 transform"
            :class="revealed ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- Left Content -->
                <div class="space-y-8">
                    <div>
                        <span
                            class="text-[10px] md:text-xs uppercase tracking-[0.3em] text-cyan-600 dark:text-brand-teal-light font-bold mb-4 block">The
                            Legacy</span>
                        <h2 class="text-4xl md:text-6xl font-serif font-extrabold text-slate-900 dark:text-white uppercase tracking-wider mb-6">
                            About <br />
                            <span class="text-slate-500 italic">Us.</span>
                        </h2>
                        <p class="text-slate-600 dark:text-slate-400 text-lg md:text-xl font-light leading-relaxed">
                            The Steel Summits were created to meet the need for a truly global networking
                            conference that brings together all stakeholders across the international steel trade.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <p class="text-lg text-slate-700 dark:text-slate-300 italic border-l-4 border-brand-teal pl-6 py-2">
                            To create a truly global and integrated steel networking platform connecting producers,
                            traders, and logistics providers.
                        </p>

                        <div class="grid grid-cols-2 gap-8 pt-8 border-t border-slate-100 dark:border-white/5">
                            <div class="space-y-1">
                                <div class="text-3xl font-serif font-bold text-slate-900 dark:text-white">12+</div>
                                <div class="text-[10px] uppercase tracking-widest text-slate-500">Years Leadership</div>
                            </div>
                            <div class="space-y-1">
                                <div class="text-3xl font-serif font-bold text-slate-900 dark:text-white">500+</div>
                                <div class="text-[10px] uppercase tracking-widest text-slate-500">Global Delegates</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content: Premium Image -->
                <div class="relative group">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-brand-teal/10 to-purple-500/10 dark:from-brand-teal/20 dark:to-purple-500/20 rounded-[2rem] blur opacity-25 group-hover:opacity-50 transition duration-1000">
                    </div>
                    <div class="relative aspect-square rounded-[2rem] overflow-hidden border border-slate-200 dark:border-white/10">
                        <img src="{{ asset('images/about/steel-legacy.png') }}" alt="Steel Legacy"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000 scale-105 group-hover:scale-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/60 dark:from-slate-950/60 to-transparent"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- NEW: What to Expect Section -->
    <section class="py-32 bg-slate-50 dark:bg-slate-950 px-6 border-t border-slate-100 dark:border-white/5 overflow-hidden relative transition-colors duration-500">
        <div class="max-w-7xl mx-auto relative z-10 transition-all duration-1000 transform"
            :class="revealed ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- Left: Image -->
                <div class="relative group order-1">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-brand-teal/10 to-purple-500/10 dark:from-brand-teal/20 dark:to-purple-500/20 rounded-[2rem] blur opacity-25 group-hover:opacity-50 transition duration-1000">
                    </div>
                    <div class="relative aspect-[4/5] rounded-[2rem] overflow-hidden border border-slate-200 dark:border-white/10 shadow-2xl">
                        <img src="{{ asset('images/about/summit-experience.png') }}" alt="Conference Hall"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000 scale-105 group-hover:scale-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/80 dark:from-slate-950/80 via-white/20 dark:via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-8 left-8">
                            <p class="text-slate-900 dark:text-white font-serif italic text-xl">Reshaping Global Alliances</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="space-y-10 order-2">
                    <span
                        class="text-[10px] md:text-xs uppercase tracking-[0.3em] text-cyan-600 dark:text-brand-teal-light font-bold mb-4 block">Conference
                        Experience</span>

                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-slate-900 dark:text-white tracking-tight">
                        What to <span class="text-gradient-platinum">Expect?</span>
                    </h2>

                    <div class="space-y-8">
                        <!-- Feature 1 -->
                        <div class="flex items-start gap-6 group">
                            <div
                                class="w-12 h-12 rounded-2xl glass flex items-center justify-center group-hover:bg-brand-teal/20 transition-colors duration-500 shadow-sm dark:shadow-none">
                                <span class="material-symbols-outlined text-brand-teal-light">groups</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Industry Leaders</h4>
                                <p class="text-slate-600 dark:text-slate-300 font-light leading-relaxed">Leading companies, decision-makers,
                                    and opinion leaders shaping the industry from around the world will participate.</p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="flex items-start gap-6 group">
                            <div
                                class="w-12 h-12 rounded-2xl glass flex items-center justify-center group-hover:bg-brand-teal/20 transition-colors duration-500 shadow-sm dark:shadow-none">
                                <span class="material-symbols-outlined text-brand-teal-light">public</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold text-slate-900 dark:text-white mb-2">Global Markets</h4>
                                <p class="text-slate-600 dark:text-slate-300 font-light leading-relaxed">Up-to-date and in-depth insights
                                    into steel markets across all regions with a comprehensive view of the future.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 bg-slate-50 dark:bg-slate-950 px-6 border-t border-slate-100 dark:border-white/5 relative overflow-hidden transition-colors duration-500" id="keynote-speakers"
        x-data="{ revealed: false }" x-intersect.once="revealed = true">
        <!-- Ambient Glow -->
        <div
            class="absolute top-0 right-1/4 w-[600px] h-[600px] bg-slate-400/5 blur-[140px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto relative z-10 transition-all duration-1000 transform"
            :class="revealed ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
            <div class="mb-20 text-center">
                <span
                    class="text-[10px] md:text-xs uppercase tracking-[0.3em] text-cyan-600 dark:text-brand-teal-light font-bold mb-4 block">Keynote
                    Speakers</span>
                <h2 class="text-4xl md:text-6xl font-serif font-bold text-slate-900 dark:text-white max-w-4xl mx-auto leading-tight italic">
                    Industry Leaders <br class="hidden md:block" />
                    <span class="text-slate-500"> Shaping the Future</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div
                    class="glass p-6 flex flex-col sm:flex-row gap-6 items-center sm:items-start hover:bg-slate-900/5 dark:hover:bg-white/10 transition duration-300 group shadow-sm dark:shadow-xl dark:rounded-3xl">
                    <div
                        class="w-28 h-28 flex-shrink-0 rounded-full border-2 border-slate-200 dark:border-slate-500/50 group-hover:border-slate-400 dark:group-hover:border-slate-300 transition-colors overflow-hidden bg-slate-100 dark:bg-slate-800 flex items-center justify-center grayscale">
                        <img alt="Keynote speaker portrait" class="w-full h-full object-cover"
                            src="{{ asset('images/speaker-dalbeler.webp') }}" />
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white font-sans">Ugur Dalbeler</h3>
                        <p class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-3">CEO, Colakoglu Metalurji</p>
                        <p class="text-slate-700 dark:text-slate-400 text-sm leading-relaxed line-clamp-3">A distinguished leader in the
                            Turkish steel industry, driving strategic growth and sustainable production initiatives at
                            one of the nation's largest steel producers.</p>
                        <span
                            class="text-cyan-700 dark:text-slate-300 text-xs hover:text-slate-900 dark:hover:text-white mt-3 inline-block font-semibold tracking-wide cursor-pointer transition-colors">Read
                            Full Bio -&gt;</span>
                    </div>
                </div>

                <div
                    class="glass p-6 flex flex-col sm:flex-row gap-6 items-center sm:items-start hover:bg-slate-900/5 dark:hover:bg-white/10 transition duration-300 group shadow-sm dark:shadow-xl dark:rounded-3xl">
                    <div
                        class="w-28 h-28 flex-shrink-0 rounded-full border-2 border-slate-200 dark:border-slate-500/50 group-hover:border-slate-400 dark:group-hover:border-slate-300 transition-colors overflow-hidden bg-slate-100 dark:bg-slate-800 flex items-center justify-center grayscale">
                        <img alt="Keynote speaker portrait" class="w-full h-full object-cover"
                            src="{{ asset('images/speaker-dalbeler.webp') }}" />
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white font-sans">Ugur Dalbeler</h3>
                        <p class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-3">CEO, Colakoglu Metalurji</p>
                        <p class="text-slate-700 dark:text-slate-400 text-sm leading-relaxed line-clamp-3">Pioneering the integration of
                            advanced automation and eco-friendly technologies within heavy industrial manufacturing to
                            meet global decarbonization targets.</p>
                        <span
                            class="text-cyan-700 dark:text-slate-300 text-xs hover:text-slate-900 dark:hover:text-white mt-3 inline-block font-semibold tracking-wide cursor-pointer transition-colors">Read
                            Full Bio -&gt;</span>
                    </div>
                </div>

                <div
                    class="glass p-6 flex flex-col sm:flex-row gap-6 items-center sm:items-start hover:bg-slate-900/5 dark:hover:bg-white/10 transition duration-300 group shadow-sm dark:shadow-xl dark:rounded-3xl">
                    <div
                        class="w-28 h-28 flex-shrink-0 rounded-full border-2 border-slate-200 dark:border-slate-500/50 group-hover:border-slate-400 dark:group-hover:border-slate-300 transition-colors overflow-hidden bg-slate-100 dark:bg-slate-800 flex items-center justify-center grayscale">
                        <img alt="Keynote speaker portrait" class="w-full h-full object-cover"
                            src="{{ asset('images/speaker-dalbeler.webp') }}" />
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white font-sans">Ugur Dalbeler</h3>
                        <p class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-3">CEO, Colakoglu Metalurji</p>
                        <p class="text-slate-700 dark:text-slate-400 text-sm leading-relaxed line-clamp-3">Strategizing the future of
                            metallurgical supply chains, focusing on resilience and innovation in the face of shifting
                            geopolitical dynamics across Eurasia.</p>
                        <span
                            class="text-cyan-700 dark:text-slate-300 text-xs hover:text-slate-900 dark:hover:text-white mt-3 inline-block font-semibold tracking-wide cursor-pointer transition-colors">Read
                            Full Bio -&gt;</span>
                    </div>
                </div>

                <div
                    class="glass p-6 flex flex-col sm:flex-row gap-6 items-center sm:items-start hover:bg-slate-900/5 dark:hover:bg-white/10 transition duration-300 group shadow-sm dark:shadow-xl dark:rounded-3xl">
                    <div
                        class="w-28 h-28 flex-shrink-0 rounded-full border-2 border-slate-200 dark:border-slate-500/50 group-hover:border-slate-400 dark:group-hover:border-slate-300 transition-colors overflow-hidden bg-slate-100 dark:bg-slate-800 flex items-center justify-center grayscale">
                        <img alt="Keynote speaker portrait" class="w-full h-full object-cover"
                            src="{{ asset('images/speaker-dalbeler.webp') }}" />
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <h3 class="text-xl font-bold text-slate-900 dark:text-white font-sans">Ugur Dalbeler</h3>
                        <p class="text-slate-600 dark:text-slate-300 text-sm font-medium mb-3">CEO, Colakoglu Metalurji</p>
                        <p class="text-slate-700 dark:text-slate-400 text-sm leading-relaxed line-clamp-3">Advocating for digital
                            transformation and smart factory solutions to enhance operational efficiency and global
                            competitiveness in the steel sector.</p>
                        <span
                            class="text-cyan-700 dark:text-slate-300 text-xs hover:text-slate-900 dark:hover:text-white mt-3 inline-block font-semibold tracking-wide cursor-pointer transition-colors">Read
                            Full Bio -&gt;</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- Orijinal 'Who Attends' ve 'Why You Should Attend' bölümleri, geri dönülebilmek adına gizlenmiştir.
    <!-- BEGIN: Who Attends -->
    <section class="py-32 bg-slate-950 px-6 border-t border-white/5" id="who-attends">
        <div class="max-w-7xl mx-auto">
            <div class="mb-20 text-center">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-gradient-platinum mb-4 italic">Who Attends
                </h2>
                <p class="text-slate-400 text-lg font-light max-w-2xl mx-auto">A cross-disciplinary assembly of the
                    industry's primary stakeholders.</p>
            </div>
            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                <div class="glass p-6 rounded-2xl text-center group hover:bg-white/10 transition-all duration-300">
                    <span
                        class="material-symbols-outlined text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4 transition-colors">factory</span>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-300">Steel Producers</h4>
                </div>
                <div class="glass p-6 rounded-2xl text-center group hover:bg-white/10 transition-all duration-300">
                    <span
                        class="material-symbols-outlined text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4 transition-colors">local_shipping</span>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-300">Logistics</h4>
                </div>
                <div class="glass p-6 rounded-2xl text-center group hover:bg-white/10 transition-all duration-300">
                    <span
                        class="material-symbols-outlined text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4 transition-colors">account_balance</span>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-300">Financial Inst.</h4>
                </div>
                <div class="glass p-6 rounded-2xl text-center group hover:bg-white/10 transition-all duration-300">
                    <span
                        class="material-symbols-outlined text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4 transition-colors">analytics</span>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-300">Market Analysts</h4>
                </div>
                <div class="glass p-6 rounded-2xl text-center group hover:bg-white/10 transition-all duration-300">
                    <span
                        class="material-symbols-outlined text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4 transition-colors">construction</span>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-300">End Users</h4>
                </div>
                <div class="glass p-6 rounded-2xl text-center group hover:bg-white/10 transition-all duration-300">
                    <span
                        class="material-symbols-outlined text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4 transition-colors">recycling</span>
                    <h4 class="text-xs font-bold uppercase tracking-widest text-slate-300">Scrap Traders</h4>
                </div>
            </div>
        </div>
    </section>

    <!-- BEGIN: Why You Should Attend -->
    <section class="py-32 bg-slate-950 px-6 border-t border-white/5" id="why-attend">
        <div class="max-w-7xl mx-auto flex flex-col lg:flex-row items-center gap-16">
            <div class="lg:w-1/2 relative">
                <div class="absolute -inset-4 bg-slate-500/10 blur-3xl rounded-full"></div>
                <img alt="Strategic Networking"
                    class="relative rounded-3xl w-full h-[500px] object-cover border border-slate-700/50"
                    src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEinaNILYjhM6gt35xHARPVFW2C-g4W3JXREZybWOnjQ37MWhEGYZpZaHtHm3cdinNSpkfD-9KR41SdWgY3-W01Sr3MTtPWGTyADS-vSTFqUeSlljSMIo9w5LKcvBk3c7arntp3LANARHHsXfhbbz2yvzzB1jF9iwWP6WJ0AiJ4Yc804tRqGB1-o3DvFxao26oP3qI8O2nfpl6W1I9DJh6GAwPFLP4mJw91pa0zX5wBqbnJyDGAiqnmjSHoaQ0QMDcO35vF7uSYYo" />
            </div>
            <div class="lg:w-1/2">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-white mb-8">Elevate Your Strategy</h2>
                <ul class="space-y-6 mb-12">
                    <li class="flex items-start space-x-4">
                        <span class="material-symbols-outlined text-cyan-400 mt-1">insights</span>
                        <div>
                            <h4 class="text-lg font-bold text-slate-200">Proprietary Intelligence</h4>
                            <p class="text-slate-400 font-light">Gain access to exclusive data and forecasts not
                                available through public channels.</p>
                        </div>
                    </li>
                    <li class="flex items-start space-x-4">
                        <span class="material-symbols-outlined text-cyan-400 mt-1">handshake</span>
                        <div>
                            <h4 class="text-lg font-bold text-slate-200">Vetted B2B Network</h4>
                            <p class="text-slate-400 font-light">Direct introduction to C-level executives from the
                                world's largest steel producers.</p>
                        </div>
                    </li>
                    <li class="flex items-start space-x-4">
                        <span class="material-symbols-outlined text-cyan-400 mt-1">verified</span>
                        <div>
                            <h4 class="text-lg font-bold text-slate-200">Decarbonization Roadmap</h4>
                            <p class="text-slate-400 font-light">Real-world case studies on the transition to hydrogen
                                and green steel technology.</p>
                        </div>
                    </li>
                </ul>
                <button @click="modalOpen = true"
                    class="bg-white/5 border border-slate-600 px-10 py-4 rounded-xl text-white font-bold tracking-widest uppercase hover:bg-white/10 transition-all flex items-center gap-3 group">
                    Download Brochure
                    <span
                        class="material-symbols-outlined group-hover:translate-y-1 transition-transform">download</span>
                </button>
            </div>
        </div>
        </div>
    </section>
    --}}


    <!-- BEGIN: Who Attends -->
    <section class="py-32 bg-white dark:bg-slate-950 overflow-hidden relative transition-colors duration-500"
        id="who-attends" x-data="{ revealed: false, isDragging: false, startX: 0, scrollLeft: 0, scrollProgress: 0 }"
        x-intersect.once="revealed = true">
        <!-- Ambient Glow -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-600/5 blur-[120px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-6 mb-16 transition-all duration-1000 transform"
            :class="revealed ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
            <span
                class="text-[10px] md:text-xs uppercase tracking-[0.3em] text-cyan-600 dark:text-brand-teal-light font-bold mb-4 block">Global
                Pool</span>
            <h2 class="text-4xl md:text-7xl font-serif font-extrabold text-slate-900 dark:text-white mb-6 leading-tight">
                Summit <br class="hidden md:block" />
                <span class="text-slate-500 italic">Attendees</span>
            </h2>
            <p class="text-slate-600 dark:text-slate-400 text-lg md:text-2xl font-light max-w-2xl font-sans leading-relaxed">
                A cross-disciplinary assembly of the global steel industry's primary stakeholders.
            </p>
        </div>

        <!-- Apple Style Slider -->
        <div class="relative group">
            <!-- Horizontal Scroll Container -->
            <div x-ref="slider"
                @mousedown="isDragging = true; startX = $event.pageX - $el.offsetLeft; scrollLeft = $el.scrollLeft; $el.classList.add('cursor-grabbing'); $el.classList.remove('cursor-grab')"
                @mousemove="if (!isDragging) return; $event.preventDefault(); const x = $event.pageX - $el.offsetLeft; const walk = (x - startX) * 2; $el.scrollLeft = scrollLeft - walk;"
                @mouseup="isDragging = false; $el.classList.remove('cursor-grabbing'); $el.classList.add('cursor-grab')"
                @mouseleave="isDragging = false; $el.classList.remove('cursor-grabbing'); $el.classList.add('cursor-grab')"
                @scroll="scrollProgress = ($el.scrollLeft / ($el.scrollWidth - $el.clientWidth)) * 100"
                class="flex overflow-x-auto snap-x snap-mandatory scrollbar-hide space-x-5 px-[max(1.5rem,calc((100%-80rem)/2))] pb-12 cursor-grab transition-all select-none">

                <!-- Card 1: Producers -->
                <div class="flex-none w-[320px] md:w-[480px] snap-start group/card">
                    <div
                        class="relative aspect-[4/3] rounded-2xl md:rounded-[1.5rem] overflow-hidden glass shadow-2xl transition-transform duration-700 group-hover/card:scale-[1.02]">
                        <img src="{{ asset('images/attendees/producers_v2.png') }}" alt="Steel Producers"
                            class="absolute inset-0 w-full h-full object-cover grayscale group-hover/card:grayscale-0 transition-all duration-1000 group-hover/card:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/60 dark:from-slate-950/50 to-transparent"></div>
                    </div>
                    <div class="mt-8 px-4">
                        <h4 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white mb-3">Steel Producers</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-base md:text-lg font-light leading-relaxed">
                            Global manufacturers driving the industry forward with next-gen production tech.
                        </p>
                    </div>
                </div>

                <!-- Card 2: International Traders -->
                <div class="flex-none w-[320px] md:w-[480px] snap-start group/card">
                    <div
                        class="relative aspect-[4/3] rounded-2xl md:rounded-[1.5rem] overflow-hidden glass shadow-2xl transition-transform duration-700 group-hover/card:scale-[1.02]">
                        <img src="{{ asset('images/attendees/traders_v2.png') }}" alt="International Traders"
                            class="absolute inset-0 w-full h-full object-cover grayscale group-hover/card:grayscale-0 transition-all duration-1000 group-hover/card:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/60 dark:from-slate-950/50 to-transparent"></div>
                    </div>
                    <div class="mt-8 px-4">
                        <h4 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white mb-3">International Traders</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-base md:text-lg font-light leading-relaxed">
                            Strategic networkers connecting supply with demand across global corridors.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Logistics Providers -->
                <div class="flex-none w-[320px] md:w-[480px] snap-start group/card">
                    <div
                        class="relative aspect-[4/3] rounded-2xl md:rounded-[1.5rem] overflow-hidden glass shadow-2xl transition-transform duration-700 group-hover/card:scale-[1.02]">
                        <img src="{{ asset('images/attendees/logistics_v2.png') }}" alt="Logistics Providers"
                            class="absolute inset-0 w-full h-full object-cover grayscale group-hover/card:grayscale-0 transition-all duration-1000 group-hover/card:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/60 dark:from-slate-950/50 to-transparent"></div>
                    </div>
                    <div class="mt-8 px-4">
                        <h4 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white mb-3">Logistics Providers</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-base md:text-lg font-light leading-relaxed">
                            Architects of global supply chains, optimizing transit from mill to port.
                        </p>
                    </div>
                </div>

                <!-- Card 4: Financial Institutions -->
                <div class="flex-none w-[320px] md:w-[480px] snap-start group/card">
                    <div
                        class="relative aspect-[4/3] rounded-2xl md:rounded-[1.5rem] overflow-hidden glass shadow-2xl transition-transform duration-700 group-hover/card:scale-[1.02]">
                        <img src="https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?q=80&w=2000&auto=format&fit=crop"
                            alt="Financial Institutions"
                            class="absolute inset-0 w-full h-full object-cover grayscale group-hover/card:grayscale-0 transition-all duration-1000 group-hover/card:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/60 dark:from-slate-950/50 to-transparent"></div>
                    </div>
                    <div class="mt-8 px-4">
                        <h4 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white mb-3">Financial Institutions</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-base md:text-lg font-light leading-relaxed">
                            Key investment partners fueling the green steel transition and trade finance.
                        </p>
                    </div>
                </div>

                <!-- Card 5: Technology Providers -->
                <div class="flex-none w-[320px] md:w-[480px] snap-start group/card">
                    <div
                        class="relative aspect-[4/3] rounded-2xl md:rounded-[1.5rem] overflow-hidden glass shadow-2xl transition-transform duration-700 group-hover/card:scale-[1.02]">
                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2000&auto=format&fit=crop"
                            alt="Technology Providers"
                            class="absolute inset-0 w-full h-full object-cover grayscale group-hover/card:grayscale-0 transition-all duration-1000 group-hover/card:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/60 dark:from-slate-950/50 to-transparent"></div>
                    </div>
                    <div class="mt-8 px-4">
                        <h4 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white mb-3">Technology Providers</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-base md:text-lg font-light leading-relaxed">
                            Innovative AI and engineering firms transforming manufacturing standards.
                        </p>
                    </div>
                </div>

                <!-- Card 6: Government Departments -->
                <div class="flex-none w-[320px] md:w-[480px] snap-start group/card">
                    <div
                        class="relative aspect-[4/3] rounded-2xl md:rounded-[1.5rem] overflow-hidden glass shadow-2xl transition-transform duration-700 group-hover/card:scale-[1.02]">
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2000&auto=format&fit=crop"
                            alt="Government & Institutions"
                            class="absolute inset-0 w-full h-full object-cover grayscale group-hover/card:grayscale-0 transition-all duration-1000 group-hover/card:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-white/60 dark:from-slate-950/50 to-transparent"></div>
                    </div>
                    <div class="mt-8 px-4">
                        <h4 class="text-2xl md:text-3xl font-bold text-slate-900 dark:text-white mb-3">Gov & Institutions</h4>
                        <p class="text-slate-600 dark:text-slate-400 text-base md:text-lg font-light leading-relaxed">
                            Policymakers and trade associations shaping international trade regulations.
                        </p>
                    </div>
                </div>

            </div>

            <!-- Slider Progress Indicator (Optional but nice for Apple feel) -->
            <div class="max-w-7xl mx-auto px-6 flex flex-col items-end gap-6 mt-4">
                <!-- Progress Bar -->
                <div class="w-24 h-1 bg-white/10 rounded-full overflow-hidden">
                    <div class="h-full bg-slate-400 transition-all duration-200 ease-out"
                        :style="`width: ${scrollProgress}%`" style="width: 0%"></div>
                </div>

                <!-- Navigation Controls -->
                <div class="flex items-center gap-3">
                    <button @click="$refs.slider.scrollBy({ left: -400, behavior: 'smooth' })"
                        class="w-12 h-12 rounded-full border border-slate-300 dark:border-white/20 flex items-center justify-center text-slate-900 dark:text-white hover:bg-slate-900/5 dark:hover:bg-white/10 transition-all">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </button>
                    <button @click="$refs.slider.scrollBy({ left: 400, behavior: 'smooth' })"
                        class="w-12 h-12 rounded-full border border-slate-300 dark:border-white/20 flex items-center justify-center text-slate-900 dark:text-white hover:bg-slate-900/5 dark:hover:bg-white/10 transition-all">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!-- BEGIN: Sponsorship -->
    <section class="py-32 bg-slate-50 dark:bg-slate-950 relative overflow-hidden transition-colors duration-500" id="sponsorship"
        x-data="{ activeTab: 'packages', showForm: false, revealed: false }" x-intersect:enter="revealed = true">
        <!-- Ambient Background Depth -->
        <div
            class="absolute top-[20%] -left-64 w-[500px] h-[500px] bg-blue-600/10 blur-[150px] rounded-full opacity-50">
        </div>
        <div
            class="absolute bottom-[20%] -right-64 w-[500px] h-[500px] bg-purple-600/10 blur-[150px] rounded-full opacity-50">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10">
            <div class="mb-20 text-center transition-all duration-1000 transform"
                :class="revealed ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
                <span
                    class="text-[11px] md:text-xs uppercase tracking-[0.4em] text-cyan-600 dark:text-brand-teal-light font-bold mb-4 block opacity-80">Strategic
                    Partnerships</span>
                <h2 class="text-5xl md:text-8xl font-serif font-bold text-slate-900 dark:text-white mb-8 leading-tight">
                    Why Become a <br class="hidden md:block" />
                    <span class="text-slate-500 italic">Sponsor?</span>
                </h2>
                <p class="text-slate-600 dark:text-slate-400 text-xl md:text-2xl font-light max-w-3xl mx-auto font-sans leading-relaxed">
                    Beyond making your brand visible in the global steel industry, it positions you among the key
                    players shaping the sector.
                </p>
            </div>

            <!-- Strategic Points: Apple Dark Style Cards -->
            <div class="grid md:grid-cols-3 gap-8 mb-32">

                <!-- Card 1: Strategic Positioning -->
                <div
                    class="relative p-12 rounded-[2.5rem] glass hover:border-blue-500/30 shadow-sm dark:shadow-2xl transition-all duration-700 group flex flex-col h-full overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                    </div>
                    <div class="relative z-10">
                        <div class="mb-12">
                            <span
                                class="material-symbols-outlined text-4xl text-blue-500 group-hover:scale-110 transition-transform duration-500">public</span>
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white leading-[1.15] mb-4">
                                Strategic <span class="text-blue-500">Positioning</span> in the market.
                            </h4>
                            <p class="text-slate-600 dark:text-slate-400 text-lg font-light">In the International Steel Industry</p>
                        </div>
                        <div class="mt-12 flex justify-end">
                            <button
                                class="w-10 h-10 rounded-full bg-slate-900 dark:bg-white flex items-center justify-center text-white dark:text-slate-950 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300">
                                <span class="material-symbols-outlined text-xl font-bold">add</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Target Audience -->
                <div
                    class="relative p-12 rounded-[2.5rem] glass hover:border-orange-500/30 shadow-sm dark:shadow-2xl transition-all duration-700 group flex flex-col h-full overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-orange-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                    </div>
                    <div class="relative z-10">
                        <div class="mb-12">
                            <span
                                class="material-symbols-outlined text-4xl text-orange-500 group-hover:scale-110 transition-transform duration-500">track_changes</span>
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white leading-[1.15] mb-4">
                                Direct <span class="text-orange-500">Engagement</span> with targets.
                            </h4>
                            <p class="text-slate-600 dark:text-slate-400 text-lg font-light">With High-Level Target Audience</p>
                        </div>
                        <div class="mt-12 flex justify-end">
                            <button
                                class="w-10 h-10 rounded-full bg-slate-900 dark:bg-white flex items-center justify-center text-white dark:text-slate-950 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                                <span class="material-symbols-outlined text-xl font-bold">add</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Global Wealth -->
                <div
                    class="relative p-12 rounded-[2.5rem] glass hover:border-purple-500/30 shadow-sm dark:shadow-2xl transition-all duration-700 group flex flex-col h-full overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                    </div>
                    <div class="relative z-10">
                        <div class="mb-12">
                            <span
                                class="material-symbols-outlined text-4xl text-purple-500 group-hover:scale-110 transition-transform duration-500">account_balance</span>
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-3xl md:text-4xl font-bold text-slate-900 dark:text-white leading-[1.15] mb-4">
                                Global <span class="text-purple-500">Wealth Hub</span> access.
                            </h4>
                            <p class="text-slate-600 dark:text-slate-400 text-lg font-light">At the Heart of World Steel Industry</p>
                        </div>
                        <div class="mt-12 flex justify-end">
                            <button
                                class="w-10 h-10 rounded-full bg-slate-900 dark:bg-white flex items-center justify-center text-white dark:text-slate-950 group-hover:bg-purple-500 group-hover:text-white transition-all duration-300">
                                <span class="material-symbols-outlined text-xl font-bold">add</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Toggle Tabs -->
            <div class="flex justify-center mb-16">
                <div class="inline-flex bg-slate-200 dark:bg-slate-900 p-1.5 rounded-2xl border border-slate-300 dark:border-white/5 shadow-sm">
                    <button @click="activeTab = 'sponsors'"
                        :class="activeTab === 'sponsors' ? 'bg-white dark:bg-white/10 text-slate-900 dark:text-white shadow-sm' : 'text-slate-500 dark:text-slate-500 hover:text-slate-700 dark:hover:text-slate-300'"
                        class="px-8 py-3 rounded-xl transition-all font-semibold text-sm tracking-tight uppercase">OUR
                        SPONSORS</button>
                    <button @click="activeTab = 'packages'"
                        :class="activeTab === 'packages' ? 'bg-white dark:bg-white/10 text-slate-900 dark:text-white shadow-sm' : 'text-slate-500 dark:text-slate-500 hover:text-slate-700 dark:hover:text-slate-300'"
                        class="px-8 py-3 rounded-xl transition-all font-semibold text-sm tracking-tight uppercase">SPONSORSHIP
                        PACKAGES</button>
                </div>
            </div>

            <!-- Content Area -->
            <div class="grid lg:grid-cols-2 gap-12 items-start mb-24">
                <!-- Left: Subheading 1 -->
                <div class="p-12 md:p-16 rounded-[3rem] glass shadow-sm dark:shadow-2xl animate-fade-in"
                    x-show="activeTab === 'packages'">
                    <h3 class="text-3xl md:text-4xl font-serif font-extrabold text-slate-900 dark:text-white mb-8 leading-tight">Package
                        <br />Options
                    </h3>
                    <div class="space-y-6">
                        <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed font-light">
                            The Global Steel Summits offers its sponsors a range of sponsorship packages, providing
                            tailored solutions to meet each brand’s specific needs.
                        </p>
                        <p class="text-slate-500 leading-relaxed font-light italic border-l-2 border-slate-200 dark:border-white/10 pl-6">
                            These packages are designed in line with brand objectives and communication strategies. All
                            sponsorship packages aim to deliver 360-degree visibility and engagement before, during, and
                            after the conference.
                        </p>
                    </div>
                </div>

                <!-- Right: Subheading 2 -->
                <div class="p-12 md:p-16 rounded-[3rem] glass shadow-sm dark:shadow-2xl animate-fade-in"
                    x-show="activeTab === 'packages'">
                    <h3 class="text-3xl md:text-4xl font-serif font-bold text-slate-900 dark:text-white mb-8 leading-tight">Exclusive
                        Benefits <br />& Visibility</h3>
                    <div class="space-y-6">
                        <p class="text-slate-600 dark:text-slate-400 text-lg leading-relaxed font-light">
                            Sponsors will have the opportunity to be featured in all printed and digital promotional
                            materials, on the official website, social media channels, and in-event visibility
                            applications.
                        </p>
                        <p class="text-slate-900 dark:text-slate-300 text-lg leading-relaxed font-light font-semibold">
                            Impact Senior Decision-Makers
                        </p>
                        <p class="text-slate-500 font-light leading-relaxed">
                            In addition, they will gain the chance to engage directly with senior decision-makers and
                            develop long-term business partnerships.
                        </p>
                    </div>
                </div>

                <!-- Placeholder for OUR SPONSORS tab -->
                <div class="lg:col-span-2 text-center py-32 animate-fade-in" x-show="activeTab === 'sponsors'">
                    <div
                        class="w-20 h-20 bg-white/5 rounded-full flex items-center justify-center mx-auto mb-8 animate-pulse text-slate-500">
                        <span class="material-symbols-outlined text-3xl">upcoming</span>
                    </div>
                    <h3 class="text-2xl text-slate-500 italic font-serif">Sponsorship announcements coming soon.</h3>
                </div>
            </div>

            <!-- CTA & Form Trigger -->
            <div class="text-center pb-20">
                <button @click="showForm = true"
                    class="group relative px-12 py-6 bg-slate-900 dark:bg-white text-white dark:text-slate-950 rounded-full font-bold text-xl transition-all shadow-xl hover:shadow-2xl active:scale-95">
                    <span class="relative z-10">Become a Sponsor</span>
                    <div
                        class="absolute inset-0 rounded-full bg-white dark:bg-slate-900 opacity-0 group-hover:opacity-10 scale-0 group-hover:scale-100 transition-all duration-500">
                    </div>
                </button>
                <p class="mt-8 text-slate-500 text-sm font-light">Join the industry leaders</p>
            </div>
        </div>

        <!-- Sponsorship Application Form Modal (Back to Dark Mode) -->
        <div x-show="showForm" x-transition:enter="transition ease-out duration-300"
            x-transition:enter-start="opacity-0 transform scale-95"
            x-transition:enter-end="opacity-100 transform scale-100"
            x-transition:leave="transition ease-in duration-200"
            x-transition:leave-start="opacity-100 transform scale-100"
            x-transition:leave-end="opacity-0 transform scale-95"
            class="fixed inset-0 z-[100] flex items-center justify-center px-6 pointer-events-none" x-cloak>
            <div class="fixed inset-0 bg-slate-900/60 dark:bg-slate-950/80 backdrop-blur-xl pointer-events-auto" @click="showForm = false">
            </div>
            <div
                class="relative w-full max-w-xl glass rounded-[3rem] shadow-2xl p-10 md:p-14 pointer-events-auto animate-fade-in transition-colors duration-500">
                <button @click="showForm = false"
                    class="absolute top-10 right-10 text-slate-400 hover:text-slate-900 dark:text-white/40 dark:hover:text-white transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
                <h3 class="text-4xl font-serif font-bold text-slate-900 dark:text-white mb-3">Sponsorship Inquiry</h3>
                <p class="text-slate-600 dark:text-slate-400 mb-10 font-light text-lg">Elevate your brand at Steel Summit 2026.</p>

                <form action="#" method="POST" class="space-y-8">
                    @csrf
                    <div class="space-y-2">
                        <label class="text-xs uppercase tracking-[0.2em] text-slate-500 font-bold ml-1">Company
                            Name</label>
                        <input type="text" required name="company"
                            class="w-full bg-slate-50 dark:bg-white/5 border border-slate-200 dark:border-white/10 rounded-[1.25rem] py-5 px-8 text-slate-900 dark:text-white focus:outline-none focus:border-blue-500 dark:focus:border-white/20 transition-all">
                    </div>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="text-xs uppercase tracking-[0.2em] text-slate-500 font-bold ml-1">Work
                                Email</label>
                            <input type="email" required name="email"
                                class="w-full bg-slate-50 dark:bg-white/5 border border-slate-200 dark:border-white/10 rounded-[1.25rem] py-5 px-8 text-slate-900 dark:text-white focus:outline-none focus:border-blue-500 dark:focus:border-white/20 transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs uppercase tracking-[0.2em] text-slate-500 font-bold ml-1">Phone
                                Number</label>
                            <input type="tel" required name="phone"
                                class="w-full bg-slate-50 dark:bg-white/5 border border-slate-200 dark:border-white/10 rounded-[1.25rem] py-5 px-8 text-slate-900 dark:text-white focus:outline-none focus:border-blue-500 dark:focus:border-white/20 transition-all">
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full py-6 bg-slate-900 dark:bg-white text-white dark:text-slate-950 rounded-[1.25rem] font-bold text-xl hover:bg-black dark:hover:bg-slate-200 transition-all active:scale-95 shadow-xl">
                        Submit Application
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- BEGIN: Unique Value Proposition -->
    <section class="py-32 bg-white dark:bg-slate-950 overflow-hidden relative transition-colors duration-500" id="unique-value" x-data="{ revealed: false }"
        x-intersect.once="revealed = true">
        <!-- Ambient Glow -->
        <div class="absolute -bottom-24 -left-24 w-96 h-96 bg-red-600/5 blur-[120px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-6 relative z-10 transition-all duration-1000 transform"
            :class="revealed ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
            <div class="grid lg:grid-cols-2 gap-20 items-center">

                <!-- Left Content -->
                <div class="animate-fade-in text-visible">
                    <span
                        class="text-[10px] md:text-xs uppercase tracking-[0.3em] text-cyan-600 dark:text-brand-teal-light font-bold mb-4 block">The
                        Difference</span>
                    <h2 class="text-4xl md:text-6xl font-serif font-bold text-slate-900 dark:text-white mb-10 leading-[1.1]">
                        What Makes the <br />
                        <span class="text-slate-500 italic">Conference Unique?</span>
                    </h2>

                    <ul class="space-y-10">
                        <li class="group flex items-start gap-6 transition-all duration-500 hover:translate-x-2">
                            <div
                                class="mt-1 flex-shrink-0 w-8 h-8 rounded-full bg-blue-500/10 flex items-center justify-center border border-blue-500/20 group-hover:bg-blue-500 group-hover:border-transparent transition-all duration-500">
                                <span
                                    class="material-symbols-outlined text-lg text-blue-500 group-hover:text-white transition-colors duration-500">check</span>
                            </div>
                            <div>
                                <h4 class="text-xl md:text-2xl text-slate-900 dark:text-white font-semibold mb-2 leading-snug">Targeted and
                                    Results-Oriented Networking Model</h4>
                                <p class="text-slate-600 dark:text-slate-500 font-light leading-relaxed">Precision-focused engagement for
                                    professional impact.</p>
                            </div>
                        </li>
                        <li class="group flex items-start gap-6 transition-all duration-500 hover:translate-x-2">
                            <div
                                class="mt-1 flex-shrink-0 w-8 h-8 rounded-full bg-purple-500/10 flex items-center justify-center border border-purple-500/20 group-hover:bg-purple-500 group-hover:border-transparent transition-all duration-500">
                                <span
                                    class="material-symbols-outlined text-lg text-purple-500 group-hover:text-white transition-colors duration-500">bolt</span>
                            </div>
                            <div>
                                <h4 class="text-xl md:text-2xl text-slate-900 dark:text-white font-semibold mb-2 leading-snug">New Business
                                    Connections That Lead Directly to Trade</h4>
                                <p class="text-slate-600 dark:text-slate-500 font-light leading-relaxed">Fostering high-value trade
                                    opportunities across borders.</p>
                            </div>
                        </li>
                        <li class="group flex items-start gap-6 transition-all duration-500 hover:translate-x-2">
                            <div
                                class="mt-1 flex-shrink-0 w-8 h-8 rounded-full bg-orange-500/10 flex items-center justify-center border border-orange-500/20 group-hover:bg-orange-500 group-hover:border-transparent transition-all duration-500">
                                <span
                                    class="material-symbols-outlined text-lg text-orange-500 group-hover:text-white transition-colors duration-500">hub</span>
                            </div>
                            <div>
                                <h4 class="text-xl md:text-2xl text-slate-900 dark:text-white font-semibold mb-2 leading-snug">All Industry
                                    Power Hubs on a Single Platform</h4>
                                <p class="text-slate-600 dark:text-slate-500 font-light leading-relaxed">The entire industry's ecosystem
                                    under one roof.</p>
                            </div>
                        </li>
                        <li class="group flex items-start gap-6 transition-all duration-500 hover:translate-x-2">
                            <div
                                class="mt-1 flex-shrink-0 w-8 h-8 rounded-full bg-cyan-500/10 flex items-center justify-center border border-cyan-500/20 group-hover:bg-cyan-500 group-hover:border-transparent transition-all duration-500">
                                <span
                                    class="material-symbols-outlined text-lg text-cyan-500 group-hover:text-white transition-colors duration-500">public</span>
                            </div>
                            <div>
                                <h4 class="text-xl md:text-2xl text-slate-900 dark:text-white font-semibold mb-2 leading-snug">Truly Global
                                    Representation</h4>
                                <p class="text-slate-600 dark:text-slate-500 font-light leading-relaxed">Worldwide delegates bridging global
                                    markets.</p>
                            </div>
                        </li>
                        <li class="group flex items-start gap-6 transition-all duration-500 hover:translate-x-2">
                            <div
                                class="mt-1 flex-shrink-0 w-8 h-8 rounded-full bg-red-500/10 flex items-center justify-center border border-red-500/20 group-hover:bg-red-500 group-hover:border-transparent transition-all duration-500">
                                <span
                                    class="material-symbols-outlined text-lg text-red-500 group-hover:text-white transition-colors duration-500">location_on</span>
                            </div>
                            <div>
                                <h4 class="text-xl md:text-2xl text-slate-900 dark:text-white font-semibold mb-2 leading-snug">Istanbul’s
                                    Strategic and Geopolitical Advantage</h4>
                                <p class="text-slate-600 dark:text-slate-500 font-light leading-relaxed">The world's bridge, serving as a
                                    central hub for trade.</p>
                            </div>
                        </li>
                    </ul>

                    <div class="mt-16">
                        <button @click="modalOpen = true"
                            class="group relative px-12 py-5 bg-slate-900 dark:bg-white text-white dark:text-slate-950 rounded-full font-bold text-lg transition-all shadow-xl hover:shadow-2xl active:scale-95 overflow-hidden">
                            <span class="relative z-10 transition-colors group-hover:text-cyan-500 dark:group-hover:text-blue-500">Register Now</span>
                            <div
                                class="absolute inset-x-0 bottom-0 h-0 bg-slate-50 dark:bg-white group-hover:h-full transition-all duration-300">
                            </div>
                        </button>
                    </div>
                </div>

                <!-- Right Visual -->
                <div class="relative group animate-fade-in">
                    <div
                        class="absolute -inset-4 bg-gradient-to-tr from-blue-500/10 via-purple-500/10 to-transparent blur-3xl opacity-0 group-hover:opacity-100 transition-opacity duration-1000">
                    </div>
                    <div
                        class="relative aspect-[4/5] md:aspect-square rounded-[3rem] overflow-hidden border border-white/5 shadow-2xl">
                        <img src="{{ asset('images/conference/unique.png') }}" alt="Conference Hall"
                            class="w-full h-full object-cover transform group-hover:scale-105 transition-transform duration-1000">

                        <!-- Overlay Info -->
                        <div
                            class="absolute bottom-0 inset-x-0 p-12 bg-gradient-to-t from-slate-950 via-slate-950/40 to-transparent">
                            <p class="text-white/60 text-sm font-light tracking-widest uppercase mb-2">Steel Summit 2026
                            </p>
                            <h4 class="text-2xl text-white font-serif italic">Networking the Future <br />of Global
                                Steel.</h4>
                        </div>
                    </div>

                    <!-- Floating Element: Optimized position and styling -->
                    <div
                        class="absolute -bottom-6 -right-6 w-36 h-36 md:w-44 md:h-44 glass rounded-[2rem] p-6 flex flex-col justify-end shadow-2xl animate-float group-hover:border-brand-teal-light/30 transition-all duration-500 z-20">
                        <span class="text-4xl md:text-5xl text-white font-serif italic mb-1">5+</span>
                        <span
                            class="text-[9px] md:text-[10px] text-slate-400 font-sans tracking-[0.2em] uppercase font-bold leading-tight">Elite
                            <br />Advantages</span>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="py-24 bg-slate-50 dark:bg-slate-950 px-6 border-t border-slate-100 dark:border-white/5 relative overflow-hidden transition-colors duration-500" id="venue"
        x-data="{ revealed: false }" x-intersect.once="revealed = true">
        <!-- Ambient Glow -->
        <div
            class="absolute top-1/2 -right-24 w-80 h-80 bg-brand-teal/10 blur-[100px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto space-y-12 relative z-10 transition-all duration-1000 transform"
            :class="revealed ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
            <div class="mb-12">
                <span
                    class="text-[10px] md:text-xs uppercase tracking-[0.3em] text-cyan-600 dark:text-brand-teal-light font-bold mb-4 block">Event
                    Location</span>
                <h2 class="text-4xl md:text-7xl font-serif font-bold text-slate-900 dark:text-white mb-6">The <span
                        class="text-slate-500 italic">Venue.</span></h2>
            </div>
            <div class="relative w-full h-[560px] md:h-[680px] rounded-3xl overflow-hidden shadow-2xl">
                <img alt="Swissotel Istanbul Night View" class="absolute inset-0 w-full h-full object-cover"
                    src="{{ asset('images/venue-swissotel.webp') }}" />
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                <div
                    class="absolute bottom-10 left-6 md:left-12 bg-white/90 dark:bg-slate-900/80 backdrop-blur-xl border border-slate-200 dark:border-slate-500/30 p-8 rounded-2xl max-w-lg shadow-xl">
                    <h3 class="text-3xl font-serif font-bold text-slate-900 dark:text-gradient-platinum italic mb-2">Swissotel Istanbul</h3>
                    <p class="text-slate-600 dark:text-slate-400">Experience unmatched Turkish hospitality at the crossroads of Europe and
                        Asia.</p>
                </div>
            </div>
        </div>
    </section>


    <div class="fixed inset-0 z-[100] flex items-center justify-center p-6 overflow-y-auto" x-cloak x-show="modalOpen">
        <div @click="modalOpen = false" class="fixed inset-0 bg-slate-200/60 dark:bg-slate-950/95 backdrop-blur-xl transition-all duration-500"></div>
        <div class="relative bg-white/95 dark:glass max-w-2xl w-full rounded-[2rem] p-10 md:p-14 shadow-2xl overflow-hidden transition-all duration-500"
            x-show="modalOpen" x-transition>
            <button @click="modalOpen = false" class="absolute top-6 right-6 text-slate-400 hover:text-slate-900 dark:text-slate-500 dark:hover:text-white transition-colors"
                aria-label="Close">×</button>
            <div class="text-center mb-8">
                <h3 class="text-3xl md:text-4xl font-serif font-bold text-slate-900 dark:text-white mb-3">VIP Registration Request</h3>
                <p class="text-slate-600 dark:text-slate-400 font-light italic">Submit your credentials for an exclusive delegation
                    invitation.</p>
            </div>


            <form action="/register" method="POST" class="space-y-8" id="register-form">
                @csrf

                @if (session('status'))
                    <div
                        class="rounded-xl border border-emerald-300/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-100">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="rounded-xl border border-rose-300/30 bg-rose-500/10 px-4 py-3 text-sm text-rose-100">
                        <ul class="space-y-1">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="relative z-0 w-full group">
                        <input type="text" name="first_name" id="first_name"
                            class="block py-3 px-0 w-full text-base text-slate-900 dark:text-white bg-transparent border-0 border-b border-slate-200 dark:border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-blue-500 dark:focus:border-slate-400 peer"
                            placeholder=" " value="{{ old('first_name') }}" required />
                        <label for="first_name"
                            class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 dark:peer-focus:text-slate-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                    </div>
                    <div class="relative z-0 w-full group">
                        <input type="text" name="last_name" id="last_name"
                            class="block py-3 px-0 w-full text-base text-slate-900 dark:text-white bg-transparent border-0 border-b border-slate-200 dark:border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-blue-500 dark:focus:border-slate-400 peer"
                            placeholder=" " value="{{ old('last_name') }}" required />
                        <label for="last_name"
                            class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 dark:peer-focus:text-slate-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Surname</label>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="relative z-0 w-full group">
                        <input type="email" name="email" id="email"
                            class="block py-3 px-0 w-full text-base text-slate-900 dark:text-white bg-transparent border-0 border-b border-slate-200 dark:border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-blue-500 dark:focus:border-slate-400 peer"
                            placeholder=" " value="{{ old('email') }}" required />
                        <label for="email"
                            class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 dark:peer-focus:text-slate-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Business
                            Email</label>
                    </div>
                    <div class="relative z-0 w-full group">
                        <input type="text" name="company_name" id="company_name"
                            class="block py-3 px-0 w-full text-base text-slate-900 dark:text-white bg-transparent border-0 border-b border-slate-200 dark:border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-blue-500 dark:focus:border-slate-400 peer"
                            placeholder=" " value="{{ old('company_name') }}" required />
                        <label for="company_name"
                            class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 dark:peer-focus:text-slate-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Organization/Company</label>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="relative z-[60] w-full group" x-data="countrySearch()" @click.away="open = false">
                        <div @click="open = !open" 
                            class="block py-3 px-0 w-full text-base border-0 border-b appearance-none focus:outline-none focus:ring-0 cursor-pointer flex justify-between items-center transition-colors duration-200"
                            :class="open ? 'border-blue-500 dark:border-slate-400 text-slate-900 dark:text-white bg-transparent' : 'border-slate-200 dark:border-white/20 text-slate-900 dark:text-white bg-transparent'">
                            <span x-text="selected || 'Select Country'" :class="{'text-slate-500 dark:text-slate-400': !selected}"></span>
                            <svg class="w-4 h-4 text-slate-400 transition-transform duration-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" :class="{'rotate-180': open}">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </div>
                        <input type="hidden" name="country" :value="selected" required id="country_alpine">
                        
                        <!-- Dropdown Menu -->
                        <div x-show="open" x-transition.opacity.duration.200ms
                            class="absolute left-0 top-full mt-1 w-full max-h-64 overflow-y-auto bg-white dark:bg-slate-800 border border-slate-200 dark:border-slate-700 rounded-lg shadow-xl z-[70] custom-scrollbar">
                            <div class="sticky top-0 bg-white dark:bg-slate-800 p-2 border-b border-slate-100 dark:border-slate-700 z-10">
                                <input x-model="search" type="text" placeholder="Search country..." 
                                    class="w-full text-sm bg-slate-50 dark:bg-slate-900 border border-slate-200 dark:border-slate-700 rounded px-3 py-2 text-slate-900 dark:text-white focus:outline-none focus:ring-1 focus:ring-blue-500" @click.stop>
                            </div>
                            <ul class="py-1">
                                <template x-for="country in filteredCountries" :key="country">
                                    <li @click="selectCountry(country)" 
                                        class="px-4 py-2 cursor-pointer text-sm text-slate-700 dark:text-slate-200 hover:bg-slate-100 dark:hover:bg-slate-700 transition-colors" 
                                        x-text="country"
                                        :class="{'bg-blue-50 dark:bg-slate-700 text-blue-600 dark:text-blue-400 font-medium': selected === country}">
                                    </li>
                                </template>
                                <li x-show="filteredCountries.length === 0" class="px-4 py-3 text-sm text-slate-500 text-center">No results found</li>
                            </ul>
                        </div>
                    </div>

                    <div class="relative z-0 w-full group iti-wrapper">
                        <input type="tel" name="phone_full" id="phone_full"
                            class="block py-3 px-0 w-full text-base text-slate-900 dark:text-white bg-transparent border-0 border-b border-slate-200 dark:border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-blue-500 dark:focus:border-slate-400 peer"
                            placeholder=" " value="{{ old('phone_full') }}" required />
                        <input type="hidden" name="phone_country_code" id="phone_country_code" />
                        <input type="hidden" name="phone" id="phone_pure" />
                        <label for="phone_full"
                            class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-blue-600 dark:peer-focus:text-slate-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Phone Number</label>
                    </div>
                </div>

                <style>
                    /* Custom Scrollbar for Country Dropdown */
                    .custom-scrollbar::-webkit-scrollbar {
                        width: 6px;
                    }
                    .custom-scrollbar::-webkit-scrollbar-track {
                        background: rgba(0,0,0,0.02);
                        border-radius: 8px;
                    }
                    .custom-scrollbar::-webkit-scrollbar-thumb {
                        background: rgba(0,0,0,0.1);
                        border-radius: 8px;
                    }
                    .dark .custom-scrollbar::-webkit-scrollbar-track {
                        background: rgba(255,255,255,0.02);
                    }
                    .dark .custom-scrollbar::-webkit-scrollbar-thumb {
                        background: rgba(255,255,255,0.1);
                    }

                    /* Floating Label Support for ITI */
                    .iti-wrapper .iti {
                        width: 100%;
                    }
                    
                    /* Ensures modal scroll doesn't affect list */
                    .iti__country-list {
                        z-index: 9999 !important; 
                        max-width: 300px;
                    }

                    .iti-wrapper .iti__tel-input {
                        background: transparent !important;
                        border: none !important;
                        color: #0f172a !important;
                        width: 100%;
                        padding-top: 0.75rem !important;
                        padding-bottom: 0.75rem !important;
                    }
                    
                    .dark .iti-wrapper .iti__tel-input {
                        color: white !important;
                    }

                    .iti-wrapper .iti__tel-input:focus {
                        outline: none !important;
                        box-shadow: none !important;
                    }

                    /* Align ITI country Select flag propery with float label */
                    .iti__selected-flag {
                        background-color: transparent !important;
                    }
                </style>

                <label class="flex items-start space-x-3 cursor-pointer">
                    <input
                        class="w-5 h-5 rounded border-slate-300 dark:border-white/20 bg-transparent text-blue-600 dark:text-slate-400 focus:ring-blue-500/50 dark:focus:ring-slate-500/50 mt-0.5"
                        name="consent_approved" type="checkbox" value="1" @checked(old('consent_approved')) required />
                    <span class="text-xs text-slate-600 dark:text-slate-500 leading-relaxed font-medium">I approve communication consent and confirm
                        that I have read and accepted the Privacy Notice regarding the processing and storage of my
                        personal data.</span>
                </label>

                <button
                    class="w-full bg-slate-900 dark:bg-gradient-to-r dark:from-slate-200 dark:to-slate-400 text-white dark:text-slate-950 font-bold py-4 rounded-xl uppercase tracking-widest text-sm hover:opacity-90 transition-all shadow-lg active:scale-[0.98]"
                    type="submit">Submit Formal Request</button>
            </form>
        </div>
    </div>

    <footer class="bg-white dark:bg-slate-950 pt-20 pb-12 px-6 border-t border-slate-200 dark:border-slate-800 transition-colors duration-500">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">
            <div>
                <img alt="Steel Networking Summits" class="h-10 w-auto object-contain transition-all"
                    src="{{ asset('images/steel-networking-logo-footer.webp') }}" />
                <p class="text-slate-600 dark:text-slate-400 text-sm mt-4">The premier networking event for the global iron and steel
                    community.</p>
            </div>
            <div>
                <h4 class="text-slate-900 dark:text-white font-bold tracking-wider uppercase text-xs mb-4">Explore</h4>
                <ul class="space-y-2">
                    <li><a class="text-slate-600 dark:text-slate-400 hover:text-blue-600 dark:hover:text-white text-sm transition-colors" href="#main">Main</a></li>
                    <li><a class="text-slate-600 dark:text-slate-400 hover:text-blue-600 dark:hover:text-white text-sm transition-colors" href="#agenda">Agenda</a></li>
                    <li><a class="text-slate-600 dark:text-slate-400 hover:text-blue-600 dark:hover:text-white text-sm transition-colors" href="#about">About Us</a></li>
                    <li><a class="text-slate-600 dark:text-slate-400 hover:text-blue-600 dark:hover:text-white text-sm transition-colors" href="#keynote-speakers">Keynote Speakers</a>
                    </li>
                    <li><a class="text-slate-600 dark:text-slate-400 hover:text-blue-600 dark:hover:text-white text-sm transition-colors" href="#sponsorship">Sponsorship</a></li>
                    <li><a class="text-slate-600 dark:text-slate-400 hover:text-blue-600 dark:hover:text-white text-sm transition-colors" href="#venue">Venue</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-slate-900 dark:text-white font-bold tracking-wider uppercase text-xs mb-4">Legal</h4>
                <ul class="space-y-2">
                    <li><a class="text-slate-600 dark:text-slate-400 hover:text-blue-600 dark:hover:text-white text-sm transition-colors" href="#">Privacy Policy</a></li>
                    <li><a class="text-slate-600 dark:text-slate-400 hover:text-blue-600 dark:hover:text-white text-sm transition-colors" href="#">Terms of Service</a></li>
                    <li><a class="text-slate-600 dark:text-slate-400 hover:text-blue-600 dark:hover:text-white text-sm transition-colors" href="#">Data Protection</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-slate-900 dark:text-white font-bold tracking-wider uppercase text-xs mb-4">Contact Us</h4>
                <p class="text-slate-600 dark:text-slate-400 text-sm">info@steelsummits.com</p>
                <p class="text-slate-600 dark:text-slate-400 text-sm mt-2">+1 (555) 123-4567</p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto border-t border-slate-800/50 mt-10 pt-6 text-slate-500 text-xs">© 2026 Steel
            Summit. All rights reserved.</div>
    </footer>

    <button @click="window.scrollTo({ top: 0, behavior: 'smooth' })" aria-label="Yukari cik"
        class="fixed bottom-6 right-6 z-[60] h-12 w-12 rounded-full glass border border-slate-300 dark:border-slate-400/30 text-slate-600 dark:text-slate-100 hover:text-blue-600 dark:hover:text-white hover:border-blue-300 dark:hover:border-slate-300/50 transition-all duration-300 shadow-xl"
        type="button" x-cloak x-show="showToTop" x-transition.opacity.duration.300ms>
        <svg aria-hidden="true" class="mx-auto h-5 w-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path d="M5 15l7-7 7 7" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.8"></path>
        </svg>
    </button>

    <script>
        function countdownTimer() {
            return {
                targetDate: new Date("October 25, 2026 09:00:00").getTime(),
                remaining: [
                    { label: 'Days', value: '00' },
                    { label: 'Hours', value: '00' },
                    { label: 'Mins', value: '00' },
                    { label: 'Secs', value: '00' },
                ],
                start() {
                    const update = () => {
                        const now = new Date().getTime();
                        const distance = this.targetDate - now;
                        if (distance < 0) {
                            return;
                        }
                        this.remaining[0].value = String(Math.floor(distance / (1000 * 60 * 60 * 24))).padStart(2, "0");
                        this.remaining[1].value = String(Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60))).padStart(2, "0");
                        this.remaining[2].value = String(Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60))).padStart(2, "0");
                        this.remaining[3].value = String(Math.floor((distance % (1000 * 60)) / 1000)).padStart(2, "0");
                    };
                    update();
                    setInterval(update, 1000);
                },
            };
        }

        // Start Alpine Context for Searchable Country Select
        document.addEventListener('alpine:init', () => {
            Alpine.data('countrySearch', () => ({
                open: false,
                search: '',
                selected: '',
                countries: [
                    "Afghanistan", "Albania", "Algeria", "Andorra", "Angola", "Antigua and Barbuda", "Argentina", "Armenia", "Australia", "Austria", "Azerbaijan", "Bahamas", "Bahrain", "Bangladesh", "Barbados", "Belarus", "Belgium", "Belize", "Benin", "Bhutan", "Bolivia", "Bosnia and Herzegovina", "Botswana", "Brazil", "Brunei", "Bulgaria", "Burkina Faso", "Burundi", "Cabo Verde", "Cambodia", "Cameroon", "Canada", "Central African Republic", "Chad", "Chile", "China", "Colombia", "Comoros", "Congo", "Costa Rica", "Croatia", "Cuba", "Cyprus", "Czechia", "Denmark", "Djibouti", "Dominica", "Dominican Republic", "Ecuador", "Egypt", "El Salvador", "Equatorial Guinea", "Eritrea", "Estonia", "Eswatini", "Ethiopia", "Fiji", "Finland", "France", "Gabon", "Gambia", "Georgia", "Germany", "Ghana", "Greece", "Grenada", "Guatemala", "Guinea", "Guinea-Bissau", "Guyana", "Haiti", "Honduras", "Hungary", "Iceland", "India", "Indonesia", "Iran", "Iraq", "Ireland", "Israel", "Italy", "Jamaica", "Japan", "Jordan", "Kazakhstan", "Kenya", "Kiribati", "Korea, North", "Korea, South", "Kosovo", "Kuwait", "Kyrgyzstan", "Laos", "Latvia", "Lebanon", "Lesotho", "Liberia", "Libya", "Liechtenstein", "Lithuania", "Luxembourg", "Madagascar", "Malawi", "Malaysia", "Maldives", "Mali", "Malta", "Marshall Islands", "Mauritania", "Mauritius", "Mexico", "Micronesia", "Moldova", "Monaco", "Mongolia", "Montenegro", "Morocco", "Mozambique", "Myanmar", "Namibia", "Nauru", "Nepal", "Netherlands", "New Zealand", "Nicaragua", "Niger", "Nigeria", "North Macedonia", "Norway", "Oman", "Pakistan", "Palau", "Palestine", "Panama", "Papua New Guinea", "Paraguay", "Peru", "Philippines", "Poland", "Portugal", "Qatar", "Romania", "Russia", "Rwanda", "Saint Kitts and Nevis", "Saint Lucia", "Saint Vincent", "Samoa", "San Marino", "Sao Tome and Principe", "Saudi Arabia", "Senegal", "Serbia", "Seychelles", "Sierra Leone", "Singapore", "Slovakia", "Slovenia", "Solomon Islands", "Somalia", "South Africa", "South Sudan", "Spain", "Sri Lanka", "Sudan", "Suriname", "Sweden", "Switzerland", "Syria", "Taiwan", "Tajikistan", "Tanzania", "Thailand", "Timor-Leste", "Togo", "Tonga", "Trinidad and Tobago", "Tunisia", "Turkey", "Türkiye", "Turkmenistan", "Tuvalu", "Uganda", "Ukraine", "United Arab Emirates", "United Kingdom", "United States", "Uruguay", "Uzbekistan", "Vanuatu", "Vatican City", "Venezuela", "Vietnam", "Yemen", "Zambia", "Zimbabwe"
                ],
                get filteredCountries() {
                    if (this.search === '') {
                        return this.countries;
                    }
                    return this.countries.filter(c => c.toLowerCase().includes(this.search.toLowerCase()));
                },
                selectCountry(country) {
                    this.selected = country;
                    this.open = false;
                    this.search = '';
                    
                    // Dispatch event for phone ITI sync
                    window.dispatchEvent(new CustomEvent('country-changed', { detail: country }));
                }
            }));
        });

        // Initialize Telephone input functionality
        document.addEventListener('DOMContentLoaded', function () {
            const phoneInput = document.querySelector("#phone_full");
            let iti = null;

            // Intl-Tel-Input for Phone
            if (phoneInput) {
                iti = window.intlTelInput(phoneInput, {
                    initialCountry: "auto",
                    dropdownContainer: document.body, // This is key to prevent clipping inside modals
                    geoIpLookup: function (callback) {
                        fetch("https://ipapi.co/json/")
                            .then(res => res.json())
                            .then(data => {
                                callback(data.country_code);
                                // Tell Alpine to select this country automatically if empty
                                setTimeout(() => {
                                    if(data.country_name) {
                                        window.dispatchEvent(new CustomEvent('country-changed', { detail: data.country_name }));
                                    }
                                }, 500);
                            })
                            .catch(() => {
                                callback("tr");
                            });
                    },
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.0.4/js/utils.js",
                    separateDialCode: true,
                });
            }

            // Sync Alpine Country Select to ITI (Only works best effort depending on exact name match)
            window.addEventListener('country-changed', (e) => {
                if (iti && e.detail) {
                    const allCountries = window.intlTelInputGlobals ? window.intlTelInputGlobals.getCountryData() : [];
                    const tsVal = e.detail;
                    const match = allCountries.find(c => c.name.split(' (')[0].toLowerCase() === tsVal.toLowerCase());
                    if (match) {
                        iti.setCountry(match.iso2);
                    }
                    // For forms floating labels:
                    monitorForm();
                }
            });

            // Sync ITI flag selection to Alpine (Optional, but good UX)
            if (phoneInput && iti) {
                phoneInput.addEventListener("countrychange", function () {
                    const countryData = iti.getSelectedCountryData();
                    if(countryData && countryData.name) {
                        const cleanName = countryData.name.split(' (')[0];
                        // If you want robust 2 way bind, update the hidden input:
                        const hiddenC = document.querySelector('#country_alpine');
                        if(hiddenC && !hiddenC.value) hiddenC.value = cleanName; 
                    }
                });
            }

            // Update hidden fields before submit
            const formSubmit = document.querySelector('#register-form');
            if (formSubmit) {
                formSubmit.addEventListener('submit', function () {
                    if (iti) {
                        const countryData = iti.getSelectedCountryData();
                        const countryCode = document.getElementById('phone_country_code');
                        const phonePure = document.getElementById('phone_pure');
                        if (countryCode) countryCode.value = countryData ? '+' + countryData.dialCode : '';
                        if (phonePure) phonePure.value = phoneInput.value;
                    }
                });
            }

            // Continuous Label Check
            function monitorForm() {
                document.querySelectorAll('input').forEach(input => {
                    const label = input.nextElementSibling;
                    if (label && label.tagName === 'LABEL') {
                        if (input.value || input.matches(':-webkit-autofill')) {
                            label.classList.add('active-label');
                        } else {
                            label.classList.remove('active-label');
                        }
                    }
                });
            }
            setInterval(monitorForm, 1000);
        });
    </script>
</body>

</html>