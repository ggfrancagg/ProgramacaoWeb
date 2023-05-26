<?php

class Usuario{

	private $usuario;
	private $senha;

	public function setUsuario($usuario)
	{
		$this->usuario=$usuario;
	}

	public function getUsuario()
	{
		return $this->usuario;
	}

	public function setSenha($senha)
	{
		$this->senha=$senha;
	}

	public function getSenha()
	{
		return $this->senha;
	}

	public function estaLogado()
	{
		if (isset($_COOKIE['usuario'])) {
			return true;
		}else{
			return false;
		}
	}

	public function verificarLogin($usuario,$senha)
	{
		require_once './persistence/UsuarioPA.php';
		$usuariopa=new UsuarioPA();
		if($usuariopa->logar($usuario,$senha)){
			return true;
		}else{
			return false;
		}
	}

	public function logar($usuario)
	{
		setcookie("usuario","$usuario",time()+172800);
	}
}

?>