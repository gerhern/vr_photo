@extends('layouts.layout')
@section('navbar')
    <nav class="bg-primary text-white" x-data="{ mobileMenuOpen: false }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="relative flex items-center justify-between h-16">
                <!-- Logo -->
                <div class="flex-shrink-0">
                    <div class="text-xl font-bold">{{ config('app.name') }}</div>
                </div>

                <!-- Mobile menu button -->
                <div class="flex md:hidden">
                    <button type="button"
                            @click="mobileMenuOpen = !mobileMenuOpen"
                            class="inline-flex items-center justify-center p-2 rounded-md text-gray-300 hover:text-white hover:bg-secondary">
                        <svg class="h-6 w-6"
                             :class="{ 'hidden': mobileMenuOpen, 'block': !mobileMenuOpen }"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                        <svg class="h-6 w-6"
                             :class="{ 'hidden': !mobileMenuOpen, 'block': mobileMenuOpen }"
                             fill="none"
                             viewBox="0 0 24 24"
                             stroke="currentColor">
                            <path stroke-linecap="round"
                                  stroke-linejoin="round"
                                  stroke-width="2"
                                  d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>

                <!-- Desktop navigation links -->
                <div class="hidden md:flex md:items-center md:space-x-4">
                    @auth
                        <form method="POST" action="#">
                            @csrf
                            <button type="submit" class="text-gray-300 hover:text-white px-3 py-2">
                                Cerrar Sesión
                            </button>
                        </form>
                    @else
                        <a href="#"
                           class="text-gray-300 hover:text-white px-3 py-2">
                            Iniciar Sesión
                        </a>
                    @endauth
                </div>
            </div>

            <!-- Mobile menu -->
            <div x-show="mobileMenuOpen"
                 class="md:hidden">
                <div class="px-2 pt-2 pb-3 space-y-1">
                    @auth
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block text-gray-300 hover:text-white px-3 py-2">
                                Cerrar Sesión
                            </button>
                        </form>
                    @else
                        <a href="#"
                           class="block text-gray-300 hover:text-white px-3 py-2">
                            Iniciar Sesión
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>
@endsection
