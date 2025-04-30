@extends('layouts.layout')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('content')
    <!-- Hero Section -->
    <section class="bg-gradient-to-b from-primary to-secondary text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12 items-center">
                <div>
                    <h1 class="text-4xl md:text-5xl font-bold mb-6">
                        Gestiona tus imágenes de manera inteligente
                    </h1>
                    <p class="text-lg mb-8">
                        Organiza, categoriza y encuentra tus fotos fácilmente con nuestra tecnología de reconocimiento facial y ubicación.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="bg-accent hover:bg-[#90E0EF] text-white px-6 py-3 rounded-md font-medium">
                            Comenzar Gratis
                        </a>
                        <a href="#features" class="border border-white text-white px-6 py-3 rounded-md font-medium hover:bg-white hover:text-primary">
                            Conocer Más
                        </a>
                    </div>
                </div>
                <div class="hidden md:block">
                    <!-- Placeholder para imagen/ilustración -->
                    <div class="bg-[#CAF0F8] rounded-lg p-6 h-96 flex items-center justify-center">
                        <svg class="w-64 h-64 text-secondary" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
                        </svg>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="features" class="py-20 bg-white">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-primary mb-12">Características Principales</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Feature 1 -->
                <div class="bg-[#CAF0F8] rounded-lg p-6">
                    <div class="text-secondary mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.828 14.828a4 4 0 01-5.656 0M9 10h.01M15 10h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-2">Reconocimiento Facial</h3>
                    <p class="text-gray-600">Identifica y organiza automáticamente tus fotos por las personas que aparecen en ellas.</p>
                </div>

                <!-- Feature 2 -->
                <div class="bg-[#CAF0F8] rounded-lg p-6">
                    <div class="text-secondary mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-2">Geolocalización</h3>
                    <p class="text-gray-600">Visualiza y organiza tus fotos en un mapa interactivo según donde fueron tomadas.</p>
                </div>

                <!-- Feature 3 -->
                <div class="bg-[#CAF0F8] rounded-lg p-6">
                    <div class="text-secondary mb-4">
                        <svg class="w-12 h-12" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                        </svg>
                    </div>
                    <h3 class="text-xl font-bold text-primary mb-2">Respaldo Seguro</h3>
                    <p class="text-gray-600">Mantén tus fotos seguras con nuestro sistema de respaldo automático semanal.</p>
                </div>
            </div>
        </div>
    </section>


    <!-- How it Works -->
    <section class="py-20 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl font-bold text-center text-primary mb-12">¿Cómo Funciona?</h2>
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
                <div class="text-center">
                    <div class="bg-secondary text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">1</div>
                    <h3 class="font-bold text-primary mb-2">Sube tus Fotos</h3>
                    <p class="text-gray-600">Arrastra y suelta tus imágenes o selecciónalas desde tu dispositivo.</p>
                </div>
                <div class="text-center">
                    <div class="bg-secondary text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">2</div>
                    <h3 class="font-bold text-primary mb-2">Procesamiento Automático</h3>
                    <p class="text-gray-600">Nuestro sistema analiza y organiza tus fotos automáticamente.</p>
                </div>
                <div class="text-center">
                    <div class="bg-secondary text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">3</div>
                    <h3 class="font-bold text-primary mb-2">Organización</h3>
                    <p class="text-gray-600">Tus fotos se categorizan por personas, lugares y fechas.</p>
                </div>
                <div class="text-center">
                    <div class="bg-secondary text-white w-12 h-12 rounded-full flex items-center justify-center mx-auto mb-4">4</div>
                    <h3 class="font-bold text-primary mb-2">Acceso Fácil</h3>
                    <p class="text-gray-600">Encuentra tus fotos rápidamente usando búsqueda avanzada.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="bg-primary text-white py-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <h2 class="text-3xl font-bold mb-6">Comienza a Organizar tus Fotos Hoy</h2>
            <p class="text-lg mb-8 max-w-2xl mx-auto">
                Únete a nuestra comunidad y descubre una nueva forma de gestionar tu biblioteca de fotos.
            </p>
            <a href="#" class="bg-accent hover:bg-[#90E0EF] text-white px-8 py-4 rounded-md font-medium inline-block">
                Crear Cuenta Gratuita
            </a>
        </div>
    </section>
    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('navbar', () => ({
                mobileMenuOpen: false
            }))
        })
    </script>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection
