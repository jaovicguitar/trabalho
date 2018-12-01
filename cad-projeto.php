<?php
$nome = $_POST['nome'];
$escritorio = $_POST['escritorio'];
$gerente = $_POST['gerente'];
$connect = mysql_connect("localhost", "id6731738_administrador","secomp");
$db = mysql_select_db("id6731738_secomp2017");
$query_select = "SELECT * FROM projeto";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);

 

        $query = "INSERT INTO `projeto` (`nome`, `escritorio`, `gerente`) VALUES ('$nome', '$escritorio', '$gerente')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='consulta2.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.php'</script>";
        }
     
    
mysqli_close($connect);

echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=consulta1.php'>";
        
        ?>
