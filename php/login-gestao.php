<?php
session_start();

include "connect.php";
$usuario = $_POST['usuario'];
$rm = $_POST['rm'];
$senha = $_POST['senha'];
$id_tipo = 1;

$logar = $sql->query("SELECT * FROM cadgestao WHERE nome_ges='$usuario' AND rm_ges='$rm' AND senha='$senha'");

while ($linha = mysqli_fetch_array($logar)) {
    $id_tipo = $linha['id_tipo'];
}

$contagem = mysqli_num_rows($logar);

if ($contagem == 1 and $id_tipo == 1) {
    $_SESSION['nome_session'] = $usuario;
    $_SESSION['rm_session'] = $rm;
    $_SESSION['senha_session'] = $senha;
    $_SESSION['id_tipo_session'] = $id_tipo;
  
    header("location:../pages/home.html");
}

elseif ($contagem == 2 and $id_tipo == 1 ) {
    $_SESSION['nome_session'] = $usuario;
    $_SESSION['rm_session'] = $rm;
    $_SESSION['senha_session'] = $senha;
    $_SESSION['id_tipo_session'] = $id_tipo;
    header("location:../pages/errorlogin.html");

}

else{
    unset($_SESSION['nome_session']);
    unset($_SESSION['rm_session']);
    unset($_SESSION['senha_session']);

    include "../pages/errorlogin.html";
}