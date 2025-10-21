<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }} - @yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <!--<link rel="stylesheet" type="text/css" href="{{ asset('css/auth.css') }}">-->
        {{-- <link rel="stylesheet" href="{{ asset('css/auth.css') }}?v={{ filemtime(public_path('css/auth.css')) }}"> --}}
        {{-- <link rel="shortcut icon" href="{{ asset('images/favicon_nobg.png') }}" type="image/x-icon"> --}}

        <!-- Scripts -->
        {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}
        <style>x
            body {
                font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, sans-serif;
                background: #f8fafc;
                color: #1e293b;
                overflow-x: hidden;
            }

            /* Brand Color Variations - Blue Theme */
            :root {
                --brand-primary: #1D4ED8;       /* blue-700 */
                --brand-primary-dark: #1E3A8A;    /* blue-800 */
                --brand-primary-light: #3B82F6;   /* blue-500 */
                --brand-accent: #0EA5E9;        /* sky-500 */
                --brand-bg: rgba(59, 130, 246, 0.1); /* transparent light blue */
                --brand-border: rgba(59, 130, 246, 0.2); /* transparent light blue border */
            }
        
            html {
                scroll-behavior: smooth;
                scroll-padding-top: 4rem;
            }
        </style>
    </head>
    <body>
 
<header class="fixed top-0 w-full bg-white/80 backdrop-blur-lg border-b border-border z-50">
    <div class="container mx-auto px-6">
        <div class="flex items-center justify-between h-16">
            <!-- Logo -->
            <div class="flex items-center">
                <!-- <div class="text-2xl font-bold text-primary">
                    SMSPalm
                </div> -->
                <a href="/" class="">
                    {{-- Replace icon and text with the provided image logo --}}
                    <img src="{{ asset('images/logo_dark.png') }}" alt="SMSPalm Logo" style="height: 32px; /* Adjust height as needed */">
                    {{-- Removed the separate text "SMSPalm" as it's part of the image --}}
                </a>
            </div>
            

            <!-- Desktop Navigation -->
            <nav class="hidden md:flex items-center space-x-8">
                <a href="#features" class="text-foreground hover:text-primary transition-smooth">Features</a>
                <a href="#how-it-works" class="text-foreground hover:text-primary transition-smooth">How It Works</a>
                <a href="#pricing" class="text-foreground hover:text-primary transition-smooth">Pricing</a>
                <a href="#docs" class="text-foreground hover:text-primary transition-smooth">Docs</a>
                <a href="#contact" class="text-foreground hover:text-primary transition-smooth">Contact</a>
            </nav>

            <!-- Desktop CTA -->
            <div class="hidden md:flex items-center space-x-4">
                <a href="#" class="btn btn-outline btn-sm">Sign In</a>
                <a href="#" class="btn btn-primary btn-sm">Get Started</a>
            </div>
                
            <!-- Mobile menu button -->
            <button id="mobile-menu-button" class="md:hidden">
                <svg id="menu-icon-open" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-foreground" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                </svg>
                <svg id="menu-icon-close" xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-foreground hidden" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </button>
        </div>

        <!-- Mobile Navigation -->
        <div id="mobile-menu" class="hidden md:hidden py-4 border-t border-border">
            <nav class="space-y-4">
                <a href="#features" class="block text-foreground hover:text-primary transition-smooth mobile-menu-link">Features</a>
                <a href="#how-it-works" class="block text-foreground hover:text-primary transition-smooth mobile-menu-link">How It Works</a>
                <a href="#pricing" class="block text-foreground hover:text-primary transition-smooth mobile-menu-link">Pricing</a>
                <a href="#docs" class="block text-foreground hover:text-primary transition-smooth mobile-menu-link">Docs</a>
                <a href="#contact" class="block text-foreground hover:text-primary transition-smooth mobile-menu-link">Contact</a>
                <div class="flex flex-col space-y-2 pt-4">
                    <a href="#" class="btn btn-outline btn-sm">Sign In</a>
                    <a href="#" class="btn btn-primary btn-sm">Get Started</a>
                </div>
            </nav>
        </div>
    </div>
</header>

<section class="relative min-h-screen flex items-center bg-gradient-hero overflow-hidden">
    <!-- Background patterns -->
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-20 left-10 w-32 h-32 border border-white/20 rounded-full"></div>
        <div class="absolute top-40 right-20 w-24 h-24 border border-white/20 rounded-lg rotate-45"></div>
        <div class="absolute bottom-20 left-1/4 w-16 h-16 border border-white/20 rounded-full"></div>
    </div>

    <div class="container mx-auto px-6 relative z-10">
        <div class="grid lg:grid-cols-2 gap-12 items-center">
            <!-- Content -->
            <div class="text-white space-y-8">
                <div class="space-y-4">
                    <h1 class="text-5xl lg:text-6xl font-bold leading-tight">
                        Secure Your Users with <span class="text-transparent bg-clip-text bg-gradient-to-r from-white to-primary-glow">Instant SMS Verification</span>
                    </h1>
                    <p class="text-xl text-white/80 max-w-lg">
                        Fast, reliable, and scalable phone verification for your apps and websites.
                    </p>
                </div>

                <!-- Trust indicators -->
                <div class="flex items-center space-x-6 text-white/60">
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 20.944a11.955 11.955 0 0118-8.016z" />
                        </svg>
                        <span class="text-sm">Enterprise Security</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                        <span class="text-sm">Instant Delivery</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2h10a2 2 0 002-2v-1a2 2 0 012-2h1.945M7.938 6.127A10.001 10.001 0 1116.062 17.873" />
                        </svg>
                        <span class="text-sm">Global Coverage</span>
                    </div>
                </div>

                <!-- CTA buttons -->
                <div class="flex flex-col sm:flex-row gap-4">
                    <a href="#" class="btn btn-lg bg-white text-primary hover:bg-white/90 transition-smooth shadow-glow">Get Started</a>
                    <a href="#" class="btn btn-lg btn-outline border-white/20 text-white hover:bg-white/10 transition-smooth">Login</a>
                </div>
                    <p> Powered by DAILYICTSOLUTIONS</p>
                <!-- Stats -->
                <div class="grid grid-cols-3 gap-6 pt-8 border-t border-white/10">
                    <div>
                        <div class="text-2xl font-bold text-white">99.9%</div>
                        <div class="text-white/60 text-sm">Uptime</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-white">150+</div>
                        <div class="text-white/60 text-sm">Countries</div>
                    </div>
                    <div>
                        <div class="text-2xl font-bold text-white">Fast</div>
                        <div class="text-white/60 text-sm">Speed</div>
                    </div>
                </div>
            </div>

            <!-- Hero image -->
            <div class="relative">
                <img src="{{ asset('images/f7a62ee2-216b-4988-8a99-d17462118da7.png') }}" alt="SMS Verification Platform" class="w-full h-auto rounded-2xl shadow-2xl" />
                <div class="absolute inset-0 bg-gradient-to-t from-primary/20 to-transparent rounded-2xl"></div>
            </div>
        </div>
    </div>
</section>

<section id="features" class="py-20 bg-gradient-subtle">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-foreground mb-4">
                Why Choose SMSPalm?
            </h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                Built for developers, trusted by enterprises. Everything you need for reliable SMS verification.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="card border-0 shadow-lg hover:shadow-primary/5 transition-smooth group">
                <div class="card-body p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-smooth">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-3">
                        Instant SMS Delivery
                    </h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Lightning-fast SMS delivery with 99.9% success rate worldwide.
                    </p>
                </div>
            </div>
            <div class="card border-0 shadow-lg hover:shadow-primary/5 transition-smooth group">
                <div class="card-body p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-smooth">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2h10a2 2 0 002-2v-1a2 2 0 012-2h1.945M7.938 6.127A10.001 10.001 0 1116.062 17.873" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-3">
                        Global Coverage
                    </h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Reach users in 150+ countries with local carrier partnerships.
                    </p>
                </div>
            </div>
            <div class="card border-0 shadow-lg hover:shadow-primary/5 transition-smooth group">
                <div class="card-body p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-smooth">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10m16-10v10M4 12h16m-7 6h-2m-2-4h-2m8-4h-2" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-3">
                        Real-Time API
                    </h3>
                    <p class="text-muted-foreground leading-relaxed">
                        RESTful API with real-time webhooks and comprehensive documentation.
                    </p>
                </div>
            </div>
            <div class="card border-0 shadow-lg hover:shadow-primary/5 transition-smooth group">
                <div class="card-body p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-smooth">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-3">
                        Detailed Logs
                    </h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Complete analytics and delivery reports for all your SMS campaigns.
                    </p>
                </div>
            </div>
            <div class="card border-0 shadow-lg hover:shadow-primary/5 transition-smooth group">
                <div class="card-body p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-smooth">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v.01" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-3">
                        Affordable Pricing
                    </h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Transparent pricing with volume discounts and no hidden fees.
                    </p>
                </div>
            </div>
            <div class="card border-0 shadow-lg hover:shadow-primary/5 transition-smooth group">
                <div class="card-body p-8 text-center">
                    <div class="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-smooth">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 20.944a11.955 11.955 0 0118-8.016z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-3">
                        Enterprise Security
                    </h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Bank-grade security with SOC 2 compliance and data encryption.
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="how-it-works" class="py-20 bg-background">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-foreground mb-4">
                How It Works
            </h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                Get started with SMS verification in just three simple steps.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8 relative">
            <!-- Connection lines -->
            <div class="hidden md:block absolute top-1/2 left-1/3 w-1/3 h-0.5 bg-gradient-to-r from-primary to-primary-glow transform -translate-y-1/2"></div>
            <div class="hidden md:block absolute top-1/2 right-1/3 w-1/3 h-0.5 bg-gradient-to-r from-primary to-primary-glow transform -translate-y-1/2"></div>

            <div class="card relative bg-card border-2 border-primary/10 hover:border-primary/30 transition-smooth group">
                <div class="card-body p-8 text-center">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center text-sm font-bold">
                        01
                    </div>
                    <div class="w-20 h-20 bg-gradient-primary rounded-full flex items-center justify-center mx-auto mb-6 mt-4 group-hover:scale-110 transition-smooth">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-foreground mb-4">
                        Sign Up
                    </h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Create your account in minutes and get instant access to our dashboard.
                    </p>
                </div>
            </div>
            <div class="card relative bg-card border-2 border-primary/10 hover:border-primary/30 transition-smooth group">
                <div class="card-body p-8 text-center">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center text-sm font-bold">
                        02
                    </div>
                    <div class="w-20 h-20 bg-gradient-primary rounded-full flex items-center justify-center mx-auto mb-6 mt-4 group-hover:scale-110 transition-smooth">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 7h2a2 2 0 012 2v2m-4-4H9a2 2 0 00-2 2v10a2 2 0 002 2h6a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4 4h.01" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-foreground mb-4">
                        Generate API Key
                    </h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Get your unique API credentials with detailed documentation and examples.
                    </p>
                </div>
            </div>
            <div class="card relative bg-card border-2 border-primary/10 hover:border-primary/30 transition-smooth group">
                <div class="card-body p-8 text-center">
                    <div class="absolute -top-4 left-1/2 transform -translate-x-1/2 w-8 h-8 bg-primary text-white rounded-full flex items-center justify-center text-sm font-bold">
                        03
                    </div>
                    <div class="w-20 h-20 bg-gradient-primary rounded-full flex items-center justify-center mx-auto mb-6 mt-4 group-hover:scale-110 transition-smooth">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-10 w-10 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-2xl font-semibold text-foreground mb-4">
                        Start Verifying
                    </h3>
                    <p class="text-muted-foreground leading-relaxed">
                        Send verification codes and authenticate users with a simple API call.
                    </p>
                </div>
            </div>
        </div>

        <!-- Code example -->
        <div class="mt-16 bg-card border rounded-lg p-8 max-w-2xl mx-auto">
            <h3 class="text-lg font-semibold text-foreground mb-4">Example API Call</h3>
            <div class="relative">
                <div class="bg-muted rounded-lg p-4 font-mono text-sm overflow-x-auto blur-sm select-none">
                    <div class="text-muted-foreground">// Send verification SMS</div>
                    <div class="text-foreground mt-2">
                        <span class="text-primary">POST</span> https://api.smspalm.com/v1/verify
                    </div>
                    <div class="text-muted-foreground mt-2">
                        {
                        "phone": "+1234567890",
                        "message": "Your verification code is @{{code}}"
                        }
                    </div>
                </div>
                <div class="relative">
                    <div class="absolute inset-0 flex items-center justify-center bg-card/50 rounded-lg">
                        <div class="text-center bg-background/80 backdrop-blur-lg p-4 rounded-lg shadow-lg border">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-12 w-12 text-primary mx-auto mb-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            <h4 class="text-2xl font-bold text-foreground">Coming Soon</h4>
                            <p class="text-muted-foreground mt-2">Our API documentation and examples are being polished. Check back shortly!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pricing" class="py-20 bg-gradient-subtle">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-foreground mb-4">
                Perfect for Every Industry
            </h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                From startups to enterprises, SMSPalm powers verification across industries.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8 mb-16">
            <div class="card border-0 shadow-lg hover:shadow-primary/10 transition-smooth group text-center">
                <div class="card-body p-8">
                    <div class="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-smooth">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-3">
                        E-commerce
                    </h3>
                    <p class="text-muted-foreground">
                        Secure customer accounts and prevent fraud with SMS verification during checkout and account creation.
                    </p>
                </div>
            </div>
            <div class="card border-0 shadow-lg hover:shadow-primary/10 transition-smooth group text-center">
                <div class="card-body p-8">
                    <div class="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-smooth">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-3">
                        Fintech
                    </h3>
                    <p class="text-muted-foreground">
                        Meet compliance requirements with two-factor authentication for financial transactions and account access.
                    </p>
                </div>
            </div>
            <div class="card border-0 shadow-lg hover:shadow-primary/10 transition-smooth group text-center">
                <div class="card-body p-8">
                    <div class="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-smooth">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.653-.281-1.254-.758-1.672M12 14a4 4 0 100-8 4 4 0 000 8z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-3">
                        Social Platforms
                    </h3>
                    <p class="text-muted-foreground">
                        Build trust and reduce fake accounts with phone number verification for new user registrations.
                    </p>
                </div>
            </div>
            <div class="card border-0 shadow-lg hover:shadow-primary/10 transition-smooth group text-center">
                <div class="card-body p-8">
                    <div class="w-16 h-16 bg-gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-6 group-hover:scale-110 transition-smooth">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-semibold text-foreground mb-3">
                        Mobile Apps
                    </h3>
                    <p class="text-muted-foreground">
                        Streamline user onboarding with seamless SMS verification integrated into your mobile app flow.
                    </p>
                </div>
            </div>
        </div>

        <!-- Integration showcase -->
        <div class="text-center">
            <h3 class="text-2xl font-semibold text-foreground mb-8">
                Easy Integration with Popular Frameworks
            </h3>
            <div class="flex flex-wrap justify-center items-center gap-8 opacity-60">
                <div class="text-lg font-mono">React</div>
                <div class="text-lg font-mono">Vue.js</div>
                <div class="text-lg font-mono">Node.js</div>
                <div class="text-lg font-mono">Python</div>
                <div class="text-lg font-mono">PHP</div>
                <div class="text-lg font-mono">Ruby</div>
                <div class="text-lg font-mono">Java</div>
                <div class="text-lg font-mono">.NET</div>
            </div>
        </div>
    </div>
</section>

<section id="docs" class="py-20 bg-background">
    <div class="container mx-auto px-6">
        <!-- Trust indicators -->
        <div class="grid md:grid-cols-3 gap-8 mb-16">
            <div class="text-center">
                <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 20.944a11.955 11.955 0 0118-8.016z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-foreground mb-2">SOC 2 Compliant</h3>
                <p class="text-muted-foreground text-sm">Enterprise-grade security</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 3v4M3 5h4M4 17v4m-1-2h4m11-4v4m-1-2h4M12 3v4m-1-2h4m-4 7v4m-1-2h4" />
                    </svg>
                </div>
                <h3 class="font-semibold text-foreground mb-2">99.9% Uptime</h3>
                <p class="text-muted-foreground text-sm">Guaranteed reliability</p>
            </div>
            <div class="text-center">
                <div class="w-16 h-16 bg-primary/10 rounded-2xl flex items-center justify-center mx-auto mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-primary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <h3 class="font-semibold text-foreground mb-2">GDPR Ready</h3>
                <p class="text-muted-foreground text-sm">Data protection compliance</p>
            </div>
        </div>

        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold text-foreground mb-4">
                Trusted by Developers Worldwide
            </h2>
            <p class="text-xl text-muted-foreground max-w-2xl mx-auto">
                Join thousands of companies that rely on SMSPalm for secure user verification.
            </p>
        </div>

        <div class="grid md:grid-cols-3 gap-8">
            <div class="card border-0 shadow-lg">
                <div class="card-body p-8">
                    <div class="flex mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.448a1 1 0 00-.364 1.118l1.287 3.965c.3.921-.755 1.688-1.54 1.118l-3.368-2.448a1 1 0 00-1.176 0l-3.368 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.965a1 1 0 00-.364-1.118L2.35 9.392c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.448a1 1 0 00-.364 1.118l1.287 3.965c.3.921-.755 1.688-1.54 1.118l-3.368-2.448a1 1 0 00-1.176 0l-3.368 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.965a1 1 0 00-.364-1.118L2.35 9.392c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.448a1 1 0 00-.364 1.118l1.287 3.965c.3.921-.755 1.688-1.54 1.118l-3.368-2.448a1 1 0 00-1.176 0l-3.368 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.965a1 1 0 00-.364-1.118L2.35 9.392c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.448a1 1 0 00-.364 1.118l1.287 3.965c.3.921-.755 1.688-1.54 1.118l-3.368-2.448a1 1 0 00-1.176 0l-3.368 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.965a1 1 0 00-.364-1.118L2.35 9.392c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.448a1 1 0 00-.364 1.118l1.287 3.965c.3.921-.755 1.688-1.54 1.118l-3.368-2.448a1 1 0 00-1.176 0l-3.368 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.965a1 1 0 00-.364-1.118L2.35 9.392c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z" />
                        </svg>
                    </div>
                    <blockquote class="text-foreground mb-6 leading-relaxed">
                        "SMSPalm has been instrumental in reducing fraud and improving user security. The API is incredibly reliable."
                    </blockquote>
                    <div>
                        <div class="font-semibold text-foreground">Sarah Chen</div>
                        <div class="text-muted-foreground text-sm">CTO, TechStart</div>
                    </div>
                </div>
            </div>
            <div class="card border-0 shadow-lg">
                <div class="card-body p-8">
                    <div class="flex mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.448a1 1 0 00-.364 1.118l1.287 3.965c.3.921-.755 1.688-1.54 1.118l-3.368-2.448a1 1 0 00-1.176 0l-3.368 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.965a1 1 0 00-.364-1.118L2.35 9.392c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.448a1 1 0 00-.364 1.118l1.287 3.965c.3.921-.755 1.688-1.54 1.118l-3.368-2.448a1 1 0 00-1.176 0l-3.368 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.965a1 1 0 00-.364-1.118L2.35 9.392c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.448a1 1 0 00-.364 1.118l1.287 3.965c.3.921-.755 1.688-1.54 1.118l-3.368-2.448a1 1 0 00-1.176 0l-3.368 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.965a1 1 0 00-.364-1.118L2.35 9.392c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.448a1 1 0 00-.364 1.118l1.287 3.965c.3.921-.755 1.688-1.54 1.118l-3.368-2.448a1 1 0 00-1.176 0l-3.368 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.965a1 1 0 00-.364-1.118L2.35 9.392c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.448a1 1 0 00-.364 1.118l1.287 3.965c.3.921-.755 1.688-1.54 1.118l-3.368-2.448a1 1 0 00-1.176 0l-3.368 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.965a1 1 0 00-.364-1.118L2.35 9.392c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z" />
                        </svg>
                    </div>
                    <blockquote class="text-foreground mb-6 leading-relaxed">
                        "Integration was seamless and the global coverage is exactly what we needed for our international users."
                    </blockquote>
                    <div>
                        <div class="font-semibold text-foreground">Marcus Johnson</div>
                        <div class="text-muted-foreground text-sm">Lead Developer, GlobalFinance</div>
                    </div>
                </div>
            </div>
            <div class="card border-0 shadow-lg">
                <div class="card-body p-8">
                    <div class="flex mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.448a1 1 0 00-.364 1.118l1.287 3.965c.3.921-.755 1.688-1.54 1.118l-3.368-2.448a1 1 0 00-1.176 0l-3.368 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.965a1 1 0 00-.364-1.118L2.35 9.392c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.448a1 1 0 00-.364 1.118l1.287 3.965c.3.921-.755 1.688-1.54 1.118l-3.368-2.448a1 1 0 00-1.176 0l-3.368 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.965a1 1 0 00-.364-1.118L2.35 9.392c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.448a1 1 0 00-.364 1.118l1.287 3.965c.3.921-.755 1.688-1.54 1.118l-3.368-2.448a1 1 0 00-1.176 0l-3.368 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.965a1 1 0 00-.364-1.118L2.35 9.392c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.448a1 1 0 00-.364 1.118l1.287 3.965c.3.921-.755 1.688-1.54 1.118l-3.368-2.448a1 1 0 00-1.176 0l-3.368 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.965a1 1 0 00-.364-1.118L2.35 9.392c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-yellow-400 fill-current" viewBox="0 0 20 20" fill="currentColor">
                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.286 3.965a1 1 0 00.95.69h4.162c.969 0 1.371 1.24.588 1.81l-3.368 2.448a1 1 0 00-.364 1.118l1.287 3.965c.3.921-.755 1.688-1.54 1.118l-3.368-2.448a1 1 0 00-1.176 0l-3.368 2.448c-.784.57-1.838-.197-1.539-1.118l1.287-3.965a1 1 0 00-.364-1.118L2.35 9.392c-.783-.57-.38-1.81.588-1.81h4.162a1 1 0 00.95-.69L9.049 2.927z" />
                        </svg>
                    </div>
                    <blockquote class="text-foreground mb-6 leading-relaxed">
                        "Outstanding delivery rates and excellent customer support. Best SMS verification service we've used."
                    </blockquote>
                    <div>
                        <div class="font-semibold text-foreground">Elena Rodriguez</div>
                        <div class="text-muted-foreground text-sm">Product Manager, SecureApp</div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Client logos placeholder -->
        <div class="mt-16 text-center">
            <p class="text-muted-foreground mb-8">Trusted by industry leaders</p>
            <div class="flex flex-wrap justify-center items-center gap-12 opacity-40">
                <div class="text-2xl font-bold">TechCorp</div>
                <div class="text-2xl font-bold">FinanceX</div>
                <div class="text-2xl font-bold">SecureBank</div>
                <div class="text-2xl font-bold">AppStart</div>
                <div class="text-2xl font-bold">GlobalTech</div>
            </div>
        </div>
    </div>
</section>

<footer class="bg-card border-t border-border">
    <!-- Contact CTA Section -->
    <div id="contact" class="bg-primary text-white py-16">
        <div class="container mx-auto px-6 text-center">
            <h2 class="text-3xl font-bold mb-4">
                Need Help Getting Started?
            </h2>
            <p class="text-xl text-white/80 mb-8 max-w-2xl mx-auto">
                Our team of experts is ready to help you integrate SMS verification into your application.
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <button class="btn btn-lg bg-white text-primary hover:bg-white/90">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                    </svg>
                    Contact Us
                </button>
                <button class="btn btn-lg btn-outline border-white/20 text-white hover:bg-white/10">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                    </svg>
                    Email Support
                </button>
            </div>
        </div>
    </div>

    <!-- Main Footer -->
    <div class="container mx-auto px-6 py-16">
        <div class="grid lg:grid-cols-6 gap-8">
            <!-- Company info -->
            <div class="lg:col-span-2">
                <div class="text-2xl font-bold text-primary mb-4">
                    SMSPalm
                </div>
                <p class="text-muted-foreground mb-6 max-w-md">
                    The most reliable SMS verification platform for developers.
                    Secure, fast, and globally available.
                </p>

                <!-- Newsletter signup -->
                <div class="space-y-4">
                    <h3 class="font-semibold text-foreground">Stay Updated</h3>
                    <div class="flex gap-2">
                        <input placeholder="Enter your email" class="h-9 w-full flex-1 rounded-md border border-input bg-transparent px-3 py-2 text-sm placeholder:text-muted-foreground focus:outline-none focus:ring-2 focus:ring-ring" />
                        <button class="btn btn-sm btn-primary">
                            Subscribe
                        </button>
                    </div>
                </div>
            </div>

            <!-- Footer links -->
            <div>
                <h3 class="font-semibold text-foreground mb-4">Product</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">Features</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">Pricing</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">API Docs</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">Status Page</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">Changelog</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold text-foreground mb-4">Company</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">About</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">Blog</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">Careers</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">Contact</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">Privacy</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold text-foreground mb-4">Resources</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">Documentation</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">Guides</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">Help Center</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">Community</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">Support</a></li>
                </ul>
            </div>
            <div>
                <h3 class="font-semibold text-foreground mb-4">Developers</h3>
                <ul class="space-y-3">
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">API Reference</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">SDKs</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">Code Examples</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">Webhooks</a></li>
                    <li><a href="#" class="text-muted-foreground hover:text-primary transition-smooth">Testing</a></li>
                </ul>
            </div>
        </div>
    </div>

    <!-- Bottom footer -->
    <div class="border-t border-border">
        <div class="container mx-auto px-6 py-6">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="text-muted-foreground text-sm">
                    © {{ date ('Y')}} SMSPalm. All rights reserved.
                </div>
                <div class="flex items-center space-x-6 mt-4 md:mt-0">
                    <a href="https://smspalm.com/disclaimer.html" class="text-muted-foreground hover:text-primary transition-smooth text-sm">
                        Terms and Disclaimer
                    </a>
                    <a href="https://smspalm.com/privacy-policy.html" class="text-muted-foreground hover:text-primary transition-smooth text-sm">
                        Privacy Policy
                    </a>
                    <a href="https://smspalm.com/howtouse.html" class="text-muted-foreground hover:text-primary transition-smooth text-sm">
                       Watch How to Use
                    </a>
                </div>
            </div>
        </div>
    </div>
</footer>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                const mobileMenuButton = document.getElementById('mobile-menu-button');
                const mobileMenu = document.getElementById('mobile-menu');
                const menuIconOpen = document.getElementById('menu-icon-open');
                const menuIconClose = document.getElementById('menu-icon-close');

                if (mobileMenuButton && mobileMenu && menuIconOpen && menuIconClose) {
                    const toggleMenu = () => {
                        mobileMenu.classList.toggle('hidden');
                        menuIconOpen.classList.toggle('hidden');
                        menuIconClose.classList.toggle('hidden');
                    };

                    mobileMenuButton.addEventListener('click', toggleMenu);

                    // Close menu when a link is clicked
                    const mobileMenuLinks = document.querySelectorAll('.mobile-menu-link');
                    mobileMenuLinks.forEach(link => {
                        link.addEventListener('click', () => {
                            if (!mobileMenu.classList.contains('hidden')) {
                                toggleMenu();
                            }
                        });
                    });
                }
            });
        </script>
        <script src="{{ asset('js/auth.js') }}"></script>
        
        <!--whatsapp button--> 
<!--
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css"> 
<a href="https://chat.whatsapp.com/BrYEikx3cNiLg0rg6Ai1uZ" class="float" target="_blank"> 
<i class="fa fa-whatsapp my-float"></i> 
</a> 
<style>  
.float{ 
position:fixed; 
width:60px; 
height:60px; 
bottom:10px; 
left:40px; 
background-color:#25d366; 
color:#FFF; 
border-radius:50px; 
text-align:center; 
  font-size:30px; 
box-shadow: 2px 2px 3px #999; 
  z-index:1000; 
} 

.my-float{ 
margin-top:16px; 
} 
</style> 
-->
<!--whatsapp button end--> 
    </body>
</html>
