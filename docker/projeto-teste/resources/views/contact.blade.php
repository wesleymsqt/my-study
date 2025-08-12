<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Contato</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-[#FDFDFC] dark:bg-[#0a0a0a] text-[#1b1b18] p-6 lg:p-8 min-h-screen">
    <div class="max-w-4xl mx-auto mt-10">
        <h1 class="text-3xl font-medium mb-4">Formulário de Contato</h1>
        <p class="mb-6 text-[#706f6c] dark:text-[#A1A09A]">
            Preencha o formulário abaixo para entrar em contato conosco.
        </p>

        @if (session('success'))
            <div class="bg-green-100 dark:bg-green-800 text-green-700 dark:text-green-200 px-4 py-3 rounded relative mb-6">
                <p>Sua mensagem foi enviada com sucesso!</p>
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="POST" class="bg-white dark:bg-[#161615] shadow-lg rounded-lg p-8">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nome (opcional)</label>
                <input type="text" name="name" id="name" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-[#2c2c2c] dark:border-gray-600 dark:text-white" value="{{ old('name') }}">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700 dark:text-gray-300">E-mail (opcional)</label>
                <input type="email" name="email" id="email" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-[#2c2c2c] dark:border-gray-600 dark:text-white" value="{{ old('email') }}">
            </div>

            <div class="mb-4">
                <label for="subject" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Assunto</label>
                <input type="text" name="subject" id="subject" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-[#2c2c2c] dark:border-gray-600 dark:text-white" value="{{ old('subject') }}">
            </div>
            @error('subject')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Mensagem</label>
                <textarea name="message" id="message" rows="4" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-[#2c2c2c] dark:border-gray-600 dark:text-white">{{ old('message') }}</textarea>
            </div>
            @error('message')
                <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
            @enderror

            <div class="flex items-center justify-end">
                <button type="submit" class="px-5 py-2 bg-[#1b1b18] text-white rounded-md hover:bg-black dark:bg-[#eeeeec] dark:text-[#1C1C1A] dark:hover:bg-white dark:hover:text-black transition-colors duration-200">
                    Enviar Mensagem
                </button>
            </div>
        </form>
    </div>
</body>
</html>
