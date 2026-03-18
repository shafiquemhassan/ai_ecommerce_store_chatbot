<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'ShopAI') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=inter:400,500,600,700,800,900&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        <style>
            body { font-family: 'Inter', sans-serif; }
            .hero-gradient {
                background: linear-gradient(135deg, #f8f9fa 0%, #eef2f6 100%);
            }
            .feature-gradient {
                background: linear-gradient(180deg, #f8f9fa 0%, #ffffff 100%);
            }
        </style>
    </head>
    <body class="antialiased text-gray-900 bg-white">
        <div class="min-h-screen flex flex-col">
            <!-- Header -->
            <nav x-data="{ open: false }" class="bg-white sticky top-0 z-40">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="flex justify-between h-20 items-center">
                        <!-- Left Navigation & Logo -->
                        <div class="flex items-center space-x-12">
                            <!-- Logo -->
                            <div class="shrink-0 flex items-center">
                                <a href="{{ route('home') }}" class="flex items-center gap-2 text-2xl font-black text-[#111827] tracking-tight">
                                    <svg class="w-6 h-6 text-blue-600" viewBox="0 0 24 24" fill="currentColor">
                                        <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                                    </svg>
                                    ShopAI
                                </a>
                            </div>

                            <!-- Navigation Links -->
                            <div class="hidden md:flex space-x-8">
                                <a href="{{ route('home') }}" class="text-sm font-semibold text-gray-900 hover:text-blue-600 transition">Home</a>
                                @auth
                                    <a href="{{ route('orders.index') }}" class="text-sm font-semibold text-gray-600 hover:text-blue-600 transition">My Orders</a>
                                @endauth
                            </div>
                        </div>

                        <!-- Center Search Form -->
                        <div class="flex-1 max-w-md mx-8 hidden lg:block">
                            <div class="relative">
                                <div class="absolute inset-y-0 left-0 pl-3 flex items-center pointer-events-none">
                                    <svg class="h-4 w-4 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/>
                                    </svg>
                                </div>
                                <input type="text" class="block w-full pl-10 pr-3 py-2 bg-gray-50 border-0 rounded-md text-sm placeholder-gray-400 focus:ring-1 focus:ring-gray-200 transition" placeholder="Search gadgets...">
                            </div>
                        </div>

                        <!-- Right Icons -->
                        <div class="flex items-center space-x-4">
                            <!-- Cart -->
                            <a href="{{ route('cart.index') }}" class="text-gray-600 hover:text-blue-600 transition relative bg-gray-50 p-2 rounded-md">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                                @if(session('cart'))
                                    <span class="absolute -top-1 -right-1 bg-blue-600 text-white rounded-full w-4 h-4 flex items-center justify-center text-[10px] font-bold">
                                        {{ count(session('cart')) }}
                                    </span>
                                @endif
                            </a>
                        
                            <!-- User Account / Login -->
                            @auth
                                <div class="relative" x-data="{ open: false }">
                                    <div @click="open = ! open" @click.outside="open = false" class="cursor-pointer bg-gray-50 p-2 rounded-md hover:bg-gray-100 transition">
                                        <svg class="w-5 h-5 text-gray-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                    </div>
                                    <div x-show="open" class="absolute right-0 mt-3 w-48 bg-white rounded-lg shadow-lg py-2 border border-gray-100 z-50 origin-top-right">
                                        <div class="px-4 py-2 border-b border-gray-100 mb-1">
                                            <p class="text-sm font-semibold truncate">{{ Auth::user()->name }}</p>
                                        </div>
                                        <a href="{{ route('orders.index') }}" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-blue-600 transition">My Orders</a>
                                        <form method="POST" action="{{ route('logout') }}">
                                            @csrf
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-50 hover:text-blue-600 transition">
                                                Log Out
                                            </a>
                                        </form>
                                    </div>
                                </div>
                            @else
                                <a href="{{ route('login') }}" class="bg-gray-50 p-2 rounded-md hover:bg-blue-50 hover:text-blue-600 transition text-gray-600">
                                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                </a>
                            @endauth
                        </div>
                    </div>
                </div>
            </nav>

            <!-- Page Content -->
            <main class="flex-grow">
                {{ $slot }}
            </main>
            
            <!-- Footer -->
            <footer class="bg-[#111827] text-gray-300 pt-16 pb-8">
                <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-12 mb-16">
                        <!-- Branding & Description -->
                        <div class="pr-8">
                            <a href="{{ route('home') }}" class="flex items-center gap-2 text-xl font-black text-white tracking-tight mb-6">
                                <svg class="w-6 h-6 text-white" viewBox="0 0 24 24" fill="currentColor">
                                    <path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"/>
                                </svg>
                                ShopAI
                            </a>
                            <p class="text-xs text-gray-400 leading-relaxed">
                                Defining the nexus of commerce and artificial intelligence since 2024.
                            </p>
                        </div>

                        <!-- Shop Links -->
                        <div>
                            <h3 class="text-white text-sm font-bold mb-6 tracking-wide">Shop</h3>
                            <ul class="space-y-4 text-xs font-medium text-gray-400">
                                <li><a href="#" class="hover:text-white transition">New Arrivals</a></li>
                                <li><a href="#" class="hover:text-white transition">Featured Tech</a></li>
                                <li><a href="#" class="hover:text-white transition">Neural Picks</a></li>
                            </ul>
                        </div>

                        <!-- Support Links -->
                        <div>
                            <h3 class="text-white text-sm font-bold mb-6 tracking-wide">Support</h3>
                            <ul class="space-y-4 text-xs font-medium text-gray-400">
                                <li><a href="#" class="hover:text-white transition">Shipping Info</a></li>
                                <li><a href="#" class="hover:text-white transition">Returns</a></li>
                                <li><a href="#" class="hover:text-white transition">AI Concierge</a></li>
                            </ul>
                        </div>

                        <!-- Newsletter -->
                        <div>
                            <h3 class="text-white text-sm font-bold mb-6 tracking-wide">Stay Updated</h3>
                            <form class="flex overflow-hidden">
                                <input type="email" placeholder="Email" class="w-full bg-[#1f2937] border-0 text-white px-4 py-2.5 text-xs focus:ring-0 placeholder-gray-500 rounded-l">
                                <button type="submit" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2.5 font-semibold text-xs transition flex items-center justify-center rounded-r">
                                    <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 20 20"><path d="M10.894 2.553a1 1 0 00-1.788 0l-7 14a1 1 0 001.169 1.409l5-1.429A1 1 0 009 15.571V11a1 1 0 112 0v4.571a1 1 0 00.725.962l5 1.428a1 1 0 001.17-1.408l-7-14z"></path></svg>
                                </button>
                            </form>
                        </div>
                    </div>

                    <!-- Bottom Bar -->
                    <div class="pt-8 border-t border-gray-800 flex flex-col md:flex-row justify-between items-center text-[10px] text-gray-500">
                        <p>&copy; 2024 ShopAI Neural Commerce Inc. All rights reserved.</p>
                        <div class="flex space-x-6 mt-4 md:mt-0">
                            <a href="#" class="hover:text-white transition">Privacy Policy</a>
                            <a href="#" class="hover:text-white transition">Terms of Service</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
        
        <x-ai-bot />
    </body>
</html>
