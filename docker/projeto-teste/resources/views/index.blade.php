<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projeto de Teste - Laravel</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .gradient-button {
            background: linear-gradient(to right, #a78bfa, #d8b4fe);
        }
    </style>
</head>
<body class="bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100 min-h-screen flex flex-col justify-between items-center">
    <main class="flex-1 flex flex-col items-center justify-center text-center p-4">
        <div class="bg-white dark:bg-gray-800 rounded-xl shadow-2xl p-8 max-w-md w-full">
            <h1 class="text-3xl font-bold mb-2">TASKS</h1><br>

            <a href="{{ route('contact.show') }}" class="inline-block w-full px-6 py-3 text-lg text-white font-semibold rounded-lg shadow-lg gradient-button">
                FORMULARIO DE CONTATO
            </a><br><br>

            <a href="{{ route('contact.show') }}" class="inline-block w-full px-6 py-3 text-lg text-white font-semibold rounded-lg shadow-lg gradient-button">
                ...
            </a>
        </div>
    </main>

    <footer class="text-center py-4 text-gray-500 dark:text-gray-400">
        <p>Projeto de Teste - {{ date('Y') }}</p>
    </footer>
</body>
</html>
