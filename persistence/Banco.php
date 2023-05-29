<?php

class Banco{

	private $banco;
	private $usuario;
	private $senha;
	private $url;
	private $conexao;

	public function __construct(){
		$this->banco="biblioteca";
		$this->usuario="root";
		$this->senha="";
		$this->url="localhost";
		$this->conexao=new mysqli($this->url,$this->usuario,$this->senha,$this->banco);
	}

	public function executar($sql)
	{
		$resposta=$this->conexao->query($sql);
		if($resposta){
			return true;
		}else{
			return false;
		}
	}

	public function consultar($sql)
	{
		$consulta=$this->conexao->query($sql);
		$linhas=$consulta->num_rows;
		if ($linhas>0) {
			return $consulta;
		}else{
			return false;
		}
	}
}

?>