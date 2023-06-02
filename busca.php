<?php
require_once 'cabecalho.php';
?>
<form action="resultado.php" method="GET">
	<h1>Buscar</h1>
	<p><input type="search" name="busca" required></p>
	<p>Que é um:
	<input type="radio" name="tipo" value="livro" required>Livro	
	<input type="radio" name="tipo" value="cliente" required>Cliente
	<input type="radio" name="tipo" value="emprestimo" required>Empréstimo
	</p>
	<p><input type="submit" name="botao" value="Buscar"></p>
</form>
</body>
</html>