<?php
namespace model;

class Cliente
{
    private $id;
    private $nome;
    private $telefone;
    private $nascimento;
    private $rua;
    private $bairro;
    private $cidade;
    private $estado;
    private $email;
    private $cpf;
    
    public function getId()
    {
        return $this->id;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function getTelefone()
    {
        return $this->telefone;
    }

    public function getNascimento()
    {
        return $this->nascimento;
    }

    public function getRua()
    {
        return $this->rua;
    }

    public function getBairro()
    {
        return $this->bairro;
    }

    public function getCidade()
    {
        return $this->cidade;
    }

    public function getEstado()
    {
        return $this->estado;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getCpf()
    {
        return $this->cpf;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function setTelefone($telefone)
    {
        $this->telefone = $telefone;
    }

    public function setNascimento($nascimento)
    {
        $this->nascimento = $nascimento;
    }

    public function setRua($rua)
    {
        $this->rua = $rua;
    }

    public function setBairro($bairro)
    {
        $this->bairro = $bairro;
    }

    public function setCidade($cidade)
    {
        $this->cidade = $cidade;
    }

    public function setEstado($estado)
    {
        $this->estado = $estado;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setCpf($cpf)
    {
        $this->cpf = $cpf;
    }
}
?>

