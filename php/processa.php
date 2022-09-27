<?php
session_start();
    include_once('connect.php');
    
    if(!empty($_POST['estrela'])){
        $estrela = $_POST['estrela'];
        $rmConvidado = $_SESSION['rm_con_session'];
        $teste = $sql -> query("SELECT * FROM avaliacao where rm_con = $rmConvidado");

        $check = mysqli_num_rows($teste);

        if($check == 1){
            $alterandoNota = $sql->query("UPDATE avaliacao SET num_ava = $estrela WHERE rm_con = $rmConvidado");
        }   else{
            $result_avaliacoes = $sql->query("INSERT INTO avaliacao VALUES (Default, '$rmConvidado', '$estrela')");
        }
        
        header ('Location: ../pages/home.html');
    } else{
        echo "<script>alert('É necessário escolher ao menos uma estrela')</script>";
        header ('Location: ../pages/home.html');
    }
?>