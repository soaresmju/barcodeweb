<?php
    try {
        $conecta = mysqli_connect("localhost","soaresmju","","barcode"); 
                                //servidor , usuario banco, senha, nome do banco
    
        $id = $_GET['id'];
        
        $query = "delete from tb_celular where cd_celular = $id";
        
        mysqli_query($conecta,$query);
        echo "registro removido com sucesso";
    } catch (Exception $e ) {
        echo "Erro ao deletar: ".$e;
    }