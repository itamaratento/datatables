<?php
require './conexao.php';
$sql = "SELECT * FROM inquilino";
$sql = $db->prepare($sql);
$sql->execute();
if ($sql->rowCount() > 0) {
    $dados = $sql->fetchAll();
}
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
        <div class="container">

            <div class="table-responsive">
                <table id="example" class="display table table-bordered table-striped" style="width:100%">
                    <thead><br><br>
                        <tr>
                            <th>Id</th>
                            <th>Endereco</th>
                            <th>Luz</th>
                            <th>Agua</th>
                            <th>Nome</th>
                            <th>Telefone</th>
                            <th>Observacao</th>
                            <th></th>
                            <th></th>





                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        if (!empty($dados)) {
                            foreach ($dados as $inquilino) {
                                ?>
                            <tr>
                                <td>
                                    <?php echo $inquilino['id']; ?>
                                </td>
                                <td>
                                    <?php echo $inquilino['endereco']; ?>
                                </td>
                                <td>
                                    <?php echo $inquilino['luz']; ?>
                                </td>
                                <td>
                                    <?php echo $inquilino['agua']; ?>
                                </td>
                                <td>
                                    <?php echo $inquilino['nome']; ?>
                                </td>
                                <td>
                                    <?php echo $inquilino['telefone']; ?>
                                </td>
                                <td>
                                    <?php echo $inquilino['observacao']; ?>
                                </td>
                                <td><a class='btn btn-primary' href='cadastro_inventario.php?id=$id'>editar</a></td>
                                <td>
                                    <form method='post' action='listagem_inventario.php'>
                                        <input type='hidden' name='acao' value='excluir'>
                                        <input type='hidden' name='id' value='$id'>
                                        <input class='btn btn-danger' type='button' onClick='PerguntaExcluir(this.form);' value='Excluir'>
                                    </form>
                                </td>

                            </tr>



                            <?php
                            }
                        }
                        ?>

                    </tbody>


                </table>
            </div>
        </div>
        <script src="DataTables/js/jquery-3.3.1.js"></script>
        <script src="DataTables/js/jquery.dataTables.min.js"></script>
        <script src="DataTables/js/dataTables.bootstrap4.min.js"></script>
        <script>
             /*function PerguntaExcluir(form) {
                if (confirm("DESEJA REALMENTE ***EXCLUIR*** ESTE PRODUTO?")) {
                    form.submit();
                } else {
                    alert("Ok");*/


            $(document).ready(function() {
                $('#example').DataTable({
                    language: {
                        "url": "//cdn.datatables.net/plug-ins/1.10.19/i18n/Portuguese-Brasil.json"
                    }
                });
            });

        </script>

    </body>

    </html>
