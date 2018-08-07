<?php

	
		include_once ('conexao.php');



			$acao = $_POST['acao'];

			if($acao == 'cadastrar'){
                           

			$endereco=$_POST['endereco'];
			$luz=$_POST['luz'];
			$agua=$_POST['agua'];
			$nome=$_POST['nome'];
			$telefone=$_POST['telefone'];
			$observacao=$_POST['observacao'];
                        
                        

			$stmt = $PDO->prepare("insert into inventario
                            (endereco, luz, agua, nome, telefone, observacao)
                            VALUES
                            (:endereco, :luz, :agua, :nome, :telefone, :observacao)");



 			$stmt->bindParam(':edereco', $endereco);
			$stmt->bindParam(':luz',  $luz);
			$stmt->bindParam(':agua',  $agua);
			$stmt->bindParam(':nome',  $nome);
			$stmt->bindParam(':telefone', $telefone);
			$stmt->bindParam(':observacao', $observacao);
                        $stmt->execute();
                        $id = $PDO->lastInsertId();
                
            else if($acao == 'editar'){ 
			$id= $_POST['id'];
			$endereco=$_POST['endereco'];
			$luz=$_POST['luz'];
			$agua=$_POST['agua'];
			$nome=$_POST['nome'];
			$telefone=$_POST['telefone'];
			$observacao=$_POST['observacao'];
                            
 
                      //var_dump($_POST);

                       	$stmt = $PDO->prepare("update inquilino set
                                endereco = :endereco,
                                luz = :luz,
                                agua = :agua,
                                nome = :nome,
                                telefone = :telefone,
                                observacao = :observacao,
                                where id = :id");

			$stmt->bindParam(':endereco', $endereco);
			$stmt->bindParam(':luz',  $luz);
			$stmt->bindParam(':agua',  $agua);
			$stmt->bindParam(':nome',  $nome);
			$stmt->bindParam(':telefone', $telefone);
			$stmt->bindParam(':observacao', $observacao);
			$stmt->bindParam(':id', $id);
            $stmt->execute();
                    
        else if($acao == 'excluir'){
        $id = $_POST['id'];
        $stmt = $PDO->prepare("delete from inquilino where id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();  
        
        }


    header("location:cadastro_inquilino.php");
	?>
    <?php
