<?php

function view(){
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

    <!-- Modal -->
    <div class="modal fade" id="delete-modal" tabindex="-1" role="dialog" aria-labelledby="modalLabel">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title" id="modalLabel">Excluir Item</h4>
                </div>
                <div class="modal-body">
                    Deseja realmente excluir este item?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary">Sim</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">N&atilde;o</button>
                </div>
            </div>
        </div>
    </div>



    <div id="main" class="container-fluid">
        <h3 class="page-header">Visualizar Publicação #1</h3>

        <div class="row">
            <div class="col-md-4">
                <p><strong>Nome do Alojamento/Restauração</strong></p>
                <p>HOMEMOEL</p>
            </div>

            <div class="col-md-4">
                <p><strong>Campo Dois</strong></p>
                <p>Pacotes desde 150€</p>
            </div>

            <div class="col-md-4">
                <p><strong>Campo Três</strong></p>
                <p>Desconto 10% até 05/03/2021</p>
            </div>

            <div class="col-md-4">
                <p><strong>Campo Quatro</strong></p>
                <p></p>
            </div>

            <div class="col-md-4">
                <p><strong>Campo Cinco</strong></p>
                <p></p>
            </div>

            <div class="col-md-4">
                <p><strong>Campo Seis</strong></p>
                <p></p>
            </div>

            <div class="col-md-4">
                <p><strong>Campo Sete</strong></p>
                <p></p>
            </div>

            <div class="col-md-4">
                <p><strong>Campo Oito</strong></p>
                <p></p>
            </div>

            <div class="col-md-4">
                <p><strong>Campo Nove</strong></p>
                <p></p>
            </div>

            <div class="col-md-4">
                <p><strong>Imagem</strong></p>

                <p></p>
            </div>


        </div>

        <hr />
        <div id="actions" class="row">
            <div class="col-md-12">
                <a href="../testerest1.php" class="btn btn-primary">Fechar</a>
                <a href="edit.php" class="btn btn-default">Editar</a>
                <a href="#" class="btn btn-default" data-toggle="modal" data-target="#delete-modal">Excluir</a>
            </div>
        </div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    </body>
    </html>
<?php
}
?>