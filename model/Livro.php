<?php

    class Livro {
        
        private $id;
        private $titulo;
        private $autor;
        private $editora;
        private $ano;
        private $cidade;
        private $quantidade;
        
        public function getQuantidade()
        {
            return $this->quantidade;
        }
    
        public function setQuantidade($quantidade)
        {
            $this->quantidade = $quantidade;
        }
    
        public function getId()
        {
            return $this->id;
        }
    
        public function getTitulo()
        {
            return $this->titulo;
        }
    
        public function getAutor()
        {
            return $this->autor;
        }
    
        public function getEditora()
        {
            return $this->editora;
        }
    
        public function getAno()
        {
            return $this->ano;
        }
    
        public function getCidade()
        {
            return $this->cidade;
        }
    
        public function setId($id)
        {
            $this->id = $id;
        }
    
        public function setTitulo($titulo)
        {
            $this->titulo = $titulo;
        }
    
        public function setAutor($autor)
        {
            $this->autor = $autor;
        }
    
        public function setEditora($editora)
        {
            $this->editora = $editora;
        }
    
        public function setAno($ano)
        {
            $this->ano = $ano;
        }
    
        public function setCidade($cidade)
        {
            $this->cidade = $cidade;
        }
    
        
        
    }

?>