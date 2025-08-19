<!DOCTYPE html>
<html lang="pt-br">
<body>
    <h1>Novo Contato Recebido</h1>
    <p><strong>Nome:</strong> {{ $formdata['name'] ?? 'Não informado' }}</p>
    <p><strong>E-mail:</strong> {{ $formdata['email'] ?? 'Não informado' }}</p>
    <p><strong>Instituição de Origem:</strong> {{ $formdata['instituicao'] ?? 'Não informado' }}</p>
    <p><strong>Assunto:</strong> {{ $formdata['subject'] }}</p>
    <p><strong>Mensagem:</strong></p>
    <p>{{ $formdata['message'] }}</p>
</body>
</html>
