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

                            <!-- PESQUISA -->

    <form action="" method="POST">

        <legend> Doceria </legend>


            <input type="text" name="nome" placeholder="Informe o nome" id="nome" >
            <br><br>

            <select name="tipo">
                <option value="">---Selecione o tipo do Doce---</option>
                
                <option value="C">Cupcakes</option>
                <option value="M">Macarons</option>
                <option value="B">Brigadeiros</option>
                <option value="T">Temáticos</option>
                <option value="G">Gourmet</option>
                <option value="O">Outros</option>

            </select><br><br>

            <input type="text" name="tamanho" placeholder="diga o tamanho" id="tamanho" >
            <br><br>


            <label> Selecione uma cor para seu card </label>
                <input type="color" name="cor" id="cor" >
                <br><br>

            <label> Deixe aqui o link da imagem de seu doce: </label>
                <input type="url" name="imagem" id="imagem" >
                <br><br>

                                         <!-- BOTAO -->

                <button type="submit"> Criar </button>

                <input type="hidden" name="submeter" value="1" />

    </form>

                                <!-- CARD  -->

    <?php
    $sql = "SELECT * FROM doces";
    $stmt = $conn->prepare($sql);
    $stmt->execute();

    $result = $stmt->fetchAll();

    ?>

                                <!-- ESTILO -->

    <div class="card mb-3" style="max-width: 540px;">
    <div class="row g-0">
        <div class="col-md-4">
        <img src="..." class="img-fluid rounded-start" alt="...">
        </div>
        <div class="col-md-8">
        <div class="card-body">
            <h5 class="card-title">Card title</h5>
            <p class="card-text">This is a wider card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
            <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
        </div>
        </div>
    </div>
    </div>

</body>
</html>