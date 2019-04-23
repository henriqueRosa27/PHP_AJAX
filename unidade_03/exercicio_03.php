<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
    </head>

    <body>
        <div id="nome"></div>
        <div id="mensagem"></div>

        <script src="jquery.js"></script>
        <script>
            $.ajax({
                url: 'nome.php'
            }).done(function(valor){
                $('div#nome').html(valor);
            }).fail(function(){
                $('div#nome').html("Falha na operação!");
            }).always(function(){
                $('div#mensagem').html("Qualquer mensagem de sucesso ou falha");
            })
        </script>
    </body>
</html>