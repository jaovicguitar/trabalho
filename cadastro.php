<!DOCTYPE <!DOCTYPE html>
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
    <h1> Cadastro de Empresa</h1>
</div>
 

    <div class="col-md-12">
        <form class="texto" action="empresa.php" method="POST">
                <div class="form-group">
                  <label >Cnpj</label>
                  <input type="text" class="form-control col-md-5" id="cnpj" name="cnpj" placeholder="Digite o cnpj" required/>
                 
                </div>
                <div class="form-group">
                  <label >Nome</label>
                  <input type="text" class="form-control col-md-5" id="nome" name="nome" placeholder="Digite o nome" required/>
                </div>
                <div class="form-group">
                    <label >contato</label>
                    <input type="text" class="form-control col-md-5" id="contato" name="contato" placeholder="Digite o contato" required/>
                  </div>

              <center> <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a class="btn btn-warning"  href="index.php" role="button" type="submit">Voltar</a>
              </center> 
              </form>

</div>

</div>
    
</body>
</html>