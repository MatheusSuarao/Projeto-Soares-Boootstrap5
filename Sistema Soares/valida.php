<?php
session_start();
include_once("php.php");
$btnLogin = filter_input(INPUT_POST, 'btnlogin', FILTER_SANITIZE_STRING);
    if ($btnLogin) {
        $usuario = filter_input(INPUT_POST, 'logcpf', FILTER_SANITIZE_STRING);
        $senha = filter_input(INPUT_POST, 'logsenha', FILTER_SANITIZE_STRING);
        //echo "$usuario - $senha";
        if ((! empty($usuario)) AND (! empty($senha))) {
            $resultado_usu = "SELECT id, nome, CPF, Senha, Usuario FROM usuarios WHERE CPF='$usuario' LIMIT 1";
            $resultado_login = mysqli_query($conn, $resultado_usu);
                if ($resultado_login) {
                    $row_usuario = mysqli_fetch_assoc($resultado_login);
                        if (password_verify($senha, $row_usuario['Senha'])) {
                            $_SESSION['id'] = $row_usuario['id'];
                            $_SESSION['nome'] = $row_usuario['nome'];
                            $_SESSION['CPF'] = $row_usuario['CPF'];
                            header("Location: index.html");
                        }else {
                            $_SESSION['msg'] = "Login e Senha incorretos!";
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