<?php
class bd{
    
   private  $host='localhost';
    
  private   $usuario='id6731738_administrador';
    
   private  $senha ='secomp';
    
    
private  $database ='id6731738_secomp2017';
    
    public function conecta_mysql(){
        
        $conexao = mysqli_connect($this->host, $this-> usuario, $this-> senha, $this->database);
        
        mysqli_set_charset($conexao,'utf8');
        
        if(mysqli_connect_errno()){
            echo'Erro ao tentar se conectar com o BD :'.mysqli_connect_error();
        }
        return $conexao;
    }
}






?>