<!DOCTYPE html>
<html lang="en">
<head>
    <?php require_once("head.php"); ?>
</head>

<body>
    <?php require_once ("menu.php"); ?>

    <div class="container">
        <div class="jumbotron">
            <form method="post" action="gerenciadorFormulario.php">
                <div class="form-group">
                    <label for="exampleInputName">Nome:</label>
                    <input name="nome" class="form-control" id="exampleInputName" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Email:</label>
                    <input name="email" class="form-control" id="exampleInputEmail1" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputAssunto">Assunto:</label>
                    <input name="assunto" class="form-control" id="exampleInputAssunto" placeholder="">
                </div>
                <div class="form-group">
                    <label for="exampleInputMessage">Mensagem:</label>
                    <textarea name="mensagem" class="form-control" rows="3"></textarea>
                </div>
                <button type="submit" class="btn btn-default">Enviar</button>
            </form>
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







