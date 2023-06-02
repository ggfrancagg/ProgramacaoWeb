<?php
require_once 'cabecalho.php';

if (isset($_GET['botao'])) {
	$busca=$_GET['busca'];
	$tipo=$_GET['tipo'];

	if ($tipo=="livro") {
		require_once './persistence/LivroPA.php';
		$livropa=new LivroPA();
		$consulta=$livropa->buscar($busca);
		if(!$consulta){
			echo "<h2>Nenhum livro correspondente!</h2>";
		}else{
?>
<table>
	<tr>
		<th>id</th>
        <th>titulo</th>
        <th>autor</th>
        <th>editora</th>
        <th>ano</th>
        <th>cidade</th>
        <th>quantidade</th>
        <th>Alterar?</th>
        <th>Excluir?</th>
    </tr>
<?php		
		while($linha=$consulta->fetch_assoc()){
		echo "<tr>";
		echo "<td>".$linha['id']."</td>";
		echo "<td>".$linha['titulo']."</td>";
		echo "<td>".$linha['autor']."</td>";
		echo "<td>".$linha['editora']."</td>";
		echo "<td>".$linha['ano']."</td>";
		echo "<td>".$linha['cidade']."</td>";
		echo "<td>".$linha['quantidade']."</td>";
?>
<td>
	<form class="minioutro" action="alterar" method="POST">
		<input type="hidden" name="alterar" value="<?= $linha['id'] ?>">
	<input type="submit" value="alterar">
	</form>
</td>
<td>
	<form class="minioutro" action="alterar" method="POST">
		<input type="hidden" name="excluir" value="<?= $linha['id'] ?>">
	<input type="submit" value="excluir">
	</form>
</td>
<?php
		echo "</tr>";

			}
			echo "</table>";
		}
	}
}
?>
</body>
</html>