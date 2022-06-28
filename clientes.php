<?php
session_start();
include('conexao.php');
include('verificar_login.php');
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <title>Clientes</title>
<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
 <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><big><big><i class="fa fa-arrow-left"></i></big></big></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#conteudoNavbarSuportado" aria-controls="conteudoNavbarSuportado" aria-expanded="false" aria-label="Alterna navegação">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="conteudoNavbarSuportado">
    <ul class="navbar-nav mr-auto">   
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Pesquisar" aria-label="Pesquisar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit"><i class="fa fa-search"></i></button>
    </form>
  </div>
</nav>
<div class="container">
      <br>
         <div class="row">
           <div class="col-sm-12">
            <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#modalExemplo">Inserir Novo </button>
           </div>
        </div>
          <div class="content">
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h4 class="card-title"> Tabela de Clientes</h4>
                  </div>
                  <div class="card-body">
                    <div class="table-responsive">
                      <table class="table">
                        <thead class=" text-primary">
                          
                          <th>
                            Nome
                          </th>
                          <th>
                            Idade
                          </th>
                          <th>
                            CPF
                          </th>
                          <th>
                            Telefone
                          </th>
                          <th>
                            Cidade
                          </th> 
                        </thead>
                        <tbody>
                         
                           

                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
</div>
 <!-- Modal -->
      <div id="modalExemplo" class="modal fade" role="dialog">
        <div class="modal-dialog">
         <!-- Modal content-->
          <div class="modal-content">
            <div class="modal-header">
              
              <h4 class="modal-title">Clientes</h4>
              <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
              <form method="POST" action="">
              <div class="form-group">
                <label for="id_produto">Nome</label>
                <input type="text" class="form-control mr-2" name="idnome" placeholder="Nome" required>
              </div>
              <div class="form-group">
                <label for="id_produto">Idade</label>
                <input type="text" class="form-control mr-2" name="ididade" placeholder="Idade" required>
              </div>
              <div class="form-group">
                <label for="fornecedor">CPF</label>
                 <input type="text" class="form-control mr-2" name="idcpf" placeholder="CPF" required>
              </div>
              <div class="form-group">
                <label for="id_produto">Telefone</label>
                <input type="text" class="form-control mr-2" name="idtelefone" placeholder="Telefone" required>
              </div>
              <div class="form-group">
                <label for="quantidade">Cidade</label>
                <input type="text" class="form-control mr-2" name="idcidade" placeholder="Cidade" required>
              </div>
            </div>       
            <div class="modal-footer">
               <button type="submit" class="btn btn-success mb-3" name="Salvar">Salvar </button>
                <button type="button" class="btn btn-danger mb-3" data-dismiss="modal">Cancelar </button>
              </form>
            </div>
          </div>
        </div>
      </div>    
</body>
</html>


<?php
if(isset($_POST['Salvar'])){
$nome = $_POST['idnome'];
$idade = $_POST['ididade'];
$cpf = $_POST['idcpf'];
$telefone = $_POST['idtelefone'];
$cidade = $_POST['idcidade'];


$query = "INSERT INTO clientes (nome, idade, cpf, telefone, cidade) VALUES ('$nome', '$idade', '$cpf', '$telefone', '$cidade')";
$result = mysqli_query($conexao, $query);
if($result == ''){
  echo "<script language='javascript'>window.alert('Ocorreu um Erro ao Cadastrar'); </script>";
}else {
  echo "<script language='javascript'>window.alert('Salvo Com Sucesso!'); </script>";
}

}

?>





   