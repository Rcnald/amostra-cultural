<?php
session_start();

include "connect.php";
$nome = $_POST['nomecon'];
$rm = $_POST['rmcon'];
$id_tipo = 2;

$novo = $sql->query("SELECT * FROM cadconvidado WHERE rm_con='$rm' AND nome_con='$nome' AND id_tipo=$id_tipo");


while ($linha = mysqli_fetch_array($novo)){
 $cont = $linha['cont'];
}

$checked = mysqli_num_rows($novo);

 if ($checked ==1 and $cont == 1){
    $_SESSION['nome_con_session'] = $nome;
    $_SESSION['rm_con_session'] = $rm;
    $_SESSION['id_tipo_session'] = $id_tipo;
    header("location:../pages/home.html");
}
    
else{
    ($sql->query("INSERT INTO cadconvidado(rm_con, nome_con, id_tipo) VALUES('$rm','$nome', $id_tipo)"));
    $_SESSION['nome_con_session'] = $nome;
    $_SESSION['rm_con_session'] = $rm;
    $_SESSION['id_tipo_session'] = $id_tipo;
    header("location:../pages/home.html");
}

