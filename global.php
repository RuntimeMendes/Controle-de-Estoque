<?php 

 require_once 'classes/config.php' ;

  spl_autoload_register('carregarClasse');


  function carregarClasse($nomeclasse){

    if (file_exists('classes/' . $nomeclasse . '.php')) {

        require_once 'classes/' .$nomeclasse . '.php';
    }




  }






?>