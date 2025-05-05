@extends('layouts.layout')

@section('navbar')
    @include('layouts.navbar')
@endsection

@section('content')
    <main class="py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Dashboard Header -->
            <div class="mb-8">
                <h1 class="text-2xl font-medium text-gray-800 mb-2">Vista General</h1>
                <p class="text-sm text-gray-500">Resumen de fotografías</p>
            </div>

            <!-- Metrics Cards -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-10">
                <!-- Metric 1 Cantidad de fotografias-->
                <div class="bg-white rounded-lg shadow-sm p-6 transition-card hover:shadow-md">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-sm font-medium text-gray-500">Fotografías/Videos</h3>
                        <div class="w-9 h-9 rounded-lg bg-blue-600 flex items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.827 6.175A2.31 2.31 0 0 1 5.186 7.23c-.38.054-.757.112-1.134.175C2.999 7.58 2.25 8.507 2.25 9.574V18a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9.574c0-1.067-.75-1.994-1.802-2.169a47.865 47.865 0 0 0-1.134-.175 2.31 2.31 0 0 1-1.64-1.055l-.822-1.316a2.192 2.192 0 0 0-1.736-1.039 48.774 48.774 0 0 0-5.232 0 2.192 2.192 0 0 0-1.736 1.039l-.821 1.316Z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 12.75a4.5 4.5 0 1 1-9 0 4.5 4.5 0 0 1 9 0ZM18.75 10.5h.008v.008h-.008V10.5Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="text-3xl font-semibold mb-2">125</div>
                </div>

                <!-- Metric 2 -->
                <div class="bg-white rounded-lg shadow-sm p-6 transition-card hover:shadow-md">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-sm font-medium text-gray-500">Usuarios</h3>
                        <div class="w-9 h-9 rounded-lg bg-green-500 flex items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 19.128a9.38 9.38 0 0 0 2.625.372 9.337 9.337 0 0 0 4.121-.952 4.125 4.125 0 0 0-7.533-2.493M15 19.128v-.003c0-1.113-.285-2.16-.786-3.07M15 19.128v.106A12.318 12.318 0 0 1 8.624 21c-2.331 0-4.512-.645-6.374-1.766l-.001-.109a6.375 6.375 0 0 1 11.964-3.07M12 6.375a3.375 3.375 0 1 1-6.75 0 3.375 3.375 0 0 1 6.75 0Zm8.25 2.25a2.625 2.625 0 1 1-5.25 0 2.625 2.625 0 0 1 5.25 0Z" />
                            </svg>
                        </div>
                    </div>
                    <div class="text-3xl font-semibold mb-2">5</div>
                </div>

                <!-- Metric 3 -->
                <div class="bg-white rounded-lg shadow-sm p-6 transition-card hover:shadow-md">
                    <div class="flex justify-between items-center mb-4">
                        <h3 class="text-sm font-medium text-gray-500">Almacenamiento</h3>
                        <div class="w-9 h-9 rounded-lg bg-yellow-500 flex items-center justify-center text-white">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M20.25 6.375c0 2.278-3.694 4.125-8.25 4.125S3.75 8.653 3.75 6.375m16.5 0c0-2.278-3.694-4.125-8.25-4.125S3.75 4.097 3.75 6.375m16.5 0v11.25c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125V6.375m16.5 0v3.75m-16.5-3.75v3.75m16.5 0v3.75C20.25 16.153 16.556 18 12 18s-8.25-1.847-8.25-4.125v-3.75m16.5 0c0 2.278-3.694 4.125-8.25 4.125s-8.25-1.847-8.25-4.125" />
                            </svg>
                        </div>
                    </div>
                    <div class="text-3xl font-semibold mb-2">125GB / 250GB</div>
                </div>
            </div>

            <!-- Charts Container -->
            <div class="bg-white rounded-lg shadow-sm p-6">
                <h2 class="text-lg font-medium mb-4">Ultima Fotografía</h2>
                <div class="w-full h-72 bg-gray-50 rounded-lg flex items-center justify-center text-gray-500">
                   <img src="https://picsum.photos/200/300" alt="imagen de prueba">
                </div>
            </div>
        </div>
    </main>
@endsection

@section('footer')
    @include('layouts.footer')
@endsection

