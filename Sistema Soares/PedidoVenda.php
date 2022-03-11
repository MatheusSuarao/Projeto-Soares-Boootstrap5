<?php

$NomeClie = $_POST['Nclie'];
$CNPJ = $_POST['CNPJ'];
$InscEstad = $_POST['InscEstad'];
$NomeFant = $_POST['NFanta'];
$Contato = $_POST['Contato'];
$Telefone = $_POST['Telefone'];
$Bairro = $_POST['bairro'];
$Endereco = $_POST['rua'];
$Estado = $_POST['estado'];
$Cidade = $_POST['cidade'];

$Vendedor = $_POST['Vendedor'];
$Pagamento = $_POST['Pagamento'];
$DataPedido = $_POST['DTPedido'];
$DataEntrega = $_POST['DTEntrega'];

$Frete = $_POST['Frete'];
$Transportadora = $_POST['NmTransportadora'];

$table = $_POST['Itens'];









?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pedido de Venda</title>
    
    
    <link href="doc.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/2.5.1/jspdf.umd.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.5/jspdf.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html2canvas/0.4.1/html2canvas.min.js"></script>
    <script type="text/javascript">

        

    </script>
 

</head>

<body>
    <div id="geraPDF">
        <section style="width: 90%; height: 150px; border-bottom: 1px solid black; margin: 10px auto 0px auto; display: flex; justify-content: space-around;">
            <div ">
                <img src="img/logo Soares.jpg" style="height: 120px; margin: 15px 0px 15px 20px; border-radius: 10px;">
            </div>

            <div style="margin-left: 5px;" >
                <p style="font-weight: bolder; font-size: 15px;margin-top: 15px;">Soares Comercio Varejista de Mangueiras e Conexões EIRELI</p>
                <div style="display: flex; justify-content: start; margin: 0px; padding: 0;"><p style="margin-top: 0px;">CNPJ: 31.677.199/0001-10</p><p style="margin-top: 0px;">Insc. Est.: 146.273.117.111</p></div>
                <p style="margin-top: 0px;">Endereço: Rua Jundiai, 183 – Jd Monte Belo – Itaquaquecetuba – SP </p>
                <p>Telefone: (11) 4730-0161 E-mail: soares.soares@terra.com.br</p>
                <div style="display: flex; justify-content: start; padding-top: 10px; padding-left: 10px;">
                    <h3 style="margin: 0 5px;">Pedido de Venda:</h3>
                    <h3 style="margin: 0;">3333</h3>
                </div>
                <!--<input type="button" value="Imprimir" onClick="window.print()" />-->
            </div>
        </section>
        
        <section style="width: 90%; margin: 0px auto; border-bottom: solid 1px gray;">
            <div style="display: flex; justify-content: space-around; border-bottom: 1px solid gray;">
                <ul >
                    <li>CNPJ:<a><?php  echo $CNPJ ?></a></li>
                    <li>Insc.Estadual:<a><?php  echo $InscEstad ?></a></li>
                    <li>Nome Cliente:<a><?php  echo $NomeClie ?></a></li>
                    <li>Nome Fantasia:<a><?php  echo $NomeFant ?></a></li>
                </ul>

                <ul >
                    <li>Bairro: <a><?php  echo $Bairro ?></a></li>
                    <li>Estado:<a><?php  echo $Estado ?></a></li>
                    <li>Endereço: <a><?php  echo $Endereco ?></a></li>           
                    <li>Município: <a><?php  echo $Cidade ?></a></li>
                </ul>

                <ul > 
                    <li>Vendedor: <a><?php  echo $Vendedor ?></a></li>           
                    <li>Pagamento: <a><?php  echo $Pagamento ?></a></li>
                    <li>Data Pedido: <a><?php  echo $DataPedido ?></a></li>
                    <li>Data Entrega:<a><?php  echo $DataEntrega ?></a></li>
                   
                </ul>
            </div>
            <ul  style="display: flex; justify-content: space-around; padding: 0; margin: 0;">
                <li>Comprador:<a><?php  echo $Contato ?></a></li>
                <li>Telefone:<a><?php  echo $Telefone ?></a></li>
                <li>Frete:<a><?php  echo $Frete ?></a></li>
                <li>Transportadora:<a ><?php  echo $Transportadora ?></a></li>
            </ul>
        </section>

        <table style="width: 90%; margin: 5px auto; border: 1px solid black;">
            <thead >
              <tr>
                <th scope="col" style="width: 5%; text-align: center;">Item</th>
                <th scope="col" style="width: 2%; text-align: center;">Un</th>
                <th scope="col" style="width: 5%; text-align: center;">Qtde</th>
                <th scope="col" style="width: 30%; text-align: start;">Descrição</th>
                <th scope="col" style="width: 5%; text-align: center;">Vlr Un</th>
                <th scope="col" style="width: 2%; text-align: center;">IPI</th>
                <th scope="col" style="width: 2%; text-align: center;">ICMS</th>
                <th scope="col" style="width: 5%; text-align: center;">Total</th>
              </tr>
            </thead>
            <tbody id="tbody" >
                <?php  echo $table ?>
            </tbody>  
          </table>












          
          <p style="width: 90%; margin: 5px auto; border: 1px solid black; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; font-size: 12px; font-weight: bold; box-sizing: border-box; padding-left: 2px; ">Observações:<a></a></p>


    </div>
    
 


</body>
</html>