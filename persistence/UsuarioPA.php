<?php

require_once 'Banco.php';

class UsuarioPA{

	private $conexao;

	public function __construct(){
		$this->conexao=new Banco();
	}

	public function logar($usuario,$senha)
	{
		$sql="select usuario,senha from usuarios";
		$consulta=$this->conexao->consultar($sql);
		if($consulta){
			$linhas=$consulta->num_rows;
			if($linhas>0){
				while ($linha=$consulta->fetch_assoc()) {
					if($linha['usuario']==$usuario){
						if($linha['senha']==$senha){
							return true;
						}else{
							return false;
						}
					}else{
						return false;
					}
				}
			}
		}else{
			return false;
		}

	}
}

?>