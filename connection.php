
<?php
class conexao_mysql {
    protected $servidor;
    protected $usuario;
    protected $conexao;
    protected $senha;
    protected $dados;
    protected $qry;

    public function __construct() {
        $this->servidor = "localhost";
        $this->usuario = "root";
        $this->senha = "";
        self::connectar(); // Chamando o método de dentro do construtor
    }
   
    // Método para conectar ao banco de dados
    protected function connectar(){
        $this->conexao = @mysqli_connect($this->servidor, $this->usuario, $this->senha) or die("Não foi possível conectar ao banco de dados: " . mysqli_error($this->conexao));
    }

    // Método para executar uma consulta SQL
    public function executarSQL($sql){
        $this->qry = @mysqli_query($this->conexao, $sql) or die("Erro ao executar o comando SQL: $sql - " . mysqli_error($this->conexao));
        return $this->qry;
    }
    
    // Método para listar os resultados de uma consulta
    public function listar($qr) {
        $this->dados = @mysqli_fetch_assoc($qr);
        return $this->dados;
    }
}
?>