
<?php

include_once('php.php');

function retorna($Nclie, $conn){
        $result_Nome = "SELECT *  FROM clientes WHERE NomeClie = '$Nclie' LIMIT 1";
        $resultado_N = mysqli_query($conn, $result_Nome);
        if ($resultado_N->num_rows) {
            $row_cliente = mysqli_fetch_assoc($resultado_N);
            $valores['CNPJ'] = $row_cliente['CNPJ'];
            $valores['InscEstad'] = $row_cliente['InscEstadual'];
            $valores['NFanta'] = $row_cliente['NomeFant'];
            $valores['Contato'] = $row_cliente['contato'];
            $valores['bairro'] = $row_cliente['Bairro'];
            $valores['estado'] = $row_cliente['Estado'];
            $valores['rua'] = $row_cliente['Endereco'];
            $valores['cidade'] = $row_cliente['Cidade'];
            $valores['NmrRua'] = $row_cliente['NmrEnd'];
            $valores['Telefone'] = $row_cliente['Telefone'];

        }else {
            $valores['Nclie'] = 'Cliente não encontrado';
        }
        return json_encode($valores);
}

if (isset($_GET['Nclie'])) {
    echo retorna($_GET['Nclie'], $conn);

}

?>