<?php
$nome = $_POST['nome'];
$contato = $_POST['contato'];
$escritorio = $_POST['escritorio'];
$connect = mysql_connect("localhost", "id6731738_administrador","secomp");
$db = mysql_select_db("id6731738_secomp2017");
$query_select = "SELECT * FROM avaliador";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);

 

        $query = "INSERT INTO `avaliador` (`nome`, `contato`, `escritorio`) VALUES ('$nome', '$contato', '$escritorio')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='consulta3.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.php'</script>";
        }
     
    
mysqli_close($connect);

echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=consulta1.php'>";
        
        ?>
