
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Sistema Soares</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/dashboard/">

    <!-- Bootstrap core CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
    <script src="Js/script.js"></script>
    <link href="dashboard.css">

    


    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">
  </head>
  <body id="font-face">
    
<header class="navbar navbar-dark sticky-top bg-dark flex-md-nowrap p-0 shadow">
  <a class="navbar-brand col-md-3 col-lg-2 me-0 px-3" href="#">Sistema Gerenciador</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <a class="nav-link px-3" href="#">Sair</a>
    </div>
  </div>
</header>

<div class="container-fluid">
  <div class="row">
    <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.html">
              <span data-feather="home"></span>
              Painel Principal
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Vendas.html">
              <span data-feather="file"></span>
              Vendas
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file"></span>
              Compra
            </a>
          </li>
          <li class="nav-item" >
            <a class="nav-link" href="#">
              <span data-feather="shopping-cart"></span>
              Estoque
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="users"></span>
              Fornecedores
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="Clientes.html">
              <span data-feather="users"></span>
              Clientes
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="bar-chart-2"></span>
              Relatórios
            </a>
          </li>

        <h6 class="sidebar-heading d-flex justify-content-between align-items-center px-3 mt-4 mb-1 text-muted">
          <span>Saved reports</span>
          <a class="link-secondary" href="#" aria-label="Add a new report">
            <span data-feather="plus-circle"></span>
          </a>
        </h6>
        <ul class="nav flex-column mb-2">
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Current month
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Last quarter
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Social engagement
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">
              <span data-feather="file-text"></span>
              Year-end sale
            </a>
          </li>
        </ul>
      </div>
    </nav>

    <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
      <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Pedido de Venda</h1>
        <div class="btn-toolbar mb-2 mb-md-0">
          <div class="btn-group me-2">
            <button type="button" class="btn btn-sm btn-outline-secondary">Share</button>
            <button type="button" class="btn btn-sm btn-outline-secondary">Export</button>
          </div>
          <button type="button" class="btn btn-sm btn-outline-secondary dropdown-toggle">
            <span data-feather="calendar"></span>
            This week
          </button>
        </div>
      </div>
           
      <?php
 include('php.php');
 
?>

<script type="text/javascript">

$(document).ready(function () {
        $('select[name="Nclie"]').blur(function () {
            var $cnpj = $("input[name='CNPJ']");
            var $InscEstad = $("input[name='InscEstad']");
            var $NFantasia = $("input[name='NFanta']");
            var $Contato = $("input[name='Contato']");
            var $Bairro = $("input[name='bairro']");
            var $Estado = $("input[name='estado']");
            var $Endereco = $("input[name='rua']");
            var $Cidade = $("input[name='cidade']");   
            var $NmrRua = $("input[name='NmrRua']");
            var $Telefone = $("input[name='Telefone']");                
            
            $.getJSON('proc_pesq_user.php', {
              Nclie:  $ (this).val()
            },
                function(json){
                    $cnpj.val(json.CNPJ);
                    $InscEstad.val(json.InscEstad);
                    $NFantasia.val(json.NFanta);
                    $Contato.val(json.Contato);
                    $Bairro.val(json.bairro);
                    $Estado.val(json.estado);
                    $Endereco.val(json.rua);
                    $Cidade.val(json.cidade);
                    $NmrRua.val(json.NmrRua);
                    $Telefone.val(json.Telefone);
                }
            );        
        });
    });


</script>

<form method="POST" action="PedidoVenda.php">
      <div class="form-floating me-5 mb-1">
      <select class="form-select mb-1 " id="Nclie" name="Nclie">
        <option selected>Selecione um Cliente</option>
          <?php 
              $resultBuscaClie = "SELECT * FROM clientes";
              $resultadoBuscaClie = mysqli_query($conn, $resultBuscaClie);
              while ($linhaClientes = mysqli_fetch_assoc($resultadoBuscaClie)) {   ?>  
                <option value="<?php echo $linhaClientes['NomeClie']; ?>"> <?php echo $linhaClientes['NomeClie']; ?></option><?php
              } ?>
         
</select>
        <label for="floatingSelect">Cliente</label>
      </div>

      <div class="row g-2 mb-1 me-5">
  <div class="col-md">
    <div class="form-floating">
      <input type="text" class="form-control" name="CNPJ" readonly >
      <label for="floatingInputGrid">CNPJ</label>
    </div>
  </div>

  <div class="col-md">
  <div class="form-floating">
      <input type="text" class="form-control" name="InscEstad" readonly>
      <label for="floatingInputGrid">Inscrição Estadual</label>
    </div>
  </div>

  <div class="col-md">
  <div class="form-floating">
      <input type="text" class="form-control" name="NFanta"" readonly>
      <label for="floatingInputGrid">Razão Social</label>
    </div>
  </div>

  <div class="col-md">
  <div class="form-floating">
      <input type="text" class="form-control" name="Contato" readonly>
      <label for="floatingInputGrid">Contato </label>
    </div>
  </div>

  <div class="col-md">
  <div class="form-floating">
      <input type="text" class="form-control" name="Telefone"  onkeypress="$(this).mask('(00) 0000-0000')" readonly>
      <label for="floatingInputGrid">Telefone </label>
    </div>
  </div>

</div>



<div class="row g-2 mb-2 me-5">
  <div class="col-md">
    <div class="form-floating">
      <input type="text" class="form-control" name="bairro" readonly>
      <label for="floatingInputGrid">Bairro</label>
    </div>
  </div>

  <div class="col-md">
  <div class="form-floating">
      <input type="text" class="form-control" name="estado" readonly>
      <label for="floatingInputGrid">Estado</label>
    </div>
  </div>

  <div class="col-md">
  <div class="form-floating">
      <input type="text" class="form-control" name="rua" readonly>
      <label for="floatingInputGrid">Endereço</label>
    </div>
  </div>

  <div class="col-md">
  <div class="form-floating">
      <input type="text" class="form-control" name="NmrRua" readonly>
      <label for="floatingInputGrid">Número</label>
    </div>
  </div>

  <div class="col-md">
  <div class="form-floating">
      <input type="text" class="form-control" name="cidade" readonly>
      <label for="floatingInputGrid">Municipio </label>
    </div>
  </div>



</div>

<label for="basic-url" class="form-label" style="font-size: small; font: weight 500;">Dados do Pedido:</label>

<div class="row g-2 mb-2 me-5">
  <div class="col-md">
    <div class="form-floating">
    <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="Vendedor">
        <option selected>Selecione o Vendedor</option>
        <option value="Luiz">Luiz</option>
        <option value="Matheus">Matheus</option>
        <option value="Flavia">Flavia</option>
      </select>
      <label for="floatingInputGrid">Vendedor</label>
    </div>
  </div>

  <div class="col-md">
  <div class="form-floating">
  <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="Pagamento">
        <option selected></option>
        <option value="21DDL">21DDL</option>
        <option value="30DDL">30DDL</option>
        <option value="45DDL">45DDL</option>
        <option value="60DDL">60DDL</option>
      </select>
      <label for="floatingInputGrid">Pagamento</label>
    </div>
  </div>

  <div class="col-md">
  <div class="form-floating">
      <input type="date" class="form-control" id="floatingInputGrid" name="DTPedido">
      <label for="floatingInputGrid">Data Pedido</label>
    </div>
  </div>

  <div class="col-md">
  <div class="form-floating">
      <input type="date" class="form-control" id="floatingInputGrid" name="DTEntrega" >
      <label for="floatingInputGrid">Data Entrega </label>
    </div>
  </div>

</div>

<div class="row g-2 mb-4 me-5">
  <div class="col-md">
    <div class="form-floating">
    <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" name="Frete">
        <option selected>Frete</option>
        <option value="Nosso Carro">Nosso Carro</option>
        <option value="Por Conta do Eminente">Por Conta do Eminente</option>
        <option value="Transportadora">Transportadora</option>
      </select>
      <label for="floatingInputGrid">Tipo de Frete</label>
    </div>
  </div>

  <div class="col-md">
  <div class="form-floating">
      <input type="text" class="form-control" id="floatingInputGrid" name="NmTransportadora" placeholder="Transportadora">
      <label for="floatingInputGrid">Transportadora</label>
    </div>
  </div>

</div>








      <label for="basic-url" class="form-label" style="font-size: medium; font-weight: bold;">Pedido</label><br>
      <label for="basic-url" class="form-label" style="font-size: small; font: weight 500;">Adicionar Itens:</label>
        
         <form id="Itens">  
            <div class="form-floating mb-2 me-5">
              <input type="text" class="form-control" id="descitem" placeholder="name@example.com" name="DescProduto">
              <label for="floatingInput">Descrição</label>
            </div>

            <div class="row g-1 me-5 mb-2">
              <div class="col-md" >
                <div class="form-floating"  >
                  <select class="form-select" id="unitem" aria-label="Floating label select example" name="unItem">
                    <option selected></option>
                    <option value="MT">Metro</option>
                    <option value="RL">Rolo</option>
                    <option value="PÇ">Peça</option>
                  </select>
                  <label for="floatingSelectGrid">Unidade de Medida </label>
                </div>
              </div>
              <div class="col-md">
                <div class="form-floating">
                  <input type="number" class="form-control" id="qntintem" placeholder="name@example.com" name="qntItem">
                  <label for="floatingInputGrid">Quantidade</label>
                </div>
              </div>
              <div class="col-md">
                <div class="form-floating">
                  <input type="number" class="form-control" id="vlritem" placeholder="name@example.com" name="vlrItem">
                  <label for="floatingInputGrid">Valor Un</label>
                </div>
              </div>
              <div class="col-md">
                <div class="form-floating">
                  <input type="text" class="form-control" id="ipiitem" placeholder="name@example.com" name="ipiItem">
                  <label for="floatingInputGrid">IPI</label>
                </div>
              </div>
              <div class="col-md">
                <div class="form-floating">
                  <input type="text" class="form-control" id="icmsitem" placeholder="name@example.com" name="icmsItem">
                  <label for="floatingInputGrid">ICMS</label>
                </div>
              </div>

              <div class="float-end me-5 mb-3">
                        <button class="btn btn-primary"  id="btnadd" form="Itens" onclick="produto.adicionar()" >Adicionar</button>
                        <button class="btn btn-primary " onclick="produto.excluir()">Limpar</button>
                    </div>

          </form>
                 
        
    


        <div class="me-5">
          <table class="table table table-hover" style="border-bottom: 2px solid black;">
            <thead>
              <tr>
                <th scope="col" style="width: 5%; text-align: center;">Item</th>
                <th scope="col" style="width: 5%; text-align: center;">Un</th>
                <th scope="col" style="width: 5%; text-align: center;">Qtde</th>
                <th scope="col" style="width: 30%;">Descrição</th>
                <th scope="col" style="width: 5%; text-align: center;">Valor Un</th>
                <th scope="col" style="width: 2%; text-align: center;">IPI</th>
                <th scope="col" style="width: 2%; text-align: center;">ICMS</th>
                <th scope="col" style="width: 5%; text-align: center;">Total</th>
                <th scope="col" style="width: 5%; text-align: center;">Ações</th>
              </tr>
            </thead>
            <tbody id="tbody" name="itens" >
 
            </tbody>  
          </table>
        </div>

  
    </form>   

           <div class="float-end me-5 mb-3">
          <button class="btn btn-primary" type="submit" >Enviar</button>
          <button class="btn btn-primary " type="reset" onclick="location. reload();">Limpar</button>
        </div>
      
    </main>
  </div>
</div>

<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js" integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js" integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous"></script><script src="dashboard.js"></script>
      
  </body>
</html>
