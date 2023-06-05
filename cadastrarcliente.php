<?php
use model\Cliente;

require_once 'cabecalho.php';
?>
<form action="cadastrarcliente.php" method="post">
	<h1>Cadastrar Cliente</h1>
	<p>Nome:<input type="text" name="nome" size="50" maxlength="50" required></p>
	<p>Telefone:<input type="text" name="telefone" size="14" maxlength="14" placeholder="(42)99999-9999" required></p>
	<p>Nascimento:<input type="date" name="nascimento" min="1945-01-01" max="<?= date("Y-m-d") ?>" required></p>
	<p>Rua:<input type="text" name="rua" size="40" maxlength="40" required></p>
	<p>Bairro:<input type="text" name="bairro" size="25" maxlength="25" required></p>
	<p>Cidade:<input type="text" name="cidade" size="30" maxlength="30" required></p>
	<p>Estado:<select name="estado" required>
<option value="AC">Acre</option>
<option value="AL">Alagoas</option>
<option value="AP">Amapá</option>
<option value="AM">Amazonas</option>
<option value="BA">Bahia</option>
<option value="CE">Ceará</option>
<option value="DF">Distrito Federal</option>
<option value="ES">Espírito Santo</option>
<option value="GO">Goiás</option>
<option value="MA">Maranhão</option>
<option value="MT">Mato Grosso</option>
<option value="MS">Mato Grosso do Sul</option>
<option value="MG">Minas Gerais</option>
<option value="PA">Pará</option>
<option value="PB">Paraíba</option>
<option value="PR">Paraná</option>
<option value="PE">Pernambuco</option>
<option value="PI">Piauí</option>
<option value="RJ">Rio de Janeiro</option>
<option value="RS">Rio Grande do Sul</option>
<option value="RN">Rio Grande do Norte</option>
<option value="RO">Rondônia</option>
<option value="RR">Roraima</option>
<option value="SC">Santa Catarina</option>
<option value="SP">São Paulo</option>
<option value="SE">Sergipe</option>
<option value="TO">Tocantins</option>
</select></p>
		<p>Email:<input type="email" name="email" maxlength="40" required></p>
		<p>CPF:<input type="text" name="cpf" size="20" maxlength="20" required></p>
		<p><input type="submit" name="botao" class="btn" value="Cadastrar"></p>
</form>
<?php 
    if (isset($_POST['botao'])) {
        require_once './model/Cliente.php';
        require_once './persistence/ClientePA.php';
        $cliente=new Cliente();
        $clientepa=new ClientePA();
        
        $id=$clientepa->retornaId();
        if(!$id){
            $id=0;
        }
        $id++;
        $cliente->setId($id);
        $cliente->setNome($_POST['nome']);
        $cliente->setTelefone($_POST['telefone']);
        $cliente->setNascimento($_POST['nascimento']);
        $cliente->setRua($_POST['rua']);
        $cliente->setBairro($_POST['bairro']);
        $cliente->setCidade($_POST['cidade']);
        $cliente->setEstado($_POST['estado']);
        $cliente->setEmail($_POST['email']);
        $cliente->setCpf($_POST['cpf']);
        
        $resp=$clientepa->cadastrar($cliente);
        if (!$resp) {
            echo "<h2>Erro na tentativa de cadastro!</h2>";
        }else {
            echo "<h2>Cliente cadastrado com sucesso!</h2>";
        }
    
    }

?>
</body>
</html>