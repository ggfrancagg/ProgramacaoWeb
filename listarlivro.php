<?php
require_once 'cabecalho.php';
require_once './persistence/LivroPA.php';
if(isset($_POST['inicio'])){
	$inicio=$_POST['inicio'];
	$fim=$inicio+4;
}else{
	$inicio=1;
	$fim=5;
}

$livropa=new LivroPA();
$consulta=$livropa->listar($inicio,$fim);
if(!$consulta){
	echo "<h2>Não há livros cadastrados!</h2>";
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
		echo "</tr>";
	}
	echo "</table>";
	if ($fim<$livropa->retornaId()) {
		echo "<form class='minibotao' action='listarlivro.php' method='POST'>";
		echo "<input type='hidden' name='inicio' value='$fim'>";
		echo "<input type='submit' value='&rarr;'></form>";
	}
}
?>
</body>
</html>
