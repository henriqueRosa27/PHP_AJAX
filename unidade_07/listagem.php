<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <script>
            function retornaProdutos(dados){
                console.log(dados);
            }
        </script>
    </head>

    <body>
    <script src="http://localhost/PHP_AJAX/unidade_07/gerar_json.php?callback=retornaProdutos"></script>
    </body>
</html>