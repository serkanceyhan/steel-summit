<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Steel Networking Summit 2026 | VIP Experience</title>

    <script src="https://cdn.tailwindcss.com?plugins=forms,container-queries"></script>
    <script defer src="https://unpkg.com/@alpinejs/collapse@3.x.x/dist/cdn.min.js"></script>
    <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&family=Playfair+Display:ital,wght@0,400;0,700;0,800;1,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

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

        [x-cloak] { display: none !important; }
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
        .iti { width: 100%; }
        .iti__country-list { background-color: #020617; border: 1px solid rgba(255, 255, 255, 0.1); color: #fff; border-radius: 0.5rem; }
        .iti__country.iti__highlight { background-color: rgba(255, 255, 255, 0.1); }
        .iti__search-input { background: #0f172a; color: #fff; border: 1px solid rgba(255,255,255,0.2) !important; border-radius: 0.25rem !important; }
        .iti__selected-country { opacity: 0.8; }
        .iti__selected-country:hover { opacity: 1; background-color: transparent !important; }
        
        .ts-control { background: transparent !important; border: none !important; border-bottom: 1px solid rgba(255,255,255,0.2) !important; color: #fff !important; padding: 0.75rem 0 !important; border-radius: 0 !important; box-shadow: none !important; }
        .ts-control>input { color: #fff !important; }
        .ts-dropdown { background: #020617 !important; border: 1px solid rgba(255,255,255,0.1) !important; border-radius: 0.5rem !important; margin-top: 5px !important; }
        .ts-dropdown .option { color: #cbd5e1 !important; padding: 0.5rem 1rem !important; }
        .ts-dropdown .option.active, .ts-dropdown .option:hover { background: rgba(255,255,255,0.1) !important; color: #fff !important; }
        .ts-wrapper.single .ts-control::after { border-color: rgba(255,255,255,0.4) transparent transparent transparent !important; right: 0 !important;}
        .ts-control.has-items { padding-bottom: 0px !important; }
        .ts-control .item { color: #fff !important; font-size: 1rem; }
    </style>
<script id="browser-logger-active">
(function() {
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
        console[method] = function(...args) {
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
<body
    @scroll.window="scrolled = (window.pageYOffset > 20); showToTop = (window.pageYOffset > 420)"
    class="bg-slate-950 text-slate-200 font-sans antialiased overflow-x-hidden"
    x-data="{ mobileMenu: false, scrolled: false, showToTop: false, modalOpen: @js($errors->any() || session()->has('status')) }"
>
  <nav :class="scrolled ? 'top-4' : 'top-6'" class="fixed left-1/2 -translate-x-1/2 w-[92%] max-w-7xl z-50 transition-all duration-500 ease-in-out">
    
    <div class="relative flex items-stretch justify-between w-full pr-6">
        
        <div class="absolute inset-y-0 right-0 left-[68px] md:left-20 glass rounded-2xl shadow-2xl pointer-events-none -z-10"></div>

        <div class="relative z-10 flex items-center group cursor-pointer pl-0 md:-ml-2">
            <img alt="Steel Summits Logo" class="h-[76px] md:h-[88px] w-auto object-contain transition-transform duration-300 hover:scale-105" src="{{ asset('images/steel-networking-logo-main.webp') }}">
        </div>

        <div class="relative z-10 hidden md:flex items-center space-x-8 text-[14px] font-bold tracking-[0.2em] uppercase py-4">
            <a class="text-slate-300 hover:text-white transition-opacity" href="#agenda">Agenda</a>
            <a class="text-slate-300 hover:text-white transition-opacity" href="#about">About Us</a>
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
        <a @click="mobileMenu = false" class="text-lg font-serif font-bold" href="#keynote-speakers">Keynote Speakers</a>
        <a @click="mobileMenu = false" class="text-lg font-serif font-bold" href="#sponsorship">Sponsorship</a>
        <a @click="mobileMenu = false" class="text-lg font-serif font-bold" href="#venue">Venue</a>
        <button @click="modalOpen = true; mobileMenu = false" class="w-full border border-slate-400/30 text-white font-bold py-4 rounded-xl">Register Interest</button>
    </div>
</nav>  
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden" id="main">
        <div class="absolute inset-0 z-0">
            <img alt="Istanbul Night" class="w-full h-full object-cover scale-110" src="{{ asset('images/hero-istanbul.webp') }}" />
            <div class="absolute inset-0 hero-gradient"></div>
        </div>

        <div class="relative z-10 text-center px-6 max-w-6xl mx-auto pt-20 md:pt-28 pb-16 md:pb-0">
            
            <div class="inline-block px-4 md:px-5 py-1 md:py-1.5 border border-white/10 rounded-full mb-6 md:mb-8 mt-4 md:mt-8 glass">
                <span class="text-slate-300 text-[9px] md:text-xs font-bold tracking-[0.2em] md:tracking-[0.3em] uppercase">Invitation Only - Istanbul 2026</span>
            </div>

            <h1 class="text-5xl md:text-8xl font-serif font-bold mb-6 md:mb-8 leading-[1.1] text-white">
                Istanbul <br />
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-slate-100 via-slate-300 to-slate-500 italic pb-2">Steel Summit</span> <br />
                2026
            </h1>

            <p class="text-base md:text-2xl text-slate-400 mb-8 md:mb-12 font-light max-w-3xl mx-auto leading-relaxed">
                The world's most exclusive assembly for steel industry titans.
                <br class="hidden md:block" />
                <span class="text-slate-300 font-medium">25 - 27 October 2026</span> | Swissotel Istanbul
            </p>

            <div class="mx-auto mb-4 md:mb-16 flex w-full max-w-xl items-center justify-center" x-data="countdownTimer()" x-init="start()">
                <template x-for="(item, index) in remaining" :key="item.label">
                    <div :class="index > 0 ? 'border-l border-white/10' : ''" class="flex w-1/4 min-w-0 flex-col items-center px-1 md:px-8">
                        <span class="text-3xl md:text-6xl font-serif font-light text-white mb-1 md:mb-2 tabular-nums w-[2.5ch] text-center" x-text="item.value">00</span>
                        <span class="text-[9px] md:text-[10px] uppercase tracking-[0.2em] text-slate-500 font-medium" x-text="item.label">Days</span>
                    </div>
                </template>
            </div>

            <button @click="modalOpen = true" class="hidden md:inline-flex items-center justify-center px-12 py-6 bg-gradient-to-r from-slate-200 to-slate-400 text-slate-950 font-extrabold tracking-[0.25em] text-lg rounded-2xl shadow-[0_0_30px_rgba(148,163,184,0.5)] hover:scale-105 active:scale-95 transition-all duration-500 uppercase">Pre-Register Now</button>
        </div>
    </section>

    <!-- Mobile Fixed CTA -->
    <div class="md:hidden fixed bottom-0 left-0 w-full z-50 p-4 bg-gradient-to-t from-slate-950 via-slate-950/90 to-transparent pt-10 pointer-events-none" style="padding-bottom: max(0.75rem, env(safe-area-inset-bottom));">
        <button @click="modalOpen = true" class="w-full flex items-center justify-center px-6 py-4 bg-gradient-to-r from-slate-200 to-slate-400 text-slate-950 font-extrabold tracking-[0.2em] text-[14px] md:text-[15px] rounded-xl shadow-[0_0_30px_rgba(148,163,184,0.3)] active:scale-95 transition-all duration-300 uppercase pointer-events-auto">
            Pre-Register Now
        </button>
    </div>

    <section class="py-24 bg-slate-950 px-6" id="agenda" x-data="{ activeTab: 1 }">
        <div class="max-w-6xl mx-auto">
            <div class="mb-12 text-center">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-gradient-platinum mb-4 italic">STEEL Summit Program</h2>
                <p class="text-slate-400 text-sm md:text-base">25-27 October 2026 | Swissotel Istanbul</p>
            </div>

            <div class="flex overflow-x-auto pb-4 mb-8 border-b border-white/10">
                <div class="flex space-x-6 md:space-x-12 mx-auto min-w-max">
                    <button :class="activeTab === 1 ? 'text-white border-b-2 border-slate-300' : 'text-slate-500 border-b-2 border-transparent'" @click="activeTab = 1" class="pb-4 text-xs md:text-sm font-bold tracking-[0.2em] uppercase">25 Oct | Sunday</button>
                    <button :class="activeTab === 2 ? 'text-white border-b-2 border-slate-300' : 'text-slate-500 border-b-2 border-transparent'" @click="activeTab = 2" class="pb-4 text-xs md:text-sm font-bold tracking-[0.2em] uppercase">26 Oct | Monday</button>
                    <button :class="activeTab === 3 ? 'text-white border-b-2 border-slate-300' : 'text-slate-500 border-b-2 border-transparent'" @click="activeTab = 3" class="pb-4 text-xs md:text-sm font-bold tracking-[0.2em] uppercase">27 Oct | Tuesday</button>
                </div>
            </div>

            <div class="space-y-4" x-show="activeTab === 1">
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">18:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">Networking on the Bosphorus</h4>
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
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">1st Session: World Economic Outlook and Steel Industry</h4>
                    <p class="text-slate-400 mt-2">Participants: POSCO, BAOW, TATA Steel, Nippon Steel, Marcegaglia Steel, EZZ Steel, HBIS, ArcelorMittal, World Steel Association.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">11:30-12:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">2nd Session: Steel in a High Inflation World: Cost Pressure, Investment Risks, Strategic Responses</h4>
                    <p class="text-slate-400 mt-2">Participants: World Steel Dynamics Economist, Fastmarkets, Kallanish.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">12:30-14:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">Lunch and Networking</h4>
                    <p class="text-slate-400 mt-2">Under the Sponsorship of X.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">14:00-15:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">3rd Session: The Rise of the Asian Steel Industry: Production, Trade and Market Dynamics</h4>
                    <p class="text-slate-400 mt-2">Participants: ANN Steel, TATA Steel, SEAISI, BAOW, Nucor Steel, Jindal Steel, HBIS, ArcelorMittal, Krakatau.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">15:30-16:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">Coffee Break</h4>
                    <p class="text-slate-400 mt-2">Under the Sponsorship of X.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">16:00-17:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">4th Session: Steel Opportunities in MENA Region: Growth, Investment and Trade</h4>
                    <p class="text-slate-400 mt-2">Participants: Tosyalı Holding, Emirates Steel, Arab Iron and Steel Union, Hadeed, EZZ Steel.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">19:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">Gala Dinner and Networking Cocktail</h4>
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
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">1st Session: Steel Market Across America: Diverging Paths and Common Challenges</h4>
                    <p class="text-slate-400 mt-2">Participants: Nucor Corporation, Steelco, Cleveland-Cliffs, CAP Acero, Ternium Argentina.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">11:30-12:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">2nd Session: Navigating the World Steel Trade: Trade Remedies, Protectionism, and the Future of Fair Competition</h4>
                    <p class="text-slate-400 mt-2">Participants: ArentFox, World Steel Dynamics, WTO, Fastmarkets.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">12:30-14:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">Lunch and Networking</h4>
                    <p class="text-slate-400 mt-2">Under the Sponsorship of X.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">14:00-15:30</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">3rd Session: Future of Steel in Europe: Global Competition, Safeguard and Industrial Strategy</h4>
                    <p class="text-slate-400 mt-2">Participants: EUROFER, Marcegaglia Steel, Danieli, Metinvest, CELSA.</p>
                </div>
                <div class="glass rounded-xl p-6">
                    <p class="text-slate-300 text-xs uppercase tracking-[0.2em] mb-2">15:30-17:00</p>
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">4th Session: Steel in the New Era: Green Transition and Intelligent Industry</h4>
                    <p class="text-slate-400 mt-2">Participants: McKinsey, SSAB, SMS Group, Primetals Technologies, Danieli.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-950 px-6 border-t border-white/5" id="about">
        <div class="max-w-6xl mx-auto space-y-10">
            <div class="flex flex-col gap-3 md:flex-row md:items-end md:justify-between">
                <div>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-gradient-platinum uppercase tracking-widest">About Us</h2>
                </div>
                <p class="max-w-2xl text-slate-400 leading-relaxed">
                    An international gathering built to connect the most influential decision-makers across the global steel industry.
                </p>
            </div>

            <div class="grid gap-6 lg:grid-cols-[1.15fr_0.85fr]">
                <article class="glass rounded-[2rem] p-8 md:p-10 flex flex-col justify-between min-h-[320px]">
                    <div>
                        <p class="text-lg md:text-xl text-slate-300 leading-relaxed max-w-2xl">
                            Steel Summit 2026, is an international steel conference that brings together the most influential and powerful players of the global steel industry in Istanbul.
                        </p>
                    </div>
                </article>

                <div class="grid gap-6">
                    <article class="rounded-[2rem] border border-slate-400/20 bg-slate-900/70 p-7 md:p-8 shadow-[0_20px_45px_rgba(2,6,23,0.45)]">
                        <p class="text-xs font-bold tracking-[0.3em] uppercase text-slate-500 mb-4">At The Conference</p>
                        <p class="text-slate-200 text-lg md:text-xl leading-relaxed">
                            Leading companies, decision-makers, and opinion leaders shaping the industry from around the world will participate both as speakers and as top-level attendees at this prestigious event.
                        </p>
                    </article>

                    <article class="rounded-[2rem] border border-slate-400/20 bg-slate-900/70 p-7 md:p-8 shadow-[0_20px_45px_rgba(2,6,23,0.45)]">
                        <p class="text-xs font-bold tracking-[0.3em] uppercase text-slate-500 mb-4">2026 Focus</p>
                        <p class="text-slate-200 text-lg md:text-xl leading-relaxed">
                            Steel Summit 2026, while taking a comprehensive view of the past, present, and future of the global steel industry, will provide up-to-date and in-depth insights into steel markets across all regions, from Europe to Asia, and from the Americas to the Middle East and Africa.
                        </p>
                    </article>
                </div>
            </div>
        </div>
    </section>

    <section class="py-32 bg-slate-950 px-6 border-t border-white/5" id="keynote-speakers">
        <div class="max-w-7xl mx-auto">
            <div class="mb-20 text-center">
                <h2 class="text-4xl md:text-5xl font-serif font-bold bg-clip-text text-transparent bg-gradient-to-r from-slate-100 to-slate-400 mb-4 italic">Keynote Speakers</h2>
                <p class="text-slate-400 text-lg font-light font-sans max-w-2xl mx-auto">Hear from the architects shaping the future of global steel.</p>
            </div>

            <div class="grid grid-cols-1 lg:grid-cols-2 gap-8">
                <div class="bg-white/5 backdrop-blur-md border border-slate-600/30 rounded-2xl p-6 flex flex-col sm:flex-row gap-6 items-center sm:items-start hover:bg-white/10 transition duration-300 group">
                    <div class="w-28 h-28 flex-shrink-0 rounded-full border-2 border-slate-500/50 group-hover:border-slate-300 transition-colors overflow-hidden bg-slate-800 flex items-center justify-center grayscale">
                        <img alt="Keynote speaker portrait" class="w-full h-full object-cover" src="{{ asset('images/speaker-dalbeler.webp') }}" />
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <h3 class="text-xl font-bold text-white font-sans">Ugur Dalbeler</h3>
                        <p class="text-slate-300 text-sm font-medium mb-3">CEO, Colakoglu Metalurji</p>
                        <p class="text-slate-400 text-sm leading-relaxed line-clamp-3">A distinguished leader in the Turkish steel industry, driving strategic growth and sustainable production initiatives at one of the nation's largest steel producers.</p>
                        <span class="text-slate-300 text-xs hover:text-white mt-3 inline-block font-semibold tracking-wide cursor-pointer transition-colors">Read Full Bio -&gt;</span>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur-md border border-slate-600/30 rounded-2xl p-6 flex flex-col sm:flex-row gap-6 items-center sm:items-start hover:bg-white/10 transition duration-300 group">
                    <div class="w-28 h-28 flex-shrink-0 rounded-full border-2 border-slate-500/50 group-hover:border-slate-300 transition-colors overflow-hidden bg-slate-800 flex items-center justify-center grayscale">
                        <img alt="Keynote speaker portrait" class="w-full h-full object-cover" src="{{ asset('images/speaker-dalbeler.webp') }}" />
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <h3 class="text-xl font-bold text-white font-sans">Ugur Dalbeler</h3>
                        <p class="text-slate-300 text-sm font-medium mb-3">CEO, Colakoglu Metalurji</p>
                        <p class="text-slate-400 text-sm leading-relaxed line-clamp-3">Pioneering the integration of advanced automation and eco-friendly technologies within heavy industrial manufacturing to meet global decarbonization targets.</p>
                        <span class="text-slate-300 text-xs hover:text-white mt-3 inline-block font-semibold tracking-wide cursor-pointer transition-colors">Read Full Bio -&gt;</span>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur-md border border-slate-600/30 rounded-2xl p-6 flex flex-col sm:flex-row gap-6 items-center sm:items-start hover:bg-white/10 transition duration-300 group">
                    <div class="w-28 h-28 flex-shrink-0 rounded-full border-2 border-slate-500/50 group-hover:border-slate-300 transition-colors overflow-hidden bg-slate-800 flex items-center justify-center grayscale">
                        <img alt="Keynote speaker portrait" class="w-full h-full object-cover" src="{{ asset('images/speaker-dalbeler.webp') }}" />
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <h3 class="text-xl font-bold text-white font-sans">Ugur Dalbeler</h3>
                        <p class="text-slate-300 text-sm font-medium mb-3">CEO, Colakoglu Metalurji</p>
                        <p class="text-slate-400 text-sm leading-relaxed line-clamp-3">Strategizing the future of metallurgical supply chains, focusing on resilience and innovation in the face of shifting geopolitical dynamics across Eurasia.</p>
                        <span class="text-slate-300 text-xs hover:text-white mt-3 inline-block font-semibold tracking-wide cursor-pointer transition-colors">Read Full Bio -&gt;</span>
                    </div>
                </div>

                <div class="bg-white/5 backdrop-blur-md border border-slate-600/30 rounded-2xl p-6 flex flex-col sm:flex-row gap-6 items-center sm:items-start hover:bg-white/10 transition duration-300 group">
                    <div class="w-28 h-28 flex-shrink-0 rounded-full border-2 border-slate-500/50 group-hover:border-slate-300 transition-colors overflow-hidden bg-slate-800 flex items-center justify-center grayscale">
                        <img alt="Keynote speaker portrait" class="w-full h-full object-cover" src="{{ asset('images/speaker-dalbeler.webp') }}" />
                    </div>
                    <div class="flex-1 text-center sm:text-left">
                        <h3 class="text-xl font-bold text-white font-sans">Ugur Dalbeler</h3>
                        <p class="text-slate-300 text-sm font-medium mb-3">CEO, Colakoglu Metalurji</p>
                        <p class="text-slate-400 text-sm leading-relaxed line-clamp-3">Advocating for digital transformation and smart factory solutions to enhance operational efficiency and global competitiveness in the steel sector.</p>
                        <span class="text-slate-300 text-xs hover:text-white mt-3 inline-block font-semibold tracking-wide cursor-pointer transition-colors">Read Full Bio -&gt;</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

<!-- BEGIN: Who Attends -->
<section class="py-32 bg-slate-950 px-6 border-t border-white/5" id="who-attends">
<div class="max-w-7xl mx-auto">
<div class="mb-20 text-center">
<h2 class="text-4xl md:text-5xl font-serif font-bold text-gradient-platinum mb-4 italic">Who Attends</h2>
<p class="text-slate-400 text-lg font-light max-w-2xl mx-auto">A cross-disciplinary assembly of the industry's primary stakeholders.</p>
</div>
<div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
<div class="glass p-6 rounded-2xl text-center group hover:bg-white/10 transition-all duration-300">
<span class="material-symbols-outlined text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4 transition-colors">factory</span>
<h4 class="text-xs font-bold uppercase tracking-widest text-slate-300">Steel Producers</h4>
</div>
<div class="glass p-6 rounded-2xl text-center group hover:bg-white/10 transition-all duration-300">
<span class="material-symbols-outlined text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4 transition-colors">local_shipping</span>
<h4 class="text-xs font-bold uppercase tracking-widest text-slate-300">Logistics</h4>
</div>
<div class="glass p-6 rounded-2xl text-center group hover:bg-white/10 transition-all duration-300">
<span class="material-symbols-outlined text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4 transition-colors">account_balance</span>
<h4 class="text-xs font-bold uppercase tracking-widest text-slate-300">Financial Inst.</h4>
</div>
<div class="glass p-6 rounded-2xl text-center group hover:bg-white/10 transition-all duration-300">
<span class="material-symbols-outlined text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4 transition-colors">analytics</span>
<h4 class="text-xs font-bold uppercase tracking-widest text-slate-300">Market Analysts</h4>
</div>
<div class="glass p-6 rounded-2xl text-center group hover:bg-white/10 transition-all duration-300">
<span class="material-symbols-outlined text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4 transition-colors">construction</span>
<h4 class="text-xs font-bold uppercase tracking-widest text-slate-300">End Users</h4>
</div>
<div class="glass p-6 rounded-2xl text-center group hover:bg-white/10 transition-all duration-300">
<span class="material-symbols-outlined text-4xl text-cyan-400 group-hover:text-cyan-300 mb-4 transition-colors">recycling</span>
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
<img alt="Strategic Networking" class="relative rounded-3xl w-full h-[500px] object-cover border border-slate-700/50" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAEinaNILYjhM6gt35xHARPVFW2C-g4W3JXREZybWOnjQ37MWhEGYZpZaHtHm3cdinNSpkfD-9KR41SdWgY3-W01Sr3MTtPWGTyADS-vSTFqUeSlljSMIo9w5LKcvBk3c7arntp3LANARHHsXfhbbz2yvzzB1jF9iwWP6WJ0AiJ4Yc804tRqGB1-o3DvFxao26oP3qI8O2nfpl6W1I9DJh6GAwPFLP4mJw91pa0zX5wBqbnJyDGAiqnmjSHoaQ0QMDcO35vF7uSYYo"/>
</div>
<div class="lg:w-1/2">
<h2 class="text-4xl md:text-5xl font-serif font-bold text-white mb-8">Elevate Your Strategy</h2>
<ul class="space-y-6 mb-12">
<li class="flex items-start space-x-4">
<span class="material-symbols-outlined text-cyan-400 mt-1">insights</span>
<div>
<h4 class="text-lg font-bold text-slate-200">Proprietary Intelligence</h4>
<p class="text-slate-400 font-light">Gain access to exclusive data and forecasts not available through public channels.</p>
</div>
</li>
<li class="flex items-start space-x-4">
<span class="material-symbols-outlined text-cyan-400 mt-1">handshake</span>
<div>
<h4 class="text-lg font-bold text-slate-200">Vetted B2B Network</h4>
<p class="text-slate-400 font-light">Direct introduction to C-level executives from the world's largest steel producers.</p>
</div>
</li>
<li class="flex items-start space-x-4">
<span class="material-symbols-outlined text-cyan-400 mt-1">verified</span>
<div>
<h4 class="text-lg font-bold text-slate-200">Decarbonization Roadmap</h4>
<p class="text-slate-400 font-light">Real-world case studies on the transition to hydrogen and green steel technology.</p>
</div>
</li>
</ul>
<button @click="modalOpen = true" class="bg-white/5 border border-slate-600 px-10 py-4 rounded-xl text-white font-bold tracking-widest uppercase hover:bg-white/10 transition-all flex items-center gap-3 group">
                Download Brochure
                <span class="material-symbols-outlined group-hover:translate-y-1 transition-transform">download</span>
</button>
</div>
</div>
</section>

    <section class="py-24 bg-slate-950 px-6 border-t border-white/5" id="sponsorship">
        <div class="max-w-6xl mx-auto text-center">
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-gradient-platinum uppercase tracking-widest mb-12">Sponsorship</h2>
            
            <div class="flex flex-col sm:flex-row items-center justify-center gap-6">
                <a href="#our-sponsors" class="w-full sm:w-auto px-10 py-5 glass hover:bg-white/10 text-white font-bold tracking-wider uppercase rounded-xl transition duration-300">Our Sponsors</a>
                <a href="#sponsorship-packages" class="w-full sm:w-auto px-10 py-5 bg-gradient-to-r from-slate-200 to-slate-400 text-slate-950 hover:scale-105 active:scale-95 font-bold tracking-wider uppercase rounded-xl transition-all duration-300">Sponsorship Packages</a>
            </div>
        </div>
    </section>

    <section class="py-24 bg-slate-950 px-6 border-t border-white/5" id="venue">
        <div class="max-w-7xl mx-auto">
            <div class="relative w-full h-[560px] md:h-[680px] rounded-3xl overflow-hidden shadow-2xl">
                <img alt="Swissotel Istanbul Night View" class="absolute inset-0 w-full h-full object-cover" src="{{ asset('images/venue-swissotel.webp') }}" />
                <div class="absolute inset-0 bg-gradient-to-t from-slate-950 via-slate-950/20 to-transparent"></div>
                <div class="absolute bottom-10 left-6 md:left-12 bg-slate-900/80 backdrop-blur-xl border border-slate-500/30 p-8 rounded-2xl max-w-lg">
                    <h3 class="text-3xl font-serif font-bold text-gradient-platinum italic mb-2">Swissotel Istanbul</h3>
                    <p class="text-slate-400">Experience unmatched Turkish hospitality at the crossroads of Europe and Asia.</p>
                </div>
            </div>
        </div>
    </section>

    <section class="py-20 bg-slate-950 px-6 border-t border-white/5" id="more">
        <div class="max-w-6xl mx-auto">
            <h2 class="text-4xl md:text-5xl font-serif font-bold text-gradient-platinum italic">More</h2>
        </div>
    </section>

    <div class="fixed inset-0 z-[100] flex items-center justify-center p-6 overflow-y-auto" x-cloak x-show="modalOpen">
        <div @click="modalOpen = false" class="fixed inset-0 bg-slate-950/95 backdrop-blur-xl"></div>
        <div class="relative glass max-w-2xl w-full rounded-[2rem] p-10 md:p-14 shadow-2xl overflow-hidden" x-show="modalOpen" x-transition>
            <button @click="modalOpen = false" class="absolute top-6 right-6 text-slate-500 hover:text-white" aria-label="Close">×</button>
            <div class="text-center mb-8">
                <h3 class="text-3xl md:text-4xl font-serif font-bold text-white mb-3">VIP Registration Request</h3>
                <p class="text-slate-400 font-light italic">Submit your credentials for an exclusive delegation invitation.</p>
            </div>

            
            <form action="/register" method="POST" class="space-y-8" id="register-form">
                @csrf

                @if (session('status'))
                    <div class="rounded-xl border border-emerald-300/30 bg-emerald-500/10 px-4 py-3 text-sm text-emerald-100">
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
                        <input type="text" name="first_name" id="first_name" class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 border-b border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-slate-400 peer" placeholder=" " value="{{ old('first_name') }}" required />
                        <label for="first_name" class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-slate-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Name</label>
                    </div>
                    <div class="relative z-0 w-full group">
                        <input type="text" name="last_name" id="last_name" class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 border-b border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-slate-400 peer" placeholder=" " value="{{ old('last_name') }}" required />
                        <label for="last_name" class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-slate-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Surname</label>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="relative z-0 w-full group">
                        <input type="email" name="email" id="email" class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 border-b border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-slate-400 peer" placeholder=" " value="{{ old('email') }}" required />
                        <label for="email" class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-slate-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Business Email</label>
                    </div>
                    <div class="relative z-0 w-full group">
                        <input type="text" name="company_name" id="company_name" class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 border-b border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-slate-400 peer" placeholder=" " value="{{ old('company_name') }}" required />
                        <label for="company_name" class="peer-focus:font-medium absolute text-sm text-slate-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-slate-300 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Organization/Company</label>
                    </div>
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <div class="relative z-0 w-full group">
                        <select name="country" id="country" class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 border-b border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-slate-400 peer" required>
                            <option value="">Select Country</option>
                            <option value="Turkey">Turkey</option>
                            <option value="United States">United States</option>
                            <option value="United Kingdom">United Kingdom</option>
                            <option value="Germany">Germany</option>
                            <option value="France">France</option>
                            <option value="Italy">Italy</option>
                            <option value="Spain">Spain</option>
                            <option value="China">China</option>
                            <option value="Japan">Japan</option>
                            <option value="India">India</option>
                            <option value="Brazil">Brazil</option>
                            <option value="Canada">Canada</option>
                            <option value="Australia">Australia</option>
                            <option value="South Korea">South Korea</option>
                            <option value="United Arab Emirates">United Arab Emirates</option>
                            <option value="Saudi Arabia">Saudi Arabia</option>
                            <option value="Egypt">Egypt</option>
                        </select>
                    </div>

                    <div class="relative z-0 w-full group iti-wrapper">
                        <input type="tel" name="phone_full" id="phone_full" class="block py-3 px-0 w-full text-base text-white bg-transparent border-0 border-b border-white/20 appearance-none focus:outline-none focus:ring-0 focus:border-slate-400 peer" placeholder=" " value="{{ old('phone_full') }}" required />
                        <input type="hidden" name="phone_country_code" id="phone_country_code" />
                        <input type="hidden" name="phone" id="phone_pure" />
                    </div>
                </div>
                <!-- Some custom css to align intl-tel-input's input box with tailwind floating label -->
                <style>
                    .iti-wrapper .iti { width: 100%; border-bottom: 1px solid rgba(255,255,255,0.2); }
                    .iti-wrapper .iti__tel-input { background: transparent !important; border: none !important; color: white !important; width: 100%; padding: 0.75rem 0 !important; }
                    .iti-wrapper .iti__tel-input:focus { outline: none !important; box-shadow: none !important; }
                    .iti-wrapper:focus-within .iti { border-bottom-color: #94a3b8; }
                    .iti-wrapper .iti--allow-dropdown input { padding-left: 52px !important; }
                </style>

                <label class="flex items-start space-x-3">
                    <input class="w-5 h-5 rounded border-white/20 bg-transparent text-slate-400 focus:ring-slate-500/50 mt-0.5" name="consent_approved" type="checkbox" value="1" @checked(old('consent_approved')) required />
                    <span class="text-xs text-slate-500 leading-relaxed">I approve communication consent and confirm that I have read and accepted the Privacy Notice regarding the processing and storage of my personal data.</span>
                </label>

                <button class="w-full bg-gradient-to-r from-slate-200 to-slate-400 text-slate-950 font-bold py-4 rounded-xl uppercase tracking-widest text-sm" type="submit">Submit Formal Request</button>
            </form>
        </div>
    </div>

    <footer class="bg-slate-950 pt-20 pb-12 px-6 border-t border-slate-800">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-10">
            <div>
                <img
                    alt="Steel Networking Summits"
                    class="h-10 w-auto object-contain"
                    src="{{ asset('images/steel-networking-logo-footer.webp') }}"/>
                <p class="text-slate-400 text-sm mt-4">The premier networking event for the global iron and steel community.</p>
            </div>
            <div><h4 class="text-white font-bold tracking-wider uppercase text-xs mb-4">Explore</h4><ul class="space-y-2"><li><a class="text-slate-400 hover:text-white text-sm" href="#main">Main</a></li><li><a class="text-slate-400 hover:text-white text-sm" href="#agenda">Agenda</a></li><li><a class="text-slate-400 hover:text-white text-sm" href="#about">About Us</a></li><li><a class="text-slate-400 hover:text-white text-sm" href="#keynote-speakers">Keynote Speakers</a></li><li><a class="text-slate-400 hover:text-white text-sm" href="#sponsorship">Sponsorship</a></li><li><a class="text-slate-400 hover:text-white text-sm" href="#venue">Venue</a></li></ul></div>
            <div><h4 class="text-white font-bold tracking-wider uppercase text-xs mb-4">Legal</h4><ul class="space-y-2"><li><a class="text-slate-400 hover:text-white text-sm" href="#">Privacy Policy</a></li><li><a class="text-slate-400 hover:text-white text-sm" href="#">Terms of Service</a></li><li><a class="text-slate-400 hover:text-white text-sm" href="#">Data Protection</a></li></ul></div>
            <div><h4 class="text-white font-bold tracking-wider uppercase text-xs mb-4">Contact Us</h4><p class="text-slate-400 text-sm">info@steelsummits.com</p><p class="text-slate-400 text-sm mt-2">+1 (555) 123-4567</p></div>
        </div>
        <div class="max-w-7xl mx-auto border-t border-slate-800/50 mt-10 pt-6 text-slate-500 text-xs">© 2026 Steel Summit. All rights reserved.</div>
    </footer>

    <button
        @click="window.scrollTo({ top: 0, behavior: 'smooth' })"
        aria-label="Yukari cik"
        class="fixed bottom-6 right-6 z-[60] h-12 w-12 rounded-full glass border border-slate-400/30 text-slate-100 hover:text-white hover:border-slate-300/50 transition-all duration-300 shadow-xl"
        type="button"
        x-cloak
        x-show="showToTop"
        x-transition.opacity.duration.300ms
    >
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
        document.addEventListener('DOMContentLoaded', function() {
            // Tom Select for Country
            if (document.getElementById('country')) {
                new TomSelect('#country', {
                    create: false,
                    sortField: {
                        field: "text",
                        direction: "asc"
                    }
                });
            }

            // Intl-Tel-Input for Phone
            const phoneInput = document.querySelector("#phone_full");
            if (phoneInput) {
                const iti = window.intlTelInput(phoneInput, {
                    initialCountry: "auto",
                    geoIpLookup: function(callback) {
                        fetch("https://ipapi.co/json/")
                        .then(function(res) { return res.json(); })
                        .then(function(data) { callback(data.country_code); })
                        .catch(function() { callback("tr"); });
                    },
                    utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/23.0.4/js/utils.js",
                    separateDialCode: true,
                });

                // Update hidden fields before submit
                const form = document.querySelector('#register-form');
                if (form) {
                    form.addEventListener('submit', function() {
                        const countryData = iti.getSelectedCountryData();
                        document.getElementById('phone_country_code').value = countryData ? '+' + countryData.dialCode : '';
                        document.getElementById('phone_pure').value = phoneInput.value;
                    });
                }
            }
        });
    </script>
</body>
</html>
