<?php
$cnpj = $_POST['cnpj'];
$nome = $_POST['nome'];
$contato = $_POST['contato'];
$connect = mysql_connect("localhost", "id6731738_administrador","secomp");
$db = mysql_select_db("id6731738_secomp2017");
$query_select = "SELECT * FROM Empresa";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);

 

        $query = "INSERT INTO `Empresa` (`cnpj`, `nome`, `contato`) VALUES ('$cnpj', '$nome', '$contato')";
        $insert = mysql_query($query,$connect);
         
        if($insert){
          echo"<script language='javascript' type='text/javascript'>alert('Usuário cadastrado com sucesso!');window.location.href='consulta1.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível cadastrar esse usuário');window.location.href='cadastro.php'</script>";
        }
     
    
mysqli_close($connect);
    
//     <?php
//  $link = mysqli_connect("localhost", "id6731738_administrador","secomp");
//       mysqli_select_db("id6731738_secomp2017", $link);
       
//       if(!$link)
//         {
//          echo('erro ao conectar: ' . mysql_error());exit();
//         }
    
//         $cliente = $_POST["cliente"];
//         $projeto = $_POST["projeto"];
//         $avaliador = $_POST["avaliador"];
    
//     $result = mysqli_query("INSERT INTO `Empresa` (`cliente`, `projeto`, `avaliador`) VALUES ('$cliente', '$projeto', '$avaliador');") or print mysql_error();
    
//         if(!mysql_error()){
          
//           echo "<script>alert('Cadastro realizado!'); 
//                   location.href = 'cadastro.php'; </script>";
    
//       }
//       else{
//           echo "<script>alert('Não foi possível realizar o cadastro.'); 
//                   location.href = 'cadastro.php'; </script>";
//       } 
echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=consulta1.php'>";
        
        ?>
