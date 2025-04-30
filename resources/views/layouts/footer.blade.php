@extends('layouts.layout')
@section('footer')
<!-- Footer -->
<footer class="bg-[#03045E] text-white py-12 mt-auto">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <h3 class="text-lg font-bold mb-4">{{ config('app.name') }}</h3>
                <p class="text-gray-300">Visualizacion imágenes para todos.</p>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Recursos</h4>
                <ul class="space-y-2">
{{--                    <li><a href="#" class="text-gray-300 hover:text-white">Documentación</a></li>--}}
                    <li><a href="#" class="text-gray-300 hover:text-white">Tutoriales</a></li>
{{--                    <li><a href="#" class="text-gray-300 hover:text-white">Blog</a></li>--}}
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Legal</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-white">Términos de Servicio</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Política de Privacidad</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-lg font-bold mb-4">Contacto</h4>
                <ul class="space-y-2">
                    <li><a href="#" class="text-gray-300 hover:text-white">Soporte</a></li>
                    <li><a href="#" class="text-gray-300 hover:text-white">Contacto</a></li>
                </ul>
            </div>
        </div>
        <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-300">
            <p>&copy; {{ date('Y') }} {{ config('app.name') }}. Todos los derechos reservados.</p>
        </div>
    </div>
</footer>
@endsection
