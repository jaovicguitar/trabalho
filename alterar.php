<?php
$connect = mysql_connect("localhost", "id6731738_administrador","secomp");
$db = mysql_select_db("id6731738_secomp2017");
$query_select = "SELECT * FROM Empresa";
$select = mysql_query($query_select,$connect);
if($_SERVER['REQUEST_METHOD']=='GET'){
    isset($_GET['id']) ? $busca=mysql_query("SELECT * FROM dados WHERE id='".$_GET['id']."'") : die(mysql_error());
 
    $dados = mysql_fetch_array($busca);
 
}elseif($_SERVER['REQUEST_METHOD']=='POST'){
 
$nome  = isset($_POST['nome']) ? $_POST['nome'] : '';
$idade = isset($_POST['idade']) ? $_POST['idade'] : false;
$sexo  = isset($_POST['sexo']) ? $_POST['sexo'] : '';
 
$atualizar = mysql_query("UPDATE dados SET nome='$nome',idade='$idade',sexo='$sexo' WHERE id='$id'")or die(mysql_error());
 
($atualizar) ? print 'Dados alterados com sucesso' : die('Falha ao alterar dados');
}
?>
<form name="teste2" id="teste2" action="" method="POST">
<input type="hidden" name="idreg" id="idreg" value="<?php echo $dados['id']; ?>">
Nome: <input type="text" name="nome" value="<?php echo $dados['nome']; ?>" />
<br />
Idade: <input type="text" name="idade" value="<?php echo $dados['idade']; ?>" />(Max: 3 caracteres)
<br />
sexo: <input type="radio" name="sexo" id="sexo" value="M" /> Masculino <input type="radio" name="sexo" id="sexo" value="F" />Feminino
<br />
<input type="submit" name="ok" value="Alterar" />
</form>