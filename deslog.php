<?php 
session_start();
unset($_SESSION['userID'], $_SESSION['Nome'],$_SESSION['CPF']);
 $_SESSION['msg'] = "Deslogado";
header("Location: TelLogin.php");

?>