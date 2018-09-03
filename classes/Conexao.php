<?php 



  class Conexao{


    public static function pegarConexao(){
    
         $conexao =  new PDO('mysql:host=127.0.0.1:3306;dbname=estoque','root','ricardo');

         return $conexao;

        








    }




  }