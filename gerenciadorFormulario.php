<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("head.php"); ?>
</head>

<body>
    <?php require_once ("menu.php"); ?>
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
        <?php require_once("footer.php"); ?>
    </div><!-- /.container -->

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="js/ie10-viewport-bug-workaround.js"></script>
</body>
</html>
