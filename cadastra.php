<?php
          
            try{
                $conexao = mysqli_connect("localhost","soaresmju","","barcode");
                
                $nome= $_POST['nome'];
                $barra= $_POST['barra'];
                $valor= $_POST['valor'];
                $descricao= $_POST['desc'];
                $processador= $_POST['processador'];
                $sistema= $_POST['sistema'];
                $tela= $_POST['tela'];
                $wifi= $_POST['wifi'];
                $cameras= $_POST['cameras'];
                $resolucao= $_POST['resolucao'];
                $memoria= $_POST['memoria'];
                
                $query="INSERT INTO tb_celular VALUES (null,  '$nome',  '$barra', '$valor', '$descricao', '$processador','$sistema', '$tela', '$wifi', '$cameras','$resolucao','$memoria')";
                
                mysqli_query($conexao,$query);
                
                echo "Cadastro realizado com sucesso!";
            }catch(Exception $e){
                echo "Erro ao conectar: ".$e;
            }
?>