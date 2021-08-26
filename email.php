<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Teste Man</title>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <?php
    if (isset($_POST['email']) && !empty($_POST['email'])) {

        $nome = addslashes($_POST['nome']);
        $email = addslashes($_POST['email']);
        $telefone = addslashes($_POST['telefone']);
        $mensagem = addslashes($_POST['mensagem']);

        $to = "contato@nacionaltaxi.com.br";
        $subject = "Contato - Formulario Contato";
        $body = "Nome: " . $nome . "\r\n" .
            "Telefone: " . $telefone . "\r\n" .
            "Email: " . $email . "\r\n" .
            "Mensagem: " . $mensagem;
        $header = "From:contato@nacionaltaxi.com.br" . "\r\n" .
            "Reply-To:" . $email . "\r\n" .
            "X-Mailer:PHP/" . phpversion();
        if (mail($to, $subject, $body, $header)) {
            header('location:formulario.php?act=success');
        } else {
            header('location:formulario.php?act=danger');
        }
    }
    ?>
</body>

</html>