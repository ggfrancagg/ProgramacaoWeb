<?php
require_once 'Banco.php';

class LivroPA
{
    private $con;

    public function __construct()
    {
        $this->con=new Banco();
    }
    
    public function cadastrar($livro) {
        $sql="insert into livro values(".
            $livro->getId().",'".
            $livro->getTitulo()."','".
            $livro->getAutor()."','".
            $livro->getEditora()."',".
            $livro->getAno().",'".
            $livro->getCidade()."',".
            $livro->getQuantidade().")";
         $resp=$this->con->executar($sql);
         if ($resp) {
             return true;
         }else{
             return false;
         }
    }
    
    public function retornaId() {
       $sql="select max(id) from livro";
       $consulta=$this->con->consultar($sql);
       if (!$consulta) {
           return false;
       }else{
           while ($linha=$consulta->fetch_assoc()) {
               //if($linha['max(id)']!=null){
                    $id=$linha['max(id)'];
               /*}else{
                   $id=0;
               }*/
           }
           return $id;
       }
    }
    
    public function listar($inicio,$fim) {
        $sql="select * from livro where id between $inicio and $fim";
        $consulta=$this->con->consultar($sql);
        if(!$consulta){
            return false;
        }else{
            return $consulta;
        }
    }

    public function buscar($busca)
    {
        $sql="select * from livro where titulo like '%$busca%' or autor like '%$busca%' or editora like '%$busca%' or cidade like '%$busca%' or ano='$busca' or quantidade='$busca'";
        $consulta=$this->con->consultar($sql);
        if (!$consulta) {
            return false;
        }else{
            return $consulta;
        }
    }
    
    
}

?>