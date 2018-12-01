<?php

$connect = mysql_connect("localhost", "id6731738_administrador","secomp");
$db = mysql_select_db("id6731738_secomp2017");
$query_select = "SELECT * FROM Empresa";
$select = mysql_query($query_select,$connect);
$array = mysql_fetch_array($select);

 $id=filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);

        $query = "DELETE FROM `Empresa` WHERE id = '$id'";
        $insert = mysql_query($query,$connect);
         
        if($insert){
//           echo' <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">'; 
//           echo'<style>.alert {
//     padding: 20px;
//     background-color: #f44336; /* Red */
//     color: white;
//     margin-bottom: 15px;
// }

// /* The close button */
// .closebtn {
//     margin-left: 15px;
//     color: white;
//     font-weight: bold;
//     float: right;
//     font-size: 22px;
//     line-height: 20px;
//     cursor: pointer;
//     transition: 0.3s;
// }

// /* When moving the mouse over the close button */
// .closebtn:hover {
//     color: black;
// } </style>';
//             echo'<div class="alert">';
//  echo' <span class="closebtn" onclick="this.parentElement.style.display="none;">&times;</span> ';
// echo"  <strong>Danger!</strong> Indicates a dangerous or potentially negative action.";
// echo "</div>";
          echo"<script language='javascript' type='text/javascript'>alert('Dados deletados com sucesso!');window.location.href='consulta1.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível deletar os dados!');window.location.href='consulta1.php'</script>";
        }
     
    
mysqli_close($connect);
echo "<meta HTTP-EQUIV='Refresh' CONTENT='0;URL=consulta1.php'>";
    
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
        
        ?>
