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
<body class="bg-[#004643] text-white font-sans">
    <!-- Header -->
    <header class="bg-black text-white">
      <div class="max-w-7xl mx-auto px-4 py-4 flex justify-between items-center">
        <a href="/Users/Employee/Desktop/blog/home.html"><h1 class="text-2xl font-bold">DAMATA<span class="text-[#abd1c6]">DEV</span></h1></a>
        <nav class="space-x-4 text-sm font-semibold">
          <a href="/Users/Employee/Desktop/blog/home.html" class="hover:text-[#f9bc60]">INÍCIO</a>
          <a href="#" class="hover:text-[#f9bc60]">RECENTES</a>
          <a href="#" class="hover:text-[#f9bc60]">CONTEÚDOS</a>
          <a href="#" class="hover:text-[#f9bc60]">TUTORIAIS</a>
          <a href="#" class="hover:text-[#f9bc60]">APLICATIVOS</a>
          <a href="#" class="hover:text-[#f9bc60]">INTERNET</a>
          <a href="/Users/Employee/Desktop/blog/contato.html" class="hover:text-[#f9bc60]">CONTATO</a>
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