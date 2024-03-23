<?php
    include_once ("connection.php");
    class manipulacaodedados extends conexao_mysql{
    
    protected  $sql;
    protected $tabela; 
    protected $campos;
    protected $dados;
    
    public function setTabela ($tbl){
        $this->tabela = $tbl;
    }

    public function setCampos ($cmp){
        $this -> tabela = $cmp;
    }
    public function setDados ($dd){
        $this -> dados = $dd;
    }
    


        public function inserir (){
            $this -> sql ="INSERT INTO $this -> tabela ($this->campos) VALUES ($this-dados)";
            self::executarSQL ($this->sql);
        }

    }




?>