<?php require_once("php.php"); ?>

    <?php
    
    $dataCad = date('d/m/Y às H:i:s');


    $NomeClie = $_POST['NomeClie'];
    $NomeFant = $_POST['NomeFant'];
    $Cnpj = $_POST['cnpj'];
    $Cpf = $_POST['cpf'];
    $InscEstadual = $_POST['InscEstad'];
    $Contato = $_POST['contato'];
    $Telefone = $_POST['telefone'];
    $Endereco = $_POST['endereco'];
    $Bairro = $_POST['bairro'];
    $CEP = $_POST['Cep'];
    $Cidade = $_POST['municipio'];
    $Estado = $_POST['estado'];
    $Email = $_POST['email'];
    $NmrRua = $_POST['NmrRua'];
    $ObservaçãoEnd = $_POST['obsEnd'];
    
    $query = "insert into clientes (NomeClie, NomeFant, CNPJ, CPF, InscEstadual, Endereco, ObsEnd, NmrEnd, Bairro, Cidade, Estado, CEP, contato, Telefone, Email, DataHrCad) values('{$NomeClie}', '{$NomeFant}', '{$Cnpj}', '{$Cpf}', '{$InscEstadual}', '{$Endereco}', '{$ObservaçãoEnd}', '{$NmrRua}', '{$Bairro}', '{$Cidade}', '{$Estado}', '{$CEP}', '{$Contato}', '{$Telefone}','{$Email}','{$dataCad}')";
    
    $conexao = mysqli_connect('localhost', 'root', '', 'soares');
    mysqli_query($conexao, $query);
    mysqli_close($conexao);      
    
    header('Location: FormCadClie.html');
    ?> 
