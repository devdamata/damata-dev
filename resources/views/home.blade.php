@extends('layouts.app')

@section('title', 'Blog')

@section('content')
    <!-- Tendências -->
    <section class="bg-white border-t-4 border-gray-900 shadow-sm">
        <div class="max-w-7xl mx-auto">
            <div class="flex items-center space-x-4 px-4 py-4">
                <div class="bg-gray-900 text-white px-4 py-2 rounded-md">
                    <span class="font-medium">Novidades</span>
                </div>
                <p class="text-gray-800 font-medium">13 Melhores Aplicativos para Editar Vídeos no Celular em 2024</p>
            </div>
        </div>
    </section>

    <!-- Cards principais -->
    <section class="py-8 px-4">
        <div class="max-w-7xl mx-auto grid grid-cols-1 md:grid-cols-4 gap-6">
            <div class="bg-white text-gray-800 rounded-lg shadow-sm hover:shadow-md transition">
                <img src="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/06/site.jpg.webp" alt="" class="rounded-t-lg">
                <div class="p-4">
                    <span class="text-xs bg-gray-800 text-white px-2 py-1 rounded">TECNOLOGIA</span>
                    <h2 class="font-bold text-lg mt-2">10 Maiores Empresas de Tecnologia do Brasil</h2>
                    <p class="text-sm mt-1 text-gray-500">by Gabriel Silva - 27 novembro</p>
                </div>
            </div>
            <!-- Repetir cards -->
            <div class="bg-white text-gray-800 rounded-lg shadow-sm hover:shadow-md transition">
                <img src="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/06/site.jpg.webp" alt="" class="rounded-t-lg">
                <div class="p-4">
                    <span class="text-xs bg-gray-800 text-white px-2 py-1 rounded">ANDROID</span>
                    <h2 class="font-bold text-lg mt-2">13 Melhores Aplicativos para Editar Vídeos no Celular em 2024</h2>
                    <p class="text-sm mt-1 text-gray-500">by Rafael Silva - 07 maio</p>
                </div>
            </div>
            <div class="bg-white text-gray-800 rounded-lg shadow-sm hover:shadow-md transition">
                <img src="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/06/site.jpg.webp" alt="" class="rounded-t-lg">
                <div class="p-4">
                    <span class="text-xs bg-gray-800 text-white px-2 py-1 rounded">TECNOLOGIA</span>
                    <h2 class="font-bold text-lg mt-2">As 10 Maiores Empresas de Tecnologia do Mundo em 2024</h2>
                    <p class="text-sm mt-1 text-gray-500">by Gabriel Silva - 17 setembro</p>
                </div>
            </div>
            <div class="bg-white text-gray-800 rounded-lg shadow-sm hover:shadow-md transition">
                <img src="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/06/site.jpg.webp" alt="" class="rounded-t-lg">
                <div class="p-4">
                    <span class="text-xs bg-gray-800 text-white px-2 py-1 rounded">ANDROID</span>
                    <h2 class="font-bold text-lg mt-2">Celular Demorando para Carregar? Veja agora 12 Soluções</h2>
                    <p class="text-sm mt-1 text-gray-500">by Rafael Silva - 14 maio</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Em Destaque -->
    <section class="bg-gray-50 py-8 px-4">
        <div class="max-w-7xl mx-auto">
            <h3 class="text-xl font-bold mb-4 text-gray-800">Em Destaque</h3>
            <div class="flex flex-col md:flex-row gap-6">
                <img src="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/06/site.jpg.webp" class="rounded-lg md:w-1/2" />
                <div>
                    <h2 class="text-2xl font-bold text-gray-800">13 Melhores Aplicativos para Editar Vídeos no Celular em 2024</h2>
                    <p class="text-gray-500 text-sm my-2">by Rafael Silva - 07 maio</p>
                    <p class="text-gray-600">Se você está em busca de aplicativos para editar e criar vídeos usando fotos, músicas e efeitos de transição, saiba que existem diversas opções gratuitas disponíveis...</p>
                </div>
            </div>
        </div>
    </section>

    <!-- VEJA MAIS -->
    <section class="bg-[#004643] py-10">
        <div class="max-w-7xl mx-auto px-4">
            <h2 class="text-white text-xl font-bold mb-6">Veja mais</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                <div class="bg-white text-black rounded-xl overflow-hidden shadow-lg">
                    <img src="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/06/site.jpg.webp" class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <span class="text-xs bg-blue-600 text-white px-2 py-1 rounded">Dicas</span>
                        <h3 class="text-lg font-bold mt-2">Segredos para Dominar Qualquer Jogo Competitivo</h3>
                        <p class="text-[#001e1d] text-sm mt-2">Eleve suas habilidades e se torne um jogador de elite!</p>
                    </div>
                </div>
                <div class="bg-white text-black rounded-xl overflow-hidden shadow-lg">
                    <img src="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/06/site.jpg.webp" class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <span class="text-xs bg-blue-600 text-white px-2 py-1 rounded">Android</span>
                        <h3 class="text-lg font-bold mt-2">Guia para Resolver Jogos que Fecham Sozinhos</h3>
                        <p class="text-[#001e1d] text-sm mt-2">Soluções práticas para problemas comuns nos jogos de celular.</p>
                    </div>
                </div>
                <div class="bg-white text-black rounded-xl overflow-hidden shadow-lg">
                    <img src="https://rockcontent.com/br/wp-content/uploads/sites/2/2020/06/site.jpg.webp" class="w-full h-48 object-cover" />
                    <div class="p-4">
                        <span class="text-xs bg-blue-600 text-white px-2 py-1 rounded">Internet</span>
                        <h3 class="text-lg font-bold mt-2">Internet 5G é boa? Veja os Benefícios</h3>
                        <p class="text-[#001e1d] text-sm mt-2">Entenda porque a internet 5G é o futuro da conexão móvel.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Newsletter -->
    <section class="bg-gray-800 py-10 mt-10">
        <div class="max-w-3xl mx-auto text-center px-4">
            <h2 class="text-white text-2xl font-bold mb-4">Assine nossa Newsletter</h2>
            <p class="text-gray-300 mb-6">Receba as últimas novidades, tutoriais e dicas de tecnologia direto no seu e-mail.</p>
            <form class="flex flex-col sm:flex-row items-center gap-4 justify-center">
                <input type="email" placeholder="Digite seu e-mail" class="px-4 py-2 w-full sm:w-auto rounded-md border-none focus:ring-2 focus:ring-gray-500" />
                <button class="bg-white text-gray-800 px-6 py-2 rounded-md hover:bg-gray-100 transition">Inscrever</button>
            </form>
        </div>
    </section>
@endsection