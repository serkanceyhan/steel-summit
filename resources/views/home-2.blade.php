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
            backdrop-filter: blur(16px);
            -webkit-backdrop-filter: blur(16px);
            border: 1px solid rgba(255, 255, 255, 0.08);
        }

        .text-gradient-platinum {
            background: linear-gradient(to right, #f1f5f9, #cbd5e1, #64748b);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .hero-gradient {
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
    class="bg-slate-950 text-slate-200 font-sans antialiased overflow-x-hidden"
    x-data="{ mobileMenu: false, scrolled: false, showToTop: false, modalOpen: @js($errors->any() || session()->has('status')) }">
  <nav :class="scrolled ? 'top-4' : 'top-6'" class="fixed left-1/2 -translate-x-1/2 w-[92%] max-w-7xl z-50 transition-all duration-500 ease-in-out">
    
    <div class="relative flex items-stretch justify-between w-full pr-6">
        
        <div class="absolute inset-y-0 right-0 left-[68px] md:left-20 glass rounded-2xl shadow-2xl pointer-events-none -z-10"></div>

        <div class="relative z-10 flex items-center group cursor-pointer pl-0 md:-ml-2">
            <img alt="Steel Summits Logo" class="h-[76px] md:h-[88px] w-auto object-contain transition-transform duration-300 hover:scale-105" src="{{ asset('images/steel-networking-logo-main.webp') }}">
        </div>

        <div class="relative z-10 hidden md:flex items-center space-x-8 text-[14px] font-bold tracking-[0.2em] uppercase py-4">
            <a class="text-slate-300 hover:text-white transition-opacity" href="#agenda">Agenda</a>
            <a class="text-slate-300 hover:text-white transition-opacity" href="#about">About Us</a>
            <a class="text-slate-300 hover:text-white transition-opacity" href="#who-attends">Who Attends</a>
            <a class="text-slate-300 hover:text-white transition-opacity" href="#keynote-speakers">Keynote Speakers</a>
            <a class="text-slate-300 hover:text-white transition-opacity" href="#sponsorship">Sponsorship</a>
            <a class="text-slate-300 hover:text-white transition-opacity" href="#venue">Venue</a>
        </div>
        
        <div class="relative z-10 flex items-center space-x-4 py-4">
            <button @click="modalOpen = true" class="hidden sm:block border border-slate-400/30 text-white text-[13px] font-bold px-8 py-3 rounded-full uppercase tracking-wider hover:bg-white/5 transition-all duration-300">Register Interest</button>
            <button @click="mobileMenu = !mobileMenu" class="md:hidden text-white p-2">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="!mobileMenu"><path d="M4 8h16M4 16h16" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" x-show="mobileMenu" style="display: none;"><path d="M6 18L18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path></svg>
            </button>
        </div>
    </div>

    <div class="md:hidden mt-4 glass rounded-2xl p-6 flex flex-col space-y-4 shadow-2xl" x-show="mobileMenu" x-transition:enter="transition ease-out duration-300" x-transition:enter-end="opacity-100 scale-100" x-transition:enter-start="opacity-0 scale-95" style="display: none;">
        <a @click="mobileMenu = false" class="text-lg font-serif font-bold" href="#agenda">Agenda</a>
        <a @click="mobileMenu = false" class="text-lg font-serif font-bold" href="#about">About Us</a>
        <a @click="mobileMenu = false" class="text-lg font-serif font-bold" href="#who-attends">Who Attends</a>
        <a @click="mobileMenu = false" class="text-lg font-serif font-bold" href="#keynote-speakers">Keynote Speakers</a>
        <a @click="mobileMenu = false" class="text-lg font-serif font-bold" href="#sponsorship">Sponsorship</a>
        <a @click="mobileMenu = false" class="text-lg font-serif font-bold" href="#venue">Venue</a>
        <button @click="modalOpen = true; mobileMenu = false" class="w-full border border-slate-400/30 text-white font-bold py-4 rounded-xl">Register Interest</button>
    </div>
</nav>
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden" id="main">
        <div class="absolute inset-0 z-0">
            <img alt="Istanbul Night" class="w-full h-full object-cover scale-110"
                src="{{ asset('images/hero-istanbul.webp') }}" />
            <div class="absolute inset-0 hero-gradient"></div>
        </div>

        <div class="relative z-10 text-center px-6 max-w-6xl mx-auto pt-20 md:pt-28 pb-16 md:pb-0">

            <div
                class="inline-block px-4 md:px-5 py-1 md:py-1.5 border border-white/10 rounded-full mb-6 md:mb-8 mt-4 md:mt-8 glass">
                <span
                    class="text-slate-300 text-[9px] md:text-xs font-bold tracking-[0.2em] md:tracking-[0.3em] uppercase">Invitation
                    Only - Istanbul 2026</span>
            </div>

            <h1 class="text-5xl md:text-8xl font-serif font-bold mb-6 md:mb-8 leading-[1.1] text-white">
                Istanbul <br />
                <span
                    class="bg-clip-text text-transparent bg-gradient-to-r from-slate-100 via-slate-300 to-slate-500 italic pb-2">Steel
                    Summit</span> <br />
                2026
            </h1>

            <p class="text-base md:text-2xl text-slate-400 mb-8 md:mb-12 font-light max-w-3xl mx-auto leading-relaxed">
                The world's most exclusive assembly for steel industry titans.
                <br class="hidden md:block" />
                <span class="text-slate-300 font-medium">25 - 27 October 2026</span> | Swissotel Istanbul
            </p>

            <div class="mx-auto mb-4 md:mb-16 flex w-full max-w-xl items-center justify-center"
                x-data="countdownTimer()" x-init="start()">
                <template x-for="(item, index) in remaining" :key="item.label">
                    <div :class="index > 0 ? 'border-l border-white/10' : ''"
                        class="flex w-1/4 min-w-0 flex-col items-center px-1 md:px-8">
                        <span
                            class="text-3xl md:text-6xl font-serif font-light text-white mb-1 md:mb-2 tabular-nums w-[2.5ch] text-center"
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

    <section class="py-24 bg-slate-950 px-6 relative overflow-hidden" id="agenda"
        x-data="{ activeTab: 1, revealed: false }" x-intersect.once="revealed = true">
        <!-- Ambient Glow -->
        <div class="absolute -top-24 -right-24 w-96 h-96 bg-blue-600/5 blur-[120px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-6xl mx-auto relative z-10 transition-all duration-1000 transform"
            :class="revealed ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
            <div class="mb-12 text-center">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-gradient-platinum mb-4 italic">STEEL Summit
                    Program</h2>
                <p class="text-slate-400 text-sm md:text-base">25-27 October 2026 | Swissotel Istanbul</p>
            </div>

            <div class="flex overflow-x-auto pb-4 mb-8 border-b border-white/10">
                <div class="flex space-x-6 md:space-x-12 mx-auto min-w-max">
                    <button
                        :class="activeTab === 1 ? 'text-white border-b-2 border-slate-300' : 'text-slate-500 border-b-2 border-transparent'"
                        @click="activeTab = 1" class="pb-4 text-xs md:text-sm font-bold tracking-[0.2em] uppercase">25
                        Oct | Sunday</button>
                    <button
                        :class="activeTab === 2 ? 'text-white border-b-2 border-slate-300' : 'text-slate-500 border-b-2 border-transparent'"
                        @click="activeTab = 2" class="pb-4 text-xs md:text-sm font-bold tracking-[0.2em] uppercase">26
                        Oct | Monday</button>
                    <button
                        :class="activeTab === 3 ? 'text-white border-b-2 border-slate-300' : 'text-slate-500 border-b-2 border-transparent'"
                        @click="activeTab = 3" class="pb-4 text-xs md:text-sm font-bold tracking-[0.2em] uppercase">27
                        Oct | Tuesday</button>
                </div>
            </div>

            <div class="space-y-4" x-show="activeTab === 1">
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">18:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">Networking on the Bosphorus
                    </h4>
                    <p class="text-slate-400 mt-2">Boat Tour and DJ Performance (Under the Sponsorship of X).</p>
                </div>
            </div>

            <div class="space-y-4" x-show="activeTab === 2">
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">09:00-09:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">Registration</h4>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">09:30-10:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">Opening Speeches</h4>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">10:00-11:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">1st Session: World Economic
                        Outlook and Steel Industry</h4>
                    <p class="text-slate-400 mt-2">Participants: POSCO, BAOW, TATA Steel, Nippon Steel, Marcegaglia
                        Steel, EZZ Steel, HBIS, ArcelorMittal, World Steel Association.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">11:30-12:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">2nd Session: Steel in a High
                        Inflation World: Cost Pressure, Investment Risks, Strategic Responses</h4>
                    <p class="text-slate-400 mt-2">Participants: World Steel Dynamics Economist, Fastmarkets, Kallanish.
                    </p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">12:30-14:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">Lunch and Networking</h4>
                    <p class="text-slate-400 mt-2">Under the Sponsorship of X.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">14:00-15:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">3rd Session: The Rise of the
                        Asian Steel Industry: Production, Trade and Market Dynamics</h4>
                    <p class="text-slate-400 mt-2">Participants: ANN Steel, TATA Steel, SEAISI, BAOW, Nucor Steel,
                        Jindal Steel, HBIS, ArcelorMittal, Krakatau.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">15:30-16:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">Coffee Break</h4>
                    <p class="text-slate-400 mt-2">Under the Sponsorship of X.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">16:00-17:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">4th Session: Steel
                        Opportunities in MENA Region: Growth, Investment and Trade</h4>
                    <p class="text-slate-400 mt-2">Participants: Tosyalı Holding, Emirates Steel, Arab Iron and Steel
                        Union, Hadeed, EZZ Steel.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">19:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">Gala Dinner and Networking
                        Cocktail</h4>
                    <p class="text-slate-400 mt-2">Under the Sponsorship of X.</p>
                </div>
            </div>

            <div class="space-y-4" x-show="activeTab === 3">
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">09:00-09:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">Registration</h4>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">09:30-10:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">Opening Speeches</h4>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">10:00-11:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">1st Session: Steel Market
                        Across America: Diverging Paths and Common Challenges</h4>
                    <p class="text-slate-400 mt-2">Participants: Nucor Corporation, Steelco, Cleveland-Cliffs, CAP
                        Acero, Ternium Argentina.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">11:30-12:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">2nd Session: Navigating the
                        World Steel Trade: Trade Remedies, Protectionism, and the Future of Fair Competition</h4>
                    <p class="text-slate-400 mt-2">Participants: ArentFox, World Steel Dynamics, WTO, Fastmarkets.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">12:30-14:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">Lunch and Networking</h4>
                    <p class="text-slate-400 mt-2">Under the Sponsorship of X.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">14:00-15:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">3rd Session: Future of Steel
                        in Europe: Global Competition, Safeguard and Industrial Strategy</h4>
                    <p class="text-slate-400 mt-2">Participants: EUROFER, Marcegaglia Steel, Danieli, Metinvest, CELSA.
                    </p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">15:30-17:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">4th Session: Steel in the New
                        Era: Green Transition and Intelligent Industry</h4>
                    <p class="text-slate-400 mt-2">Participants: McKinsey, SSAB, SMS Group, Primetals Technologies,
                        Danieli.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-950 px-6 border-t border-white/5 relative overflow-hidden" id="about"
        x-data="{ revealed: false }" x-intersect.once="revealed = true">
        <!-- Ambient Glow -->
        <div class="absolute top-1/2 -left-24 w-80 h-80 bg-brand-teal/10 blur-[100px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto relative z-10 transition-all duration-1000 transform"
            :class="revealed ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-10'">
            <div class="grid lg:grid-cols-2 gap-16 items-center">

                <!-- Left Content -->
                <div class="space-y-8">
                    <div>
                        <span
                            class="text-[10px] md:text-xs uppercase tracking-[0.3em] text-brand-teal-light font-bold mb-4 block">About
                            Us</span>
                        <h2 class="text-4xl md:text-6xl font-serif font-bold text-white uppercase tracking-wider mb-6">
                            Legacy of <br />
                            <span class="text-slate-500 italic">Excellence.</span>
                        </h2>
                        <p class="text-slate-400 text-lg md:text-xl font-light leading-relaxed">
                            Steel Networking Summits was created to meet the need for a truly global networking
                            conference that brings together all stakeholders across the international steel trade.
                        </p>
                    </div>

                    <div class="space-y-6">
                        <p class="text-lg text-slate-300 italic border-l-4 border-brand-teal pl-6 py-2">
                            To create a truly global and integrated steel networking platform connecting producers,
                            traders, and logistics providers.
                        </p>

                        <div class="grid grid-cols-2 gap-8 pt-8 border-t border-white/5">
                            <div class="space-y-1">
                                <div class="text-3xl font-serif font-bold text-white">12+</div>
                                <div class="text-[10px] uppercase tracking-widest text-slate-500">Years Leadership</div>
                            </div>
                            <div class="space-y-1">
                                <div class="text-3xl font-serif font-bold text-white">500+</div>
                                <div class="text-[10px] uppercase tracking-widest text-slate-500">Global Delegates</div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Right Content: Premium Image -->
                <div class="relative group">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-brand-teal/20 to-purple-500/20 rounded-[2rem] blur opacity-25 group-hover:opacity-50 transition duration-1000">
                    </div>
                    <div class="relative aspect-square rounded-[2rem] overflow-hidden border border-white/10">
                        <img src="{{ asset('images/about/steel-legacy.png') }}" alt="Steel Legacy"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000 scale-105 group-hover:scale-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/60 to-transparent"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- NEW: What to Expect Section -->
    <section class="py-32 bg-slate-950 px-6 border-t border-white/5 overflow-hidden relative"
        x-data="{ revealed: false }" x-intersect.once="revealed = true">
        <div class="max-w-7xl mx-auto relative z-10 transition-all duration-1000 transform"
            :class="revealed ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-16 items-center">

                <!-- Left: Image -->
                <div class="relative group order-1">
                    <div
                        class="absolute -inset-1 bg-gradient-to-r from-brand-teal/20 to-purple-500/20 rounded-[2rem] blur opacity-25 group-hover:opacity-50 transition duration-1000">
                    </div>
                    <div class="relative aspect-[4/5] rounded-[2rem] overflow-hidden border border-white/10 shadow-2xl">
                        <img src="{{ asset('images/about/summit-experience.png') }}" alt="Conference Hall"
                            class="w-full h-full object-cover grayscale group-hover:grayscale-0 transition-all duration-1000 scale-105 group-hover:scale-100">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent">
                        </div>
                        <div class="absolute bottom-8 left-8">
                            <p class="text-white font-serif italic text-xl">Reshaping Global Alliances</p>
                        </div>
                    </div>
                </div>

                <!-- Right: Content -->
                <div class="space-y-10 order-2">
                    <span
                        class="text-[10px] md:text-xs uppercase tracking-[0.3em] text-brand-teal-light font-bold mb-4 block">Conference
                        Experience</span>

                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-white tracking-tight">
                        What to <span class="text-gradient-platinum">Expect?</span>
                    </h2>

                    <div class="space-y-8">
                        <!-- Feature 1 -->
                        <div class="flex items-start gap-6 group">
                            <div
                                class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-brand-teal/20 transition-colors duration-500">
                                <span class="material-symbols-outlined text-brand-teal-light">groups</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold text-white mb-2">Industry Leaders</h4>
                                <p class="text-slate-300 font-light leading-relaxed">Leading companies, decision-makers,
                                    and opinion leaders shaping the industry from around the world will participate.</p>
                            </div>
                        </div>

                        <!-- Feature 2 -->
                        <div class="flex items-start gap-6 group">
                            <div
                                class="w-12 h-12 rounded-2xl bg-white/5 border border-white/10 flex items-center justify-center group-hover:bg-brand-teal/20 transition-colors duration-500">
                                <span class="material-symbols-outlined text-brand-teal-light">public</span>
                            </div>
                            <div class="flex-1">
                                <h4 class="text-xl font-bold text-white mb-2">Global Markets</h4>
                                <p class="text-slate-300 font-light leading-relaxed">Up-to-date and in-depth insights
                                    into steel markets across all regions with a comprehensive view of the future.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 bg-slate-950 px-6 border-t border-white/5 relative overflow-hidden" id="keynote-speakers"
        x-data="{ revealed: false }" x-intersect.once="revealed = true">
        <!-- Ambient Glow -->
        <div
            class="absolute top-0 right-1/4 w-[600px] h-[600px] bg-slate-400/5 blur-[140px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto relative z-10 transition-all duration-1000 transform"
            :class="revealed ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
            <div class="mb-20 text-center">
                <span
                    class="text-[10px] md:text-xs uppercase tracking-[0.3em] text-brand-teal-light font-bold mb-4 block">Keynote
                    Speakers</span>
                <h2 class="text-4xl md:text-6xl font-serif font-bold text-white max-w-4xl mx-auto leading-tight italic">
                    Industry Leaders <br class="hidden md:block" />
                    <span class="text-slate-500"> Shaping the Future</span>
                </h2>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div
                    class="bg-white/5 backdrop-blur-md border border-slate-600/30 rounded-2xl p-6 flex flex-col sm:flex-row gap-6 items-center sm:items-start hover:bg-white/10 transition duration-300 group">
                    <div
                        class="w-28 h-28 flex-shrink-0 rounded-full border-2 border-slate-500/50 group-hover:border-slate-300 transition-colors overflow-hidden bg-slate-800 flex items-center justify-center grayscale">
                        <img alt="Keynote speaker portrait" class="w-full h-full object-cover"
                            src="{{ asset('images/speaker-dalbeler.webp') }}" />
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <h3 class="text-xl font-bold text-white font-sans">Ugur Dalbeler</h3>
                        <p class="text-slate-300 text-sm font-medium mb-3">CEO, Colakoglu Metalurji</p>
                        <p class="text-slate-400 text-sm leading-relaxed line-clamp-3">A distinguished leader in the
                            Turkish steel industry, driving strategic growth and sustainable production initiatives at
                            one of the nation's largest steel producers.</p>
                        <span
                            class="text-slate-300 text-xs hover:text-white mt-3 inline-block font-semibold tracking-wide cursor-pointer transition-colors">Read
                            Full Bio -&gt;</span>
                    </div>
                </div>

                <div
                    class="bg-white/5 backdrop-blur-md border border-slate-600/30 rounded-2xl p-6 flex flex-col sm:flex-row gap-6 items-center sm:items-start hover:bg-white/10 transition duration-300 group">
                    <div
                        class="w-28 h-28 flex-shrink-0 rounded-full border-2 border-slate-500/50 group-hover:border-slate-300 transition-colors overflow-hidden bg-slate-800 flex items-center justify-center grayscale">
                        <img alt="Keynote speaker portrait" class="w-full h-full object-cover"
                            src="{{ asset('images/speaker-dalbeler.webp') }}" />
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <h3 class="text-xl font-bold text-white font-sans">Ugur Dalbeler</h3>
                        <p class="text-slate-300 text-sm font-medium mb-3">CEO, Colakoglu Metalurji</p>
                        <p class="text-slate-400 text-sm leading-relaxed line-clamp-3">Pioneering the integration of
                            advanced automation and eco-friendly technologies within heavy industrial manufacturing to
                            meet global decarbonization targets.</p>
                        <span
                            class="text-slate-300 text-xs hover:text-white mt-3 inline-block font-semibold tracking-wide cursor-pointer transition-colors">Read
                            Full Bio -&gt;</span>
                    </div>
                </div>

                <div
                    class="bg-white/5 backdrop-blur-md border border-slate-600/30 rounded-2xl p-6 flex flex-col sm:flex-row gap-6 items-center sm:items-start hover:bg-white/10 transition duration-300 group">
                    <div
                        class="w-28 h-28 flex-shrink-0 rounded-full border-2 border-slate-500/50 group-hover:border-slate-300 transition-colors overflow-hidden bg-slate-800 flex items-center justify-center grayscale">
                        <img alt="Keynote speaker portrait" class="w-full h-full object-cover"
                            src="{{ asset('images/speaker-dalbeler.webp') }}" />
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <h3 class="text-xl font-bold text-white font-sans">Ugur Dalbeler</h3>
                        <p class="text-slate-300 text-sm font-medium mb-3">CEO, Colakoglu Metalurji</p>
                        <p class="text-slate-400 text-sm leading-relaxed line-clamp-3">Strategizing the future of
                            metallurgical supply chains, focusing on resilience and innovation in the face of shifting
                            geopolitical dynamics across Eurasia.</p>
                        <span
                            class="text-slate-300 text-xs hover:text-white mt-3 inline-block font-semibold tracking-wide cursor-pointer transition-colors">Read
                            Full Bio -&gt;</span>
                    </div>
                </div>

                <div
                    class="bg-white/5 backdrop-blur-md border border-slate-600/30 rounded-2xl p-6 flex flex-col sm:flex-row gap-6 items-center sm:items-start hover:bg-white/10 transition duration-300 group">
                    <div
                        class="w-28 h-28 flex-shrink-0 rounded-full border-2 border-slate-500/50 group-hover:border-slate-300 transition-colors overflow-hidden bg-slate-800 flex items-center justify-center grayscale">
                        <img alt="Keynote speaker portrait" class="w-full h-full object-cover"
                            src="{{ asset('images/speaker-dalbeler.webp') }}" />
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <h3 class="text-xl font-bold text-white font-sans">Ugur Dalbeler</h3>
                        <p class="text-slate-300 text-sm font-medium mb-3">CEO, Colakoglu Metalurji</p>
                        <p class="text-slate-400 text-sm leading-relaxed line-clamp-3">Advocating for digital
                            transformation and smart factory solutions to enhance operational efficiency and global
                            competitiveness in the steel sector.</p>
                        <span
                            class="text-slate-300 text-xs hover:text-white mt-3 inline-block font-semibold tracking-wide cursor-pointer transition-colors">Read
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
    <section class="py-32 bg-slate-950 overflow-hidden relative" id="who-attends"
        x-data="{ revealed: false, isDragging: false, startX: 0, scrollLeft: 0, scrollProgress: 0 }"
        x-intersect.once="revealed = true">
        <!-- Ambient Glow -->
        <div class="absolute -top-24 -left-24 w-96 h-96 bg-blue-600/5 blur-[120px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto px-6 mb-16 transition-all duration-1000 transform"
            :class="revealed ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
            <span
                class="text-[10px] md:text-xs uppercase tracking-[0.3em] text-brand-teal-light font-bold mb-4 block">Networking
                Pool</span>
            <h2 class="text-4xl md:text-7xl font-serif font-bold text-white mb-6 leading-tight">
                Who <br class="hidden md:block" />
                <span class="text-slate-500 italic">Attends?</span>
            </h2>
            <p class="text-slate-400 text-lg md:text-2xl font-light max-w-2xl font-sans leading-relaxed">
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
                        class="relative aspect-[4/3] rounded-2xl md:rounded-[1.5rem] overflow-hidden bg-slate-900 border border-white/5 shadow-2xl transition-transform duration-700 group-hover/card:scale-[1.02]">
                        <img src="{{ asset('images/attendees/producers_v2.png') }}" alt="Steel Producers"
                            class="absolute inset-0 w-full h-full object-cover grayscale group-hover/card:grayscale-0 transition-all duration-1000 group-hover/card:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/20 to-transparent"></div>
                    </div>
                    <div class="mt-8 px-4">
                        <h4 class="text-2xl md:text-3xl font-bold text-white mb-3">Steel Producers</h4>
                        <p class="text-slate-400 text-base md:text-lg font-light leading-relaxed">
                            Global manufacturers driving the industry forward with next-gen production tech.
                        </p>
                    </div>
                </div>

                <!-- Card 2: International Traders -->
                <div class="flex-none w-[320px] md:w-[480px] snap-start group/card">
                    <div
                        class="relative aspect-[4/3] rounded-2xl md:rounded-[1.5rem] overflow-hidden bg-slate-900 border border-white/5 shadow-2xl transition-transform duration-700 group-hover/card:scale-[1.02]">
                        <img src="{{ asset('images/attendees/traders_v2.png') }}" alt="International Traders"
                            class="absolute inset-0 w-full h-full object-cover grayscale group-hover/card:grayscale-0 transition-all duration-1000 group-hover/card:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/20 to-transparent"></div>
                    </div>
                    <div class="mt-8 px-4">
                        <h4 class="text-2xl md:text-3xl font-bold text-white mb-3">International Traders</h4>
                        <p class="text-slate-400 text-base md:text-lg font-light leading-relaxed">
                            Strategic networkers connecting supply with demand across global corridors.
                        </p>
                    </div>
                </div>

                <!-- Card 3: Logistics Providers -->
                <div class="flex-none w-[320px] md:w-[480px] snap-start group/card">
                    <div
                        class="relative aspect-[4/3] rounded-2xl md:rounded-[1.5rem] overflow-hidden bg-slate-900 border border-white/5 shadow-2xl transition-transform duration-700 group-hover/card:scale-[1.02]">
                        <img src="{{ asset('images/attendees/logistics_v2.png') }}" alt="Logistics Providers"
                            class="absolute inset-0 w-full h-full object-cover grayscale group-hover/card:grayscale-0 transition-all duration-1000 group-hover/card:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/20 to-transparent"></div>
                    </div>
                    <div class="mt-8 px-4">
                        <h4 class="text-2xl md:text-3xl font-bold text-white mb-3">Logistics Providers</h4>
                        <p class="text-slate-400 text-base md:text-lg font-light leading-relaxed">
                            Architects of global supply chains, optimizing transit from mill to port.
                        </p>
                    </div>
                </div>

                <!-- Card 4: Financial Institutions -->
                <div class="flex-none w-[320px] md:w-[480px] snap-start group/card">
                    <div
                        class="relative aspect-[4/3] rounded-2xl md:rounded-[1.5rem] overflow-hidden bg-slate-900 border border-white/5 shadow-2xl transition-transform duration-700 group-hover/card:scale-[1.02]">
                        <img src="https://images.unsplash.com/photo-1560520653-9e0e4c89eb11?q=80&w=2000&auto=format&fit=crop"
                            alt="Financial Institutions"
                            class="absolute inset-0 w-full h-full object-cover grayscale group-hover/card:grayscale-0 transition-all duration-1000 group-hover/card:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/20 to-transparent"></div>
                    </div>
                    <div class="mt-8 px-4">
                        <h4 class="text-2xl md:text-3xl font-bold text-white mb-3">Financial Institutions</h4>
                        <p class="text-slate-400 text-base md:text-lg font-light leading-relaxed">
                            Key investment partners fueling the green steel transition and trade finance.
                        </p>
                    </div>
                </div>

                <!-- Card 5: Technology Providers -->
                <div class="flex-none w-[320px] md:w-[480px] snap-start group/card">
                    <div
                        class="relative aspect-[4/3] rounded-2xl md:rounded-[1.5rem] overflow-hidden bg-slate-900 border border-white/5 shadow-2xl transition-transform duration-700 group-hover/card:scale-[1.02]">
                        <img src="https://images.unsplash.com/photo-1581091226825-a6a2a5aee158?q=80&w=2000&auto=format&fit=crop"
                            alt="Technology Providers"
                            class="absolute inset-0 w-full h-full object-cover grayscale group-hover/card:grayscale-0 transition-all duration-1000 group-hover/card:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/20 to-transparent"></div>
                    </div>
                    <div class="mt-8 px-4">
                        <h4 class="text-2xl md:text-3xl font-bold text-white mb-3">Technology Providers</h4>
                        <p class="text-slate-400 text-base md:text-lg font-light leading-relaxed">
                            Innovative AI and engineering firms transforming manufacturing standards.
                        </p>
                    </div>
                </div>

                <!-- Card 6: Government Departments -->
                <div class="flex-none w-[320px] md:w-[480px] snap-start group/card">
                    <div
                        class="relative aspect-[4/3] rounded-2xl md:rounded-[1.5rem] overflow-hidden bg-slate-900 border border-white/5 shadow-2xl transition-transform duration-700 group-hover/card:scale-[1.02]">
                        <img src="https://images.unsplash.com/photo-1521737604893-d14cc237f11d?q=80&w=2000&auto=format&fit=crop"
                            alt="Government & Institutions"
                            class="absolute inset-0 w-full h-full object-cover grayscale group-hover/card:grayscale-0 transition-all duration-1000 group-hover/card:scale-110">
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-950/20 to-transparent"></div>
                    </div>
                    <div class="mt-8 px-4">
                        <h4 class="text-2xl md:text-3xl font-bold text-white mb-3">Gov & Institutions</h4>
                        <p class="text-slate-400 text-base md:text-lg font-light leading-relaxed">
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
                        class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center text-white hover:bg-white/10 transition-all">
                        <span class="material-symbols-outlined">chevron_left</span>
                    </button>
                    <button @click="$refs.slider.scrollBy({ left: 400, behavior: 'smooth' })"
                        class="w-12 h-12 rounded-full border border-white/20 flex items-center justify-center text-white hover:bg-white/10 transition-all">
                        <span class="material-symbols-outlined">chevron_right</span>
                    </button>
                </div>
            </div>
        </div>
    </section>


    <!-- BEGIN: Sponsorship -->
    <section class="py-32 bg-slate-950 relative overflow-hidden" id="sponsorship"
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
                    class="text-[11px] md:text-xs uppercase tracking-[0.4em] text-brand-teal-light font-bold mb-4 block opacity-80">Strategic
                    Partnerships</span>
                <h2 class="text-5xl md:text-8xl font-serif font-bold text-white mb-8 leading-tight">
                    Why Become a <br class="hidden md:block" />
                    <span class="text-slate-500 italic">Sponsor?</span>
                </h2>
                <p class="text-slate-400 text-xl md:text-2xl font-light max-w-3xl mx-auto font-sans leading-relaxed">
                    Beyond making your brand visible in the global steel industry, it positions you among the key
                    players shaping the sector.
                </p>
            </div>

            <!-- Strategic Points: Apple Dark Style Cards -->
            <div class="grid md:grid-cols-3 gap-8 mb-32">

                <!-- Card 1: Strategic Positioning -->
                <div
                    class="relative p-12 rounded-[2.5rem] bg-slate-900/50 border border-white/5 hover:border-blue-500/30 shadow-2xl transition-all duration-700 group flex flex-col h-full overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-blue-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                    </div>
                    <div class="relative z-10">
                        <div class="mb-12">
                            <span
                                class="material-symbols-outlined text-4xl text-blue-500 group-hover:scale-110 transition-transform duration-500">public</span>
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-3xl md:text-4xl font-bold text-white leading-[1.15] mb-4">
                                Strategic <span class="text-blue-500">Positioning</span> in the market.
                            </h4>
                            <p class="text-slate-400 text-lg font-light">In the International Steel Industry</p>
                        </div>
                        <div class="mt-12 flex justify-end">
                            <button
                                class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-slate-950 group-hover:bg-blue-500 group-hover:text-white transition-all duration-300">
                                <span class="material-symbols-outlined text-xl font-bold">add</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 2: Target Audience -->
                <div
                    class="relative p-12 rounded-[2.5rem] bg-slate-900/50 border border-white/5 hover:border-orange-500/30 shadow-2xl transition-all duration-700 group flex flex-col h-full overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-orange-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                    </div>
                    <div class="relative z-10">
                        <div class="mb-12">
                            <span
                                class="material-symbols-outlined text-4xl text-orange-500 group-hover:scale-110 transition-transform duration-500">track_changes</span>
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-3xl md:text-4xl font-bold text-white leading-[1.15] mb-4">
                                Direct <span class="text-orange-500">Engagement</span> with targets.
                            </h4>
                            <p class="text-slate-400 text-lg font-light">With High-Level Target Audience</p>
                        </div>
                        <div class="mt-12 flex justify-end">
                            <button
                                class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-slate-950 group-hover:bg-orange-500 group-hover:text-white transition-all duration-300">
                                <span class="material-symbols-outlined text-xl font-bold">add</span>
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Card 3: Global Wealth -->
                <div
                    class="relative p-12 rounded-[2.5rem] bg-slate-900/50 border border-white/5 hover:border-purple-500/30 shadow-2xl transition-all duration-700 group flex flex-col h-full overflow-hidden">
                    <div
                        class="absolute inset-0 bg-gradient-to-br from-purple-500/5 to-transparent opacity-0 group-hover:opacity-100 transition-opacity duration-700">
                    </div>
                    <div class="relative z-10">
                        <div class="mb-12">
                            <span
                                class="material-symbols-outlined text-4xl text-purple-500 group-hover:scale-110 transition-transform duration-500">account_balance</span>
                        </div>
                        <div class="flex-grow">
                            <h4 class="text-3xl md:text-4xl font-bold text-white leading-[1.15] mb-4">
                                Global <span class="text-purple-500">Wealth Hub</span> access.
                            </h4>
                            <p class="text-slate-400 text-lg font-light">At the Heart of World Steel Industry</p>
                        </div>
                        <div class="mt-12 flex justify-end">
                            <button
                                class="w-10 h-10 rounded-full bg-white flex items-center justify-center text-slate-950 group-hover:bg-purple-500 group-hover:text-white transition-all duration-300">
                                <span class="material-symbols-outlined text-xl font-bold">add</span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Toggle Tabs -->
            <div class="flex justify-center mb-16">
                <div class="inline-flex bg-slate-900 p-1.5 rounded-2xl border border-white/5 shadow-sm">
                    <button @click="activeTab = 'sponsors'"
                        :class="activeTab === 'sponsors' ? 'bg-white/10 text-white shadow-sm' : 'text-slate-500 hover:text-slate-300'"
                        class="px-8 py-3 rounded-xl transition-all font-semibold text-sm tracking-tight">OUR
                        SPONSORS</button>
                    <button @click="activeTab = 'packages'"
                        :class="activeTab === 'packages' ? 'bg-white/10 text-white shadow-sm' : 'text-slate-500 hover:text-slate-300'"
                        class="px-8 py-3 rounded-xl transition-all font-semibold text-sm tracking-tight">SPONSORSHIP
                        PACKAGES</button>
                </div>
            </div>

            <!-- Content Area -->
            <div class="grid lg:grid-cols-2 gap-12 items-start mb-24">
                <!-- Left: Subheading 1 -->
                <div class="p-12 md:p-16 rounded-[3rem] bg-slate-900/40 border border-white/5 shadow-2xl animate-fade-in"
                    x-show="activeTab === 'packages'">
                    <h3 class="text-3xl md:text-4xl font-serif font-bold text-white mb-8 leading-tight">Package
                        <br />Options</h3>
                    <div class="space-y-6">
                        <p class="text-slate-400 text-lg leading-relaxed font-light">
                            Steel Networking Summits offers its sponsors a range of sponsorship packages, providing
                            tailored solutions to meet each brand’s specific needs.
                        </p>
                        <p class="text-slate-500 leading-relaxed font-light italic border-l-2 border-white/10 pl-6">
                            These packages are designed in line with brand objectives and communication strategies. All
                            sponsorship packages aim to deliver 360-degree visibility and engagement before, during, and
                            after the conference.
                        </p>
                    </div>
                </div>

                <!-- Right: Subheading 2 -->
                <div class="p-12 md:p-16 rounded-[3rem] bg-slate-900/40 border border-white/5 shadow-2xl animate-fade-in"
                    x-show="activeTab === 'packages'">
                    <h3 class="text-3xl md:text-4xl font-serif font-bold text-white mb-8 leading-tight">Exclusive
                        Benefits <br />& Visibility</h3>
                    <div class="space-y-6">
                        <p class="text-slate-400 text-lg leading-relaxed font-light">
                            Sponsors will have the opportunity to be featured in all printed and digital promotional
                            materials, on the official website, social media channels, and in-event visibility
                            applications.
                        </p>
                        <p class="text-slate-300 text-lg leading-relaxed font-light font-semibold">
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
                    class="group relative px-12 py-6 bg-white text-slate-950 rounded-full font-bold text-xl transition-all shadow-[0_20px_50px_rgba(255,255,255,0.05)] hover:shadow-[0_30px_70px_rgba(255,255,255,0.1)] active:scale-95">
                    <span class="relative z-10">Become a Sponsor</span>
                    <div
                        class="absolute inset-0 rounded-full bg-slate-900 opacity-0 group-hover:opacity-10 scale-0 group-hover:scale-100 transition-all duration-500">
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
            <div class="fixed inset-0 bg-slate-950/80 backdrop-blur-xl pointer-events-auto" @click="showForm = false">
            </div>
            <div
                class="relative w-full max-w-xl bg-slate-900 border border-white/10 rounded-[3rem] shadow-2xl p-10 md:p-14 pointer-events-auto animate-fade-in">
                <button @click="showForm = false"
                    class="absolute top-10 right-10 text-white/40 hover:text-white transition-colors">
                    <span class="material-symbols-outlined">close</span>
                </button>
                <h3 class="text-4xl font-serif font-bold text-white mb-3">Sponsorship Inquiry</h3>
                <p class="text-slate-400 mb-10 font-light text-lg">Elevate your brand at Steel Summit 2026.</p>

                <form action="#" method="POST" class="space-y-8">
                    @csrf
                    <div class="space-y-2">
                        <label class="text-xs uppercase tracking-[0.2em] text-slate-500 font-bold ml-1">Company
                            Name</label>
                        <input type="text" required name="company"
                            class="w-full bg-white/5 border border-white/10 rounded-[1.25rem] py-5 px-8 text-white focus:outline-none focus:border-white/20 transition-all">
                    </div>
                    <div class="grid md:grid-cols-2 gap-8">
                        <div class="space-y-2">
                            <label class="text-xs uppercase tracking-[0.2em] text-slate-500 font-bold ml-1">Work
                                Email</label>
                            <input type="email" required name="email"
                                class="w-full bg-white/5 border border-white/10 rounded-[1.25rem] py-5 px-8 text-white focus:outline-none focus:border-white/20 transition-all">
                        </div>
                        <div class="space-y-2">
                            <label class="text-xs uppercase tracking-[0.2em] text-slate-500 font-bold ml-1">Phone
                                Number</label>
                            <input type="tel" required name="phone"
                                class="w-full bg-white/5 border border-white/10 rounded-[1.25rem] py-5 px-8 text-white focus:outline-none focus:border-white/20 transition-all">
                        </div>
                    </div>
                    <button type="submit"
                        class="w-full py-6 bg-white text-slate-950 rounded-[1.25rem] font-bold text-xl hover:bg-slate-200 transition-all active:scale-95 shadow-xl">
                        Submit Application
                    </button>
                </form>
            </div>
        </div>
    </section>

    <!-- BEGIN: Unique Value Proposition -->
    <section class="py-32 bg-slate-950 overflow-hidden relative" id="unique-value" x-data="{ revealed: false }"
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
                        class="text-[10px] md:text-xs uppercase tracking-[0.3em] text-brand-teal-light font-bold mb-4 block">The
                        Difference</span>
                    <h2 class="text-4xl md:text-6xl font-serif font-bold text-white mb-10 leading-[1.1]">
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
                                <h4 class="text-xl md:text-2xl text-white font-semibold mb-2 leading-snug">Targeted and
                                    Results-Oriented Networking Model</h4>
                                <p class="text-slate-500 font-light leading-relaxed">Precision-focused engagement for
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
                                <h4 class="text-xl md:text-2xl text-white font-semibold mb-2 leading-snug">New Business
                                    Connections That Lead Directly to Trade</h4>
                                <p class="text-slate-500 font-light leading-relaxed">Fostering high-value trade
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
                                <h4 class="text-xl md:text-2xl text-white font-semibold mb-2 leading-snug">All Industry
                                    Power Hubs on a Single Platform</h4>
                                <p class="text-slate-500 font-light leading-relaxed">The entire industry's ecosystem
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
                                <h4 class="text-xl md:text-2xl text-white font-semibold mb-2 leading-snug">Truly Global
                                    Representation</h4>
                                <p class="text-slate-500 font-light leading-relaxed">Worldwide delegates bridging global
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
                                <h4 class="text-xl md:text-2xl text-white font-semibold mb-2 leading-snug">Istanbul’s
                                    Strategic and Geopolitical Advantage</h4>
                                <p class="text-slate-500 font-light leading-relaxed">The world's bridge, serving as a
                                    central hub for trade.</p>
                            </div>
                        </li>
                    </ul>

                    <div class="mt-16">
                        <button @click="modalOpen = true"
                            class="group relative px-12 py-5 bg-white text-slate-950 rounded-full font-bold text-lg transition-all shadow-[0_20px_50px_rgba(255,255,255,0.05)] hover:shadow-[0_30px_70px_rgba(255,255,255,0.1)] active:scale-95 overflow-hidden">
                            <span class="relative z-10 transition-colors group-hover:text-blue-500">Register Now</span>
                            <div
                                class="absolute inset-x-0 bottom-0 h-0 bg-slate-50 group-hover:h-full transition-all duration-300">
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
                        class="absolute -bottom-6 -right-6 w-36 h-36 md:w-44 md:h-44 bg-slate-900/90 backdrop-blur-2xl rounded-[2rem] border border-white/10 p-6 flex flex-col justify-end shadow-2xl animate-float group-hover:border-brand-teal-light/30 transition-all duration-500 z-20">
                        <span class="text-4xl md:text-5xl text-white font-serif italic mb-1">5+</span>
                        <span
                            class="text-[9px] md:text-[10px] text-slate-400 font-sans tracking-[0.2em] uppercase font-bold leading-tight">Elite
                            <br />Advantages</span>
                    </div>
                </div>

            </div>
        </div>
    </section>


    <section class="py-24 bg-slate-950 px-6 border-t border-white/5 relative overflow-hidden" id="venue"
        x-data="{ revealed: false }" x-intersect.once="revealed = true">
        <!-- Ambient Glow -->
        <div
            class="absolute top-1/2 -right-24 w-80 h-80 bg-brand-teal/10 blur-[100px] rounded-full pointer-events-none">
        </div>

        <div class="max-w-7xl mx-auto space-y-12 relative z-10 transition-all duration-1000 transform"
            :class="revealed ? 'opacity-100 translate-y-0' : 'opacity-0 translate-y-12'">
            <div class="mb-12">
                <span
                    class="text-[10px] md:text-xs uppercase tracking-[0.3em] text-brand-teal-light font-bold mb-4 block">Event
                    Location</span>
                <h2 class="text-4xl md:text-7xl font-serif font-bold text-white mb-6">The <span
                        class="text-slate-500 italic">Venue.</span></h2>
            </div>
            <div class="relative w-full h-[560px] md:h-[680px] rounded-3xl overflow-hidden shadow-2xl">
                <img alt="Swissotel Istanbul Night View" class="absolute inset-0 w-full h-full object-cover"
                    src="{{ asset('images/venue-swissotel.webp') }}" />
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                <div
                    class="absolute bottom-10 left-6 md:left-12 bg-slate-900/80 backdrop-blur-xl border border-slate-500/30 p-8 rounded-2xl max-w-lg">
                    <h3 class="text-3xl font-serif font-bold text-gradient-platinum italic mb-2">Swissotel Istanbul</h3>
                    <p class="text-slate-400">Experience unmatched Turkish hospitality at the crossroads of Europe and
                        Asia.</p>
                </div>
            </div>
        </div>
    </section>


    <div class="fixed inset-0 z-[100] flex items-center justify-center p-6 overflow-y-auto" x-cloak x-show="modalOpen">
        <div @click="modalOpen = false" class="fixed inset-0 bg-slate-950/95 backdrop-blur-xl"></div>
        <div class="relative glass max-w-2xl w-full rounded-[2rem] p-10 md:p-14 shadow-2xl overflow-hidden"
            x-show="modalOpen" x-transition>
            <button @click="modalOpen = false" class="absolute top-6 right-6 text-slate-500 hover:text-white"
                aria-label="Close">×</button>
            <div class="text-center mb-8">
                <h3 class="text-3xl md:text-4xl font-serif font-bold text-white mb-3">VIP Registration Request</h3>
                <p class="text-slate-400 font-light italic">Submit your credentials for an exclusive delegation
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
                            class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 border-b border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-slate-400 peer"
                            placeholder=" " value="{{ old('first_name') }}" required />
                        <label for="first_name"
                            class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-slate-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                    </div>
                    <div class="relative z-0 w-full group">
                        <input type="text" name="last_name" id="last_name"
                            class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 border-b border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-slate-400 peer"
                            placeholder=" " value="{{ old('last_name') }}" required />
                        <label for="last_name"
                            class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-slate-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Surname</label>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="relative z-0 w-full group">
                        <input type="email" name="email" id="email"
                            class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 border-b border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-slate-400 peer"
                            placeholder=" " value="{{ old('email') }}" required />
                        <label for="email"
                            class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-slate-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Business
                            Email</label>
                    </div>
                    <div class="relative z-0 w-full group">
                        <input type="text" name="company_name" id="company_name"
                            class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 border-b border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-slate-400 peer"
                            placeholder=" " value="{{ old('company_name') }}" required />
                        <label for="company_name"
                            class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-slate-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Organization/Company</label>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="relative z-0 w-full group">
                        <select name="country" id="country"
                            class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 appearance-none focus:outline-none focus:ring-0 peer"
                            required>
                            <option value="">Select Country</option>
                            <option value="Afghanistan">Afghanistan</option>
                            <option value="Albania">Albania</option>
                            <option value="Algeria">Algeria</option>
                            <option value="Andorra">Andorra</option>
                            <option value="Angola">Angola</option>
                            <option value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option value="Argentina">Argentina</option>
                            <option value="Armenia">Armenia</option>
                            <option value="Australia">Australia</option>
                            <option value="Austria">Austria</option>
                            <option value="Azerbaijan">Azerbaijan</option>
                            <option value="Bahamas">Bahamas</option>
                            <option value="Bahrain">Bahrain</option>
                            <option value="Bangladesh">Bangladesh</option>
                            <option value="Barbados">Barbados</option>
                            <option value="Belarus">Belarus</option>
                            <option value="Belgium">Belgium</option>
                            <option value="Belize">Belize</option>
                            <option value="Benin">Benin</option>
                            <option value="Bhutan">Bhutan</option>
                            <option value="Bolivia">Bolivia</option>
                            <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option value="Botswana">Botswana</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Brunei">Brunei</option>
                            <option value="Bulgaria">Bulgaria</option>
                            <option value="Burkina Faso">Burkina Faso</option>
                            <option value="Burundi">Burundi</option>
                            <option value="Cabo Verde">Cabo Verde</option>
                            <option value="Cambodia">Cambodia</option>
                            <option value="Cameroon">Cameroon</option>
                            <option value="Canada">Canada</option>
                            <option value="Central African Republic">Central African Republic</option>
                            <option value="Chad">Chad</option>
                            <option value="Chile">Chile</option>
                            <option value="China">China</option>
                            <option value="Colombia">Colombia</option>
                            <option value="Comoros">Comoros</option>
                            <option value="Congo">Congo</option>
                            <option value="Costa Rica">Costa Rica</option>
                            <option value="Croatia">Croatia</option>
                            <option value="Cuba">Cuba</option>
                            <option value="Cyprus">Cyprus</option>
                            <option value="Czechia">Czechia</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Djibouti">Djibouti</option>
                            <option value="Dominica">Dominica</option>
                            <option value="Dominican Republic">Dominican Republic</option>
                            <option value="Ecuador">Ecuador</option>
                            <option value="Egypt">Egypt</option>
                            <option value="El Salvador">El Salvador</option>
                            <option value="Equatorial Guinea">Equatorial Guinea</option>
                            <option value="Eritrea">Eritrea</option>
                            <option value="Estonia">Estonia</option>
                            <option value="Eswatini">Eswatini</option>
                            <option value="Ethiopia">Ethiopia</option>
                            <option value="Fiji">Fiji</option>
                            <option value="Finland">Finland</option>
                            <option value="France">France</option>
                            <option value="Gabon">Gabon</option>
                            <option value="Gambia">Gambia</option>
                            <option value="Georgia">Georgia</option>
                            <option value="Germany">Germany</option>
                            <option value="Ghana">Ghana</option>
                            <option value="Greece">Greece</option>
                            <option value="Grenada">Grenada</option>
                            <option value="Guatemala">Guatemala</option>
                            <option value="Guinea">Guinea</option>
                            <option value="Guinea-Bissau">Guinea-Bissau</option>
                            <option value="Guyana">Guyana</option>
                            <option value="Haiti">Haiti</option>
                            <option value="Honduras">Honduras</option>
                            <option value="Hungary">Hungary</option>
                            <option value="Iceland">Iceland</option>
                            <option value="India">India</option>
                            <option value="Indonesia">Indonesia</option>
                            <option value="Iran">Iran</option>
                            <option value="Iraq">Iraq</option>
                            <option value="Ireland">Ireland</option>
                            <option value="Israel">Israel</option>
                            <option value="Italy">Italy</option>
                            <option value="Jamaica">Jamaica</option>
                            <option value="Japan">Japan</option>
                            <option value="Jordan">Jordan</option>
                            <option value="Kazakhstan">Kazakhstan</option>
                            <option value="Kenya">Kenya</option>
                            <option value="Kiribati">Kiribati</option>
                            <option value="Korea, North">Korea, North</option>
                            <option value="Korea, South">Korea, South</option>
                            <option value="Kosovo">Kosovo</option>
                            <option value="Kuwait">Kuwait</option>
                            <option value="Kyrgyzstan">Kyrgyzstan</option>
                            <option value="Laos">Laos</option>
                            <option value="Latvia">Latvia</option>
                            <option value="Lebanon">Lebanon</option>
                            <option value="Lesotho">Lesotho</option>
                            <option value="Liberia">Liberia</option>
                            <option value="Libya">Libya</option>
                            <option value="Liechtenstein">Liechtenstein</option>
                            <option value="Lithuania">Lithuania</option>
                            <option value="Luxembourg">Luxembourg</option>
                            <option value="Madagascar">Madagascar</option>
                            <option value="Malawi">Malawi</option>
                            <option value="Malaysia">Malaysia</option>
                            <option value="Maldives">Maldives</option>
                            <option value="Mali">Mali</option>
                            <option value="Malta">Malta</option>
                            <option value="Marshall Islands">Marshall Islands</option>
                            <option value="Mauritania">Mauritania</option>
                            <option value="Mauritius">Mauritius</option>
                            <option value="Mexico">Mexico</option>
                            <option value="Micronesia">Micronesia</option>
                            <option value="Moldova">Moldova</option>
                            <option value="Monaco">Monaco</option>
                            <option value="Mongolia">Mongolia</option>
                            <option value="Montenegro">Montenegro</option>
                            <option value="Morocco">Morocco</option>
                            <option value="Mozambique">Mozambique</option>
                            <option value="Myanmar">Myanmar</option>
                            <option value="Namibia">Namibia</option>
                            <option value="Nauru">Nauru</option>
                            <option value="Nepal">Nepal</option>
                            <option value="Netherlands">Netherlands</option>
                            <option value="New Zealand">New Zealand</option>
                            <option value="Nicaragua">Nicaragua</option>
                            <option value="Niger">Niger</option>
                            <option value="Nigeria">Nigeria</option>
                            <option value="North Macedonia">North Macedonia</option>
                            <option value="Norway">Norway</option>
                            <option value="Oman">Oman</option>
                            <option value="Pakistan">Pakistan</option>
                            <option value="Palau">Palau</option>
                            <option value="Palestine">Palestine</option>
                            <option value="Panama">Panama</option>
                            <option value="Papua New Guinea">Papua New Guinea</option>
                            <option value="Paraguay">Paraguay</option>
                            <option value="Peru">Peru</option>
                            <option value="Philippines">Philippines</option>
                            <option value="Poland">Poland</option>
                            <option value="Portugal">Portugal</option>
                            <option value="Qatar">Qatar</option>
                            <option value="Romania">Romania</option>
                            <option value="Russia">Russia</option>
                            <option value="Rwanda">Rwanda</option>
                            <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
                            <option value="Saint Lucia">Saint Lucia</option>
                            <option value="Saint Vincent">Saint Vincent</option>
                            <option value="Samoa">Samoa</option>
                            <option value="San Marino">San Marino</option>
                            <option value="Sao Tome and Principe">Sao Tome and Principe</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Senegal">Senegal</option>
                            <option value="Serbia">Serbia</option>
                            <option value="Seychelles">Seychelles</option>
                            <option value="Sierra Leone">Sierra Leone</option>
                            <option value="Singapore">Singapore</option>
                            <option value="Slovakia">Slovakia</option>
                            <option value="Slovenia">Slovenia</option>
                            <option value="Solomon Islands">Solomon Islands</option>
                            <option value="Somalia">Somalia</option>
                            <option value="South Africa">South Africa</option>
                            <option value="South Sudan">South Sudan</option>
                            <option value="Spain">Spain</option>
                            <option value="Sri Lanka">Sri Lanka</option>
                            <option value="Sudan">Sudan</option>
                            <option value="Suriname">Suriname</option>
                            <option value="Sweden">Sweden</option>
                            <option value="Switzerland">Switzerland</option>
                            <option value="Syria">Syria</option>
                            <option value="Taiwan">Taiwan</option>
                            <option value="Tajikistan">Tajikistan</option>
                            <option value="Tanzania">Tanzania</option>
                            <option value="Thailand">Thailand</option>
                            <option value="Timor-Leste">Timor-Leste</option>
                            <option value="Togo">Togo</option>
                            <option value="Tonga">Tonga</option>
                            <option value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option value="Tunisia">Tunisia</option>
                            <option value="Turkey">Turkey</option>
                            <option value="Türkiye">Türkiye</option>
                            <option value="Turkmenistan">Turkmenistan</option>
                            <option value="Tuvalu">Tuvalu</option>
                            <option value="Uganda">Uganda</option>
                            <option value="Ukraine">Ukraine</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="United States">United States</option>
                            <option value="Uruguay">Uruguay</option>
                            <option value="Uzbekistan">Uzbekistan</option>
                            <option value="Vanuatu">Vanuatu</option>
                            <option value="Vatican City">Vatican City</option>
                            <option value="Venezuela">Venezuela</option>
                            <option value="Vietnam">Vietnam</option>
                            <option value="Yemen">Yemen</option>
                            <option value="Zambia">Zambia</option>
                            <option value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </div>

                    <div class="relative z-0 w-full group iti-wrapper">
                        <input type="tel" name="phone_full" id="phone_full"
                            class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 border-b border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-slate-400 peer"
                            placeholder=" " value="{{ old('phone_full') }}" required />
                        <input type="hidden" name="phone_country_code" id="phone_country_code" />
                        <input type="hidden" name="phone" id="phone_pure" />
                    </div>
                </div>
                <!-- Some custom css to align intl-tel-input's input box with tailwind floating label -->
                <style>
                    .iti-wrapper .iti {
                        width: 100%;
                        border-bottom: 1px solid rgba(255, 255, 255, 0.2);
                        transition: border-color 0.3s;
                    }

                    .iti-wrapper .iti__tel-input {
                        background: transparent !important;
                        border: none !important;
                        color: white !important;
                        width: 100%;
                        padding-top: 0.75rem !important;
                        padding-bottom: 0.75rem !important;
                    }

                    .iti-wrapper .iti__tel-input:focus {
                        outline: none !important;
                        box-shadow: none !important;
                    }

                    .iti-wrapper:focus-within .iti {
                        border-bottom-color: #94a3b8;
                    }

                    /* Allow intl-tel-input to handle padding when separateDialCode is used */
                </style>

                <label class="flex items-start space-x-3">
                    <input
                        class="w-5 h-5 rounded border-white/20 bg-transparent text-slate-400 focus:ring-slate-500/50 mt-0.5"
                        name="consent_approved" type="checkbox" value="1" @checked(old('consent_approved')) required />
                    <span class="text-xs text-slate-500 leading-relaxed">I approve communication consent and confirm
                        that I have read and accepted the Privacy Notice regarding the processing and storage of my
                        personal data.</span>
                </label>

                <button
                    class="w-full bg-gradient-to-r from-slate-200 to-slate-400 text-slate-950 font-bold py-4 rounded-xl uppercase tracking-widest text-sm"
                    type="submit">Submit Formal Request</button>
            </form>
        </div>
    </div>

    <footer class="bg-slate-950 pt-20 pb-12 px-6 border-t border-slate-800">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">
            <div>
                <img alt="Steel Networking Summits" class="h-10 w-auto object-contain"
                    src="{{ asset('images/steel-networking-logo-footer.webp') }}" />
                <p class="text-slate-400 text-sm mt-4">The premier networking event for the global iron and steel
                    community.</p>
            </div>
            <div>
                <h4 class="text-white font-bold tracking-wider uppercase text-xs mb-4">Explore</h4>
                <ul class="space-y-2">
                    <li><a class="text-slate-400 hover:text-white text-sm" href="#main">Main</a></li>
                    <li><a class="text-slate-400 hover:text-white text-sm" href="#agenda">Agenda</a></li>
                    <li><a class="text-slate-400 hover:text-white text-sm" href="#about">About Us</a></li>
                    <li><a class="text-slate-400 hover:text-white text-sm" href="#keynote-speakers">Keynote Speakers</a>
                    </li>
                    <li><a class="text-slate-400 hover:text-white text-sm" href="#sponsorship">Sponsorship</a></li>
                    <li><a class="text-slate-400 hover:text-white text-sm" href="#venue">Venue</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold tracking-wider uppercase text-xs mb-4">Legal</h4>
                <ul class="space-y-2">
                    <li><a class="text-slate-400 hover:text-white text-sm" href="#">Privacy Policy</a></li>
                    <li><a class="text-slate-400 hover:text-white text-sm" href="#">Terms of Service</a></li>
                    <li><a class="text-slate-400 hover:text-white text-sm" href="#">Data Protection</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold tracking-wider uppercase text-xs mb-4">Contact Us</h4>
                <p class="text-slate-400 text-sm">info@steelsummits.com</p>
                <p class="text-slate-400 text-sm mt-2">+1 (555) 123-4567</p>
            </div>
        </div>
        <div class="max-w-7xl mx-auto border-t border-slate-800/50 mt-10 pt-6 text-slate-500 text-xs">© 2026 Steel
            Summit. All rights reserved.</div>
    </footer>

    <button @click="window.scrollTo({ top: 0, behavior: 'smooth' })" aria-label="Yukari cik"
        class="fixed bottom-6 right-6 z-[60] h-12 w-12 rounded-full glass border border-slate-400/30 text-slate-100 hover:text-white hover:border-slate-300/50 transition-all duration-300 shadow-xl"
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

        // Floating label functionality for Tom Select and intl-tel-input
        document.addEventListener('DOMContentLoaded', function () {
            const countrySelect = document.getElementById('country');
            const phoneInput = document.querySelector("#phone_full");
            let tomSelectInstance = null;
            let iti = null;

            // Tom Select Initialization
            if (countrySelect) {
                tomSelectInstance = new TomSelect('#country', {
                    create: false,
                    sortField: { field: "text", direction: "asc" }
                });
            }

            // Populate Tom Select from ITI data
            function populateCountryList() {
                if (!tomSelectInstance) return;

                let countries = [];
                if (window.intlTelInput && window.intlTelInput.getCountryData) {
                    countries = window.intlTelInput.getCountryData();
                } else if (window.intlTelInputGlobals && window.intlTelInputGlobals.getCountryData) {
                    countries = window.intlTelInputGlobals.getCountryData();
                }

                if (countries.length > 0) {
                    const currentVal = tomSelectInstance.getValue();
                    const existingValues = Object.values(tomSelectInstance.options).map(o => o.value);

                    const newOptions = countries
                        .map(c => c.name.split(' (')[0])
                        .filter((v, i, a) => a.indexOf(v) === i) // unique names
                        .filter(name => !existingValues.includes(name))
                        .map(name => ({ value: name, text: name }));

                    if (newOptions.length > 0) {
                        tomSelectInstance.addOptions(newOptions);
                        tomSelectInstance.refreshOptions(false);
                    }

                    if (currentVal) tomSelectInstance.setValue(currentVal);
                }
            }

            // Sync Country with Phone
            function syncCountryWithPhone(itiInstance) {
                const countryData = itiInstance.getSelectedCountryData();
                if (tomSelectInstance && countryData.name) {
                    const cleanName = countryData.name.split(' (')[0];
                    if (tomSelectInstance.getValue() !== cleanName) {
                        tomSelectInstance.setValue(cleanName);
                    }
                }
            }

            // Intl-Tel-Input for Phone
            if (phoneInput) {
                iti = window.intlTelInput(phoneInput, {
                    initialCountry: "auto",
                    geoIpLookup: function (callback) {
                        fetch("https://ipapi.co/json/")
                            .then(res => res.json())
                            .then(data => {
                                callback(data.country_code);
                                // Population sequence
                                setTimeout(populateCountryList, 200);
                                setTimeout(() => {
                                    if (tomSelectInstance && data.country_name) {
                                        const cleanName = data.country_name.split(' (')[0];
                                        tomSelectInstance.setValue(cleanName);
                                    }
                                }, 1000);
                            })
                            .catch(() => {
                                callback("tr");
                                setTimeout(populateCountryList, 500);
                                if (tomSelectInstance) tomSelectInstance.setValue("Turkey");
                            });
                    },
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.0.4/js/utils.js",
                    separateDialCode: true,
                });

                // Sync Country Select with Phone Input
                phoneInput.addEventListener("countrychange", function () {
                    syncCountryWithPhone(iti);
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

            // Continuous Label & Sync Check
            function monitorForm() {
                // Label float check
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

                // Sync sync (one-way country select -> ITI flag)
                if (countrySelect && iti && tomSelectInstance) {
                    const tsVal = tomSelectInstance.getValue();
                    const itiVal = iti.getSelectedCountryData().name ? iti.getSelectedCountryData().name.split(' (')[0] : '';
                    // Only sync if user changed TS and its different from ITI
                    // We don't want an infinite loop, so we only sync if the active element is TS
                    if (document.activeElement === countrySelect || document.activeElement.closest('.ts-control')) {
                        if (tsVal && tsVal !== itiVal) {
                            // Find ITI iso code
                            const allCountries = window.intlTelInputGlobals ? window.intlTelInputGlobals.getCountryData() : [];
                            const match = allCountries.find(c => c.name.split(' (')[0] === tsVal);
                            if (match) {
                                iti.setCountry(match.iso2);
                            }
                        }
                    }
                }
            }
            setInterval(monitorForm, 1000);

            // Initial population attempt
            populateCountryList();
        });
    </script>
</body>

</html>