<?php
 //require_once('classes/Conexao.php');//import da classe conexao
 

class Categoria {

    public $id;
    public $nome;


    public function __construct($id = false){ //validando o construtor 
      //se for algo diferente de falso , chama o método carregar
      if($id){
          $this->id = $id;
          $this->carregar();

      }


    }



    public function listar() {
         
       // throw new Exception('Erro ao Listar Categorias');

        $query = "SELECT id, nome FROM categorias";//consulta no banco


        $conexao = Conexao::pegarConexao();//chamando o método estatico em php
        $resultado = $conexao->query($query);
        $lista = $resultado->fetchAll();
        
        return $lista;


    }


  public function inserir(){

        $query = "INSERT  into categorias (nome) VALUE ('.$this->nome.')";

        $conexao = Conexao::pegarConexao();

        $conexao->exec($query);
        


  }


  public function atualizar(){

      $query = " UPDATE  categorias SET nome = '".$this->nome."' WHERE id = " .$this->id;

      $conexao = Conexao::pegarConexao();

      $conexao->exec($query);


  }


  public function carregar(){

   $query = " SELECT id ,nome FROM categorias  WHERE id = " . $this->id ;
   
   $conexao = Conexao::pegarConexao();

   $resultado = $conexao->query($query);
   $lista = $resultado->fetchAll();
     

   foreach($lista as $linha){
    
    $this->nome = $linha['nome'];


   }
   

  }


  public function excluir(){

    $query = "DELETE FROM categorias WHERE id = ".$this->id;
    $conexao = Conexao::pegarConexao();
    $conexao->exec($query);


  }






}