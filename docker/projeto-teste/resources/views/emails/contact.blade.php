<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <title>Novo Contato</title>
</head>
<body>
    <h1>Novo Contato Recebido</h1>
    <p><strong>Nome:</strong> {{ $formdata['name'] ?? 'Não informado' }}</p>
    <p><strong>E-mail:</strong> {{ $formdata['email'] ?? 'Não informado' }}</p>
    <p><strong>Assunto:</strong> {{ $formdata['subject'] }}</p>
    <p><strong>Mensagem:</strong></p>
    <p>{{ $formdata['message'] }}</p>
</body>
</html>
