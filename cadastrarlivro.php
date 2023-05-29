<?php
require_once 'cabecalho.php';
?>
<form action="cadastrarlivro.php" method="post">
	<h1>Cadastro de Livros</h1>
	<p>Título:<input type="text" name="titulo" size="50" maxlength="100" pattern="[0-9a-zA-Z\sçÇãÃáÁéÉêÊíÍóÓ]{1,100}" required></p>
	<p>Autor:<input type="text" name="autor" size="50" maxlength="100" pattern="[0-9a-zA-Z\sçÇãÃáÁéÉêÊíÍóÓ]{1,100}" required></p>
	<p>Editora:<input type="text" name="editora" size="30" maxlength="30" pattern="[0-9a-zA-Z\s]{1,30}" required></p>
	<p>Ano:<input type="number" name="ano" min="1900" max="<?= date("Y") ?>" required></p>
	<p>Cidade:<input type="text" name="cidade" size="30" maxlength="30" pattern="[0-9a-zA-Z\sçÇãÃáÁéÉêÊíÍóÓ]{1,30}" required></p>
	<p>Quantidade:<input type="number" name="quantidade" min="0" max="99" required></p>
	<p><input type="submit" class="btn" name="botao" value="Cadastrar"></p>
</form>
<?php 
    if (isset($_POST['botao'])) {
        require_once 'model/Livro.php';
        require_once 'persistence/LivroPA.php';
        $livro=new Livro();
        $livropa=new LivroPA();
        $id=$livropa->retornaId();
        if (!$id) {
           $id=0;
        }
        $id++;
        $livro->setId($id);
        $livro->setTitulo($_POST['titulo']);
        $livro->setAutor($_POST['autor']);
        $livro->setEditora($_POST['editora']);
        $livro->setAno($_POST['ano']);
        $livro->setCidade($_POST['cidade']);
        $livro->setQuantidade($_POST['quantidade']);
        $resp=$livropa->cadastrar($livro);
        if ($resp) {
            echo "<h2>Livro cadastrado com sucesso!</h2>";
        }else {
            echo "<h2>Erro na tentativa de cadastro!</h2>";
        }
        
    }
?>
</body>
</html>