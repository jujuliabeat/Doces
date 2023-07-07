<!-- PARTE HTML -->
<!DOCTYPE html>
<html lang="PT-BR">
<head>
    
    <title> Doces - Juh bea</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="doce.css">

</head>
<body>
    
    <!-- PARTE FORMULÁRIO -->

    <form action="" method="POST">

        <legend> Doceria </legend>


            <input type="text" name="nome" placeholder="Informe o nome" id="nome" value="<?php echo "$nome" ?>">
            <br><br>

            <select name="tipo">
                <option value="">---Selecione o tipo do Doce---</option>
                
                <option value="BC">Bem-casado</option>
                <option value="C">Cupcakes</option>
                <option value="M">Macarons</option>
                <option value="B">Brigadeiros</option>
                <option value="T">Temáticos</option>
                <option value="G">Gourmet</option>
                <option value="O">Outros</option>

            </select><br><br>

            <input type="text" name="tamanho" placeholder="diga o tamanho" id="tamanho" value="<?php echo "$tamanho" ?>">
            <br><br>


            <label> Selecione uma cor para seu card </label>
                <input type="color" name="cor" id="cor" value="<?php echo "$cor" ?>">
                <br><br>

            <label> Deixe aqui o link da imagem de seu doce: </label>
                <input type="url" name="imagem" id="imagem" value="<?php echo"$img" ?>">
                <br><br>

                <button type="submit"> Criar </button>

                <input type="hidden" name="submeter" value="1" />

    </form>

</body>
</html>