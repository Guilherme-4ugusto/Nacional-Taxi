<!DOCTYPE php>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nacional Táxi - Formulário Contato</title>
    <link rel="icon" href="image/icon.png">
    <link rel="stylesheet" type="text/css" href="css/style-form.css">
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</head>

<body>
    <div class="container">
        <form method="POST" action="./email.php">
            <div class="contact-box">
                <div class="left"></div>
                <div class="right">
                    <h2>Contato</h2>
                    <input type="text" class="field" placeholder="Seu Nome" name="nome" id="nome">
                    <input type="email" class="field" placeholder="Seu Email" required="required" name="email" id="email">
                    <input type="text" class="field" placeholder="Seu Telefone" name="telefone" id="telefone">
                    <textarea class="field area" placeholder="Mensagem" required="required" name="mensagem" id="mensagem"></textarea>
                    <button class="btn" type="submit">Enviar</button>
                    <a href="index.html"><img src="image/seta.png"></a>
                </div>
            </div>
        </form>
        <?php
        $act = $_GET['act'];
        if ($act == 'success') {
            echo '<script type="text/javascript">
  					swal("Sua mensagem foi enviada", "Parece que tudo deu certo, logo responderemos", "success");
					  </script>';
        } elseif ($act == 'danger') {
            echo '<script type="text/javascript">
  					swal("Sua mensagem não foi enviada", "Que tal tentar outra vez", "error");
  					</script>';
        }
        ?>
    </div>
</body>

</html>