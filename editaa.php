<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

$host = "localhost";
$db   = "id6731738_secomp2017";
$user = "id6731738_administrador";
$pass = "secomp";


// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = sprintf("SELECT nome, contato, escritorio FROM avaliador WHERE id='$id'");
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);


?>




<html>
<head>
    <meta charset="utf-8" />
  
    <title>Minecraft Studio</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    
    <style>
  .fundo
  {
background-image: url('cadastro.jpeg');
background-repeat: no-repeat;
background-size: cover;
backgroun-position:center;
  }

  .logo{
    margin-top: 20px;
    font-size: 60px;
    text-align: center;
    margin-bottom:55vh;
  }
  .texto{
    color: #31B404;
    font-weight:bold;
    
  }
 
    </style>
</head>
<body class="fundo">
<div class="container">

  <div class=" col-md-12 logo">
    <h1> Editar Avaliador </h1>
</div>
 

    <div class="col-md-12">
        <form class="texto" action="editar-coneca.php" method="POST">
                <div class="form-group">
                  <label >Nome</label>
                  <input type="text" class="form-control col-md-5" id="nome" name="nome" placeholder="Digite o nome" value="<?= $linha['nome']   ?>" required/>
                 
                </div>
                
                 <div class="form-group">
                    <label >Contato</label>
                    <input type="text" class="form-control col-md-5" id="contato" name="contato" placeholder="Digite o contato" value="<?= $linha['contato']   ?>" required/>
                  </div>
                <div class="form-group">
                  <label >Escritório</label>
                  <input type="text" class="form-control col-md-5" id="escritorio" name="escritorio" placeholder="Digite o Escritório" value="<?= $linha['escritorio']   ?>" required/>
                </div>
               

              <center> <button type="submit" class="btn btn-primary">Editar</button>
                <a class="btn btn-warning"  href="consulta3.php" role="button" type="submit">Voltar</a>
              </center> 
              </form>

</div>

</div>
    
</body>
</html>