<?php
require_once 'cabecalho.php';
?>
<div id="topo">
	<div id="logo">
		<img src="img/logo.jpg">
	</div>
	<div id="menu">
		<ul class="nav">
			<li>Cadastrar
				<ol>
					<li><a href="cadastrarlivro.php" target="janela">Livros</a></li>
					<li><a href="cadastrarcliente.php" target="janela">Clientes</a></li>
					<li><a href="cadastraremprestimo.php" target="janela">Empréstimo</a></li>
				</ol>
			</li>
			<li>Listar
				<ol>
					<li><a href="listarlivro.php" target="janela">Livros</a></li>
					<li><a href="listarcliente.php" target="janela">Clientes</a></li>
					<li><a href="listaremprestimo.php" target="janela">Empréstimo</a></li>
				</ol>
			</li>
			<li>Buscar
				<ol>
					<li><a href="busca.php" target="janela">Específica</a></li>
				</ol>
			</li>
			<li>Sair
				<ol>
					<li><a href="logoff.php" target="janela">Logoff</a></li>
				</ol>
			</li>
		</ul>
	</div>
</div>
<div id="principal">
	<iframe name="janela" id="janela"></iframe>
</div>
<div id="rodape">
	<p>Página de exemplo de conexão PHP+MySql</p>
</div>
</body>
</html>