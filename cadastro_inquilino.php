<?php
require './conexao.php';

?>
<!DOCTYPE html>
    
    <html>

     <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="DataTables/css/bootstrap.min.css" />
        <link rel="stylesheet" href="DataTables/css/dataTables.bootstrap4.min.css" />

        <!--<link rel="stylesheet" href="DataTables/css/jquery.dataTables.min.css"/>-->
        <title></title>
    </head>


    <body>
        <?php include_once 'header.php'; ?>
    <div class="container">

        <h1>Cadastro Inquilino</h1>
        <form method="POST" action="grv_cadastro_inquilino.php">


            <label>Endereço da Casa</label>

            <div class="form-group">
                <input class="form-control" type="text" name="endereco" placeholder="Endereço da Casa">

            </div>
            <label>Registro de Luz</label>

            <div class="form-group">
                <input class="form-control" type="text" name="luz" placeholder="Registro da Luz">

            </div>

            <label>Registro de Agua</label>

            <div class="form-group">
                <input class="form-control" type="text" name="agua" placeholder="Registro da agua">

            </div>



            <label>Nome do Inquilino</label>

            <div class="form-group">
                <input class="form-control" type="text" name="nome" placeholder="Nome do Inquilino">

            </div>

            <label>Telefone</label>

            <div class="form-group">
                <input class="form-control" type="text" name="telefone" placeholder="Telefone">

            </div>



            <label>Observação</label>

            <div class="form-group">
                <input class="form-control" type="text" name="observacao" placeholder="Observação">

            </div>

            <button class="btn btn-primary" type="submit">Cadastrar</button>


        </form>

    </div>
    <?php include_once 'footer.php';?>
    </body>

    </html>
