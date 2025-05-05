<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-background min-h-screen flex items-center justify-center p-4">
<div class="container mx-auto max-w-screen-xl px-4">
    <div class="bg-white rounded-lg shadow-lg max-w-md mx-auto p-8 md:p-10">
        <!-- Logo y título -->
        <div class="text-center mb-8">
            <svg class="w-14 h-14 mx-auto mb-4" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M12 2L2 7L12 12L22 7L12 2Z" stroke="#03045E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 17L12 22L22 17" stroke="#03045E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M2 12L12 17L22 12" stroke="#03045E" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <h1 class="text-2xl font-semibold text-primary">{{config('app.name')}}</h1>
        </div>

        <h2 class="text-2xl font-semibold text-primary text-center mb-6">Iniciar Sesión</h2>

        <form method="POST" action="{{ route('login.store') }}">
            @csrf
            <div class="mb-5">
                <label for="email" class="block text-primary text-sm font-medium mb-2">Correo electrónico</label>
                <input type="email" id="email" name="email"
                       class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-accent focus:border-accent transition-colors"
                       placeholder="ejemplo@correo.com" required>
            </div>

            <div class="mb-6">
                <label for="password" class="block text-primary text-sm font-medium mb-2">Contraseña</label>
                <input type="password" id="password" name="password"
                       class="w-full px-4 py-3 rounded-md border border-gray-300 focus:outline-none focus:ring-2 focus:ring-accent focus:border-accent transition-colors"
                       placeholder="************" required>
                <a href="#" class="block text-right text-secondary text-sm mt-2 hover:underline">¿Olvidaste tu contraseña?</a>
            </div>

            <button type="submit"
                    class="w-full bg-secondary hover:bg-primary text-white font-medium py-3 px-4 rounded-md transition-colors duration-300">
                Iniciar Sesión
            </button>
        </form>
    </div>
    {{-- errors.blade.php - Componente para mostrar errores en Laravel --}}

    @if ($errors->any() || session('error'))
        <div class="bg-red-50 border-l-4 border-red-500 p-4 mb-6 rounded-md">
            <div class="flex items-start">
                <div class="flex-shrink-0">
                    <svg class="h-5 w-5 text-red-500" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h3 class="text-sm font-medium text-red-800">
                        Se {{ $errors->count() > 1 ? 'encontraron' : 'encontró' }} {{ $errors->count() }} {{ $errors->count() > 1 ? 'errores' : 'error' }}
                    </h3>
                    <div class="mt-2 text-sm text-red-700">
                        <ul class="list-disc pl-5 space-y-1">
                            @if(session('error'))
                                <li>{{ session('error') }}</li>
                            @endif

                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    @endif
</div>
</body>
</html>
