<?php
session_start();
include_once("proc/php.php");
$btnLogin = filter_input(INPUT_POST, 'btnlogin', FILTER_SANITIZE_STRING);
    if ($btnLogin) {
        $usuario = filter_input(INPUT_POST, 'logcpf', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'logsenha', FILTER_SANITIZE_STRING);
        //echo "$usuario - $senha";
        if ((! empty($usuario)) AND (! empty($senha))) {
            $resultado_usu = "SELECT userID, CPF, Nome, Senha FROM users WHERE CPF='$usuario' LIMIT 1";
            $resultado_login = mysqli_query($conn, $resultado_usu);
                if ($resultado_login) {
                    $row_usuario = mysqli_fetch_assoc($resultado_login);
                        if (password_verify($senha, $row_usuario['Senha'])) {
                            $_SESSION['userID'] = $row_usuario['userID'];
                            $_SESSION['Nome'] = $row_usuario['Nome'];
                            $_SESSION['CPF'] = $row_usuario['CPF'];
                            header("Location: Telas/index.php");
                        }else {
                            $_SESSION['msg'] = "Login e Senha incorr2etos!";
                            header("Location: TelLogin.php");
                        }
                }
        }else {
            $_SESSION['msg'] = "Login e Senha incorretos!";
            header("Location: TelLogin.php");
        }

    }else {
        $_SESSION['msg'] = "Pagina não Encontrada";
            header("Location: TelLogin.php");
        }


?>