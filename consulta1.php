<?php



// definições de host, database, usuário e senha
$host = "localhost";
$db   = "id6731738_secomp2017";
$user = "id6731738_administrador";
$pass = "secomp";


// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT id,cnpj, nome, contato FROM Empresa");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);
// calcula quantos dados retornaram
$total = mysql_num_rows($dados);
?>
 <!DOCTYPE <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
  
    <title>Minecraft Studio</title>
    <meta http-equiv='refresh' content='5'>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <style>
  .fundo
  {
background-image: url('consulta.jpeg');
background-repeat: no-repeat;
background-size: cover;
backgroun-position:center;
  }
  .logo{
    margin-top:150px;
    text-align: center;
    font-size: 24px;
    color:black;
  }
  .cor{
      
      color:#F2F2F2;
      font-weight:bold;
  }
  
  

    </style>
    
    <script type="text/javaScript">
function autoRefresh(interval) {
	setTimeout("atualizar();",interval);
}
function atualizar() {
  // faz a lógica desejada...
}
</script>
</head>
<body class="fundo" onload="javascript:autoRefresh(6000);">
                <div class="container">
<div class="row">
<div class="col-md-12 logo">
  <marquee scrollDelay=50><h1><b>Consulta de projetos</b> </h1></marquee>
</div>
<br/><br/>

<div class="col-md-12">
    <table id="tabela" class="table table-hover ">
          <thead>
              <tr>
                   <th class="cor">ID </th>
                  <th class="cor">Cnpj </th>
                  <th class="cor">Nome</th>
                  <th class="cor">Contato</th>
                  <th class="cor"></th>
                  <th class="cor"></th>
                  <th class="cor"></th>
                  
                 
              </tr>
          </thead>
          <tbody>
    <?php
    // se o número de resultados for maior que zero, mostra os dados
    if($total > 0) {
        // inicia o loop que vai mostrar todos os dados
        do {
?>

             <tr>
                  <th class="cor"><?= $linha['id']   ?></th>
                  <th class="cor"><?= $linha['cnpj']   ?></th>
                  <td class="cor"><?= $linha['nome']   ?></td>
                  <td class="cor"><?= $linha['contato']  ?></td>
                  <td><a href="excluir.php?id=<?=$linha['id']?>" type="submit" class="btn btn-danger"> Excluir </a></td>
                  <td><a href="edita.php?id=<?=$linha['id']?>" type="submit" class="btn btn-warning"> Editar </a></td>
                   <td><a href="index.php" type="submit" class="btn btn-primary"> Voltar </a></td>
              </tr>
         
             

<?php
        // finaliza o loop que vai mostrar os dados
        }while($linha = mysql_fetch_assoc($dados));
    // fim do if 
    }
?>
        </tbody>
         </table>
</div>
</div>
</div>
    
</body>
</html>

<?php
// tira o resultado da busca da memória
mysql_free_result($dados);
?>