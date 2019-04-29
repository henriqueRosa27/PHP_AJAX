<!doctype html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>PHP com AJAX</title>
        <link href="_css/estilo.css" rel="stylesheet">
    </head>

    <body>
        <main>
            <div id="janela_formulario">
                <form id="pesquisarProdutos">
                    <label for="categorias">Categorias</label>
                    <select id="categorias">
                    </select>
                    <label for="produto">Categorias</label>
                    <select id="produto">
                    </select>
                </form>
            </div>
        </main>
        
        
        <script src="_js/jquery.js"></script>
        <script>
            function retornarCategorias(dados){
                var categoria = "";
                $.each(dados, function(chave, valor){
                    categoria += "<option value=" + valor.categoriaID + ">" + valor.nomecategoria + "</option>";
                })
                $('#categorias').append(categoria);
            }

            $('#categorias').change(function(e){
                var id = $(this).val();

                $.ajax({
                    type: "GET",
                    data: "categoriaID=" + id,
                    url: "retornar_produtos.php",
                    async: false
                }).done(function(data){
                    //console.log($.parseJSON(data));
                    var lista = "";
                    $.each($.parseJSON(data), function(chave, valor){
                        lista += "<option value=" + valor.produtoID + ">" + valor.nomeproduto + "</option>";
                    });
                    $('#produto').html(lista);
                }).fail(function(){

                });
            });
        </script>
        <script src="http://localhost/PHP_AJAX/unidade_11/retornar_categorias.php?callback=retornarCategorias"></script>
    </body>
</html>