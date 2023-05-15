<?php

require_once 'model/Usuario.php';

$usuario=new Usuario();
if($usuario->estaLogado()){
	echo "<h2>Bem vindo ".$usuario->getUsuario()."</h2>";
	echo "<a href='principal.php'>Entrar</a>";
}else{
?>
<form action="index.php" method="POST">
	<h1>Login</h1>
	<p>Usuário:<input type="text" name="usuario" size="30" maxlength="30" pattern="[0-9a-zA-Z]{3,30}" required></p>
	<p>Senha:<input type="password" name="senha" size="10" maxlength="10" pattern="[0-9a-zA-Z]{3,10}" required></p>
	<p><input type="submit" name="botao" value="Logar"></p>
</form>
<?php
}

if (isset($_POST['botao'])) {
	$usuario->setUsuario($_POST['usuario']);
	$usuario->setSenha($_POST['senha']);
	if($usuario->verificarLogin($usuario->getUsuario(),$usuario->getSenha())){
		echo "<h2>Login com sucesso!</h2>";
		echo "<meta http-equiv='refresh' content='2s;url='principal.php''>";
	}else{
		echo "<h2>Usuário ou senha incorretos!</h2>";
	}
}
?>
</body>
</html>