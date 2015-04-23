<div class="container">
    <div class="jumbotron">
            <?php
                if(isset($_POST['nome']) && isset($_POST['email'])&& isset($_POST['assunto'])&& isset($_POST['mensagem'])) {
                    echo "Dados enviados com sucesso, abaixo seguem os dados que você enviou:";
                    echo "<br>";
                    echo "<br>";
                    echo("Nome: " . $_POST['nome'] . "<br>");
                    echo "<br>";
                    echo("Email: " . $_POST['email'] . "<br>");
                    echo "<br>";
                    echo("Assunto: " . $_POST['assunto'] . "<br>");
                    echo "<br>";
                    echo("Mensagem: " . $_POST['mensagem'] . "<br>");
                    echo "<br>";
                }
            ?>
    </div>
</div><!-- /.container -->
