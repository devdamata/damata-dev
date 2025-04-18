<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} - @yield('title')</title>

    <!-- Vite Assets -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

</head>
<body class="bg-gray-100 text-gray-800 font-sans">
    <!-- Header -->
    <header class="bg-white border-b">
        <div class="max-w-7xl mx-auto px-4 py-5 flex justify-between items-center">
            <a href="/"><h1 class="text-2xl font-bold text-gray-900">DAMATA<span class="text-gray-500">DEV</span></h1></a>
            <nav class="space-x-8 text-sm font-medium">
                <a href="{{ Route('home'); }}" class="text-gray-600 hover:text-gray-900 border-b-2 border-transparent hover:border-gray-900 transition-all py-1">HOME</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 border-b-2 border-transparent hover:border-gray-900 transition-all py-1">RECENTES</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 border-b-2 border-transparent hover:border-gray-900 transition-all py-1">CONTEÚDOS</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 border-b-2 border-transparent hover:border-gray-900 transition-all py-1">TUTORIAIS</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 border-b-2 border-transparent hover:border-gray-900 transition-all py-1">APLICATIVOS</a>
                <a href="#" class="text-gray-600 hover:text-gray-900 border-b-2 border-transparent hover:border-gray-900 transition-all py-1">INTERNET</a>
                <a href="{{ Route('contact'); }}" class="text-gray-600 hover:text-gray-900 border-b-2 border-transparent hover:border-gray-900 transition-all py-1">CONTATO</a>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="">
        @yield('content')
    </main>
    <!-- Rodapé -->
    <footer class="bg-black text-white mt-12 px-4 py-8 text-sm">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-2 gap-6">
        <div>
            <h2 class="font-bold text-lg mb-2">DAMATADEV</h2>
            <p>O Blog DAMATADEV oferece conteúdos exclusivos sobre programação, desenvolvimento de soluções web, dicas, tutoriais e muito mais.</p>
        </div>
        <div class="flex flex-col md:items-end space-y-1">
            <a href="/Users/Employee/Desktop/blog/sobre-nos.html" class="hover:underline">Sobre Nós</a>
            <a href="/Users/Employee/Desktop/blog/politica-de-privacidade.html" class="hover:underline">Política de Privacidade</a>
            <a href="/Users/Employee/Desktop/blog/termos-de-uso.html" class="hover:underline">Termos de Uso</a>
        </div>
        </div>
        <div class="text-center text-gray-400 mt-6">
            &copy; {{ date('Y') }} {{ config('app.name') }}. Todos os direitos reservados.
        </div>
    </footer>
</body>
</html>
