<?php
function add(){
    ?>
    <html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>CRUD com Bootstrap 3</title>

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
    </head>
    <body>



    <div id="main" class="container-fluid">

        <h3 class="page-header">Adicionar Publicação</h3>

        <!DOCTYPE html>
        <html lang="pt-br">
        <head>
            <meta charset="utf-8">
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <title>CRUD com Bootstrap 3</title>

            <link href="css/bootstrap.min.css" rel="stylesheet">
            <link href="css/style.css" rel="stylesheet">
        </head>
        <body>



        <div id="main" class="container-fluid">

            <h3 class="page-header">Editar Publicação</h3>



            <form action="index.html">
                <div class="row">
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Nome do Alojamento/Restauração</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o nome do alojamento">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Campo Dois</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite a descrição">
                    </div>
                    <div class="form-group col-md-4">
                        <label for="exampleInputEmail1">Campo Três</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite a descrição">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-3">
                        <label for="exampleInputEmail1">Campo Quatro</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite a descrição">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="exampleInputEmail1">Campo Cinco</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite a descrição">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="exampleInputEmail1">Campo Seis</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite a descrição">
                    </div>
                    <div class="form-group col-md-3">
                        <label for="exampleInputEmail1">Campo Sete</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite a descrição">
                    </div>
                </div>

                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Campo Oito</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="exampleInputEmail1">Campo Nove</label>
                        <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Digite o valor">
                    </div>
                </div>

                <label>Imagem:</label>
                <input type="file" name="logo"><br>
                <select name="Categorias">
                    <option value="-1">Escolha a categoria..</option>
                    <?php

                    $result=mysqli_query($con,$sql);
                    while ($dados=mysqli_fetch_array($result)){
                        ?>

                        <?php
                    }


                    ?>
                </select>


                <hr />



            </form>
        </div>


        <script src="js/jquery.min.js"></script>
        <script src="js/bootstrap.min.js"></script>
        </body>
        </html>

        <hr />

        <div class="row">
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="testerest.php" class="btn btn-default">Cancelar</a>
            </div>
        </div>

        </form>
    </div>


    <script src="js/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    </body>
    </html>
<?php
}
?>