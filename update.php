<?php
    try {
        $conecta = mysqli_connect("localhost","soaresmju","","barcode"); 
                                //servidor , usuario banco, senha, nome do banco
        
                $codigo= $_POST['codigo'];
                $nome= $_POST['nome'];
                $barra= $_POST['barra'];
                $valor= $_POST['valor'];
                $descricao= $_POST['descricao'];
                $processador= $_POST['processador'];
                $sistema= $_POST['sistema'];
                $tela= $_POST['tela'];
                $wifi= $_POST['wifi'];
                $cameras= $_POST['cameras'];
                $resolucao= $_POST['resolucao'];
                $memoria= $_POST['memoria'];
        
        $query = "update tb_celular set nm_celular='$nome', cd_barra='$barra', vl_celular='$valor', ds_geral='$descricao', nm_processador='$processador', nm_sistema='$sistema', nr_tela='$tela',
        nm_wifi='$wifi', nr_cameras='$cameras', nr_resolucao='$resolucao', nr_memoria='$memoria' where cd_celular = $codigo";
        
        mysqli_query($conecta,$query);
        echo "alteração realizado com sucesso";
    } catch (Exception $e ) {
        echo "Erro ao cadastrar: ".$e;
    }