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
    x-data="{ mobileMenu: false, scrolled: false, showToTop: false, modalOpen: false }"
>
  <nav :class="scrolled ? 'top-4' : 'top-6'" class="fixed left-1/2 -translate-x-1/2 w-[92%] max-w-7xl z-50 transition-all duration-500 ease-in-out">
    
    <div class="relative flex items-stretch justify-between w-full pr-6">
        
        <div class="absolute inset-y-0 right-0 left-12 md:left-20 glass rounded-2xl shadow-2xl pointer-events-none -z-10"></div>

        <div class="relative z-10 flex items-center group cursor-pointer pl-0 md:-ml-2">
            <img alt="Steel Summits Logo" class="h-16 md:h-[88px] w-auto object-contain transition-transform duration-300 hover:scale-105" src="https://flux360.net/wp-content/uploads/2026/03/steel-networking-logo-e1773676160194.png">
        </div>

        <div class="relative z-10 hidden md:flex items-center space-x-8 text-[13px] font-medium tracking-[0.2em] uppercase py-4">
            <a class="text-white/60 hover:text-white transition-opacity" href="#main">Main</a>
            <a class="text-white/60 hover:text-white transition-opacity" href="#agenda">Agenda</a>
            <a class="text-white/60 hover:text-white transition-opacity" href="#about">About</a>
            <a class="text-white/60 hover:text-white transition-opacity" href="#keynote-speakers">Keynote Speakers</a>
            <a class="text-white/60 hover:text-white transition-opacity" href="#venue">Venue</a>
            <a class="text-white/60 hover:text-white transition-opacity" href="#more">More</a>
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
        <a @click="mobileMenu = false" class="text-lg font-serif" href="#main">Main</a>
        <a @click="mobileMenu = false" class="text-lg font-serif" href="#agenda">Agenda</a>
        <a @click="mobileMenu = false" class="text-lg font-serif" href="#about">About</a>
        <a @click="mobileMenu = false" class="text-lg font-serif" href="#keynote-speakers">Keynote Speakers</a>
        <a @click="mobileMenu = false" class="text-lg font-serif" href="#venue">Venue</a>
        <a @click="mobileMenu = false" class="text-lg font-serif" href="#more">More</a>
        <button @click="modalOpen = true; mobileMenu = false" class="w-full border border-slate-400/30 text-white font-bold py-4 rounded-xl">Register Interest</button>
    </div>
</nav>  
    <section class="relative min-h-screen flex items-center justify-center overflow-hidden" id="main">
        <div class="absolute inset-0 z-0">
            <img alt="Istanbul Night" class="w-full h-full object-cover scale-110" src="https://flux360.net/wp-content/uploads/2026/03/steel-summit-istanbul-compress.jpg" />
            <div class="absolute inset-0 hero-gradient"></div>
        </div>

        <div class="relative z-10 text-center px-6 max-w-6xl mx-auto pt-32 md:pt-36">
            
            <div class="inline-block px-5 py-1.5 border border-white/10 rounded-full mb-8 mt-6 md:mt-8 glass">
                <span class="text-slate-300 text-[10px] md:text-xs font-bold tracking-[0.3em] uppercase">Invitation Only - Istanbul 2026</span>
            </div>

            <h1 class="text-5xl md:text-8xl font-serif font-bold mb-8 leading-[1.1] text-white">
                Istanbul <br />
                <span class="bg-clip-text text-transparent bg-gradient-to-r from-slate-100 via-slate-300 to-slate-500 italic">Steel Networking</span> <br />
                Summit 2026
            </h1>

            <p class="text-lg md:text-2xl text-slate-400 mb-12 font-light max-w-3xl mx-auto leading-relaxed">
                The world's most exclusive assembly for steel industry titans.
                <br class="hidden md:block" />
                <span class="text-slate-300 font-medium">25 - 27 October 2026</span> | Swissotel Istanbul
            </p>

            <div class="mx-auto mb-16 flex w-full max-w-3xl items-center justify-center" x-data="countdownTimer()" x-init="start()">
                <template x-for="(item, index) in remaining" :key="item.label">
                    <div :class="index > 0 ? 'border-l border-white/10' : ''" class="flex w-1/4 min-w-0 flex-col items-center px-2 md:px-8">
                        <span class="text-4xl md:text-6xl font-serif font-light text-white mb-2 tabular-nums w-[2.5ch] text-center" x-text="item.value">00</span>
                        <span class="text-[10px] uppercase tracking-[0.2em] text-slate-500 font-medium" x-text="item.label">Days</span>
                    </div>
                </template>
            </div>

            <button @click="modalOpen = true" class="inline-flex items-center justify-center px-12 py-6 bg-gradient-to-r from-slate-200 to-slate-400 text-slate-950 font-extrabold tracking-[0.25em] text-lg rounded-2xl shadow-[0_0_30px_rgba(148,163,184,0.5)] hover:scale-105 active:scale-95 transition-all duration-500 uppercase">Pre-Register Now</button>
        </div>
    </section>

    <section class="py-24 bg-slate-950 px-6" id="agenda" x-data="{ activeTab: 1 }">
        <div class="max-w-6xl mx-auto">
            <div class="mb-12 text-center">
                <h2 class="text-4xl md:text-5xl font-serif font-bold text-gradient-platinum mb-4 italic">STEEL Networking Summits Program</h2>
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
                    <h4 class="text-lg md:text-xl font-semibold text-white tracking-wide">Networking on Istanbul Strait</h4>
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
                    <p class="text-xs font-bold tracking-[0.35em] uppercase text-slate-500 mb-3">About</p>
                    <h2 class="text-4xl md:text-5xl font-serif font-bold text-gradient-platinum italic">Steel Networking Summits</h2>
                </div>
                <p class="max-w-2xl text-slate-400 leading-relaxed">
                    An international gathering built to connect the most influential decision-makers across the global steel industry.
                </p>
            </div>

            <div class="grid gap-6 lg:grid-cols-[1.15fr_0.85fr]">
                <article class="glass rounded-[2rem] p-8 md:p-10 flex flex-col justify-between min-h-[320px]">
                    <div>
                        <p class="text-xs font-bold tracking-[0.3em] uppercase text-slate-500 mb-5">Overview</p>
                        <h3 class="text-3xl md:text-5xl font-serif font-bold text-white leading-tight mb-8">
                            About the Steel Networking Summits
                        </h3>
                        <p class="text-lg md:text-xl text-slate-300 leading-relaxed max-w-2xl">
                            Steel Networking Summits 2026, is an international steel conference that brings together the most influential and powerful players of the global steel industry in Istanbul.
                        </p>
                    </div>
                </article>

                <div class="grid gap-6">
                    <article class="rounded-[2rem] border border-slate-400/20 bg-slate-900/70 p-7 md:p-8 shadow-[0_20px_45px_rgba(2,6,23,0.45)]">
                        <p class="text-xs font-bold tracking-[0.3em] uppercase text-slate-500 mb-4">At The Conference</p>
                        <p class="text-slate-200 text-lg md:text-xl leading-relaxed font-medium">
                            Leading companies, decision-makers, and opinion leaders shaping the industry from around the world will participate both as speakers and as top-level attendees at this prestigious event.
                        </p>
                    </article>

                    <article class="rounded-[2rem] border border-slate-400/20 bg-slate-900/70 p-7 md:p-8 shadow-[0_20px_45px_rgba(2,6,23,0.45)]">
                        <p class="text-xs font-bold tracking-[0.3em] uppercase text-slate-500 mb-4">2026 Focus</p>
                        <p class="text-slate-200 text-lg md:text-xl leading-relaxed font-medium">
                            Steel Networking Summits 2026, while taking a comprehensive view of the past, present, and future of the global steel industry, will provide up-to-date and in-depth insights into steel markets across all regions, from Europe to Asia, and from the Americas to the Middle East and Africa.
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
                        <img alt="Keynote speaker portrait" class="w-full h-full object-cover" src="https://flux360.net/wp-content/uploads/2026/03/speaker-dalbeler.jpg" />
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
                        <img alt="Keynote speaker portrait" class="w-full h-full object-cover" src="https://flux360.net/wp-content/uploads/2026/03/speaker-dalbeler.jpg" />
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
                        <img alt="Keynote speaker portrait" class="w-full h-full object-cover" src="https://flux360.net/wp-content/uploads/2026/03/speaker-dalbeler.jpg" />
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
                        <img alt="Keynote speaker portrait" class="w-full h-full object-cover" src="https://flux360.net/wp-content/uploads/2026/03/speaker-dalbeler.jpg" />
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

    <section class="py-24 bg-slate-950 px-6 border-t border-white/5" id="venue">
        <div class="max-w-7xl mx-auto">
            <div class="relative w-full h-[560px] md:h-[680px] rounded-3xl overflow-hidden shadow-2xl">
                <img alt="Swissotel Istanbul Night View" class="absolute inset-0 w-full h-full object-cover" src="https://flux360.net/wp-content/uploads/2026/03/a5d2_bu_00_p_2048x1536.jpg" />
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

            
            <form action="/register" method="POST" class="space-y-8" x-data="phoneField()" x-init="init()">
                <input type="hidden" name="_token" value="hUlHQMkXXCF8ZvuWiDU9tbHJkLZ2WeDSBtDHe9I2" autocomplete="off">
                <div class="grid md:grid-cols-2 gap-6">
                    <input class="w-full bg-transparent border-0 border-b border-white/20 px-0 py-3 text-white focus:ring-0 focus:border-slate-400 placeholder:text-slate-600" name="full_name" type="text" placeholder="Full Name" value="" required />
                    <input class="w-full bg-transparent border-0 border-b border-white/20 px-0 py-3 text-white focus:ring-0 focus:border-slate-400 placeholder:text-slate-600" name="email" type="email" placeholder="Business Email" value="" required />
                </div>

                <div class="grid md:grid-cols-2 gap-6">
                    <input class="w-full bg-transparent border-0 border-b border-white/20 px-0 py-3 text-white focus:ring-0 focus:border-slate-400 placeholder:text-slate-600" name="company_name" type="text" placeholder="Organization" value="" required />

                    <div class="flex items-center border-0 border-b border-white/20 gap-4">
                        <div class="w-28 border-r border-white/10 pr-3">
                            <input class="w-full bg-transparent border-0 px-0 py-3 text-slate-200 text-sm font-medium focus:ring-0 focus:border-0 placeholder:text-slate-500" name="phone_country_code" type="text" inputmode="numeric" pattern="\+[0-9]{1,4}" maxlength="5" x-model="phoneCountryCode" @input="sanitizeCountryCode()" placeholder="+___" required />
                        </div>
                        <input class="w-full bg-transparent border-0 px-0 py-3 text-white focus:ring-0 focus:border-0 placeholder:text-slate-600" name="phone" type="tel" inputmode="numeric" pattern="[0-9]{6,15}" maxlength="15" oninput="this.value = this.value.replace(/\D/g, '')" placeholder="Phone Number" value="" required />
                    </div>
                </div>

                <label class="flex items-start space-x-3">
                    <input class="w-5 h-5 rounded border-white/20 bg-transparent text-slate-400 focus:ring-slate-500/50 mt-0.5" name="gdpr_approved" type="checkbox" value="1"  required />
                    <span class="text-xs text-slate-500 leading-relaxed">I approve GDPR communication consent.</span>
                </label>
                <label class="flex items-start space-x-3">
                    <input class="w-5 h-5 rounded border-white/20 bg-transparent text-slate-400 focus:ring-slate-500/50 mt-0.5" name="kvkk_approved" type="checkbox" value="1"  required />
                    <span class="text-xs text-slate-500 leading-relaxed">I approve communication consent under applicable local data protection regulations.</span>
                </label>
                <label class="flex items-start space-x-3">
                    <input class="w-5 h-5 rounded border-white/20 bg-transparent text-slate-400 focus:ring-slate-500/50 mt-0.5" name="privacy_approved" type="checkbox" value="1" required />
                    <span class="text-xs text-slate-500 leading-relaxed">I have read and accept the Privacy Notice regarding the processing and storage of my personal data.</span>
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
                    src="https://flux360.net/wp-content/uploads/2026/03/steel-networking-logo.png"/>
                <p class="text-slate-400 text-sm mt-4">The premier networking event for the global iron and steel community.</p>
            </div>
            <div><h4 class="text-white font-bold tracking-wider uppercase text-xs mb-4">Explore</h4><ul class="space-y-2"><li><a class="text-slate-400 hover:text-white text-sm" href="#main">Main</a></li><li><a class="text-slate-400 hover:text-white text-sm" href="#agenda">Agenda</a></li><li><a class="text-slate-400 hover:text-white text-sm" href="#about">About</a></li><li><a class="text-slate-400 hover:text-white text-sm" href="#keynote-speakers">Keynote Speakers</a></li><li><a class="text-slate-400 hover:text-white text-sm" href="#venue">Venue</a></li><li><a class="text-slate-400 hover:text-white text-sm" href="#more">More</a></li></ul></div>
            <div><h4 class="text-white font-bold tracking-wider uppercase text-xs mb-4">Legal</h4><ul class="space-y-2"><li><a class="text-slate-400 hover:text-white text-sm" href="#">Privacy Policy</a></li><li><a class="text-slate-400 hover:text-white text-sm" href="#">Terms of Service</a></li><li><a class="text-slate-400 hover:text-white text-sm" href="#">Data Protection</a></li></ul></div>
            <div><h4 class="text-white font-bold tracking-wider uppercase text-xs mb-4">Contact Us</h4><p class="text-slate-400 text-sm">info@steelsummits.com</p><p class="text-slate-400 text-sm mt-2">+1 (555) 123-4567</p></div>
        </div>
        <div class="max-w-7xl mx-auto border-t border-slate-800/50 mt-10 pt-6 text-slate-500 text-xs">© 2026 Steel Networking Summit. All rights reserved.</div>
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

        function phoneField() {
            return {
                phoneCountryCode: '+90',
                sanitizeCountryCode() {
                    this.phoneCountryCode = '+' + this.phoneCountryCode.replace(/\D/g, '').slice(0, 4);
                },
                async init() {
                    try {
                        const response = await fetch('https://ipapi.co/json/');
                        if (!response.ok) {
                            return;
                        }

                        const data = await response.json();
                        if (typeof data.country_calling_code === 'string' && /^\+[0-9]{1,4}$/.test(data.country_calling_code)) {
                            this.phoneCountryCode = data.country_calling_code;
                        }
                    } catch (error) {
                        // Fallback keeps default +90 when geolocation is unavailable.
                    }
                },
            };
        }
    </script>
</body>
</html>
