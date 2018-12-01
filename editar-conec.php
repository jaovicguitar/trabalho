<?php

$id = filter_input(INPUT_GET, 'id', FILTER_SANITIZE_NUMBER_INT);
// $cliente = filter_input(INPUT_POST, 'cliente', FILTER_SANITIZE_STRING);
// $projeto = filter_input(INPUT_POST, 'projeto', FILTER_SANITIZE_STRING);
// $avaliador = filter_input(INPUT_POST, 'avaliador', FILTER_SANITIZE_STRING);

$cnpj  = $_POST['  cnpj'];
$nome   = $_POST['  nome'];
$contato = $_POST[' contato'];



$host = "localhost";
$db   = "id6731738_secomp2017";
$user = "id6731738_administrador";
$pass = "secomp";


// conecta ao banco de dados
$con = mysql_pconnect($host, $user, $pass) or trigger_error(mysql_error(),E_USER_ERROR); 
// seleciona a base de dados em que vamos trabalhar
mysql_select_db($db, $con);
// cria a instrução SQL que vai selecionar os dados
$query = "UPDATE `Empresa` SET `cnpj`='$cnpj',`nome`='$nome',`contato`='$contato' WHERE id='$id'";
// executa a query
$dados = mysql_query($query, $con) or die(mysql_error());
// transforma os dados em um array
$linha = mysql_fetch_assoc($dados);


// if(mysql_affected_rows($c)){
// 	$_SESSION['msg'] = "<p style='color:green;'>Usuário editado com sucesso</p>";
// 	header("Location: consulta1.php");
// }else{
// 	$_SESSION['msg'] = "<p style='color:red;'>Usuário não foi editado com sucesso</p>";
// 	header("Location: edita.php?id='$id'");
// }
   if($dados){
          echo"<script language='javascript' type='text/javascript'>alert('Dados atualizados com sucesso!');window.location.href='consulta1.php'</script>";
        }else{
          echo"<script language='javascript' type='text/javascript'>alert('Não foi possível atualizar ');window.location.href='edita.php'</script>";
        }
     
mysql_close($con);

?>