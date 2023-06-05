<?php
require_once 'Banco.php';

class ClientePA
{

    private $con;
    
    public function __construct()
    {
        $this->con=new Banco();
    }
    
    public function cadastrar($cliente) {
        $sql="insert into cliente values(".
            $cliente->getId().",'".
            $cliente->getNome()."','".
            $cliente->getTelefone()."','".
            $cliente->getNascimento()."','".
            $cliente->getRua()."','".
            $cliente->getBairro()."','".
            $cliente->getCidade()."','".
            $cliente->getEstado()."','".
            $cliente->getEmail()."','".
            $cliente->getCpf()."')";
        $resp=$this->con->executar($sql);
        if (!$resp) {
           return false;
        }else {
            return true;
        }  
    }
    
    public function retornaId() {
        $sql="select max(id) from cliente";
        $consulta=$this->con->consultar($sql);
        if(!$consulta){
            return false;
        }else{
            while ($linha=$consulta->fetch_assoc()) {
                $id=$linha['max(id)'];
            }
            return $id;
        }
    }
    
    public function listar($inicio,$fim) {
        $sql="select * from cliente where id between $inicio and $fim";
        $consulta=$this->con->consultar($sql);
        if (!$consulta) {
            return false;
        }else{
            return $consulta;
        }
    }
    
    public function buscar($busca) {
        $sql="select * from cliente where nome like '%$busca%' or telefone like '%$busca%' or rua like '%$busca%' or bairro like '%$busca%' or cidade like '%$busca%' or estado='$busca' or cpf='$busca'";
        $consulta=$this->con->consultar($sql);
        if (!$consulta) {
            return false;
        }else{
            return $consulta;
        }
    }
    
    
}
?>