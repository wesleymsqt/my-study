<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Formulário de Contato</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <style>
        .bg-purple-gradient {
            background: linear-gradient(to bottom right, #e9d5ff, #f3e8ff);
        }
        .gradient-button {
            background: linear-gradient(to right, #a78bfa, #d8b4fe);
        }
        .form-input {
            @apply mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 dark:bg-[#2c2c2c] dark:border-gray-600 dark:text-white;
        }
    </style>
</head>
<body class="bg-purple-gradient text-gray-900 min-h-screen flex flex-col justify-center items-center p-6 lg:p-8">
    <div class="bg-gray-800 rounded-xl shadow-2xl p-8 max-w-2xl w-full text-white">
        <a href="{{ route('index') }}" class="inline-block px-6 py-3 text-lg text-white font-semibold rounded-lg shadow-lg gradient-button mb-6">
            VOLTAR
        </a>

        <h1 class="text-3xl font-bold mb-4">Contato com a CICCS</h1>
        <p class="mb-6 text-gray-300">
            Este formulário é um canal direto com a administração da CICCS e qualquer questão pode ser tratada, a partir dos campos que seguem:
        </p>

        @if (session('success'))
            <div class="bg-green-100 dark:bg-green-800 text-green-700 dark:text-green-200 px-4 py-3 rounded relative mb-6">
                <p class="font-bold">Sucesso!</p>
                <p>{{ session('success') }}</p>
            </div>
        @endif

        @if ($errors->any())
            <div class="bg-red-100 dark:bg-red-800 text-red-700 dark:text-red-200 px-4 py-3 rounded relative mb-6">
                <p class="font-bold">Erro!</p>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('contact.send') }}" method="POST">
            @csrf

            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-white">Nome (*)</label>
                <input type="text" name="name" id="name" required class="form-input text-white bg-gray-700" value="{{ old('name') }}">
            </div>

            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-white">E-mail (*)</label>
                <input type="email" name="email" id="email" required class="form-input text-white bg-gray-700" value="{{ old('email') }}">
            </div>

            <div class="mb-4">
                <label for="instituicao" class="block text-sm font-medium text-white">Instituição de Origem (não obrigatório)</label>
                <input type="text" name="instituicao" id="instituicao" class="form-input text-white bg-gray-700" value="{{ old('instituicao') }}">
            </div>

            <div class="mb-4">
                <label for="subject" class="block text-sm font-medium text-white">Assunto</label>
                <select name="subject" id="subject" required class="form-input text-gray-900">
                    <option value="Dúvida" @if(old('subject') == 'Dúvida') selected @endif>Dúvida</option>
                    <option value="Elogio" @if(old('subject') == 'Elogio') selected @endif>Elogio</option>
                    <option value="Sugestão" @if(old('subject') == 'Sugestão') selected @endif>Sugestão</option>
                </select>
            </div>

            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-white">Mensagem</label>
                <textarea name="message" id="message" rows="4" required class="form-input text-white bg-gray-700">{{ old('message') }}</textarea>
            </div>

            <div class="flex items-center justify-end mt-6">
                <button type="submit" class="inline-block px-6 py-3 text-lg text-white font-semibold rounded-lg shadow-lg gradient-button">
                    Enviar Mensagem
                </button>
            </div>
        </form>
    </div>
</body>
</html>
