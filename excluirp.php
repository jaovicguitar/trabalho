<?php

$connect = mysql_connect("localhost", "id6731738_administrador","secomp");
$db = mysql_select_db("id6731738_secomp2017");
$query_select = "SELECT * FROM projeto";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);

 $id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        $query = "DELETE FROM `projeto` WHERE id = '$id'";
        $insert = mysql_query($query,$connect);
         
        if($insert){

          echo"<script language='javascript' type='text/javascript'>alert('Dados deletados com sucesso!');window.location.href='consulta1.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível deletar os dados!');window.location.href='consulta1.php'</script>";
        }
     
    
mysqli_close($connect);
echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=consulta1.php'>";
    

        
        ?>
